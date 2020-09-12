@extends('masterpages/homemaster')
@section('mainpart')
 
@include('content/profileheader')


<!-- ... end Top Header-Profile -->

<div class="container">
	<div class="row">
		<div class="col col-xl-8 order-xl-2 col-lg-8 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
				<h6 class="title">Hobbies and Interests</h6>
					<a href="javascript:void(0);" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
				<div class="ui-block-content">
					<div class="row">
						<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
							
							<!-- W-Personal-Info -->
							
							<ul class="widget w-personal-info item-block">
								<li>
									<span class="title">HOBBIES:</span>
										
								<span class="text"  >{{ $hobbies->hobbies }}</span> 
								</li>
								<li>
									<span class="title">FAVOURITE TV SHOWS:</span>
									<span class="text">{{ $hobbies->favourite_TV_Shows }}</span>
								</li>
								<li>
									<span class="title">FAVOURITE MOVIES:</span>
									<span class="text">{{ $hobbies->favourite_Movies }}</span>
								</li>
								<li>
									<span class="title">FAVOURITE GAMES:</span>
									<span class="text">{{ $hobbies->favourite_Games }}</span>
								</li>
							</ul>
							
							<!-- ... end W-Personal-Info -->
						</div>
						<div class="col col-lg-6 col-md-6 col-sm-12 col-12">

							
							<!-- W-Personal-Info -->
							
							<ul class="widget w-personal-info item-block">
								<li>
									<span class="title">FAVOURITE MUSICBANDS / ARTISTS:</span>
									<span class="text">{{ $hobbies->favourite_Music_Bands_Artists }}</span>
								</li>
								<li>
									<span class="title">FAVOURITE BOOKS:</span>
									<span class="text">{{ $hobbies->favourite_Books }}</span>
								</li>
								<li>
									<span class="title">FAVOURITE WRITERS:</span>
									<span class="text">{{ $hobbies->favourite_Writers }}</span>
								</li>
								<li>
									<span class="title">OTHER INTERESTS:</span>
									<span class="text">{{ $hobbies->other_Interests }}</span>
								</li>
							</ul>
							
							<!-- ... end W-Personal-Info -->
						</div>
					</div>
				</div>
			</div>
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Education and Employement</h6>
					<a href="javascript:void(0);" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
				<div class="ui-block-content">
					<div class="row">
						<div class="col col-lg-6 col-md-6 col-sm-12 col-12">

							
							<!-- W-Personal-Info -->
							
							<ul class="widget w-personal-info item-block">
								<li>
									<span class="title">COLLEGE AND UNIVERSITY</span>
									<span class="text">{{ $education->college_university }}</span>
								</li>
								<li>
									<span class="title">COLLEGE JOINING DATE</span>
									<span class="text">{{ $education->college_joining_date }}</span>
								</li>
								<li>
									<span class="title">ADDRESS OF COLLEGE </span>								
									<span class="text">{{ $education->address_of_college }}</span>
								</li>
							</ul>
							
							<!-- ... end W-Personal-Info -->

						</div>
						<div class="col col-lg-6 col-md-6 col-sm-12 col-12">

							
							<!-- W-Personal-Info -->
							
							<ul class="widget w-personal-info item-block">
								<li>
									<span class="title">SECONDARY SCHOOL</span>								
									<span class="text">{{ $education->secondary_school }}</span>
								</li>
								<li>
									<span class="title">SCHOOL JOINING DATE</span>									
									<span class="text">{{ $education->school_joining_date }}</span>
								</li>
								<li>
									<span class="title">ADDRESS OF SCHOOL</span>							
									<span class="text">{{ $education->address_of_school }}</span>
								</li>
							</ul>
							
							<!-- ... end W-Personal-Info -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col col-xl-4 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Personal Info</h6>
					<a href="javascript:void(0);" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{url('/')}}/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
				<div class="ui-block-content">

					
					<!-- W-Personal-Info -->
					
					<ul class="widget w-personal-info">
						<li>
							<span class="title">ABOUT:</span>
							<span class="text">{{ $u->u_bio}}</span>
						</li>
						<li>
							<span class="title">BIRTHDAY:</span>
							<span class="text">{{ $u->u_dob}}</span>
						</li>
						<li>
							<span class="title">BIRTHPLACE:</span>
							<span class="text">{{ $u->u_birthplace}}</span>
						</li>
						<li>
							<span class="title">LIVES IN:</span>
							<span class="text">{{ $u->u_lives_in}}</span>
						</li>
						<li>
							<span class="title">OCCUPATION:</span>
							<span class="text">{{ $u->u_occupation}}</span>
						</li>
						<li>
							<span class="title">JOINED:</span>
							<span class="text">{{ $u->user_created_date}}</span>
						</li>
						<li>
							<span class="title">GENDER:</span>
							<span class="text">
								<?php 
									if( $u->u_gender == 1)
									{
										echo "male";
									}	
									elseif ($u->u_gender == 2) {
										echo "female";
									}
									elseif ($u->u_gender == 0) {
										echo "Not Specified";
									}
								?>
								</span>
						</li>
						<li>
							<span class="title">STATUS:</span>
							<span class="text">
									<?php 
									if( $u->u_status == 1)
									{
										echo "single";
									}	
									elseif ($u->u_status == 2) {
										echo "in a relationship";
									}
									elseif ($u->u_status == 3) {
										echo "Engaged";
									}
									elseif ($u->u_status == 4) {
										echo "married";
									}
									elseif ($u->u_status == 5) {
										echo "it's complicated";
									}
								?>
								</span>
						</li>
						<li>
							<span class="title">EMAIL:</span>
							<a href="javascript:void(0);" class="text">{{ $u->u_email}}</a>
						</li>
						<li>
							<span class="title">WEBSITE:</span>
							<a href="javascript:void(0);" class="text">{{ $u->u_website}}</a>
						</li>
						<li>
							<span class="title">PHONE NUMBER:</span>
							<span class="text">{{ $u->u_contact}}</span>
						</li>
						
					</ul>
					
					<!-- ... end W-Personal-Info -->
									</div>
			</div>
		</div>
	</div>
</div>


<!-- Window-popup Update Header Photo -->

@endsection