<ul>
    @foreach($posts as $post)
    <li class="rcp_svl_has_thumb">
        <a href="{{url('/news/'.$post->post_slug)}}" class="link_recent_thumb">
            <img width="150" height="150" src="{{url('/'.$post->post_img)}}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="{{$post->post_name}}" title="{{$post->post_name}}" /> </a>
        <div class="rcp_svl_content">
            <a href="{{url('/news/'.$post->post_slug)}}">{{$post->post_name}}</a>
            <span class="date">{{date_format($post->created_at, 'd/m/Y')}}</span>
        </div>
    </li>
    @endforeach
</ul>