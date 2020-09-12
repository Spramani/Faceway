<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;
use App\LoginregModel;
use App\OTPModel;
use Mail;

class OtpsystemController extends Controller
{
    public function forgotpass_view(){
        return view('forgetpassword');
    }
    public function emailverification(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => 'required',
        ]);
        if ($validation->passes()) {

            $email = input::get('email');
            $c = new LoginregModel;
            $all=$c->where ('u_name_id',$email)->get();
               
            if ($all->count() > 0) {
            
                $sts['msg'] = route('userverification',[$all[0]->u_id]);
                $sts['typ'] = 1;
            } else {
                $sts['msg'] = "email is not registred";
                $sts['typ'] = 0; 
            }
            

         } else {
            $sts['msg'] = $validation->errors()->all();
            $sts['typ'] = 0; 
        }
        return $sts;
    }
    public function userverification($userid){
        $c =  LoginregModel::find($userid);

        return view('userverification',compact('c'));


        
    }
    public function sendotp(){
        
        $email = input::get('email');
        $userid = input::get('userid');
        
        $otp=rand(1000,9999);

        $c= new OTPModel;
        $chotp=$c->where('user_id',$userid)->get();
         
        if($chotp->count() > 0){
            foreach ($chotp as $oneotp) {
                $d= OTPModel::find($oneotp->o_id);
                $d->delete();
            }
        }
        
        $c->user_id=$userid;
        $c->otp_code=$otp;
        $c->save();

        $data = array(
            'OTP'=>$otp
        );
        Mail::send('mail', $data, function($message) use ($email) {
                 
            $message->to( $email , 'Tutorials Point')->subject
                ('Laravel HTML Testing Mail');
            $message->from('xyz@gmail.com','Faceway');
        });
        
            
            $sts['msg'] = route('newpass',[$userid]);
            $sts['typ'] = 1;
            // return route('newpass',[$userid]);
            return $sts;
    }
    public function newpass($id){
        return view('newpass',compact('id'));
    }
    public function checkotp(){
        $otpcode = input::get('otpcode');
        $userid = input::get('userid');
        $c= new OTPModel;
        $chotp=$c->where('user_id',$userid)->where('otp_code',$otpcode)->get();

        if ($chotp->count() > 0){
            $sts['msg'] = 1;
            $sts['typ'] = 1;
        }else {
            $sts['msg'] = "OTP Code is not match ";
            $sts['typ'] = 0;
        }
        return $sts;
    }
    public function setpass(){
        $newpass = input::get('newpass');
        $newcpass = input::get('newcpass');
        $userid = input::get('userid');
        // return $userid;
        if($newpass != "" && $newcpass != ""){
            if ($newpass == $newcpass) {
                
                $c= LoginregModel::find($userid);
                $c->u_password=$newpass;
                $sts['typ']=$c->save();
                $sts['msg']=route('start');
            }else {
                $sts['msg']="password is not matched ";
                $sts['typ']=0;
            }
        }else{
            $sts['msg']="password fild is shued be filed ";
            $sts['typ']=0;
        }
        return $sts;
    }
}
