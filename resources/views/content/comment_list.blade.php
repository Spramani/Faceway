                            <?php
                                
                                $pcdata = $Commentdata->where('post_id',$post_id)->sortBydesc('comment_created_date'); 
                                 //dd($pcdata);
                            ?>
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
                                        <time class="published" >
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
                                                    onclick="comm_delete({{$onecomm->comment_id}},{{ $post_id }})">Delete
                                                    Comment</a>
                                            </li>

                                        </ul>
                                    </div> 
                                    @endif

                            </div>

                            <p>{{ $onecomm['comment_text'] }}</p>

                        <a href="javascript:void(0)" class="post-add-icon inline-items comm_like{{ $onecomm['comment_id'] }}" onclick="comm_like({{ $onecomm['comment_id'] }})">
                                <svg class="olymp-heart-icon">
                                    <use xlink:href="{{ url ('/') }}/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
                                </svg>
                                <?php $aa = 0;?>
                                <?php
                                    $aa=$comm_like->where('comment_id',$onecomm['comment_id'])->count();
                                ?>
                                <span>{{$aa}}</span>
                            </a>
                        </li>

                        @endforeach
