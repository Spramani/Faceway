@foreach ($friend as $onef)


<li onclick="openchat({{ $onef['u_id'] }})">

    <div class="author-thumb">
        <img src="{{ url('/')}}/upload_media/profile/profile/{{ $onef['u_profilepic']}}" style="max-width:100%"
            alt="author">
    </div>
    <div class="notification-event">
        <a href="{{route('chat_view')}}" class="h6 notification-friend">{{ $onef['u_name'] }}</a>
        <span class="chat-message-item">{{ $onef['u_name_id']	}}</span></div>
    
</li>
@endforeach