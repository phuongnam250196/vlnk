<ul class="recent-video-ul">
    @foreach(listVideos() as $key=>$video)
    <li class="rcp_svl_has_thumb">
        <a href="{{url('/videos/'.$video->video_slug)}}" title="{{$video->video_name}}" class="link_recent_thumb">
            <img width="150" height="150" src="{{url(''.$video->video_img)}}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" /> </a>
        <div class="rcp_svl_content">
            <a href="{{url('/videos/'.$video->video_slug)}}" title="{{$video->video_name}}">
                {{$video->video_name}} </a>
            <span class="date">{{date_format($video->created_at, 'd/m/Y')}}</span>
        </div>
    </li>
    @endforeach
</ul>