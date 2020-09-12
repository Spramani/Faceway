<div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12  responsive-display-none">
    <div class="ui-block">



        <!-- Your Profile  -->

        <div class="your-profile">
            <div class="ui-block-title ui-block-title-small">
                <h6 class="title">Your PROFILE</h6>
            </div>

            <div id="accordion" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <h6 class="mb-0">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                Profile Settings
                                <svg class="olymp-dropdown-arrow-icon">
                                    <use xlink:href="{{ url('/') }}/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use>
                                </svg>
                            </a>
                        </h6>
                    </div>

                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <ul class="your-profile-menu">
                            <li>
                                <a href="{{ Route('profile_setting',[session()->get('userid')]) }}">Personal
                                    Information</a>
                            </li>
                            <li>
                                <a href="{{ route('change_pass_view') }}">Change Password</a>
                            </li>
                            <li>
                                <a href="{{ route('hobbies_view') }}">Hobbies and Interests</a>
                            </li>
                            <li>
                                <a href="{{ route('education_view') }}">Education and Employement</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="ui-block-title">
                <a href="{{ route('notification_view') }}" class="h6 title">Notifications</a>
                
            </div>
            <div class="ui-block-title">
                <a href="{{ route('chat_view') }}" class="h6 title">Chat / Messages</a>
            </div>
            <div class="ui-block-title">
                <a href="{{ route('request_view') }}" class="h6 title">Friend Requests</a>
                
            </div>
            {{-- <div class="ui-block-title ui-block-title-small">
                <h6 class="title">FAVOURITE PAGE</h6>
            </div>
            <div class="ui-block-title">
                <a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Create Fav Page</a>
            </div>
            <div class="ui-block-title">
                <a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Fav Page Settings</a>
            </div>
        </div> --}}

            <!-- ... end Your Profile  -->


        </div>
    </div>
</div>
</div>

<!-- ... end Your Account Personal Information -->