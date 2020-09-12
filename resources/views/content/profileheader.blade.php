
<!-- Top Header-Profile -->

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="top-header">
					<div class="top-header-thumb">
						<img src="{{url('/')}}/upload_media/profile/cover/{{$u->u_coverpic}}" alt="nature">
						{{-- {{url('/')}}/upload_media/profile/cover/{{$u->u_coverpic}} --}}
					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col col-lg-5 col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										<a href="{{ route('profile_view',[$u->u_id]) }}" class="active">Timeline</a>
									</li>
									<li>
										<a href="{{ route('about_view',[$u->u_id]) }}">About</a>
									</li>
									<li>
										<a href="{{ route('friends_view',[$u->u_id]) }}">Friends</a>
									</li>
								</ul>
							</div>
							<div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										<a href="{{ route('photo_view',[$u->u_id]) }}">Photos</a>
									</li>
									<li>
										<a href="{{ route('video_view',[$u->u_id]) }}">Videos</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="control-block-button">
							{{--  <a href="{{url('/')}}/35-YourAccount-FriendsRequests.html" class="btn btn-control bg-blue">
								<svg class="olymp-happy-face-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</a>  --}}
							@if ($u->u_id != session()->get('u_id'))
							<a href="{{route('chat_view_open',[$u->u_id])}}" class="btn btn-control bg-purple">
								<svg class="olymp-chat---messages-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
							</a>
							@endif
							@if ($u->u_id == session()->get('u_id'))
							<div class="btn btn-control bg-primary more">
								<svg class="olymp-settings-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-settings-icon"></use></svg>

								<ul class="more-dropdown more-with-triangle triangle-bottom-right">
									<li>
										<a href="#profile_pic" data-toggle="modal" data-target="#profile_pic">Update Profile Photo</a>
									</li>
									<li>
										<a href="#cover_pic" data-toggle="modal" data-target="#cover_pic">Update Cover Photo</a>
									</li>
									<li>
										<a href="{{ Route('profile_setting',[ session()->get('userid') ]) }}">Account Settings</a>
									</li>
								</ul>
							</div>
							@endif
						</div>
					</div>
					<div class="top-header-author">
						<a href="{{url('/')}}/02-ProfilePage.html" class="author-thumb">
						<img src="{{url('/')}}/upload_media/profile/profile/{{$u->u_profilepic}}" style="max-width: 100%" alt="author">
						</a>
						<div class="author-content">
							<a href="{{url('/')}}/02-ProfilePage.html" class="h4 author-name text-capitalize">{{$u->u_name}}</a>
							<div class="country">{{$u->u_name_id}}</div>
							
						</div>
					</div>
					<div class="friend_btn_box" id="friend_btn_box">
						@if ($u->u_id != session()->get('u_id'))
							@if ($fstatus['myf'])
								@if ($fstatus['hef'])
									<a href="javascript:void(0)" onclick="makeunfriend({{$u->u_id}})" class="btn btn-md-2 btn-primary friend_btn text-capitalize w-100">Following</a>
								@else
									@if($fstatus['sr'])
										<a href="javascript:void(0)" onclick="makefriend({{$u->u_id}})" class="btn btn-md-2 btn-primary friend_btn text-capitalize w-100">Requested</a>
									@else
										<a href="javascript:void(0)" onclick="makefriend({{$u->u_id}})" class="btn btn-md-2 btn-primary friend_btn text-capitalize w-100">FollowBack</a>
									@endif
								@endif
							@else
								@if ($fstatus['hef'])
									@if ($fstatus['rr'])
										<a href="javascript:void(0)"class="btn btn-md-2 btn-primary text-capitalize" onclick="acceptreq({{$u->u_id}})" style="width: 49%;">accept</a>
										<a href="javascript:void(0)"class="btn btn-md-2 btn-primary text-capitalize" style="width: 49%;">Delete</a>
										<a href="javascript:void(0)" onclick="makeunfriend({{$u->u_id}})" class="btn btn-md-2 btn-primary friend_btn text-capitalize w-100">Following</a>
									@else
										<a href="javascript:void(0)" onclick="makeunfriend({{$u->u_id}})" class="btn btn-md-2 btn-primary friend_btn text-capitalize w-100">Following</a>
									@endif
								@else
									@if ($fstatus['sr'])
										@if ($fstatus['rr'])
											<a href="javascript:void(0)"class="btn btn-md-2 btn-primary text-capitalize" onclick="acceptreq({{$u->u_id}})" style="width: 49%;">accept</a>
											<a href="javascript:void(0)"class="btn btn-md-2 btn-primary text-capitalize" style="width: 49%;">Delete</a>
											<a href="javascript:void(0)" onclick="makefriend({{$u->u_id}})" class="btn btn-md-2 btn-primary friend_btn text-capitalize w-100">Requested</a>
										@else
											<a href="javascript:void(0)" onclick="makefriend({{$u->u_id}})" class="btn btn-md-2 btn-primary friend_btn text-capitalize w-100">Requested</a>
										@endif
									@else
										@if ($fstatus['rr'])
											<a href="javascript:void(0)"class="btn btn-md-2 btn-primary text-capitalize" onclick="acceptreq({{$u->u_id}})" style="width: 49%;">accept</a>
											<a href="javascript:void(0)"class="btn btn-md-2 btn-primary text-capitalize" style="width: 49%;">Delete</a>
											<a href="javascript:void(0)" onclick="makefriend({{$u->u_id}})" class="btn btn-md-2 btn-primary friend_btn text-capitalize w-100">follow</a>
										@else
											<a href="javascript:void(0)" onclick="makefriend({{$u->u_id}})" class="btn btn-md-2 btn-primary friend_btn text-capitalize w-100">follow</a>
										@endif
									@endif
								@endif
							@endif
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Top Header-Profile -->
@section('popupbox')

<div id="mymodel">


</div>
<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="profile_pic" tabindex="-1" role="dialog" aria-labelledby="profile_pic"
aria-hidden="true">
<div class="modal-dialog window-popup update-header-photo" role="document">
	<div class="modal-content">
		<a href="javascript:void(0);" class="close icon-close" data-dismiss="modal" aria-label="Close">
			<svg class="olymp-close-icon">
				<use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-close-icon"></use>
			</svg>
		</a>

		<div class="modal-header">
			<h6 class="title">Update Header Photo</h6>
		</div>

		<div class=" modal-body" >
				<div class="container">
						<div class="panel panel-info">
						  <div class="panel-body">
					  
							<div class="row">
							  <div class="col-md-4 text-center">
							  <div id="upload-demo"></div>
							  </div>
							  <div class="col-md-4" style="padding:5%;">
							  <strong>Select image to crop:</strong>
							  <input type="file" id="image">
					  
							  <button class="btn btn-primary btn-block upload-image" id="upload-image" style="margin-top:2%">Upload Image</button>
							  </div>
					  
							  <div class="col-md-4">
							  <div id="preview-crop-image" style="background:#9d9d9d;width:300px;padding:50px 50px;height:300px;"></div>
							  </div>
							</div>
					  
						  </div>
						</div>
					  </div>
			
		</div>
	</div>
</div>
</div>

<!-- ... end Window-popup Update Header Photo -->

<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="cover_pic" tabindex="-1" role="dialog" aria-labelledby="cover_pic"
aria-hidden="true">
<div class="modal-dialog window-popup update-header-photo" role="document">
	<div class="modal-content">
		<a href="javascript:void(0);" class="close icon-close" data-dismiss="modal" aria-label="Close">
			<svg class="olymp-close-icon">
				<use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-close-icon"></use>
			</svg>
		</a>

		<div class="modal-header">
			<h6 class="title">Update Header Photo</h6>
		</div>

		<div class="modal-body">
				<div class="container">
					<div class="panel panel-info">
						<div class="panel-body">
					
						<div class="row">
							<div class="col-md-12 text-center">
							<div id="upload-democ"></div>
							</div>
							<div class="col-md-12" style="padding:2%;">
							<strong>Select image to crop:</strong>
							<input type="file" id="imagec">
					
							<button class="btn btn-primary btn-block upload-image" id="upload-imagec" style="margin-top:2%">Upload Image</button>
							</div>
					
							<div class="col-md-12 d-none">
							<div id="preview-crop-imagec" style="background:#9d9d9d;width:300px;padding:50px 50px;height:300px;"></div>
							</div>
						</div>
					
						</div>
					</div>
				</div>
			
		</div>
	</div>
</div>
</div>

<!-- ... end Window-popup Update Header Photo -->

@endsection
@section('script')
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
    
 
<script type="text/javascript">

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    
    
	var resize = $('#upload-demo').croppie({
        enableExif: true,
        enableOrientation: true,    
        viewport: { // Default { width: 100, height: 100, type: 'square' } 
            width: 200,
            height: 200,
            type: 'circle' //square
        },
        boundary: {
            width: 300,
            height: 300
        }
    });
    
    
    $('#image').on('change', function () { 
      var reader = new FileReader();
        reader.onload = function (e) {
          resize.croppie('bind',{
            url: e.target.result
          }).then(function(){
            console.log('jQuery bind complete');
          });
        }
        reader.readAsDataURL(this.files[0]);
    });
    
    
    $('#upload-image').on('click', function (ev) {
      resize.croppie('result', {
        type: 'canvas',
        size: 'viewport'
      }).then(function (img) {
        $.ajax({
          url: "{{route('croppie.upload-image')}}",
          type: "POST",
          data: {"image":img},
          success: function (data) {
            html = '<img src="' + img + '" />';
            $("#preview-crop-image").html(html);
          }
        });
      });
    });
	
	var resizec = $('#upload-democ').croppie({
        enableExif: true,
        enableOrientation: true,    
        viewport: { // Default { width: 100, height: 100, type: 'square' } 
            width: 1268,
            height: 422.66,
            type: 'square' //square
        },
        boundary: {
            width: 1270,
            height: 500
        }
    });
    
    
    $('#imagec').on('change', function () { 
      var reader = new FileReader();
        reader.onload = function (e) {
          resizec.croppie('bind',{
            url: e.target.result
          }).then(function(){
            console.log('jQuery bind complete');
          });
        }
        reader.readAsDataURL(this.files[0]);
    });
    
    
    $('#upload-imagec').on('click', function (ev) {
      resizec.croppie('result', {
        type: 'canvas',
        size: 'viewport'
      }).then(function (img) {
        $.ajax({
          url: "{{route('croppie.upload-imagec')}}",
          type: "POST",
          data: {"image":img},
          success: function (data) {
            html = '<img src="' + img + '" />';
            $("#preview-crop-imagec").html(html);
          }
        });
      });
	});
	$(function () {
		profile_ref_post({{$u->u_id}});
	});
	$(window).scroll(function() {
	if($(window).scrollTop() + $(window).height() >= $(document).height()) {
		var last_id = $(".last_post_block:last").attr("id");
		loadmoreprofile(last_id);
	}
});
    
    </script>
    
    @endsection