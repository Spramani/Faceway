@if ($u->u_id != session()->get('u_id'))
							@if ($fstatus['myf'])
								@if ($fstatus['hef'])
									<a href="javascript:void(0)" onclick="makeunfriend({{$u->u_id}})" class="btn btn-md-2 btn-primary friend_btn text-capitalize w-100">Following</a>
								@else
									@if($fstatus['sr'])
										<a href="javascript:void(0)" onclick="makefriend({{$u->u_id}})" class="btn btn-md-2 btn-primary friend_btn text-capitalize w-100">Requested</a>
									@else
										<a href="javascript:void(0)" onclick="makefriend({{$u->u_id}})" class="btn btn-md-2 btn-primary friend_btn text-capitalize w-100">Follow Back</a>
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