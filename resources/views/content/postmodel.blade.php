<!-- Window-popup Open Photo Popup V2 -->
<?php 

    //$data=$post->where('post_id',$post_id)->count();
    
    //  echo "<pre>";
    //      //print_r($data[0]['post_id']);
    //      print_r($userdata);
    //  echo "</pre>";
     ?>
<?php
    $liked = "";
    $u_id = session()->get('u_id');	
    $bb=$likecount->where('post_id',$post->post_id)->where('user_id',$u_id)->count();
    if ($bb > 0) {
        $liked = "active";
    }

     $pcdata=$Commentdata->where('post_id',$post->post_id)->sortBydesc('comment_created_date');
    
    

    
?>

<div class="modal fade" id="open-photo-popup-v2" tabindex="-1" role="dialog" aria-labelledby="open-photo-popup-v2"
    aria-hidden="true">
    <div class="modal-dialog window-popup open-photo-popup open-photo-popup-v2" role="document">
        <div class="modal-content">
            <a href="{{ url ('/') }}/#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon">
                    <use xlink:href="{{ url ('/') }}/svg-icons/sprites/icons.svg#olymp-close-icon"></use>
                </svg>
            </a>

            <div class="modal-body">
                <div class="open-photo-thumb h-100 p-0 bg-white">

                    <div class="swiper-container h-100" data-effect="fade" data-autoplay="4000">

                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper h-100">
                            <!-- Slides -->

                            <div class="swiper-slide h-100">
                                <div class="photo-item h-100 text_post_view">

                                    @if ($post->post_type == 0)

                                    <div class=" h-100 text_post_view">
                                        <span>{{ $post->decription }}</span>


                                    </div>

                                    @elseif($post->post_type == 1)
                                    <img src="{{ url ('/') }}/upload_media/post/img/{{ $post->media_path }}"
                                        alt="photo">

                                    @elseif($post->post_type == 2)
                                    <video width="100%" controls style="vertical-align: middle;">
                                        <source src="{{ url('/')}}/upload_media/post/video/{{ $post->media_path }}"
                                            type="video/mp4">
                                        <svg class="olymp-play-icon">
                                            <use xlink:href="{{ url('/')}}/svg-icons/sprites/icons.svg#olymp-play-icon"></use>
                                        </svg>
                                    </video>
                                    @endif
                                </div>
                            </div>



                        </div>

                    </div>

                </div>

                <div class="open-photo-content">

                    <article class="hentry post">

                        <div class="post__author author vcard inline-items">

                                
                            <img src="{{ url('/')}}/upload_media/profile/profile/{{ $postuserdata[0]['u_profilepic']}}" alt="author">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="{{ url ('/') }}/02-ProfilePage.html">
                                    @foreach ($postuserdata as $oneuser)
                                    {{ $oneuser->u_name }}
                                    @endforeach
                                </a>
                                <div class="post__date">
                                    <time class="published" >
                                        {{ \App\Http\Controllers\NewsfeedController::time_ago_in_php( $post->post_created_date ) }}
                                    </time>
                                </div>
                            </div>
                            @if ( session()->get('u_id') == $post->user_id)
                            <div class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="{{ url('/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                                </svg>
                                <ul class="more-dropdown">
                                    
                                    <li>
                                        <a href="javascript:void(0)" onclick="post_delete({{$post->post_id}})">Delete
                                            Post</a>
                                    </li>
                                    
                                </ul>
                            </div>  
                            @endif
                            

                        </div>

                        <p>{{ $post->decription }}</p>

                        {{-- <p>With: <a href="{{ url ('/') }}/#">Jessy Owen</a>, <a href="{{ url ('/') }}/#">Marina
                            Valentine</a></p> --}}

                        <div class="post-additional-info inline-items">

                            <a href="javascript:void(0)"
                                class="post-add-icon inline-items post_like_heart{{ $post->post_id }}"
                                onclick="likepost({{$post->post_id}},this);">
                                <svg class="olymp-heart-icon">
                                    <use xlink:href="{{ url ('/') }}/svg-icons/sprites/icons.svg#olymp-heart-icon">
                                    </use>
                                </svg>
                                <?php $aa = 0;?>
                                <?php
                                    $aa=$likecount->where('post_id',$post->post_id)->count();
                                ?>
                                <span>{{$aa}}</span>
                            </a>


                            <div class="comments-shared">
                                <a href="{{ url ('/') }}/#"
                                    class="post-add-icon inline-items post_comm{{ $post->post_id }}">
                                    <svg class="olymp-speech-balloon-icon">
                                        <use
                                            xlink:href="{{ url ('/') }}/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon">
                                        </use>
                                    </svg>
                                    <?php $aa = 0;?>
                                    <?php
                                        $aa=$Commentdata->where('post_id',$post->post_id)->count();
                                    ?>
                                    <span>{{$aa}}</span>
                                </a>

                                
                            </div>


                        </div>

                        <div class="control-block-button post-control-button">

                            <a href="javascript:void(0)" onclick="likepost({{$post->post_id}},this);"
                                class="btn btn-control @isset($liked) {{$liked}} @endisset likebtn{{$post->post_id}}">
                                <svg class="olymp-like-post-icon">
                                    <use xlink:href="{{ url ('/') }}/svg-icons/sprites/icons.svg#olymp-like-post-icon">
                                    </use>
                                </svg>
                            </a>

                            
                            

                        </div>

                    </article>

                    <div class="mCustomScrollbar" data-mcs-theme="dark">

                        <ul class="comments-list" id="com_list">

                            {{-- @include('contant/comment_list') --}}

                            @foreach ($pcdata as $onecomm)
                            <?php
                            $comuser = $alluser->where('u_id',$onecomm['user_id']);
                            
                            ?>
                            
                            <li class="comment-item">
                                <div class="post__author author vcard inline-items">
                                    @foreach ($comuser as $oneuser)
                                    <img src="{{ url('/')}}/upload_media/profile/profile/{{ $oneuser->u_profilepic}}" alt="author">
                                    @endforeach
                                    <div class="author-date">
                                        <a class="h6 post__author-name fn" href="{{ url ('/') }}/#">
                                            @foreach ($comuser as $oneuser)
                                            {{ $oneuser->u_name }}
                                            @endforeach
                                        </a>
                                        <div class="post__date">
                                            <time class="published" datetime="2017-03-24T18:18">
                                                {{ \App\Http\Controllers\NewsfeedController::time_ago_in_php( $onecomm->comment_created_date ) }}
                                            </time>
                                        </div>
                                    </div>
                                    @if (session()->get('u_id') == $onecomm->user_id)
                                    <div class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="{{ url('/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                                        </svg>
                                        <ul class="more-dropdown">

                                            <li>
                                                <a href="javascript:void(0)"
                                                    onclick="comm_delete({{$onecomm->comment_id}},{{ $post->post_id }})">Delete
                                                    Comment</a>
                                            </li>

                                        </ul>
                                    </div> 
                                    @endif
                                    

                                </div>

                                <p>{{ $onecomm['comment_text'] }}</p>

                                <a href="javascript:void(0)"
                                    class="post-add-icon inline-items comm_like{{ $onecomm['comment_id'] }}"
                                    onclick="comm_like({{ $onecomm['comment_id'] }})">
                                    <svg class="olymp-heart-icon">
                                        <use xlink:href="{{ url ('/') }}/svg-icons/sprites/icons.svg#olymp-heart-icon">
                                        </use>
                                    </svg>
                                    <?php $aa = 0;?>
                                    <?php
                                        $aa=$comm_like->where('comment_id',$onecomm['comment_id'])->count();
                                    ?>
                                    <span>{{$aa}}</span>
                                </a>
                            </li>

                            @endforeach


                        </ul>

                    </div>

                    <div class="comment-form inline-items ">

                        <div class="post__author author vcard inline-items">
                            <img src="{{ url('/')}}/upload_media/profile/profile/{{session()->get('u_profile')}}" alt="author">

                            <div class="form-group with-icon-right is-empty">
                                <textarea class="form-control" id="comment_txtboxpop{{ $post->post_id }}"
                                    placeholder=""></textarea>
                                <div class="add-options-message d-none">
                                    <a href="#" class="options-message" data-toggle="modal"
                                        data-target="#update-header-photo">
                                        <svg class="olymp-camera-icon">
                                            <use xlink:href="{{ url('/')}}/svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
                                        </svg>
                                    </a>
                                </div>
                                <span class="material-input"></span></div>
                        </div>

                        <button class="btn btn-md-2 btn-primary"
                            onclick="addcommentpop({{ $post->post_id }}); refcomm({{ $post->post_id }}); commcount({{ $post->post_id }});">Post
                            Comment</button>

                        <button
                            class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Window-popup Open Photo Popup V2 -->