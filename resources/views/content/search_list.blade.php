
@foreach ($user as $item)
<a href="{{ route('profile_view',[$item->u_id]) }}" class="list-group-item">
    <div class="inline-items" data-selectable="" data-value="Marie Claire Stevens">
        <div class="author-thumb"><img src="{{url('/')}}/upload_media/profile/profile/{{$item->u_profilepic}}"
                style="max-width: 100%;" alt="avatar"></div>
        <div class="notification-event"><span class="h6 notification-friend">{{$item->u_name}}</span><span class="chat-message-item">{{$item->u_name_id}}</span></div>
        
    </div>
</a>
@endforeach