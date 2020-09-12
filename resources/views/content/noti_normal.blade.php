@foreach ($data as $onenoti)

@if ($onenoti['notification_type'] == 3){{-- like --}}
    @if ($onenoti['sender_id'] != session()->get('u_id'))
        
    
    <li class="with-comment-photo">
        <div class="author-thumb">
            <img src="{{ url('/') }}\upload_media\profile\profile\{{ $onenoti['u_profilepic']}}" style="max-width:100%;"  alt="author">
        </div>
        <div class="notification-event">
        <div><a href="{{ route('profile_view',[$onenoti['u_id']]) }}" class="h6 notification-friend">{{$onenoti['u_name']}}</a> Liked 
                your <a href="javascript:void(0)" class="notification-link">Post</a>.</div>
            <span class="notification-date"><time class="entry-date updated"
                    datetime="2004-07-24T18:18">{{ \App\Http\Controllers\NewsfeedController::time_ago_in_php( $onenoti['notification_created_date'] ) }}</time></span>
        </div>
        {{--  <span class="notification-icon">
            <svg class="olymp-comments-post-icon">
                <use
                    xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-comments-post-icon">
                </use>
            </svg>
        </span>  --}}

        <div class="comment-photo">
            @if ($onenoti['post_type'] == 1)
            <img src="{{ url('/') }}\upload_media\post\img\{{ $onenoti['media_path']}}" width="100%" alt="photo">
            @elseif($onenoti['post_type'] == 2)
            <video width="100%"  >
                    <source src="{{ url('/')}}/upload_media/post/video/{{ $onenoti['media_path']}}" type="video/mp4">
                        <svg class="olymp-play-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-play-icon"></use></svg>
                </video>
            @elseif($onenoti['post_type'] == 0)
            <span>“{{$onenoti['decription']}}”</span>

            @endif
            
        </div>

        {{--  <div class="more">
            <svg class="olymp-three-dots-icon">
                <use
                    xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
                </use>
            </svg>
            <svg class="olymp-little-delete">
                <use
                    xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-little-delete">
                </use>
            </svg>
        </div>  --}}
    </li>
    @endif

@elseif($onenoti['notification_type'] == 4){{-- comment --}}
@if ($onenoti['sender_id'] != session()->get('u_id'))
<li class="with-comment-photo">
    <div class="author-thumb">
        <img src="{{ url('/') }}\upload_media\profile\profile\{{ $onenoti['u_profilepic']}}" style="max-width:100%;"  alt="author">
    </div>
    <div class="notification-event">
    <div><a href="{{ route('profile_view',[$onenoti['u_id']]) }}" class="h6 notification-friend">{{$onenoti['u_name']}}</a> commented on
            your <a href="javascript:void(0)" class="notification-link">Post</a>.</div>
        <span class="notification-date"><time class="entry-date updated"
                datetime="2004-07-24T18:18">{{ \App\Http\Controllers\NewsfeedController::time_ago_in_php( $onenoti['notification_created_date'] ) }}</time></span>
    </div>
    {{--  <span class="notification-icon">
        <svg class="olymp-comments-post-icon">
            <use
                xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-comments-post-icon">
            </use>
        </svg>
    </span>  --}}

    <div class="comment-photo">
        @if ($onenoti['post_type'] == 1)
            <img src="{{ url('/') }}\upload_media\post\img\{{ $onenoti['media_path']}}" width="100%" alt="photo">
            @elseif($onenoti['post_type'] == 2)
            <video width="100%"  >
                    <source src="{{ url('/')}}/upload_media/post/video/{{ $onenoti['media_path']}}" type="video/mp4">
                        <svg class="olymp-play-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-play-icon"></use></svg>
                </video>
            @elseif($onenoti['post_type'] == 0)
            <span>“{{$onenoti['decription']}}”</span>

            @endif

    </div>
    <div class="comment-photo">
        <b style="white-space: nowrap;">Comment :</b> 
    <span>“{{$onenoti['comment_text']}}”</span>
    </div>
    {{--  <div class="more">
        <svg class="olymp-three-dots-icon">
            <use
                xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
            </use>
        </svg>
        <svg class="olymp-little-delete">
            <use
                xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-little-delete">
            </use>
        </svg>
    </div>  --}}
</li>
@endif
@elseif($onenoti['notification_type'] == 5){{-- comment-like --}}
    @if ($onenoti['sender_id'] != session()->get('u_id'))
        <li class="with-comment-photo">
            <div class="author-thumb">
                <img src="{{ url('/') }}\upload_media\profile\profile\{{ $onenoti['u_profilepic']}}" style="max-width:100%;"  alt="author">
            </div>
            <div class="notification-event">
            <div><a href="{{ route('profile_view',[$onenoti['u_id']]) }}" class="h6 notification-friend">{{$onenoti['u_name']}}</a> like 
                    your <a href="javascript:void(0)" class="notification-link">Comment</a>.</div>
                <span class="notification-date"><time class="entry-date updated"
                        datetime="2004-07-24T18:18">{{ \App\Http\Controllers\NewsfeedController::time_ago_in_php( $onenoti['notification_created_date'] ) }}</time></span>
            </div>
            {{--  <span class="notification-icon">
                <svg class="olymp-comments-post-icon">
                    <use
                        xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-comments-post-icon">
                    </use>
                </svg>
            </span>  --}}
        
            <div class="comment-photo">
                @if ($onenoti['post_type'] == 1)
                    <img src="{{ url('/') }}\upload_media\post\img\{{ $onenoti['media_path']}}" width="100%" alt="photo">
                @elseif($onenoti['post_type'] == 2)
                    <video width="100%"  >
                        <source src="{{ url('/')}}/upload_media/post/video/{{ $onenoti['media_path']}}" type="video/mp4">
                            <svg class="olymp-play-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-play-icon"></use></svg>
                    </video>
                @elseif($onenoti['post_type'] == 0)
                    <span>“{{$onenoti['decription']}}”</span>

                @endif
        
            </div>
            <div class="comment-photo">
                    <b style="white-space: nowrap;">Comment :</b> 
            <span>“{{$onenoti['comment_text']}}”</span>
            </div>
            {{--  <div class="more">
                <svg class="olymp-three-dots-icon">
                    <use
                        xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
                    </use>
                </svg>
                <svg class="olymp-little-delete">
                    <use
                        xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-little-delete">
                    </use>
                </svg>
            </div>  --}}
        </li>
    @endif
@endif
@endforeach