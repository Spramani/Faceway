<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\LoginregModel;
use DB;



class ProfileSettingController extends Controller
{
    public function index($userid){

        $qry= new LoginregModel;
        $data = $qry->where('u_name_id',$userid)->get();
        return view('profile_setting',compact('data'));
    }
    public function profile_setting_save($id){
        $qry=LoginregModel::find($id);
        $qry->u_name=Input::get('full_name');
        $qry->u_bio=Input::get('u_bio'); 
        $qry->u_email=Input::get('u_email');
        $qry->u_contact=Input::get('u_contact');
        $qry->u_dob=Input::get('u_bod');
        $qry->u_birthplace=Input::get('u_birthplace');
        $qry->u_occupation=Input::get('u_occupation');   
        $qry->u_lives_in=Input::get('u_lives_in');
        $qry->u_website=Input::get('u_website');
        $qry->u_status=Input::get('u_status');
        $qry->u_is_privat=Input::get('uisprivat');
        $abc=$qry->save();
         
        if($abc){
            $stutas['msg']="Profile is Seved";
            $stutas['type']= 1;
        }
        else {
            return "no";
        }
        return $stutas;
        
    }

    public function notification_view(){
        return view('notification');
    }
    // public function firndrequst_view(){
    //     return view('notification');
    // }
   
    public function change_pass_view(){
        return view('changepassword');
    }
    public function request_view(){
        return view('friendrequest');
    }
    
    public function changepassword_save()
    {
        $current_password = Input::get('current_password');
        $new_password = Input::get('new_password');
        $confirm_new_password = Input::get('confirm_new_password');

        $userid = session()->get('u_id');
        $v = LoginregModel::find($userid);
        $oldpassword = $v->u_password;

        if ($oldpassword == $current_password) {
            if ($new_password != "") {
                if ($new_password == $confirm_new_password) {
                    
                    $v->u_password = $new_password;

                    $v->save();
                        $sts['typ'] = 1;
                        $sts['msg']= "password update successfully";
                } else {
                    $sts['typ']=0;
                    $sts['msg']= "both password are not same";
                }
            }else {
                $sts['typ']=0;
                $sts['msg']=  "new password is not be empty";
            }

        } else {
            $sts['typ']=0;
            $sts['msg']=  "current password are not same";
        }
        return $sts;

    }


    public function test($id){
        $qry2=new LoginregModel;
        //$data = $c->where('u_id',$id)->get();
        $qry = LoginregModel::find($id);
        $userid = $qry->u_name_id;
        $datafind = $qry2->where('u_name_id',$userid)->get()->count();
        dd($userid);
    }
}
