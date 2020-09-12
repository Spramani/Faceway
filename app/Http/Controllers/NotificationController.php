<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NotificationModel;
use App\LoginregModel;
use DB;


class NotificationController extends Controller
{
    public function noti_ref_requst(){
        $userid = session()->get('u_id');

        $dataresult = DB::table('notification AS no')
                ->leftJoin('users AS u', 'u.u_id', '=', 'no.sender_id')
                ->where('user_id',$userid)
                ->where('notification_type',1)->orwhere('notification_type',2)
                ->orderBy('no.notification_created_date', 'desc')
                ->get();
        $data = json_decode(json_encode($dataresult), true);

        //echo "<pre>";
        //print_r($data);
        //dd($data);
       return view('content.noti_requst', compact('data'));
    }
    public function noti_normal_requst(){
        $userid = session()->get('u_id');
        $cuserid=array(
            $userid
        );
        $dataresult = DB::table('notification AS no')
                ->leftJoin('users AS u', 'u.u_id', '=', 'no.sender_id')
                ->leftJoin('post AS p','no.post_id','=','p.post_id')
                ->leftJoin('comment AS com','com.comment_id','=','no.comment_id')
                ->where('notification_type',3)->orwhere('notification_type',4)->orwhere('notification_type',5)
                ->where('no.sender_id','!=',$userid)
                ->where('no.user_id',$userid)
                ->orderBy('no.notification_created_date', 'desc')
                ->get();
        $data = json_decode(json_encode($dataresult), true);

        // echo "<pre>";
        // print_r($data);
        //dd($data);
       return view('content.noti_normal', compact('data'));
    }
    public function noti_ref_chat(){
        
        $userid=session()->get('u_id');
        $datas =DB::table('chat')
        // ->orderBy('chat_id','desc')
        ->select(DB::raw("(CASE WHEN sender_id = $userid THEN  receiver_id ELSE  sender_id END) AS final_id"))
        ->distinct()
        ->where('sender_id', $userid)
        ->orwhere('receiver_id', $userid)
        ->get();

        $data = json_decode(json_encode($datas), true);
        $data22 = new LoginregModel;
        $friend=$data22->whereIn('u_id',$data)->get();


        return view('content.chatuser',compact('friend'));
    }
}
