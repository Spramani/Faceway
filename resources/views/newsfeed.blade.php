@extends('/masterpages/homemaster')
@section('mainpart')



<div class="container">
	<div class="row newsfeed">

		<!-- Main Content -->

		<main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12 ">

			<div class="ui-block">

				<!-- News Feed Form  -->

				<div class="news-feed-form">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active inline-items" data-toggle="tab" href="#text_post" role="tab"
								aria-expanded="true">

								<svg class="olymp-status-icon">
									<use xlink:href="svg-icons/sprites/icons.svg#olymp-status-icon"></use>
								</svg>

								<span>Text Post</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link inline-items" data-toggle="tab" href="#photo_post" role="tab"
								aria-expanded="false">

								<svg class="olymp-multimedia-icon">
									<use xlink:href="svg-icons/sprites/icons.svg#olymp-multimedia-icon"></use>
								</svg>

								<span>Photo Post</span>
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link inline-items" data-toggle="tab" href="#video_post" role="tab"
								aria-expanded="false">
								<svg class="olymp-blog-icon">
									<use xlink:href="svg-icons/sprites/icons.svg#olymp-blog-icon"></use>
								</svg>

								<span>Video Post</span>
							</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="text_post" role="tabpanel" aria-expanded="true">
							<form>
								<div class="author-thumb">
										<a href="{{ route('profile_view',[session()->get('u_id')]) }}"><img alt="author"
											style="height:36px;"
											src="{{ url('/') }}\upload_media\profile\profile\<?php if(session()->has('u_profile')){echo session()->get('u_profile');}?>"></a>
										</div>
								<div class="form-group with-icon label-floating is-empty">
									<label class="control-label">Share what you are thinking here...</label>
									<textarea class="form-control" name="post_txt_box" id="post_txt_box"
										placeholder=""></textarea>
								</div>
								<div class="add-options-message">
									

									<span class="btn btn-primary btn-md-2" onclick="post_text(); ref_post();"
										id="btn_post_submint">Publish</span>
									{{-- <button  class="btn btn-primary btn-md-2">Post Status</button> --}}

								</div>

							</form>
						</div>

						<div class="tab-pane" id="photo_post" role="tabpanel" aria-expanded="true">
							<form id="photo_post_form">
								{{ csrf_field() }}
								<div class="author-thumb">
										<a href="{{ route('profile_view',[session()->get('u_id')]) }}"><img alt="author"
											style="height:36px;"
											src="{{ url('/') }}\upload_media\profile\profile\<?php if(session()->has('u_profile')){echo session()->get('u_profile');}?>"></a>
								</div>
								<div class="form-group with-icon label-floating is-empty">
									<label class="control-label">Share what you are thinking here...</label>
									<textarea class="form-control photo_text_box" id="post_txt_box_photo"
										name="post_txt_box_photo" placeholder=""></textarea>
								</div>
								<div class="add-options-message">
									<label for="photo_input" style="vertical-align: middle;">
										<span href="javascript:void(0)" class="options-message float-left"
											data-toggle="tooltip" data-placement="top" data-original-title="ADD PHOTOS">
											<svg class="olymp-camera-icon">
												<use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
											</svg>
										</span>
									</label>
									<input type="file" name="photo_input" id="photo_input" class="media_picker">
									<p id="photo_media_text"></p>


									<button type="submit" class="btn btn-primary btn-md-2" id="btn_post_submint">Publish</button>
									{{-- post_photo(); --}}

								</div>

							</form>
						</div>

						<div class="tab-pane" id="video_post" role="tabpanel" aria-expanded="true">
							<form id="video_post_form">
								{{ csrf_field() }}
								<div class="author-thumb">
										<a href="{{ route('profile_view',[session()->get('u_id')]) }}"><img alt="author"
											style="height:36px;"
											src="{{ url('/') }}\upload_media\profile\profile\<?php if(session()->has('u_profile')){echo session()->get('u_profile');}?>"></a>
						
										</div>
								<div class="form-group with-icon label-floating is-empty">
									<label class="control-label">Share what you are thinking here...</label>
									<textarea class="form-control video_text_box" id="post_txt_box_video"
										name="post_txt_box_video" placeholder=""></textarea>
								</div>
								<div class="add-options-message">
									<label for="video_input" style="vertical-align: middle;">
										<span href="javascript:void(0)" class="options-message float-left"
											data-toggle="tooltip" data-placement="top" data-original-title="ADD VIDEO">
											<svg class="olymp-weather-icon left-menu-icon" >
												<use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-video-icon"></use>
											</svg>
										</span>
									</label>
									<input type="file" name="video_input" id="video_input" class="media_picker">
									<p id="video_media_text"></p>

									<button type="submit" class="btn btn-primary btn-md-2" id="btn_post_submint">Publish</button>

								</div>

							</form>
						</div>
					</div>
				</div>

				<!-- ... end News Feed Form  -->
			</div>

			<div id="newsfeed-items-grid_home">


			</div>


			<a id="load-more-button" href="#" style="display:none" class="btn btn-control btn-more" data-load-link="items-to-load.html"
				data-container="newsfeed-items-grid"><svg class="olymp-three-dots-icon">
					<use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
				</svg></a>

		</main>

		<!-- ... end Main Content -->


		<!-- Left Sidebar -->

		<aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-12">


			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Profile Intro</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Personal-Info -->

					<ul class="widget w-personal-info item-block">

						<li>
							<span class="title">About Me:</span>
							<span class="text">{{$curant_user->u_bio }}</span>
						</li>
						<li>
							<span class="title">Website</span>
							<span class="text">{{$curant_user->u_website }}</span>
						</li>
						<li>
							<span class="title">Email</span>
							<span class="text">{{$curant_user->u_email }}</span>
						</li>
						<li>
							<span class="title">gender</span>
							<span class="text"> <?php 
											if( $curant_user->u_gender == 1)
											{
												echo "male";
											}	
											elseif ($curant_user->u_gender == 2) {
												echo "female";
											}
											elseif ($curant_user->u_gender == 0) {
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
						<li>
							<span class="title"> Higher Secondary School :</span>
							<span class="text">{{$edu->secondary_school }}</span>
						</li>
						<li>
							<span class="title">Graduation College Name :</span>
							<span class="text">{{$edu->college_university }}</span>
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
						
							@foreach ($vposts as $onepost)
							<li>
							<div class="row">

								<div class="post-video">
									<div class="video-thumb f-none">
										<video width="100%">
											<source
												src="{{ url('/')}}/upload_media/post/video/{{ $onepost->media_path}}"
												type="video/mp4">
											<svg class="olymp-play-icon">
												<use
													xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-play-icon">
												</use>
											</svg>
										</video>

										<a href="javascript:void(0)"
											onclick="view_post({{$onepost->post_id}})" class="coust_play_video">
											<svg class="olymp-play-icon">
												<use
													xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-play-icon">
												</use>
											</svg>
										</a>
									</div>
								</div>

							</div>
						</li>
							@endforeach
						

					</ul>

					<!-- .. end W-Latest-Video -->
				</div>
			</div>

		</aside>

		<!-- ... end Left Sidebar -->


		<!-- Right Sidebar -->

		<aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Last Photos</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Latest-Photo -->

					<ul class="widget w-last-photo js-zoom-gallery">
						@foreach ($pposts as $item)


						<li>
							<a href="{{url('/')}}/upload_media/post/img/{{ $item->media_path }}">
								<img src="{{url('/')}}/upload_media/post/img/{{ $item->media_path }}"
									style="background:chocolate;" alt="photo">
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
										<img src=" {{url('/')}}/upload_media/profile/profile/{{$onef['u_profilepic']}}" alt="author">
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


		</aside>

		<!-- ... end Right Sidebar -->

	</div>
</div>














@endsection







@section('script')

<script>
	$(function () {
		ref_post();
	});

	$(window).scroll(function() {
		
		if($(window).scrollTop() + $(window).height() + 1 >= $(document).height()) {
			
			var last_id = $(".last_post_block:last").attr("id");
			console.log(last_id);
			loadmorehome(last_id);
		}
	});
</script>

@endsection


@section('popupbox')

<div id="mymodel">


</div>


@endsection