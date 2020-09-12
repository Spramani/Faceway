<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RelationshipModel;
use App\NotificationModel;
use App\FriendModel;
use App\LoginregModel;

class FriendController extends Controller
{
    public function makefriend( $searchid ){
        $userid=session()->get('u_id');
        $c=new RelationshipModel;
        $allrel=$c->where('sender_id',$userid)->where('receiver_id',$searchid)->get();

        $n= new NotificationModel;
        $allnoti=$n->where('user_id',$searchid)->where('sender_id',$userid)->get();
        if($allrel->count() > 0){
            foreach ($allrel as $onec) {
                $id = $onec->relationship_id;
                $dellike = RelationshipModel::find($id);
                $dellike->delete();

                $sts=0;
            }
            foreach ($allnoti as $onec) {
                $id = $onec->notification_id;
                $dellike = NotificationModel::find($id);
                $dellike->delete();

            }
        }else {
            $c->sender_id=$userid;
            $c->receiver_id=$searchid;
            $c->status=0;
            $sts=$c->save();

            $noti= new NotificationModel;
            $noti->user_id=$searchid;
            $noti->notification_type=1;
            $noti->sender_id=$userid;
            $noti->save();
        }
        echo $sts;
    }
    public function acceptreq( $searchid ){
        $userid = session()->get('u_id');



        $noti= new NotificationModel;
        $noti->where('sender_id',$searchid)->where('user_id',$userid)->delete();
        $noti= new NotificationModel;
        $noti->user_id=$searchid;
        $noti->notification_type=2;
        $noti->sender_id=$userid;
        $noti->save();

        $delrel = new RelationshipModel;
        $delrel->where('sender_id',$searchid)->where('receiver_id',$userid)->delete();

        $friend = new FriendModel;
        $friend->user_id=$userid;
        $friend->user_friend_id=$searchid;
        $friend->save();




        //return $sts;

    }
    public function makeunfriend($searchid){
        $userid=session()->get('u_id');
        $delfrind = new FriendModel;
        $deletef = $delfrind->where('user_id',$searchid)->where('user_friend_id',$userid)->delete();
        return $deletef;

    }
    public function ref_firend_btn_box($userid){
        $u=LoginregModel::find($userid);
        $cuserid = session()->get('u_id');
        $f= new RelationshipModel;
        $fstatus['sr']=$fsdata=$f->where('sender_id',$cuserid)->where('receiver_id',$userid)->count();
        $fstatus['rr']=$frdata=$f->where('sender_id',$userid)->where('receiver_id',$cuserid)->count();

        $chf = new FriendModel;
        $fstatus['myf']=$chfdata=$chf->where('user_id',$cuserid)->where('user_friend_id',$userid)->count();
        $fstatus['hef']=$chfdata1=$chf->where('user_id',$userid)->where('user_friend_id',$cuserid)->count();
        return view('content.friend_btn_box',compact('fstatus','u'));
    }

}
