<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\LoginregModel;
use App\EducationModel;
use App\HobbiesModel;
use App\PostLikeModel;
use App\PostModel;
use App\RelationshipModel;
use App\FriendModel;
use DB;

class ProfileController extends Controller
{
    
    public function about_view($userid){
        
        $u=LoginregModel::find($userid);

        $e=new EducationModel;
        $edu=$e->where('user_id',$userid)->get();
        
        $education = $edu[0];

        $h= new HobbiesModel;
        $ho = $h->where('user_id',$userid)->get();
        $hobbies = $ho[0];
        
        
        $cuserid = session()->get('u_id');
        $f= new RelationshipModel;
        $fstatus['sr']=$fsdata=$f->where('sender_id',$cuserid)->where('receiver_id',$userid)->count();
        $fstatus['rr']=$frdata=$f->where('sender_id',$userid)->where('receiver_id',$cuserid)->count();

        $chf = new FriendModel;
        $fstatus['myf']=$chfdata=$chf->where('user_id',$cuserid)->where('user_friend_id',$userid)->count();
        $fstatus['hef']=$chfdata1=$chf->where('user_id',$userid)->where('user_friend_id',$cuserid)->count();

        return view('profileabout',compact('u','education','hobbies','fstatus'));
        
    }

    public function timeline_view($userid){
        $u=LoginregModel::find($userid);

        $e=new EducationModel;
        $edu=$e->where('user_id',$userid)->get();
        $education = $edu[0];

        $c = new PostModel;
        $data = $c->where('user_id', $userid)->where('post_type',1)->orderBy('post_created_date', 'DESC')->limit(8)->get();
        
        $d = new PostModel;
        $datas = $d->where('user_id', $userid)->where('post_type',2)->orderBy('post_created_date', 'DESC')->limit(2)->get();

        $h= new HobbiesModel;
        $ho = $h->where('user_id',$userid)->get();
        $hobbies = $ho[0];


        $cuserid = session()->get('u_id');
        $f= new RelationshipModel;
        $fstatus['sr']=$fsdata=$f->where('sender_id',$cuserid)->where('receiver_id',$userid)->count();
        $fstatus['rr']=$frdata=$f->where('sender_id',$userid)->where('receiver_id',$cuserid)->count();

        $chf = new FriendModel;
        $fstatus['myf']=$chfdata=$chf->where('user_id',$cuserid)->where('user_friend_id',$userid)->count();
        $fstatus['hef']=$chfdata1=$chf->where('user_id',$userid)->where('user_friend_id',$cuserid)->count();

        $friends = DB::table('users AS u')
                        ->leftJoin('friend AS f','u.u_id','=','f.user_friend_id')->where('f.user_id',$userid)->get();
            $friends = json_decode(json_encode($friends), true);


        //echo $fdata1;
        // dd($fstatus);
        return view('profile',compact('u','education','hobbies','data','datas','fstatus','friends'));
        

    }
    public function photo_view($userid)
    {
        $u=LoginregModel::find($userid);

        $c = new PostModel;
        $data = $c->where('user_id', $userid)->where('post_type',1)->get();
        
        $a =  PostlikeModel::all();

        $cuserid = session()->get('u_id');
        $f= new RelationshipModel;
        $fstatus['sr']=$fsdata=$f->where('sender_id',$cuserid)->where('receiver_id',$userid)->count();
        $fstatus['rr']=$frdata=$f->where('sender_id',$userid)->where('receiver_id',$cuserid)->count();

        $chf = new FriendModel;
        $fstatus['myf']=$chfdata=$chf->where('user_id',$cuserid)->where('user_friend_id',$userid)->count();
        $fstatus['hef']=$chfdata1=$chf->where('user_id',$userid)->where('user_friend_id',$cuserid)->count();

        return view('profilephotos', compact('data','a','u','fstatus'));
    }

    
    public function video_view($userid)
    {
        $u=LoginregModel::find($userid);

        $d = new PostModel;
        $datas = $d->where('user_id', $userid)->where('post_type',2)->get();
        $cuserid = session()->get('u_id');
        $f= new RelationshipModel;
        $fstatus['sr']=$fsdata=$f->where('sender_id',$cuserid)->where('receiver_id',$userid)->count();
        $fstatus['rr']=$frdata=$f->where('sender_id',$userid)->where('receiver_id',$cuserid)->count();

        $chf = new FriendModel;
        $fstatus['myf']=$chfdata=$chf->where('user_id',$cuserid)->where('user_friend_id',$userid)->count();
        $fstatus['hef']=$chfdata1=$chf->where('user_id',$userid)->where('user_friend_id',$cuserid)->count();
        return view('profilevideos', compact('datas','u','fstatus'));
    }

    public function friends_view($userid)
    {
        $cuserid = session()->get('u_id');
        $u=LoginregModel::find($userid);

        //$users = LoginregModel::all();
        //$datas = $d->where('user_id', $userid)->where('post_type',2)->get();
        
            $user = DB::table('friend AS f')
                ->leftJoin('users AS u', 'u.u_id', '=', 'f.user_friend_id')
                ->where('f.user_id',$cuserid)
                ->get();
            $users = json_decode(json_encode($user), true);

            $uposts = PostModel::all();
            $ff=FriendModel::all();
            //dd($users);
            
            $f= new RelationshipModel;
            $fstatus['sr']=$fsdata=$f->where('sender_id',$cuserid)->where('receiver_id',$userid)->count();
            $fstatus['rr']=$frdata=$f->where('sender_id',$userid)->where('receiver_id',$cuserid)->count();
    
            $chf = new FriendModel;
            $fstatus['myf']=$chfdata=$chf->where('user_id',$cuserid)->where('user_friend_id',$userid)->count();
            $fstatus['hef']=$chfdata1=$chf->where('user_id',$userid)->where('user_friend_id',$cuserid)->count();

        return view('profilefriends', compact('users','uposts','u','fstatus','ff'));
    }

    

    public function imageCrop(){
        return view('temp');
    }
    public function imageCropPost(Request $request)
    {
        $data = $request->image;


        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);


        $data1 = base64_decode($data);
        $image_name= time().'.png';
        $path = public_path() . "/upload_media/profile/profile/" . $image_name;

        // $image->move(public_path('upload_media\profile\profile'), $image_name);
         file_put_contents($path, $data1);

         $userid=session()->get('u_id');
         $c = LoginregModel::find($userid);
         if ($c->u_profilepic != "default.png") {

            if(file_exists(public_path('upload_media/profile/profile/'.$c->u_profilepic))){
                unlink(public_path('upload_media/profile/profile/'.$c->u_profilepic));
                
            }
         }
        
         $c->u_profilepic = $image_name;
         
        session()->put('u_profile',$image_name);
         $c->save();


        return response()->json(['success'=>'done']);
    }
    
    public function imageCropPostc(Request $request)
    {
        $data = $request->image;


        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);


        $data1 = base64_decode($data);
        $image_name= time().'.png';
        $path = public_path() . "/upload_media/profile/cover/" . $image_name;

        // $image->move(public_path('upload_media\profile\profile'), $image_name);
        file_put_contents($path, $data1);

        $userid=session()->get('u_id');
        $c = LoginregModel::find($userid);
        if ($c->u_profilepic != "default.png") {
            if(file_exists(public_path('upload_media/profile/cover/'.$c->u_coverpic))){
                unlink(public_path('upload_media/profile/cover/'.$c->u_coverpic));
                
            }
        }

        $c->u_coverpic = $image_name;
        $c->save();


        return response()->json(['success'=>'done']);
    }
}