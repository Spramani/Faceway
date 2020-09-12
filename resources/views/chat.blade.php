@extends('masterpages/homemaster')
@section('mainpart')

<?php 
// dd($friend);
?>
<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Chat / Messages</h6>
					<a href="javascript:void(0);" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>

				<div class="row">
					<div class="col col-xl-4 col-lg-6 col-md-12 col-sm-12  padding-r-0">

						
						<!-- Notification List Chat Messages -->
						
						<ul class="notification-list chat-message">
							@isset($newfriend)
								<li onclick="openchat({{ $newfriend->u_id }})">
									<div class="author-thumb">
										<img src="{{ url('/')}}/upload_media/profile/profile/{{ $newfriend->u_profilepic}}" style="max-width:100%" alt="author">
									</div>
									<div class="notification-event">
										<a href="javascript:void(0);" class="h6 notification-friend">{{ $newfriend->u_name }}</a>
									<span class="chat-message-item">{{ $newfriend->u_name_id}}</span> 
										{{--  <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>  --}}
									  </div>
									{{-- <span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
									</span>
							
									<div class="more">
										<svg class="olymp-three-dots-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									</div> --}}
								</li>
							@endisset
							@foreach ($friend as $onef)
								
							
							<li onclick="openchat({{ $onef['u_id'] }})">
								<div class="author-thumb">
									<img src="{{ url('/')}}/upload_media/profile/profile/{{ $onef['u_profilepic']}}" style="max-width:100%" alt="author">
								</div>
								<div class="notification-event">
									<a href="javascript:void(0);" class="h6 notification-friend">{{ $onef['u_name'] }}</a>
								<span class="chat-message-item">{{ $onef['u_name_id']	}}</span></div>
							</li>
							@endforeach
						</ul>
						
						<!-- ... end Notification List Chat Messages -->

						
						<!-- Popup Chat -->
						
						
						
						<!-- ... end Popup Chat -->
						

					</div>

					<div class="col col-xl-8 col-lg-6 col-md-12 col-sm-12  padding-l-0">

						
						<!-- Chat Field -->
						
						<div class="chat-field">
							<div class="ui-block-title">
								<h6 class="title" id="cuserchat">
									@isset($newfriend)
										{{$newfriend->u_name}}
									@else
									Chat User
									@endisset
									
									</h6>
								<a href="javascript:void(0);" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							</div>
							
							<div class="mCustomScrollbar" id="ourchatouter" data-mcs-theme="dark">
								
								<ul class="notification-list chat-message chat-message-field " id="ourchat">
									
						
									
									
								</ul>
							</div>
						
						
								<div class="form-group label-floating is-empty">
									<label class="control-label">Write your reply here...</label>
									<textarea class="form-control" placeholder="" id="chat_box" ></textarea>
								</div>
						
								<div class="add-options-message">
									
						
									<button class="btn btn-primary btn-sm" id="chatsendbtn" >Post Reply</button>
									<?php 
										if(isset($newfriend)){
											$p = $newfriend->u_id;
										}else{
											$p = 'hiii';
										}
									?>
									<span class="sr-only" id="cuserid">{{$p}}</span>
								</div>
						
						
						</div>
						
						<!-- ... end Chat Field -->

					</div>
				</div>

			</div>

			
			

        </div>
        
        
        @include('content/profile_sidebar')



@endsection
@section('script')
	<script>
		setInterval(function () {
			var cuserid = $('#cuserid').text();
			var lastchat = $('.chatitem:last').attr("id")
			
			if(cuserid != 'hiii' && lastchat != null){
				chat_ref(cuserid,lastchat);
			}else if(cuserid != 'hiii' && lastchat == null){
				openchat(cuserid);
			}
			
			
		}, 1000);
		
	</script>
@endsection