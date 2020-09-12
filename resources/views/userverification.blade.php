<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/Bootstrap/dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/Bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/Bootstrap/dist/css/bootstrap-grid.css">


    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/toastr.min.css">
    <!-- Main Styles CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/main.min.css">

    <!-- Main Font -->
    <script src="{{ url('/') }}/js/webfontloader.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });
    </script>

    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/fonts.min.css">

    <!-- costom Styles CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/coustomstyle.css">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-4 offset-4 ">
                <div class="ui-block">
                    <div class="ui-block-content" style="">
                        <div class="row">
                            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="top-header" style="height: 200px;">
                                    <div class="top-header-author">
                                        <a href="02-ProfilePage.html" class="author-thumb">
                                            <img src="{{ url('/') }}/upload_media/profile/profile/{{ $c->u_profilepic }}"
                                                style="max-height:100%" alt="author">
                                        </a>
                                        <div class="author-content">
                                            <a href="02-ProfilePage.html" class="h4 author-name">{{ $c->u_name}}</a>
                                            <div class="country">{{ $c->u_name_id}}</div>
                                        </div>
                                    </div>
                                </div>

                                <p id="emailHelp" class="form-text text-center  text-muted">We'll sent OTP on <br /><b id="email_text" class="text-primary">{{ $c->u_email }}</b></p>
                                <p class="text-center">
                                    <button class="btn btn-primary" onclick="sendotp({{ $c->u_id }});">Yes it's ME</button>

                                    <a href="{{ route('forgotpass_view') }}" class="btn btn-secondary">Not You?</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    ]

    <!-- JS Scripts -->
    <script src="{{ url('/') }}/js/jquery-3.2.1.js"></script>
    <script src="{{ url('/') }}/js/jquery.appear.js"></script>
    <script src="{{ url('/') }}/js/jquery.mousewheel.js"></script>
    <script src="{{ url('/') }}/js/perfect-scrollbar.js"></script>
    <script src="{{ url('/') }}/js/jquery.matchHeight.js"></script>
    <script src="{{ url('/') }}/js/svgxuse.js"></script>
    <script src="{{ url('/') }}/js/imagesloaded.pkgd.js"></script>
    <script src="{{ url('/') }}/js/Headroom.js"></script>
    <script src="{{ url('/') }}/js/velocity.js"></script>
    <script src="{{ url('/') }}/js/ScrollMagic.js"></script>
    <script src="{{ url('/') }}/js/jquery.waypoints.js"></script>
    <script src="{{ url('/') }}/js/jquery.countTo.js"></script>
    <script src="{{ url('/') }}/js/popper.min.js"></script>
    <script src="{{ url('/') }}/js/material.min.js"></script>
    <script src="{{ url('/') }}/js/bootstrap-select.js"></script>
    <script src="{{ url('/') }}/js/smooth-scroll.js"></script>
    <script src="{{ url('/') }}/js/selectize.js"></script>
    <script src="{{ url('/') }}/js/swiper.jquery.js"></script>
    <script src="{{ url('/') }}/js/moment.js"></script>
    <script src="{{ url('/') }}/js/daterangepicker.js"></script>
    <script src="{{ url('/') }}/js/simplecalendar.js"></script>
    <script src="{{ url('/') }}/js/fullcalendar.js"></script>
    <script src="{{ url('/') }}/js/isotope.pkgd.js"></script>
    <script src="{{ url('/') }}/js/ajax-pagination.js"></script>
    <script src="{{ url('/') }}/js/Chart.js"></script>
    <script src="{{ url('/') }}/js/chartjs-plugin-deferred.js"></script>
    <script src="{{ url('/') }}/js/circle-progress.js"></script>
    <script src="{{ url('/') }}/js/loader.js"></script>
    <script src="{{ url('/') }}/js/run-chart.js"></script>
    <script src="{{ url('/') }}/js/jquery.magnific-popup.js"></script>
    <script src="{{ url('/') }}/js/jquery.gifplayer.js"></script>
    <script src="{{ url('/') }}/js/mediaelement-and-player.js"></script>
    <script src="{{ url('/') }}/js/mediaelement-playlist-plugin.min.js"></script>
    <script src="{{ url('/') }}/js/sticky-sidebar.js"></script>

    <script src="{{ url('/') }}/js/base-init.js"></script>
    <script defer src="{{ url('/') }}/fonts/fontawesome-all.js"></script>

    <script src="{{ url('/') }}/Bootstrap/dist/js/bootstrap.bundle.js"></script>

    <script src="{{ url('/') }}/js/toastr.min.js"></script>
    <script src="{{ url('/') }}/js/customscript.js"></script>


</body>

</html>