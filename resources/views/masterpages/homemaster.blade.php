<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.crumina.net/html-olympus/00-Typography.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jan 2019 19:42:15 GMT -->

<head>

	<title>Olympus Shortcodes</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}" />


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/Bootstrap/dist/css/bootstrap-grid.css">


	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/toastr.min.css">
	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/main.min.css">

	<!-- Main Font -->
	<script src="{{ url('/') }}/js/webfontloader.min.js"></script>
	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/fonts.min.css">

	<!-- costom Styles CSS -->
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/coustomstyle.css">
</head>

<body>


	<!-- Fixed Sidebar Left -->

	<div class="fixed-sidebar">
		<div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

			<a href="{{ route('home') }}" class="logo">
				<div class="img-wrap">
					<img src="{{ url('/') }}/img/logo.png" alt="Olympus">
				</div>
			</a>

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<ul class="left-menu">
					<li>
						<a href="{{ url('/') }}/#" class="js-sidebar-open">
							<svg class="olymp-menu-icon left-menu-icon" data-toggle="tooltip" data-placement="right"
								data-original-title="OPEN MENU">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-menu-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="{{ Route('profile_setting',[session()->get('userid')]) }}">
							<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"
								data-original-title="profile setting">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-profile_setting-icon">
								</use>
							</svg>
						</a>
					</li>
					<li>
						<a href="{{ Route('notification_view',[ session()->get('u_id') ]) }}">
							<svg class="olymp-star-icon left-menu-icon" data-toggle="tooltip" data-placement="right"
								data-original-title="notification">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-notification-icon">
								</use>
							</svg>
						</a>
					</li>
					<li>
						<a href="{{ Route('chat_view',[ session()->get('u_id') ]) }}">
							<svg class="olymp-happy-faces-icon left-menu-icon" data-toggle="tooltip"
								data-placement="right" data-original-title="chat">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-chat-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="{{ route('photo_view',[ session()->get('u_id') ]) }}">
							<svg class="olymp-headphones-icon left-menu-icon" data-toggle="tooltip"
								data-placement="right" data-original-title="photos">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-my-photos-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="{{ route('video_view',[ session()->get('u_id') ]) }}">
							<svg class="olymp-weather-icon left-menu-icon" data-toggle="tooltip" data-placement="right"
								data-original-title="video">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-video-icon"></use>
							</svg>
						</a>
					</li>
					<li>
						<a href="{{ route('friends_view',[ session()->get('u_id') ]) }}">
							<svg class="olymp-calendar-icon left-menu-icon" data-toggle="tooltip" data-placement="right"
								data-original-title="friends">
								<use
									xlink:href="{{ url('/') }}/svg-icons/sprites/icons-weather.svg#olymp-friends-header">
								</use>
							</svg>
						</a>
					</li>
					<li>
						<a href="{{ route('about_view',[ session()->get('u_id') ]) }}">
							<svg class="olymp-badge-icon left-menu-icon" data-toggle="tooltip" data-placement="right"
								data-original-title="about">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-about-icon"></use>
							</svg>
						</a>
					</li>

				</ul>
			</div>
		</div>

		<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
			<a href="{{ url('/') }}/02-ProfilePage.html" class="logo">
				<div class="img-wrap">
					<img src="{{ url('/') }}/img/logo.png" alt="Olympus">
				</div>
				<div class="title-block">
					<h6 class="logo-title">olympus</h6>
				</div>
			</a>

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<ul class="left-menu">
					<li>
						<a href="{{ url('/') }}/#" class="js-sidebar-open">
							<svg class="olymp-close-icon left-menu-icon">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-close-icon"></use>
							</svg>
							<span class="left-menu-title">MENU</span>
						</a>
					</li>
					<li>
						<a href="{{ Route('profile_setting',[session()->get('userid')]) }}">
							<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"
								data-original-title="profile setting">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-profile_setting-icon">
								</use>
							</svg>
							<span class="left-menu-title">PROFILE SETTING</span>
						</a>
					</li>
					<li>
						<a href="{{ Route('notification_view',[ session()->get('u_id') ]) }}">
							<svg class="olymp-star-icon left-menu-icon" data-toggle="tooltip" data-placement="right"
								data-original-title="notification">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-notification-icon">
								</use>
							</svg>
							<span class="left-menu-title">NOTIFICATION</span>
						</a>
					</li>
					<li>
						<a href="{{ route('chat_view',[ session()->get('u_id') ]) }}">
							<svg class="olymp-happy-faces-icon left-menu-icon" data-toggle="tooltip"
								data-placement="right" data-original-title="chat">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-chat-icon"></use>
							</svg>
							<span class="left-menu-title">CHAT</span>
						</a>
					</li>
					<li>
						<a href="{{ route('photo_view',[ session()->get('u_id') ]) }}">
							<svg class="olymp-headphones-icon left-menu-icon" data-toggle="tooltip"
								data-placement="right" data-original-title="photo">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-my-photos-icon"></use>
							</svg>
							<span class="left-menu-title">PHOTOS</span>
						</a>
					</li>
					<li>
						<a href="{{ route('video_view',[ session()->get('u_id') ]) }}">
							<svg class="olymp-weather-icon left-menu-icon" data-toggle="tooltip" data-placement="right"
								data-original-title="video">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-video-icon"></use>
							</svg>
							<span class="left-menu-title">VIDEO</span>
						</a>
					</li>
					<li>
						<a href="{{ route('friends_view',[ session()->get('u_id') ]) }}">
							<svg class="olymp-calendar-icon left-menu-icon" data-toggle="tooltip" data-placement="right"
								data-original-title="friends">
								<use
									xlink:href="{{ url('/') }}/svg-icons/sprites/icons-weather.svg#olymp-friends-header">
								</use>
							</svg>
							<span class="left-menu-title">FRIENDS</span>
						</a>
					</li>
					<li>
						<a href="{{ route('about_view',[ session()->get('u_id') ]) }}">
							<svg class="olymp-badge-icon left-menu-icon" data-toggle="tooltip" data-placement="right"
								data-original-title="about">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-about-icon"></use>
							</svg>
							<span class="left-menu-title">ABOUT</span>
						</a>
					</li>
				</ul>

				{{-- <div class="profile-completion">

				<div class="skills-item">
					<div class="skills-item-info">
						<span class="skills-item-title">Profile Completion</span>
						<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="76" data-from="0"></span><span class="units">76%</span></span>
					</div>
					<div class="skills-item-meter">
						<span class="skills-item-meter-active bg-primary" style="width: 76%"></span>
					</div>
				</div>

				<span>Complete <a href="{{ url('/') }}/#">your profile</a> so people can know more about you!</span>

			</div> --}}
		</div>
	</div>
	</div>

	<!-- ... end Fixed Sidebar Left -->


	<!-- Fixed Sidebar Left -->

	<div class="fixed-sidebar fixed-sidebar-responsive">

		<div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
			<a href="{{ route('profile_view',[session()->get('u_id')]) }}" class="logo js-sidebar-open">
				<img src="{{ url('/') }}/img/logo.png" alt="Olympus">
			</a>

		</div>

		<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
			<a href="{{ url('/') }}/#" class="logo">
				<div class="img-wrap">
					<img src="{{ url('/') }}/img/logo.png" alt="Olympus">
				</div>
				<div class="title-block">
					<h6 class="logo-title">olympus</h6>
				</div>
			</a>

			<div class="mCustomScrollbar" data-mcs-theme="dark">

				<div class="control-block">
					<div class="author-page author vcard inline-items">
						<div class="author-thumb">
							<img alt="author" src="{{ url('/') }}/img/author-page.jpg" class="avatar">
							<span class="icon-status online"></span>
						</div>
						<a href="{{ route('profile_view',[session()->get('u_id')]) }}" class="author-name fn">
							<div class="author-title">

								@if( session()->has('userid') )
								<?php 
									echo session()->get('userid');
								?>
								@endif

								<svg class="olymp-dropdown-arrow-icon">
									<use
										xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon">
									</use>
								</svg>
							</div>
							<span class="author-subtitle">{{session()->get('u_cs')}}</span>
						</a>
					</div>
				</div>

				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">MAIN SECTIONS</h6>
				</div>

				<ul class="left-menu">
					<li>
						<a href="{{ url('/') }}/#" class="js-sidebar-open">
							<svg class="olymp-close-icon left-menu-icon">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-close-icon"></use>
							</svg>
							<span class="left-menu-title">MENU</span>
						</a>
					</li>
					<li>
						<a href="{{ Route('profile_setting',[session()->get('userid')]) }}">
							<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"
								data-original-title="profile setting">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-profile_setting-icon">
								</use>
							</svg>
							<span class="left-menu-title">PROFILE SETTING</span>
						</a>
					</li>
					<li>
						<a href="{{ Route('notification_view',[ session()->get('u_id') ]) }}">
							<svg class="olymp-star-icon left-menu-icon" data-toggle="tooltip" data-placement="right"
								data-original-title="notification">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-notification-icon">
								</use>
							</svg>
							<span class="left-menu-title">NOTIFICATION</span>
						</a>
					</li>
					<li>
						<a href="{{ route('chat_view',[ session()->get('u_id') ]) }}">
							<svg class="olymp-happy-faces-icon left-menu-icon" data-toggle="tooltip"
								data-placement="right" data-original-title="chat">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-chat-icon"></use>
							</svg>
							<span class="left-menu-title">CHAT</span>
						</a>
					</li>
					<li>
						<a href="{{ route('photo_view',[ session()->get('u_id') ]) }}">
							<svg class="olymp-headphones-icon left-menu-icon" data-toggle="tooltip"
								data-placement="right" data-original-title="photo">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-my-photos-icon"></use>
							</svg>
							<span class="left-menu-title">PHOTOS</span>
						</a>
					</li>
					<li>
						<a href="{{ route('video_view',[ session()->get('u_id') ]) }}">
							<svg class="olymp-weather-icon left-menu-icon" data-toggle="tooltip" data-placement="right"
								data-original-title="video">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-video-icon"></use>
							</svg>
							<span class="left-menu-title">VIDEO</span>
						</a>
					</li>
					<li>
						<a href="{{ route('friends_view',[ session()->get('u_id') ]) }}">
							<svg class="olymp-calendar-icon left-menu-icon" data-toggle="tooltip" data-placement="right"
								data-original-title="friends">
								<use
									xlink:href="{{ url('/') }}/svg-icons/sprites/icons-weather.svg#olymp-friends-header">
								</use>
							</svg>
							<span class="left-menu-title">FRIENDS</span>
						</a>
					</li>
					<li>
						<a href="{{ route('about_view',[ session()->get('u_id') ]) }}">
							<svg class="olymp-badge-icon left-menu-icon" data-toggle="tooltip" data-placement="right"
								data-original-title="about">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-about-icon"></use>
							</svg>
							<span class="left-menu-title">ABOUT</span>
						</a>
					</li>
				</ul>

				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">YOUR ACCOUNT</h6>
				</div>

				<ul class="account-settings">
					<li>

						<a href="{{ Route('profile_setting',[ session()->get('userid') ]) }}">

							<svg class="olymp-menu-icon">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-menu-icon"></use>
							</svg>

							<span>Profile Settings 1</span>
						</a>
					</li>
					
					<li>
						<a href="{{ Route('logout') }}">
							<svg class="olymp-log	out-icon">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-logout-icon"></use>
							</svg>

							<span>Log Out</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- ... end Fixed Sidebar Left -->





	<!-- Header-BP -->

	<header class="header" id="site-header">

		<div class="page-title">
			<h6>Faceway</h6>
		</div>

		<div class="header-content-wrapper">
			<form class="search-bar w-search notification-list friend-requests">
				<div class="form-group with-button">
					<input class="form-control " autocomplete="flase" id="home_search" onkeyup="searchfriend();"
						placeholder="Search here people or pages..." type="text">
					<div class="list-group home_search_list "></div>
					<button>
						<svg class="olymp-magnifying-glass-icon">
							<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon">
							</use>
						</svg>
					</button>
				</div>
			</form>

			{{-- <a href="{{ url('/') }}/#" class="link-find-friend">Find Friends</a> --}}

			<div class="control-block">
				<div class="control-icon more has-items">
					<svg class="olymp-happy-face-icon">
						<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
					</svg>
					{{--  <div class="label-avatar bg-blue">6</div>  --}}

					<div class="more-dropdown more-with-triangle triangle-top-center">
						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">FRIEND REQUESTS</h6>
						</div>

						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<ul class="notification-list friend-requests" id="requests_noti_recived">
								{{-- <li>
									<div class="author-thumb">
										<img src="{{ url('/') }}/img/avatar55-sm.jpg" alt="author">
									</div>
									<div class="notification-event">
										<a href="{{ url('/') }}/#" class="h6 notification-friend">Tamara Romanoff</a>
										<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
									</div>
									<span class="notification-icon">
										<a href="{{ url('/') }}/#" class="accept-request">
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

									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use
												xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
											</use>
										</svg>
									</div>
								</li>
								
								<li class="accepted">
									<div class="author-thumb">
										<img src="{{ url('/') }}/img/avatar57-sm.jpg" alt="author">
									</div>
									<div class="notification-event">
										You and <a href="{{ url('/') }}/#" class="h6 notification-friend">Mary Jane
											Stark</a> just
										became friends. Write
										on <a href="{{ url('/') }}/#" class="notification-link">her wall</a>.
									</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon">
											<use
												xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-happy-face-icon">
											</use>
										</svg>
									</span>

									<div class="more">
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
									</div>
								</li>

								<li>
									<div class="author-thumb">
										<img src="{{ url('/') }}/img/avatar56-sm.jpg" alt="author">
									</div>
									<div class="notification-event">
										<a href="{{ url('/') }}/#" class="h6 notification-friend">Tony Stevens</a>
										<span class="chat-message-item">4 Friends in Common</span>
									</div>
									<span class="notification-icon">
										<a href="{{ url('/') }}/#" class="accept-request">
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

									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use
												xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
											</use>
										</svg>
									</div>
								</li>

								<li>
									<div class="author-thumb">
										<img src="{{ url('/') }}/img/avatar58-sm.jpg" alt="author">
									</div>
									<div class="notification-event">
										<a href="{{ url('/') }}/#" class="h6 notification-friend">Stagg Clothing</a>
										<span class="chat-message-item">9 Friends in Common</span>
									</div>
									<span class="notification-icon">
										<a href="{{ url('/') }}/#" class="accept-request">
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

									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use
												xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
											</use>
										</svg>
									</div>
								</li> --}}

							</ul>
						</div>

						<a href="{{ route('request_view') }}" class="view-all bg-blue">Check all your Request</a>
					</div>
				</div>

				<div class="control-icon more has-items">
					<svg class="olymp-chat---messages-icon">
						<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
					</svg>
					{{--  <div class="label-avatar bg-purple">2</div>  --}}

					<div class="more-dropdown more-with-triangle triangle-top-center">
						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">Chat / Messages</h6>
							<a href="{{ url('/') }}/#">Mark all as read</a>
							<a href="{{ url('/') }}/#">Settings</a>
						</div>

						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<ul class="notification-list chat-message" id="chat_noti" >
								
							</ul>
						</div>

						<a href="{{ url('/') }}/#" class="view-all bg-purple">View All Messages</a>
					</div>
				</div>

				<div class="control-icon more has-items">
					<svg class="olymp-thunder-icon">
						<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-thunder-icon"></use>
					</svg>
{{--  
					<div class="label-avatar bg-primary">8</div>  --}}

					<div class="more-dropdown more-with-triangle triangle-top-center">
						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">Notifications</h6>
							<a href="{{ url('/') }}/#">Mark all as read</a>
							<a href="{{ url('/') }}/#">Settings</a>
						</div>

						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<ul class="notification-list" id="normal_noti">
								
							</ul>
						</div>

						<a href="{{ route('notification_view') }}" class="view-all bg-primary">View All Notifications</a>
					</div>
				</div>

				<div class="author-page author vcard inline-items more">
					<div class="author-thumb">
						<a href="{{ route('profile_view',[session()->get('u_id')]) }}"><img alt="author"
								style="height:36px;"
								src="{{ url('/') }}\upload_media\profile\profile\<?php if(session()->has('u_profile')){echo session()->get('u_profile');}?>"></a>
						<span class="icon-status online"></span>
						<div class="more-dropdown more-with-triangle">
							<div class="mCustomScrollbar" data-mcs-theme="dark">
								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">Your Account</h6>
								</div>

								<ul class="account-settings">
									<li>
										<a href="{{ Route('profile_setting',[ session()->get('userid') ]) }}">

											<svg class="olymp-menu-icon">
												<use
													xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-profile_setting-icon">
												</use>
											</svg>

											<span>Profile Settings</span>
										</a>
									</li>
									<li>
										<a href="{{ Route('notification_view') }}">
											<svg class="olymp-star-icon left-menu-icon" data-toggle="tooltip"
												data-placement="right" data-original-title="Notification">
												<use
													xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-notification-icon">
												</use>
											</svg>

											<span>Notification</span>
										</a>
									</li>
									<li>
										<a href="{{ route('chat_view') }}">
											<svg class="olymp-star-icon left-menu-icon" data-toggle="tooltip"
												data-placement="right" data-original-title="chat/message">
												<use
													xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-chat-icon">
												</use>
											</svg>

											<span>chat / messages</span>
										</a>
									</li>
									<li>
										<a href="{{ route('request_view') }}">
											<svg class="olymp-star-icon left-menu-icon" data-toggle="tooltip"
												data-placement="right" data-original-title="Friend request">
												<use
													xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-friend_request-icon">
												</use>
											</svg>

											<span>Friend request</span>
										</a>
									</li>

									<li>
										<a href="{{ Route('logout') }}">
											<svg class="olymp-logout-icon">
												<use
													xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-logout-icon">
												</use>
											</svg>

											<span>Log Out</span>
										</a>
									</li>
								</ul>

								

								<div class="ui-block-title ui-block-title-small">
									<h6 class="title">Custom Status</h6>
								</div>

								<div class="form-group with-button custom-status">
								<input class="form-control"  id="cs" type="text" value="{{ session()->get('u_cs') }}" >

									<button onclick="secs()" class="bg-purple">
										<svg class="olymp-check-icon">
											<use
												xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-check-icon">
											</use>
										</svg>
									</button>
								</div>
							</div>

						</div>
					</div>
					<a href="{{ route('profile_view',[session()->get('u_id')]) }}" class="author-name fn">
						<div class="author-title">
							@if( session()->has('userid') )
							<?php 
									echo session()->get('userid');
								?>
							@endif
							<svg class="olymp-dropdown-arrow-icon">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon">
								</use>
							</svg>
						</div>
						<span class="author-subtitle">{{session()->get('u_cs')}}</span>
					</a>
				</div>

			</div>
		</div>

	</header>

	<!-- ... end Header-BP -->

	<!-- Responsive Header-BP -->

	<header class="header header-responsive" id="site-header-responsive">

		<div class="header-content-wrapper">
			<ul class="nav nav-tabs mobile-app-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="{{ url('/') }}/#request" role="tab">
						<div class="control-icon has-items">
							<svg class="olymp-happy-face-icon">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-happy-face-icon">
								</use>
							</svg>
							<div class="label-avatar bg-blue">6</div>
						</div>
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="{{ url('/') }}/#chat" role="tab">
						<div class="control-icon has-items">
							<svg class="olymp-chat---messages-icon">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-chat---messages-icon">
								</use>
							</svg>
							<div class="label-avatar bg-purple">2</div>
						</div>
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="{{ url('/') }}/#notification" role="tab">
						<div class="control-icon has-items">
							<svg class="olymp-thunder-icon">
								<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-thunder-icon"></use>
							</svg>
							<div class="label-avatar bg-primary">8</div>
						</div>
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="{{ url('/') }}/#search" role="tab">
						<svg class="olymp-magnifying-glass-icon">
							<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon">
							</use>
						</svg>
						<svg class="olymp-close-icon">
							<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-close-icon"></use>
						</svg>
					</a>
				</li>
			</ul>
		</div>

		<!-- Tab panes -->
		<div class="tab-content tab-content-responsive">

			<div class="tab-pane " id="request" role="tabpanel">

				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">FRIEND REQUESTS</h6>
						<a href="{{ url('/') }}/#">Find Friends</a>
						<a href="{{ url('/') }}/#">Settings</a>
					</div>
					<ul class="notification-list friend-requests">
						<li>
							<div class="author-thumb">
								<img src="{{ url('/') }}/img/avatar55-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="{{ url('/') }}/#" class="h6 notification-friend">Tamara Romanoff</a>
								<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
							</div>
							<span class="notification-icon">
								<a href="{{ url('/') }}/#" class="accept-request">
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

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
									</use>
								</svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img src="{{ url('/') }}/img/avatar56-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="{{ url('/') }}/#" class="h6 notification-friend">Tony Stevens</a>
								<span class="chat-message-item">4 Friends in Common</span>
							</div>
							<span class="notification-icon">
								<a href="{{ url('/') }}/#" class="accept-request">
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

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
									</use>
								</svg>
							</div>
						</li>
						<li class="accepted">
							<div class="author-thumb">
								<img src="{{ url('/') }}/img/avatar57-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								You and <a href="{{ url('/') }}/#" class="h6 notification-friend">Mary Jane Stark</a>
								just became friends. Write on <a href="{{ url('/') }}/#" class="notification-link">her
									wall</a>.
							</div>
							<span class="notification-icon">
								<svg class="olymp-happy-face-icon">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-happy-face-icon">
									</use>
								</svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
									</use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-little-delete">
									</use>
								</svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img src="{{ url('/') }}/img/avatar58-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="{{ url('/') }}/#" class="h6 notification-friend">Stagg Clothing</a>
								<span class="chat-message-item">9 Friends in Common</span>
							</div>
							<span class="notification-icon">
								<a href="{{ url('/') }}/#" class="accept-request">
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

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
									</use>
								</svg>
							</div>
						</li>
					</ul>
					<a href="{{ url('/') }}/#" class="view-all bg-blue">Check all your Events</a>
				</div>

			</div>

			<div class="tab-pane " id="chat" role="tabpanel">

				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Chat / Messages</h6>
						<a href="{{ url('/') }}/#">Mark all as read</a>
						<a href="{{ url('/') }}/#">Settings</a>
					</div>

					<ul class="notification-list chat-message">
						<li class="message-unread">
							<div class="author-thumb">
								<img src="{{ url('/') }}/img/avatar59-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="{{ url('/') }}/#" class="h6 notification-friend">Diana Jameson</a>
								<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that
									we have to reschedule...</span>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon">
									<use
										xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-chat---messages-icon">
									</use>
								</svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
									</use>
								</svg>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="{{ url('/') }}/img/avatar60-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="{{ url('/') }}/#" class="h6 notification-friend">Jake Parker</a>
								<span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon">
									<use
										xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-chat---messages-icon">
									</use>
								</svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
									</use>
								</svg>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img src="{{ url('/') }}/img/avatar61-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="{{ url('/') }}/#" class="h6 notification-friend">Elaine Dreyfuss</a>
								<span class="chat-message-item">We’ll have to check that at the office and see if the
									client is on board with...</span>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon">
									<use
										xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-chat---messages-icon">
									</use>
								</svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
									</use>
								</svg>
							</div>
						</li>

						<li class="chat-group">
							<div class="author-thumb">
								<img src="{{ url('/') }}/img/avatar11-sm.jpg" alt="author">
								<img src="{{ url('/') }}/img/avatar12-sm.jpg" alt="author">
								<img src="{{ url('/') }}/img/avatar13-sm.jpg" alt="author">
								<img src="{{ url('/') }}/img/avatar10-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<a href="{{ url('/') }}/#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
								<span class="last-message-author">Ed:</span>
								<span class="chat-message-item">Yeah! Seems fine by me!</span>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-chat---messages-icon">
									<use
										xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-chat---messages-icon">
									</use>
								</svg>
							</span>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
									</use>
								</svg>
							</div>
						</li>
					</ul>

					<a href="{{ url('/') }}/#" class="view-all bg-purple">View All Messages</a>
				</div>

			</div>

			<div class="tab-pane " id="notification" role="tabpanel">

				<div class="mCustomScrollbar" data-mcs-theme="dark">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Notifications</h6>
						<a href="{{ url('/') }}/#">Mark all as read</a>
						<a href="{{ url('/') }}/#">Settings</a>
					</div>

					<ul class="notification-list">
						<li>
							<div class="author-thumb">
								<img src="{{ url('/') }}/img/avatar62-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="{{ url('/') }}/#" class="h6 notification-friend">Mathilda Brinker</a>
									commented on your new <a href="{{ url('/') }}/#" class="notification-link">profile
										status</a>.</div>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-comments-post-icon">
									<use
										xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-comments-post-icon">
									</use>
								</svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
									</use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-little-delete">
									</use>
								</svg>
							</div>
						</li>

						<li class="un-read">
							<div class="author-thumb">
								<img src="{{ url('/') }}/img/avatar63-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div>You and <a href="{{ url('/') }}/#" class="h6 notification-friend">Nicholas
										Grissom</a> just became friends. Write on <a href="{{ url('/') }}/#"
										class="notification-link">his wall</a>.</div>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">9 hours ago</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-happy-face-icon">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-happy-face-icon">
									</use>
								</svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
									</use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-little-delete">
									</use>
								</svg>
							</div>
						</li>

						<li class="with-comment-photo">
							<div class="author-thumb">
								<img src="{{ url('/') }}/img/avatar64-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="{{ url('/') }}/#" class="h6 notification-friend">Sarah Hetfield</a>
									commented on your <a href="{{ url('/') }}/#" class="notification-link">photo</a>.
								</div>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-comments-post-icon">
									<use
										xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-comments-post-icon">
									</use>
								</svg>
							</span>

							<div class="comment-photo">
								<img src="{{ url('/') }}/img/comment-photo1.jpg" alt="photo">
								<span>“She looks incredible in that outfit! We should see each...”</span>
							</div>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
									</use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-little-delete">
									</use>
								</svg>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="{{ url('/') }}/img/avatar65-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="{{ url('/') }}/#" class="h6 notification-friend">Green Goo Rock</a>
									invited you to attend to his event Goo in <a href="{{ url('/') }}/#"
										class="notification-link">Gotham Bar</a>.</div>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-happy-face-icon">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-happy-face-icon">
									</use>
								</svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
									</use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-little-delete">
									</use>
								</svg>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="{{ url('/') }}/img/avatar66-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="{{ url('/') }}/#" class="h6 notification-friend">James Summers</a>
									commented on your new <a href="{{ url('/') }}/#" class="notification-link">profile
										status</a>.</div>
								<span class="notification-date"><time class="entry-date updated"
										datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
							</div>
							<span class="notification-icon">
								<svg class="olymp-heart-icon">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
								</svg>
							</span>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
									</use>
								</svg>
								<svg class="olymp-little-delete">
									<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-little-delete">
									</use>
								</svg>
							</div>
						</li>
					</ul>

					<a href="{{ url('/') }}/#" class="view-all bg-primary">View All Notifications</a>
				</div>

			</div>

			<div class="tab-pane " id="search" role="tabpanel">


				<form class="search-bar w-search notification-list friend-requests">
					<div class="form-group with-button">
						<input class="form-control js-user-search" placeholder="Search here people or pages..."
							type="text">
					</div>
				</form>


			</div>

		</div>
		<!-- ... end  Tab panes -->

	</header>

	<!-- ... end Responsive Header-BP -->
	<div class="header-spacer"></div>



	@yield('mainpart')





	<a class="back-to-top" href="{{ url('/') }}/#">
		<img src="{{ url('/') }}/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
	</a>


	@yield('popupbox')





	<!-- JS Scripts -->
	<script src="{{ url('/') }}/js/jquery-3.2.1.js"></script>
	<script src="{{ url('/') }}/js/jquery.appear.js"></script>
	<script src="{{ url('/') }}/js/jquery.mousewheel.js"></script>
	<script src="{{ url('/') }}/js/perfect-scrollbar.js"></script>
	<script src="{{ url('/') }}/js/jquery.matchHeight.js"></script>
	<script src="{{ url('/') }}/js/svgxuse.js"></script>
	<script src="{{ url('/') }}/js/imagesloaded.pkgd.js"></script>
	<script src="{{ url('/') }}/js/Headroom.js"></script>
	<script src="{{ url('/') }}/js/velocity.js"></script>
	<script src="{{ url('/') }}/js/ScrollMagic.js"></script>
	<script src="{{ url('/') }}/js/jquery.waypoints.js"></script>
	<script src="{{ url('/') }}/js/jquery.countTo.js"></script>
	<script src="{{ url('/') }}/js/popper.min.js"></script>
	<script src="{{ url('/') }}/js/material.min.js"></script>
	<script src="{{ url('/') }}/js/bootstrap-select.js"></script>
	<script src="{{ url('/') }}/js/smooth-scroll.js"></script>
	<script src="{{ url('/') }}/js/selectize.js"></script>
	<script src="{{ url('/') }}/js/swiper.jquery.js"></script>
	<script src="{{ url('/') }}/js/moment.js"></script>
	<script src="{{ url('/') }}/js/daterangepicker.js"></script>
	<script src="{{ url('/') }}/js/simplecalendar.js"></script>
	<script src="{{ url('/') }}/js/fullcalendar.js"></script>
	<script src="{{ url('/') }}/js/isotope.pkgd.js"></script>
	<script src="{{ url('/') }}/js/ajax-pagination.js"></script>
	<script src="{{ url('/') }}/js/Chart.js"></script>
	<script src="{{ url('/') }}/js/chartjs-plugin-deferred.js"></script>
	<script src="{{ url('/') }}/js/circle-progress.js"></script>
	<script src="{{ url('/') }}/js/loader.js"></script>
	<script src="{{ url('/') }}/js/run-chart.js"></script>
	<script src="{{ url('/') }}/js/jquery.magnific-popup.js"></script>
	<script src="{{ url('/') }}/js/jquery.gifplayer.js"></script>
	<script src="{{ url('/') }}/js/mediaelement-and-player.js"></script>
	<script src="{{ url('/') }}/js/mediaelement-playlist-plugin.min.js"></script>
	<script src="{{ url('/') }}/js/sticky-sidebar.js"></script>

	<script src="{{ url('/') }}/js/base-init.js"></script>
	<script defer src="{{ url('/') }}/fonts/fontawesome-all.js"></script>

	<script src="{{ url('/') }}/Bootstrap/dist/js/bootstrap.bundle.js"></script>

	<script src="{{ url('/') }}/js/toastr.min.js"></script>
	<script src="{{ url('/') }}/js/customscript.js"></script>

	@yield('script')


	<script>
		setInterval(function () {
			noti_ref_requst();	
			noti_normal();
			noti_ref_chat();
		}, 3000);
		
		
	</script>

</body>

</html>