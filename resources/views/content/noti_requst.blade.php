
@foreach ($data as $onenoti)

@if ($onenoti['notification_type'] == 1)
    

<li>
        <div class="author-thumb">
            <img src="{{ url('/') }}\upload_media\profile\profile\{{ $onenoti['u_profilepic']}}"  style="max-width:100%;" alt="author">
        </div>
        <div class="notification-event">
            <a href="{{ url('/') }}/#" class="h6 notification-friend">{{ $onenoti['u_name']}} </a>
            <span class="chat-message-item"> Want to be Your Friend</span>
              <span class="notification-date"><time class="entry-date updated"
                        datetime="2004-07-24T18:18">{{ \App\Http\Controllers\NewsfeedController::time_ago_in_php( $onenoti['notification_created_date'] ) }}</time></span>
        </div>
        <span class="notification-icon">
            <a href="javascript:void(0)" onclick="acceptreq({{$onenoti['u_id']}})" class="accept-request">
                <span class="icon-add without-text">
                    <svg class="olymp-happy-face-icon">
                        <use
                            xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-happy-face-icon">
                        </use>
                    </svg>
                </span>
            </a>

            <a href="{{ url('/') }}/#" class="accept-request request-del">
                <span class="icon-minus">
                    <svg class="olymp-happy-face-icon">
                        <use
                            xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-happy-face-icon">
                        </use>
                    </svg>
                </span>
            </a>

        </span>

        {{--  <div class="more">
            <svg class="olymp-three-dots-icon">
                <use
                    xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
                </use>
            </svg>
        </div>  --}}
    </li>
@elseif($onenoti['notification_type'] == 2)
    @if($onenoti['sender_id'] != session()->get('u_id'))
    <li class="accepted">
        <div class="author-thumb">
            <img src="{{ url('/') }}\upload_media\profile\profile\{{ $onenoti['u_profilepic']}}" style="max-width:100%;" alt="author">
        </div>
        <div class="notification-event">
            <b>You</b> and <a href="{{ route('profile_view',$onenoti['u_id']) }}" class="h6 notification-friend">{{ $onenoti['u_name']}} </a> just
            became friends. Write
            on <a href="{{ route('profile_view',$onenoti['u_id']) }}" class="notification-link">goto wall</a>.
            <span class="notification-date"><time class="entry-date updated"
                datetime="2004-07-24T18:18">{{ \App\Http\Controllers\NewsfeedController::time_ago_in_php( $onenoti['notification_created_date'] ) }}</time></span>
        </div>
        <span class="notification-icon">
            <svg class="olymp-happy-face-icon">
                <use
                    xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-happy-face-icon">
                </use>
            </svg>
        </span>

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
