@extends('masterpages/homemaster')
@section('mainpart')



@include('content/profileheader')

<div class="container">
	<div class="row">

		<!-- Main Content -->

		<div class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
			<div id="newsfeed-items-grid_profile">
			</div>

			<a id="load-more-button" href="javascript:void(0);" class="btn btn-control btn-more"
				data-load-link="items-to-load.html" data-container="newsfeed-items-grid">
				<svg class="olymp-three-dots-icon">
					<use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
				</svg>
			</a>
		</div>

		<!-- ... end Main Content -->


		<!-- Left Sidebar -->

		<div class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Profile Intro</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Personal-Info -->

					<ul class="widget w-personal-info item-block">

						<li>
							<span class="title">About Me:</span>
							<span class="text">{{$u->u_bio }}</span>
						</li>
						<li>
							<span class="title">Website</span>
							<span class="text">{{$u->u_website }}</span>
						</li>
						<li>
							<span class="title">Email</span>
							<span class="text">{{$u->u_email }}</span>
						</li>
						<li>
							<span class="title">gender</span>
							<span class="text"> <?php 
									if( $u->u_gender == 1)
									{
										echo "male";
									}	
									elseif ($u->u_gender == 2) {
										echo "female";
									}
									elseif ($u->u_gender == 0) {
										echo "Not Specified";
									}
								?>
							</span>
						</li>
						<li>
							<span class="title">Hobbies</span>
							<span class="text">{{$hobbies->hobbies }}</span>
						</li>
						<li>
							<span class="title">Favourite TV Shows:</span>
							<span class="text">{{$hobbies->favourite_TV_Shows }}</span>
						</li>


					</ul>

					<!-- .. end W-Personal-Info -->
				</div>
			</div>


			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Last Videos</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Latest-Video -->

					<ul class="widget w-last-video">
						<li>
							@foreach ($datas as $posts)
							<div class="row">

								<div class="post-video">
									<div class="video-thumb f-none">
										<video width="100%">
											<source
												src="{{ url('/')}}/upload_media/post/video/{{ $posts['media_path']}}"
												type="video/mp4">
											<svg class="olymp-play-icon">
												<use
													xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-play-icon">
												</use>
											</svg>
										</video>

										<a href="{{url('/')}}/javascript:void(0)"
											onclick="view_post({{$posts['post_id']}})" class="coust_play_video">
											<svg class="olymp-play-icon">
												<use
													xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-play-icon">
												</use>
											</svg>
										</a>
									</div>
								</div>

							</div>
							@endforeach
						</li>

					</ul>

					<!-- .. end W-Latest-Video -->
				</div>
			</div>

		</div>

		<!-- ... end Left Sidebar -->


		<!-- Right Sidebar -->

		<div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Last Photos</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Latest-Photo -->

					<ul class="widget w-last-photo js-zoom-gallery">
						@foreach ($data as $item)


						<li>
							<a href="{{url('/')}}/upload_media/post/img/{{ $item->media_path }}">
								<img src="{{url('/')}}/upload_media/post/img/{{ $item->media_path }}" alt="photo">
							</a>
						</li>
						@endforeach
					</ul>


					<!-- .. end W-Latest-Photo -->
				</div>
			</div>

			<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Friends ({{count($friends)}})</h6>
					</div>
					<div class="ui-block-content">
	
						<!-- W-Faved-Page -->
	
						<ul class="widget w-faved-page ">

							@foreach ($friends as $onef)
	
								<li>
									<a href="{{route('profile_view',[$onef['u_id']])}}">
										<img src="{{url('/')}}/upload_media/profile/profile/{{$onef['u_profilepic']}}" alt="author">
									</a>
								</li>
							
							@endforeach
							{{--  @if (count($friends) > 0)
							<li class="all-users">
								<a href="javascript:void(0);">+{{count($friends) }}</a>
							</li>
							@endif  --}}
							
						</ul>
	
						<!-- .. end W-Faved-Page -->
					</div>
				</div>

			

		</div>

		<!-- ... end Right Sidebar -->

	</div>
</div>


@endsection


@section('script')

<script>



</script>

@endsection
@section('popupbox')

{{-- 
@include('/contant/postmodel') --}}

@endsection