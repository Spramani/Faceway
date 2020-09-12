@extends('masterpages/homemaster')
@section('mainpart')
    

<!-- Your Account Personal Information -->

<div class="container">
        <div class="row">
            <div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Hobbies and Interests</h6>
                    </div>
                    <div class="ui-block-content">
    
                        
                        <!-- Form Hobbies and Interests -->
                        
                        <form>
                            <div class="row">
                                                      
                                    @foreach ($data as $item)
                        
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Hobbies</label>
                                        <textarea class="form-control" placeholder="" name="hobbiess" >{{ $item['hobbies'] }}</textarea>
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Favourite TV Shows</label>
                                        <textarea class="form-control" placeholder="" name="Favourite_TV_Shows"  >{{ $item['favourite_TV_Shows'] }}</textarea>
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Favourite movie </label>
                                        <textarea class="form-control" placeholder=""  name="Favourite_Movies" >{{ $item['favourite_Movies'] }}</textarea>
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Favourite Games</label>
                                        <textarea class="form-control" placeholder="" name="Favourite_Games">{{ $item['favourite_Games'] }}</textarea>
                                    </div>
                        
                                    <button class="btn btn-secondary btn-lg full-width">Cancel</button>
                                </div>
                        
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Favourite Music Bands / Artists</label>
                                        <textarea class="form-control" placeholder=""  name="Favourite_Music_Bands">{{ $item['favourite_Music_Bands_Artists'] }}</textarea>
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Favourite Books</label>
                                        <textarea class="form-control" placeholder="" name="Favourite_Books">{{ $item['favourite_Books'] }}</textarea>
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Favourite Writers</label>
                                        <textarea class="form-control" placeholder="" name="Favourite_Writers">{{ $item['favourite_Writers'] }}</textarea>
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Other Interests</label>
                                        <textarea class="form-control" placeholder="" name="Other_Interests">{{ $item['other_Interests'] }}</textarea>
                                    </div>
                        
                                    <span class="btn btn-primary btn-lg full-width"  onclick="hobbiesave({{ $item['h_id'] }})">Save all Changes</span>
                                </div>
                                @endforeach       
                            </div>
                              
                        </form>
                        
                        <!-- ... end Form Hobbies and Interests -->
    
                    </div>
                </div>
            </div>
    
            @include('content/profile_sidebar')
    
                     
    
    <!-- ... end Your Account Personal Information -->
    
    
    
    
    <!-- Window-popup-CHAT for responsive min-width: 768px -->
    
    <div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
    
        <div class="modal-content">
            <div class="modal-header">
                <span class="icon-status online"></span>
                <h6 class="title" >Chat</h6>
                <div class="more">
                    <svg class="olymp-three-dots-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                    <svg class="olymp-little-delete js-chat-open"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                </div>
            </div>
            <div class="modal-body">
                <div class="mCustomScrollbar">
                    <ul class="notification-list chat-message chat-message-field">
                        <li>
                            <div class="author-thumb">
                                <img src="{{url('/')}}/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>
    
                        <li>
                            <div class="author-thumb">
                                <img src="{{url('/')}}/img/author-page.jpg" alt="author" class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Don’t worry Mathilda!</span>
                                <span class="chat-message-item">I already bought everything</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
                            </div>
                        </li>
    
                        <li>
                            <div class="author-thumb">
                                <img src="{{url('/')}}/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>
                    </ul>
                </div>
    
                <form class="need-validation">
    
    
    
    <a class="back-to-top" href="javascript:void(0);">
        <img src="{{url('/')}}/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
    </a>
    

@endsection