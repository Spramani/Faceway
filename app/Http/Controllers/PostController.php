<?php

namespace App\Http\Controllers;

use App\CommentLikeModel;
use App\CommentModel;
use App\LoginregModel;
use App\PostLikeModel;
use App\PostModel;
use App\NotificationModel;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Input;
use Validator;

class PostController extends Controller
{
    public function post_text(Request $request)
    {
        $post_text = Input::get('post_text');
        $u_id = session()->get('u_id');

        if ($post_text == "" || $post_text == " ") {
            $sts['msg'] = "Post conntant is not be empty !! :)";
            $sts['typ'] = 0;
        } else {
            $c = new PostModel;
            $c->user_id = $u_id;
            $c->post_type = 0;
            $c->decription = $post_text;
            $c->save();
            $sts['msg'] = "";
            $sts['typ'] = 1;
        }
        return $sts;
    }
    public function post_photo(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'photo_input' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
           
        ]);
        if ($validation->passes()) {
            $image = $request->file('photo_input');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_media\post\img'), $new_name);

            $u_id = session()->get('u_id');
            $post_text = Input::get('post_txt_box_photo');
            $c = new PostModel;
            $c->user_id = $u_id;
            $c->post_type = 1;
            $c->decription = $post_text;
            $c->media_path = $new_name;
            $c->save();

            return response()->json([
                'name' => $c,
            ]);
        } else {
            return response()->json([
                'name' => $validation->errors()->all(),
            ]);
        }

    }
    public function post_video(Request $request)
    {
        

        $validation = Validator::make($request->all(), [
            'video_input' => 'required | mimes:mp4,webm,ogg | max:1468006',
           
        ]);
        if ($validation->passes()) {

            ini_set('memory_limit','256M');
            $image = $request->file('video_input');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_media\post\video'), $new_name);

            $u_id = session()->get('u_id');
            $post_text = Input::get('post_txt_box_video');
            $c = new PostModel;
            $c->user_id = $u_id;
            $c->post_type = 2;
            $c->decription = $post_text;
            $c->media_path = $new_name;
            $c->save();

            return response()->json([
                'name' => ''
            ]);
        } else {
            return response()->json([
                'name' => $validation->errors()->all()
            ]);
        }

    }
    public function post_delete($post_id)
    {
        $delpost = PostModel::find($post_id);
        $media_typ = $delpost->post_type;
        $media = $delpost->media_path;
        $delpost->delete();
        if($media_typ == 1){
            if(file_exists(public_path('upload_media/post/img/'.$media))){
                unlink(public_path('upload_media/post/img/'.$media));
               
            }
        }elseif($media_typ == 2){
            if(file_exists(public_path('upload_media/post/video/'.$media))){
                unlink(public_path('upload_media/post/video/'.$media));
                
            }
        }
        else {
            # code...
        }
    }
    public function load_more_home($lastid){
        $userid = session()->get('u_id');
        $dataresult =DB::table('post AS po')
        ->leftJoin('users AS u', 'u.u_id', '=', 'po.user_id')
        ->whereIn('po.user_id', function($query) use ($userid)
        {
            $query->select(DB::raw('user_friend_id'))
                  ->from('friend')
                  ->whereRaw("friend.user_id = $userid");
        })
        ->orwhere('po.user_id',$userid)
        ->orderBy('po.post_created_date', 'desc')
        ->where('po.post_id','<',$lastid)
        ->limit(5)
        ->get();
        $data = json_decode(json_encode($dataresult), true);

        $likecount = PostLikeModel::all();
        $comment = CommentModel::all();
        
        return view('content/post_view', compact('data', 'likecount', 'comment'));
    }
    
    public function load_more_profile($lastid){
        $userid = session()->get('u_id');
        $dataresult = DB::table('post AS po')
        ->leftJoin('users AS u', 'u.u_id', '=', 'po.user_id')
        ->where('po.post_id','<',$lastid)
        ->orwhere('po.user_id',$userid)
        ->orderBy('po.post_created_date', 'desc')
        ->limit(5)
        ->get();
    $data = json_decode(json_encode($dataresult), true);

        $likecount = PostLikeModel::all();
        $comment = CommentModel::all();
        
        return view('content/post_view', compact('data', 'likecount', 'comment'));
    }
    public function ref_post()
    {   
        $userid = session()->get('u_id');
        $dataresult =DB::table('post AS po')
        ->whereIn('po.user_id', function($query) use ($userid)
        {
            $query->select(DB::raw('user_friend_id'))
                  ->from('friend')
                  ->whereRaw("friend.user_id = $userid");
        })
        ->orwhere('po.user_id',$userid)
        ->leftJoin('users AS u', 'u.u_id', '=', 'po.user_id')
        ->orderBy('po.post_created_date', 'desc')
        ->limit(5)
        ->get();
        $data = json_decode(json_encode($dataresult), true);

        $likecount = PostLikeModel::all();
        $comment = CommentModel::all();

        //  echo "<pre>";
        //  echo $likedpost[1]['post_id'];
          //dd($data);

        return view('content/post_view', compact('data', 'likecount', 'comment'));
    }
    public function profile_ref_post($user_id)
    {
        $dataresult = DB::table('post AS po')
            ->leftJoin('users AS u', 'u.u_id', '=', 'po.user_id')
            ->where('po.user_id',$user_id)
            ->orderBy('po.post_created_date', 'desc')
            ->limit(5)
            ->get();
        $data = json_decode(json_encode($dataresult), true);

        $likecount = PostLikeModel::all();
        $comment = CommentModel::all();

        //  echo "<pre>";
        //  echo $likedpost[1]['post_id'];
        //  dd($likecount);

        return view('content/post_view', compact('data', 'likecount', 'comment'));
    }
    public function postlike($postid)
    {
        $u_id = session()->get('u_id');
        // $userfind= new LoginregModel;
        // $userfinddata = $userfind->where('u_name_id' , $userid)->get();
        // $u_id = $userfinddata[0]['u_id'];
        $clike = new PostLikeModel;
        $checklike = $clike->where('post_id', $postid)->where('user_id', $u_id)->get()->count();
        if ($checklike > 0) {
            $like = $clike->where('post_id', $postid)->where('user_id', $u_id)->get();
            foreach ($like as $row) {
                $id = $row->post_like_id;
                $dellike = PostLikeModel::find($id);
                $dellike->delete();
                $result['type'] = 0;
            }
        } else {
            $postlike = new PostLikeModel;
            $postlike->post_id = $postid;
            $postlike->user_id = $u_id;
            $postlike->save();

            $post = new PostModel;
            $post1=$post->where('post_id',$postid)->get();
            $postuser=$post1[0]->user_id;
            if ($postuser != $u_id) {
                $noti_like = new NotificationModel;
                $noti_like->user_id=$postuser;
                $noti_like->notification_type=3;
                $noti_like->sender_id=$u_id;
                $noti_like->post_id=$postid;
                $noti_like->save();
            }
            
            


            $result['type'] = 1;
        }
        return $result;
    }

    public function addcomment($post_id)
    {
        $text = Input::get('comment_text');
        $user_id = session()->get('u_id');
        $addcomment = new CommentModel;
        $addcomment->post_id = $post_id;
        $addcomment->user_id = $user_id;
        $addcomment->comment_text = $text;
        $addcomment->save();
        $com_id = $addcomment->comment_id;
        

        $post_user = PostModel::find($post_id);
        if ($post_user->user_id != $user_id) {
            $comm_noti = new NotificationModel;
            $comm_noti->user_id=$post_user->user_id;
            $comm_noti->notification_type = 4;
            $comm_noti->sender_id = $user_id;
            $comm_noti->post_id = $post_id;
            $comm_noti->comment_id = $com_id;
            //dd($comm_noti);
            $comm_noti->save();
        }
        
         


        //return $report;
    }
    public function comm_delete($comm_id)
    {

        $delpost = CommentModel::find($comm_id);
        
       //dd($delpost->user_id);
        $delpost->delete();
    }

    public function view_post($post_id)
    {
        $post = PostModel::find($post_id);
        $postuser = new LoginregModel;
        $postuserdata = $postuser->where('u_id', $post->user_id)->get();

        $likecount = PostLikeModel::all();
        $Commentdata = CommentModel::all();
        $alluser = LoginregModel::all();
        $comm_like = CommentLikeModel::all();

        return view('content/postmodel', compact('post', 'postuserdata', 'likecount', 'Commentdata', 'alluser', 'comm_like'));
    }

    public function view_comm($post_id)
    {
        $Commentdata = CommentModel::all();
        $alluser = LoginregModel::all();
        $comm_like = CommentLikeModel::all();
        return view('content/comment_list', compact('post_id', 'Commentdata', 'alluser', 'comm_like'));
    }
    public function comm_count($post_id)
    {

        $comm_cout = CommentModel::where('post_id', $post_id)->count();
        return $comm_cout;
    }
    public function comm_like($comm_id)
    {

        $u_id = session()->get('u_id');

        $clike = new CommentLikeModel;
        $checklike = $clike->where('comment_id', $comm_id)->where('user_id', $u_id)->get()->count();

        if ($checklike > 0) {
            $like = $clike->where('comment_id', $comm_id)->where('user_id', $u_id)->get();
            foreach ($like as $row) {
                $id = $row->comment_like_id;
                $dellike = CommentLikeModel::find($id);
                $dellike->delete();
                $result['type'] = 0;
            }
        } else {
            $postlike = new CommentLikeModel;
            $postlike->comment_id = $comm_id;
            $postlike->user_id = $u_id;
            $postlike->save();
            $result['type'] = 1;


            $comm_user = CommentModel::find($comm_id);
            if ($comm_user->user_id != $u_id) {
                $comm_noti = new NotificationModel;
                $comm_noti->user_id=$comm_user->user_id;
                $comm_noti->notification_type = 5;
                $comm_noti->sender_id = $u_id;
                $comm_noti->comment_id = $comm_id;
                $comm_noti->save();
            }
           
        }
        return $result;

    }
    public function testdata(){
            $userid = session()->get('u_id');
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
            $data33=$data22->whereIn('u_id',$data)->get();
            
            // $data44=$data33->where('u_id',15)->get();
            $count = 0;
            foreach ($data33 as $key) {
                if ($key['u_id'] == 18) {
                    $count += 1;
                }
            }
            if($count > 0){
                        echo $count;
            }

            
            dd($data33);
    }
}
