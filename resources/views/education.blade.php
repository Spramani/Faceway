@extends('masterpages/homemaster')
@section('mainpart')

        
<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Your Education History</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Education History Form -->
					
					<form>
						<div class="row">
					
							@foreach ($data as $item)

							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">college and university</label>
									<input class="form-control" placeholder="" name="c_and_u" type="text" value="{{ $item['college_university'] }}">
								</div>
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group date-time-picker label-floating">
									<label class="control-label">college joining date</label>
									<input class="c_join" name="datetimepicker" type="text" value="{{ $item['college_joining_date'] }}"/>
									<span class="input-group-addon">
										<svg class="olymp-month-calendar-icon icon">
											<use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-month-calendar-icon"></use>
										</svg>
									</span>
								</div>
							</div>

					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">address of college</label>
									<textarea class="form-control" placeholder="" name="add_o_c"  >{{ $item['address_of_college'] }}</textarea>
								</div>
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">secondary school</label>
									<input class="form-control" placeholder="" type="text" name="s_and_s" value="{{ $item['secondary_school'] }}">
								</div>
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group date-time-picker label-floating">
									<label class="control-label">school joining date</label>
									<input class="s_join" name="datetimepicker" type="text"  value="{{ $item['school_joining_date'] }}"/>
									<span class="input-group-addon">
										<svg class="olymp-month-calendar-icon icon">
											<use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-month-calendar-icon"></use>
										</svg>
									</span>
								</div>
							</div>
					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">address of secondary school</label>
									<textarea class="form-control" placeholder="" name="add_o_ss" >{{ $item['address_of_school'] }}</textarea>
								</div>
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<button class="btn btn-secondary btn-lg full-width">Cancel</button>
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<span class="btn btn-primary btn-lg full-width" onclick="educationsave()">Save all Changes</span>
							</div>


							@endforeach
						</div>
					</form>
					
					<!-- ... end Education History Form -->
				</div>
			</div>
			<div class="ui-block">
				
			</div>
		</div>

		@include('content/profile_sidebar')


		{{-- <div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12  responsive-display-none">
			<div class="ui-block">

				
				
				<!-- Your Profile  -->
				
				<div class="your-profile">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Your PROFILE</h6>
					</div>
				
					<div id="accordion" role="tablist" aria-multiselectable="true">
						<div class="card">
							<div class="card-header" role="tab" id="headingOne">
								<h6 class="mb-0">
									<a data-toggle="collapse" data-parent="#accordion" href="javascript:void(0);collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Profile Settings
										<svg class="olymp-dropdown-arrow-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
									</a>
								</h6>
							</div>
				
							<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
								<ul class="your-profile-menu">
										<li>
												<a href="{{url('/')}}/profile_setting">Personal Information</a>
											</li>
											<li>
												<a href="{{url('/')}}/profile_changepasswords">Change Password</a>
											</li>
											<li>
											<a href="{{url('/')}}/{{ route('hobbies') }}">Hobbies and Interests</a>
											</li>
											<li>
												<a href="{{url('/')}}/profile_education">Education and Employement</a>
											</li>
								</ul>
							</div>
						</div>
					</div>
				
					<div class="ui-block-title">
						<a href="{{url('/')}}/33-YourAccount-Notifications.html" class="h6 title">Notifications</a>
						<a href="javascript:void(0);" class="items-round-little bg-primary">8</a>
					</div>
					<div class="ui-block-title">
						<a href="{{url('/')}}/34-YourAccount-ChatMessages.html" class="h6 title">Chat / Messages</a>
					</div>
					<div class="ui-block-title">
						<a href="{{url('/')}}/35-YourAccount-FriendsRequests.html" class="h6 title">Friend Requests</a>
						<a href="javascript:void(0);" class="items-round-little bg-blue">4</a>
					</div>
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">FAVOURITE PAGE</h6>
					</div>
					<div class="ui-block-title">
						<a href="{{url('/')}}/36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Create Fav Page</a>
					</div>
					<div class="ui-block-title">
						<a href="{{url('/')}}/36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Fav Page Settings</a>
					</div>
				</div>
				
				<!-- ... end Your Profile  -->
				

			</div>
		</div>
	</div>
</div>

<!-- ... end Your Account Personal Information --> --}}




<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">

	<div class="modal-content">
		<div class="modal-header">
			<span class="icon-status online"></span>
			<h6 class="title" >Chat</h6>
			<div class="more">
				<svg class="olymp-three-dots-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
				<svg class="olymp-little-delete js-chat-open"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
			</div>
		</div>
		<div class="modal-body">
			<div class="mCustomScrollbar">
				<ul class="notification-list chat-message chat-message-field">
					<li>
						<div class="author-thumb">
							<img src="{{url('/')}}/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="{{url('/')}}/img/author-page.jpg" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Don’t worry Mathilda!</span>
							<span class="chat-message-item">I already bought everything</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="{{url('/')}}/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>
				</ul>
			</div>

			<form class="need-validation">


<a class="back-to-top" href="javascript:void(0);">
	<img src="{{url('/')}}/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>


@endsection
