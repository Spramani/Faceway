@extends('masterpages/homemaster')
@section('mainpart')




<!-- Profile Settings Responsive -->

<div class="profile-settings-responsive">

	<a href="#" class="js-profile-settings-open profile-settings-open">
		<i class="fa fa-angle-right" aria-hidden="true"></i>
		<i class="fa fa-angle-left" aria-hidden="true"></i>
	</a>
	<div class="mCustomScrollbar" data-mcs-theme="dark">
		<div class="ui-block">
			<div class="your-profile">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Your PROFILE</h6>
				</div>

				<div id="accordion1" role="tablist" aria-multiselectable="true">
					<div class="card">
						<div class="card-header" role="tab" id="headingOne-1">
							<h6 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-1" aria-expanded="true" aria-controls="collapseOne">
									Profile Settings
									<svg class="olymp-dropdown-arrow-icon">
										<use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use>
									</svg>
								</a>
							</h6>
						</div>

						<div id="collapseOne-1" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
							<ul class="your-profile-menu">
								<li>
									<a href="28-YourAccount-PersonalInformation.html">Personal Information</a>
								</li>
								<li>
									<a href="29-YourAccount-AccountSettings.html">Account Settings</a>
								</li>
								<li>
									<a href="30-YourAccount-ChangePassword.html">Change Password</a>
								</li>
								<li>
									<a href="31-YourAccount-HobbiesAndInterests.html">Hobbies and Interests</a>
								</li>
								<li>
									<a href="32-YourAccount-EducationAndEmployement.html">Education and Employement</a>
								</li>
							</ul>
						</div>
					</div>
				</div>


				<div class="ui-block-title">
					<a href="33-YourAccount-Notifications.html" class="h6 title">Notifications</a>
					<a href="#" class="items-round-little bg-primary">8</a>
				</div>
				<div class="ui-block-title">
					<a href="34-YourAccount-ChatMessages.html" class="h6 title">Chat / Messages</a>
				</div>
				<div class="ui-block-title">
					<a href="35-YourAccount-FriendsRequests.html" class="h6 title">Friend Requests</a>
					<a href="#" class="items-round-little bg-blue">4</a>
				</div>
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">FAVOURITE PAGE</h6>
				</div>
				<div class="ui-block-title">
					<a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Create Fav Page</a>
				</div>
				<div class="ui-block-title">
					<a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Fav Page Settings</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Profile Settings Responsive -->
<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Personal Information</h6>
				</div>
				<div class="ui-block-content">


					<!-- Personal Information Form  -->

					<form class="needs-validation">
						<div class="row">
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Full Name</label>
									<input class="form-control" placeholder="" name="u_fullname" type="text" value="{{ $data[0]->u_name }}"
									 required>
								</div>
								<div class="form-group label-floating">
									<label class="control-label">Write a little description about you</label>
									<textarea class="form-control" name="u_bio" placeholder="" >{{ $data[0]->u_bio }} </textarea>
								</div>
								<div class="form-group date-time-picker label-floating">
									<label class="control-label">Your Birthday</label>
									<input name="datetimepicker" type="text" name="u_bod" value="{{ $data[0]->u_dob }}" />
									<span class="input-group-addon">
										<svg class="olymp-month-calendar-icon icon">
											<use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-month-calendar-icon"></use>
										</svg>
									</span>
								</div>
								<div class="form-group label-floating">
									<label class="control-label">Occupation</label>
									<input class="form-control" type="text" placeholder=""  name="u_occupation" value="{{ $data[0]->u_occupation }}" required>
									{{-- <input class="form-control" placeholder="" type="text" name="about" value="{{ $data[0]->u_name_id }}"
									 required> --}}
								</div>
								<div class="form-group label-floating is-select">
									<label class="control-label">status</label>
									<select class="selectpicker form-control" name="u_status">
										@if ($data[0]->u_gender == 1)
										<option value="1" selected>single</option>
										<option value="2">in a relationship</option>
										<option value="3">Engaged</option>
										<option value="4">married</option>
										<option value="5">it's complicated </option>
										@elseif($data[0]->u_gender == 2)
										<option value="1" selected>single</option>
										<option value="2">in a relationship</option>
										<option value="3">Engaged</option>
										<option value="4">married</option>
										<option value="5">it's complicated </option>
										@elseif($data[0]->u_gender == 3)
										<option value="1" selected>single</option>
										<option value="2">in a relationship</option>
										<option value="3">Engaged</option>
										<option value="4">married</option>
										<option value="5">it's complicated </option>
										@elseif($data[0]->u_gender == 4)
										<option value="1" selected>single</option>
										<option value="2">in a relationship</option>
										<option value="3">Engaged</option>
										<option value="4">married</option>
										<option value="5">it's complicated </option>
										@elseif($data[0]->u_gender == 5)
										<option value="1" selected>single</option>
										<option value="2">in a relationship</option>
										<option value="3">Engaged</option>
										<option value="4">married</option>
										<option value="5">it's complicated </option>
										@endif
									</select>
								</div>
								
								
							</div>
								
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">User Name</label>
									<input class="form-control" disabled placeholder="" type="text" name="u_name" value="{{ $data[0]->u_name_id }}" required>
								</div>
								<div class="form-group label-floating">
									<label class="control-label">Your Email</label>
									<input class="form-control" placeholder="" type="email" name="u_email" value="{{ $data[0]->u_email }}" required>
								</div>
								<div class="form-group label-floating">
									<label class="control-label">Your Phone Number</label>
									<input class="form-control" placeholder="" type="text" name="u_contact" value="{{ $data[0]->u_contact }}">
								</div>

								<div class="form-group label-floating">
									<label class="control-label">Birthplace:</label>
									<input class="form-control" type="text"  name="u_birthplace" placeholder="" value="{{ $data[0]->u_birthplace }}" required>
									{{-- <input class="form-control" placeholder="" type="text" name="about" value="{{ $data[0]->u_name_id }}"
									required> --}}

								</div>

								<div class="form-group label-floating">
									<label class="control-label">lives in:</label>
									{{-- <input type="text" placeholder="" value="Austin, Texas, USA"> --}}
									<input class="form-control" placeholder="" type="text" name="u_live_in" value="{{ $data[0]->u_lives_in }}"
									required>

								</div>

								<div class="form-group label-floating">
									<label class="control-label">Your Website</label>
									<input class="form-control" placeholder="" type="text" name="u_website" value="{{ $data[0]->u_website }}">
								</div>


								
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
{{--  								
								<div class="togglebutton">
									<label>
										@if ($data[0]->u_is_privat == 0)
										<input type="checkbox" name="uisprivat">
										@elseif ($data[0]->u_is_privat == 1)
										<input type="checkbox" name="uisprivat" checked="">
										@endif

										<h6 class="control-label pl-3 text-primary d-inline">Is Account Private</h6>
									</label>
								</div>  --}}
								
								
							</div>
							
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<span class="btn btn-primary btn-lg full-width" onclick="seveprofile({{ $data[0]->u_id }})">Save all Changes</span>
							</div>
							
						</div>
					</form>

					<!-- ... end Personal Information Form  -->
				</div>
			</div>
		</div>


		@include('content/profile_sidebar')





@endsection