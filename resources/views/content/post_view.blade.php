@foreach ($data as $row)

					

					<?php
						$liked = "";
						$u_id = session()->get('u_id');		
						$bb=$likecount->where('post_id',$row['post_id'])->where('user_id',$u_id)->count();
						if ($bb > 0) {
							$liked = "active";
						}
					?>


						{{-- text	post --}}
					<div class="ui-block last_post_block" id='{{$row['post_id']}}'>

					<!-- Post -->
					
					<article class="hentry post">
					
							<div class="post__author author vcard inline-items">
								<img src="{{ url('/')}}/upload_media/profile/profile/{{ $row['u_profilepic']}}" alt="author">
					
								<div class="author-date">
								<a class="h6 post__author-name fn" href="{{route('profile_view',[$row['u_id']])}}">{{ $row['u_name'] }}</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											{{ \App\Http\Controllers\NewsfeedController::time_ago_in_php( $row['post_created_date'] ) }}
										</time>
									</div>
								</div>
								@if (session()->get('u_id') == $row['u_id'])
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
										</svg>
										<ul class="more-dropdown">
											<li>
											<a href="javascript:void(0)" onclick="post_delete({{$row['post_id']}})">Delete Post</a>
											</li>
										</ul>
									</div>
								@endif
								
					
							</div>

							@if ($row['post_type'] == 0)	
								<p onclick="view_post({{$row['post_id']}})" style="cursor: pointer" class="text-center">
									{{ $row['decription'] }}
								</p>
							
							@elseif($row['post_type'] == 1)

								<p >
									{{ $row['decription'] }}
								</p>
	
	
								<div class="post-thumb">
									<a href="javascript:void(0)" onclick="view_post({{$row['post_id']}})"  >
									<img src="{{ url('/') }}/upload_media/post/img/{{ $row['media_path'] }}" alt="photo">
									</a>
								</div>


							@elseif($row['post_type'] == 2)

																
								<div class="post-video">
									<div class="video-thumb f-none">
											<video width="100%"  >
												<source src="{{ url('/')}}/upload_media/post/video/{{ $row['media_path']}}" type="video/mp4">
													<svg class="olymp-play-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-play-icon"></use></svg>
											</video>
										{{-- <img src="img/post-video.jpg" alt="photo"> --}}
										<a href="javascript:void(0)"    onclick="view_post({{$row['post_id']}})" class="coust_play_video"  >
											<svg class="olymp-play-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-play-icon"></use></svg>
										</a>
									</div>
									@isset($row['decription'])
									<div class="video-content">
										{{-- <a href="#" class="h4 title">The Secrets of the Auroris Movie Effects</a> --}}
										<p>
												{{ $row['decription'] }}
											</p>
										{{-- <a href="#" class="link-site">MOVIEMAG.COM</a> | <a href="#" class="link-site">BY DAN STEVENS</a> --}}
									</div>
									@endisset
									
								</div>
			


							@endif
					
							<div class="post-additional-info inline-items">
					
							<a href="javascript:void(0)" class="post-add-icon inline-items post_like_heart{{ $row['post_id'] }}" onclick="likepost({{$row['post_id']}},this);">
									<svg class="olymp-heart-icon">
										<use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
									</svg>
									<?php $aa = 0;?>
								<?php
									$aa=$likecount->where('post_id',$row['post_id'])->count();
								?>
								<span>{{$aa}}</span>
								</a>
					
								<ul class="friends-harmonic d-none">
									<li>
										<a href="#">
											<img src="{{url('/')}}/img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="{{url('/')}}/img/friend-harmonic8.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="{{url('/')}}/img/friend-harmonic9.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="{{url('/')}}/img/friend-harmonic10.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="{{url('/')}}/img/friend-harmonic11.jpg" alt="friend">
										</a>
									</li>
								</ul>
					
								<div class="names-people-likes d-none">
									<a href="#">Jenny</a>, <a href="#">Robert</a> and
									<br>6 more liked this
								</div>
					
					
								<div class="comments-shared">
									<a href="javascript:void(0)" onclick="view_post({{$row['post_id']}})" class="post-add-icon inline-items post_comm{{ $row['post_id'] }}">
										<svg class="olymp-speech-balloon-icon">
											<use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use>
										</svg>
										<?php $aa = 0;?>
										<?php
											$aa=$comment->where('post_id',$row['post_id'])->count();
										?>
										<span>{{$aa}}</span>
									</a>
					
									<a href="#" class="post-add-icon inline-items d-none">
										<svg class="olymp-share-icon">
											<use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-share-icon"></use>
										</svg>
										<span>24</span>
									</a>
								</div>
					
					
							</div>
					
							<div class="control-block-button post-control-button">
					
								<a href="#" class="btn btn-control featured-post d-none">
									<svg class="olymp-trophy-icon">
										<use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-trophy-icon"></use>
									</svg>
								</a>
					
							<a href="javascript:void(0)" onclick="likepost({{$row['post_id']}},this);" class="btn btn-control @isset($liked) {{$liked}} @endisset likebtn{{$row['post_id']}}">
									<svg class="olymp-like-post-icon">
										<use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-like-post-icon"></use>
									</svg>
								</a>
					
								<a class="btn btn-control" data-toggle="collapse" href="#comment_box{{$row['post_id']}}" role="button" aria-expanded="false" aria-controls="comment_box{{$row['post_id']}}">
									<svg class="olymp-comments-post-icon">
										<use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
									</svg>
								</a>
					
								<a href="#" class="btn btn-control d-none">
									<svg class="olymp-share-icon">
										<use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-share-icon"></use>
									</svg>
								</a>
					
							</div>
					
						</article>

						<div class="collapse" id="comment_box{{$row['post_id']}}">
						<div class="comment-form inline-items " >
				
							<div class="post__author author vcard inline-items">
								<img src="{{ url('/')}}/upload_media/profile/profile/{{ session()->get('u_profile')}}" alt="author">
						
								<div class="form-group with-icon-right is-empty">
									<textarea class="form-control" id="comment_txtbox{{$row['post_id']}}" placeholder=""></textarea>
									<div class="add-options-message d-none">
										<a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
											<svg class="olymp-camera-icon">
												<use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
											</svg>
										</a>
									</div>
								<span class="material-input"></span></div>
							</div>
						
							<button class="btn btn-md-2 btn-primary"  onclick="addcomment({{$row['post_id']}}); commcount({{$row['post_id']}});">Post Comment</button>
						
							<button class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>
						
						</div>
					</div>
					
					<!-- .. end Post -->
				</div>
				{{-- text post end --}}


				

					
				@endforeach