@extends('masterpages/homemaster')
@section('mainpart')


@include('content/profileheader')


<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<!-- Tab panes -->
			<div class="tab-content">
				

				<div class="tab-pane active" id="album-page" role="tabpanel">

					<div class="photo-album-wrapper">

						
						@foreach ($data as $post)
							
						
							<div class="photo-album-item-wrap col-4-width">
								<div class="photo-album-item" data-mh="album-item">
									<div class="photo-item">
										<img src="{{url('/')}}/upload_media/post/img/{{ $post->media_path }}" alt="photo">
										<div class="overlay overlay-dark"></div>
										<a href=" javascript:void(0);" class="post-add-icon">
											<svg class="olymp-heart-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
											<?php 
											 $lc=0;
											 $lc=$a->where('post_id',$post->post_id)->count();
											 
											?>
											<span>{{$lc}}</span>
										</a>
										<a href=" javascript:void(0);" onclick="view_post({{$post->post_id}})" class="  full-block"></a>
									</div>
								
							
								
								</div>
							</div>
							@endforeach

					</div>

				</div>
			</div>

		</div>
	</div>
</div>

<a class="back-to-top" href=" javascript:void(0);">
	<img src="{{url('/')}}/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>

@endsection