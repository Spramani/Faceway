@extends('masterpages/homemaster')
@section('mainpart')

@include('content/profileheader')



<!-- Friends -->

<div class="container">
	<div class="row">

		@foreach ($users as $oneuser)
			
		
		<div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
			<div class="ui-block">

				<!-- Friend Item -->

				<div class="friend-item">
					<div class="friend-header-thumb">
						<img src="{{url('/')}}\upload_media\profile\cover\{{$oneuser['u_coverpic']}}" alt="friend">
					</div>

					<div class="friend-item-content">

						
						<div class="friend-avatar">
							<div class="author-thumb">
								<img src="{{url('/')}}\upload_media\profile\profile\{{$oneuser['u_profilepic']}}" height="100px" width="100px" alt="author">
							</div>
							<div class="author-content">
								<a href="{{ route('profile_view',[$oneuser['u_id']]) }}" class="h5 author-name">{{$oneuser['u_name']}}</a>
								<div class="country">{{$oneuser['u_name_id']}}</div>
							</div>
						</div>

						<div class="swiper-container" data-slide="fade">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="friend-count" data-swiper-parallax="-500">
										<a href=" javascript:void(0);" class="friend-count-item">
											<?php 
												$cont=0;	
												$cout = $ff->where('user_id',$oneuser['u_id'])->count();
											?>
											<div class="h6">{{$cout}}</div>
											<div class="title">Friends</div>
										</a>
										<a href=" javascript:void(0);" class="friend-count-item">
											<?php 
												$cont=0;	
												$cout = $uposts->where('user_id',$oneuser['u_id'])->where('post_type',1)->count();
											?>
											
											<div class="h6">{{$cout}}</div>
											<div class="title">Photos</div>
										</a>
										<a href=" javascript:void(0);" class="friend-count-item">
											<?php 
												$cont=0;	
												$cout = $uposts->where('user_id',$oneuser['u_id'])->where('post_type',2)->count();
											?>
											
											<div class="h6">{{$cout}}</div>
											<div class="title">Videos</div>
										</a>
									</div>
									<div class="control-block-button" data-swiper-parallax="-100">
										

										<a href="{{route('chat_view')}}" class="btn btn-control bg-purple">
											<svg class="olymp-chat---messages-icon">
												<use
													xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-chat---messages-icon">
												</use>
											</svg>
										</a>

									</div>
								</div>

								<div class="swiper-slide">
									<p class="friend-about text-center" data-swiper-parallax="-500">
											{{$oneuser['u_bio']}}
									</p>

									<div class="friend-since" data-swiper-parallax="-100">
										<span>Friends Since:</span>
										<div class="h6">December 2014</div>
									</div>
								</div>
							</div>

							<!-- If we need pagination -->
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>

				<!-- ... end Friend Item -->
			</div>
		</div>
		@endforeach
		
	</div>
</div>

<!-- ... end Friends -->










<a class="back-to-top" href=" javascript:void(0);">
	<img src="{{url('/')}}/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>








@endsection
@section('popupbox')



@endsection