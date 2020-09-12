<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FriendModel;
use App\LoginregModel;
use Illuminate\Support\Facades\Input;
use DB;
use App\ChatModel;

class ChatController extends Controller
{
    public function chat_view(){
        $userid=session()->get('u_id');
        // $datas =DB::table('friend as f')
        // ->leftJoin('users as u','u.u_id', '=', 'f.user_friend_id')
        // ->where('f.user_id',$userid)
        // ->get();
        // $friend = json_decode(json_encode($datas), true);
        //dd($datas);
        //select * from post where  user_id=1  or user_id in (select user_friend_id from friend where user_id=1)

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


        return view('chat',compact('friend'));
    }

    public function chat_view_open($cfid){
        $userid=session()->get('u_id');
        $datas =DB::table('chat')
        ->select(DB::raw("(CASE WHEN sender_id = $userid THEN  receiver_id ELSE  sender_id END) AS final_id"))
        ->distinct()
        ->where('sender_id', $userid)
        ->orwhere('receiver_id', $userid)
        ->get();

        $data = json_decode(json_encode($datas), true);
        $data22 = new LoginregModel;
        $friend=$data22->whereIn('u_id',$data)->get();
        //dd($datas);

        $count = 0;
        foreach ($friend as $key) {
            if ($key['u_id'] == $cfid) {
                $count = $count + 1;
            }
        }
        if($count != 0){
            //echo $count."nitin";
            return view('chat',compact('friend'));
        }else{
            
            //echo $count."radha";
            $newfriend = LoginregModel::find($cfid);
            return view('chat',compact('friend','newfriend'));
        }



    }
    public function openchat($cfid){
        
        $userid=session()->get('u_id');

        $datas =DB::table('chat as c')
        ->leftJoin('users as u','u.u_id', '=', 'c.sender_id')
        ->where('c.receiver_id',$userid)->where('c.sender_id',$cfid)
        ->orwhere('c.sender_id',$userid)->where('c.receiver_id',$cfid)
        ->orderBy('c.chat_created_date')
        ->get();
        
        $chat = json_decode(json_encode($datas), true);

        $cuser = LoginregModel::find($cfid);

        
        $rdata['cuser_id'] = $cfid;
        $rdata['cuser'] = $cuser->u_name;
        $rdata['chatlist'] = view('content.chatlist',compact('chat'))->__toString();
        
        //dd($rdata);

        return $rdata;
    }
    public function loadchat($cfid){
        $lastchat = Input::get('lastchat');
        $userid=session()->get('u_id');
        //echo $lastchat;
        $datas =DB::table('chat as c')
        ->leftJoin('users as u','u.u_id', '=', 'c.sender_id')
        ->where(function ($query) use ($userid , $cfid ,$lastchat) {
            $query->where('c.receiver_id', $userid)
                ->where('c.sender_id', $cfid)
                ->where('c.chat_id','>',$lastchat);

        })
        ->orwhere(function ($query) use ($userid , $cfid,$lastchat) {
            $query->where('c.sender_id', $userid)
                ->where('c.receiver_id', $cfid)
                ->where('c.chat_id','>',$lastchat);
        })
        ->orderBy('c.chat_id')
        ->get();
        
        $chat = json_decode(json_encode($datas), true);
        //dd($chat);
        $cuser = LoginregModel::find($cfid);
        
        
        $rdata['cuser_id'] = $cfid;
        $rdata['cuser'] = $cuser->u_name;
        $rdata['chatlist'] = view('content.chatlist',compact('chat'))->__toString();
        return $rdata;
    }
    public function sendchat($cfid){
        
        $userid=session()->get('u_id');

        $chat_text = Input::get('chat_text');

        $cin = new ChatModel;
        $cin->sender_id = $userid;
        $cin->receiver_id = $cfid;
        $cin->chat_type = 1;
        $cin->massage = $chat_text;
        $cin->save();


        //return $chat_text;
    }
}
