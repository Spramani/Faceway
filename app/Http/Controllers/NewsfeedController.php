<?php

namespace App\Http\Controllers;

use App\CommentModel;
use App\LoginregModel;
use App\PostLikeModel;
use App\HobbiesModel;
use App\EducationModel;
use App\PostModel;
use App\FriendModel;
use DB;
use Illuminate\Support\facades\Input;

class NewsfeedController extends Controller
{
    public function searchfriend()
    {
        $stxt = input::get('searchtxt');

        $u = new LoginregModel;
        $user = $u->where('u_name', 'like', '%'.$stxt.'%')->get();
        // ->where('u_name_id','like','%'.$stxt.'%')
        if($user == null){

        }else {
          return view('content/search_list', compact('user')); 
        }
    }
    public function homeload()
    {

        if (session()->has('u_id')) {
            $userid = session()->get('u_id');
            //select * from post where  user_id=1  or user_id in (select user_friend_id from friend where user_id=1)

            $dataresult = DB::table('post AS po')
                ->whereIn('po.user_id', function($query) use ($userid)
                {
                    $query->select(DB::raw('user_friend_id'))
                          ->from('friend')
                          ->whereRaw("friend.user_id = $userid");
                })
                ->orwhere('po.user_id',$userid)
                ->get();
            $data = json_decode(json_encode($dataresult), true);

            // $dataresult = DB::table('post AS po')
            //     ->leftJoin('users AS u', 'u.u_id', '=', 'po.user_id')
            //     ->orderBy('po.post_created_date', 'desc')
            //     ->get();
            // $data = json_decode(json_encode($dataresult), true);

            $likecount = PostLikeModel::all();
            $comment = CommentModel::all();

            $curant_user = LoginregModel::find($userid);
            $h = new HobbiesModel;
            $hh = $h->where('user_id',$userid)->get();
            $hobbies = $hh[0];

            $e = new EducationModel;
            $ee = $e->where('user_id',$userid)->get();
            $edu = $ee[0];

            $p = new PostModel;
            $vposts = $p->where('user_id',$userid)->where('post_type',2)->orderBy('post_created_date', 'DESC')->limit(2)->get();

            
            $pposts = $p->where('user_id',$userid)->where('post_type',1)->orderBy('post_created_date', 'DESC')->limit(12)->get();

            $f=new FriendModel;
            $ff=$f->where('user_id',$userid)->get();
            
            //$allusers=LoginregModel::all();
            $friends = DB::table('users AS u')
                        ->leftJoin('friend AS f','u.u_id','=','f.user_friend_id')->where('f.user_id',$userid)->get();
            $friends = json_decode(json_encode($friends), true);
            //  echo "<pre>";
            //  echo $likedpost[1]['post_id'];
            //  dd($likecount);

            return view('newsfeed', compact('data', 'likecount', 'comment','curant_user','hobbies','edu','vposts','pposts','friends','ff'));

        } else {

            return redirect('loginreg');

        }

    }

    public static function time_ago_in_php($timestamp)
    {

        date_default_timezone_set("Asia/Kolkata");
        $time_ago = strtotime($timestamp);
        $current_time = time();
        $time_difference = $current_time - $time_ago;
        $seconds = $time_difference;

        $minutes = round($seconds / 60); // value 60 is seconds
        $hours = round($seconds / 3600); //value 3600 is 60 minutes * 60 sec
        $days = round($seconds / 86400); //86400 = 24 * 60 * 60;
        $weeks = round($seconds / 604800); // 7*24*60*60;
        $months = round($seconds / 2629440); //((365+365+365+365+366)/5/12)*24*60*60
        $years = round($seconds / 31553280); //(365+365+365+365+366)/5 * 24 * 60 * 60

        if ($seconds <= 60) {

            return "Just Now";

        } else if ($minutes <= 60) {

            if ($minutes == 1) {

                return "one minute ago";

            } else {

                return "$minutes minutes ago";

            }

        } else if ($hours <= 24) {

            if ($hours == 1) {

                return "an hour ago";

            } else {

                return "$hours hrs ago";

            }

        } else if ($days <= 7) {

            if ($days == 1) {

                return "yesterday";

            } else {

                return "$days days ago";

            }

        } else if ($weeks <= 4.3) {

            if ($weeks == 1) {

                return "a week ago";

            } else {

                return "$weeks weeks ago";

            }

        } else if ($months <= 12) {

            if ($months == 1) {

                return "a month ago";

            } else {

                return "$months months ago";

            }

        } else {

            if ($years == 1) {

                return "one year ago";

            } else {

                return "$years years ago";

            }
        }
    }
}
