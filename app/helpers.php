<?php

use Illuminate\Support\Facades\Input;
use App\Categories;
use App\Posts;
use App\Videos;
use App\Products;
use App\settings;

function nameParent($cate_parent) {
	$data = Categories::find($cate_parent);
	if(!empty($data)) {
		return $data->cate_name;
	}
	return '';
}

function listPosts() {
	$data = Posts::orderBy('created_at', 'desc')->get();
	return $data;
}

function listVideos() {
    $data = Videos::orderBy('created_at', 'desc')->get();
    return $data;
}

function listProducts() {
	$data = Products::orderBy('created_at', 'desc')->get();
	return $data;
}

function listCate() {
	$data = Categories::orderBy('created_at', 'desc')->get();
	return $data;
}

function showCategories($categories, $update, $cate_parent = 0, $char = '') {
    foreach ($categories as $key => $item)
    {
        if ($item->cate_parent == $cate_parent)
        {
        	if(!empty($update) && $item->id == $update) {
            	echo '<option value="'.$item->id.'" selected >';
        	} else {
            	echo '<option value="'.$item->id.'">';
        	}
                echo $char . $item->cate_name;
            unset($categories[$key]);
            showCategories($categories, $update, $item->id, $char.'----');
        }
    }
}

function getYoutubeEmbedUrl($url){
    $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
    $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';

    if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }

    if (preg_match($shortUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }
    return 'https://www.youtube.com/embed/'.$youtube_id ;
}

function listCatePost() {
    $data = Categories::whereHas('posts', function($b) {
        $b->whereNotNull('id');
    })->get();
    return $data;
}

function listCateVideo() {
    $data = Categories::whereHas('videos', function($b) {
        $b->whereNotNull('id');
    })->get();
    return $data;
}

function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function cutString($string='',$size=255,$link='...')
{
    $string = strip_tags(trim($string));
    $strlen = strlen($string);
    $str = substr($string,$size,20);
    $exp = explode(" ",$str);
    $sum =  count($exp);
    $yes= "";
    for($i=0;$i<$sum;$i++)
    {
        if($yes==""){
            $a = strlen($exp[$i]);
            if($a==0){ $yes="no"; $a=0;}
            if(($a>=1)&&($a<=12)){ $yes = "no"; $a;}
            if($a>12){ $yes = "no"; $a=12;}
        }
    }
    $sub = substr($string,0,$size+$a);
    if($strlen-$size>0){ $sub.= $link;}
    return $sub;
}

function infoOther() {
    $data = settings::first();
    return $data;
}

function phoneNumber($data) {
    return "(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6);
}