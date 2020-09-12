
@foreach ($chat as $onechat)
    

<li class="chatitem" id="{{$onechat['chat_id']}}">
    <div class="author-thumb">
        <img src="{{ url('/')}}/upload_media/profile/profile/{{ $onechat['u_profilepic']}}" style="max-width:100%" alt="author">
    </div>
    <div class="notification-event">
        <a href="javascript:void(0)" class="h6 notification-friend">{{ $onechat['u_name']}}</a>
        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">{{ $onechat['chat_created_date']}}</time></span>
    <span class="chat-message-item w-100" >{{$onechat['massage']}}</span>
    </div>
</li>
@endforeach





    {{-- <li>
            <div class="author-thumb">
                <img src="{{url('/')}}/img/author-page.jpg" alt="author">
            </div>
            <div class="notification-event">
                <a href="javascript:void(0);" class="h6 notification-friend">James Spiegel</a>
                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:30pm</time></span>
                <span class="chat-message-item">Hi Elaine! I have a question, do you think that tomorrow we could talk to
                                        the client to iron out some details before the presentation? I already finished the first screen but
                                        I need to ask him something before moving on. Anyway, here’s a preview!
                                    </span>
                <div class="added-photos">
                    <img src="{{url('/')}}/img/photo-message1.jpg" alt="photo">
                    <img src="{{url('/')}}/img/photo-message2.jpg" alt="photo">
                    <span class="photos-name">icons.jpeg; bunny.jpeg</span>
                </div>
            </div>
        </li> --}}
