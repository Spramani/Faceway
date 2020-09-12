@extends('masterpages/homemaster')
@section('mainpart')

@include('content/profileheader')





<div class="container">
	

	<div class="row">
			@foreach ($datas as $posts)
		<div class="col col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
			
				<div class="post-video">
							<div class="video-thumb f-none">
								<video width="100%"  ><img src="{{url('/')}}/img/post-video.jpg" alt="photo">
									<source src="{{ url('/')}}/upload_media/post/video/{{ $posts['media_path']}}" type="video/mp4" > 
										<svg class="olymp-play-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-play-icon"></use></svg>
								</video>
							
							<a href="javascript:void(0)"    onclick="view_post({{$posts['post_id']}})" class="coust_play_video"  >
								<svg class="olymp-play-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-play-icon"></use></svg>
							</a>	
						</div>
						<div class="video-content">
							
							<p>
									{{ $posts['decription'] }}
								</p>
						</div>
					</div>

		</div>
		@endforeach	
	</div>
</div>

<a class="back-to-top" href="javascript:void(0);">
	<img src="{{url('/')}}/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>

@endsection