<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\facades\Input;
use App\LoginregModel;
use App\EducationModel;
use App\HobbiesModel;

class LoginregController extends Controller
{
    public function registration(){
        $fullname=$username=$email=$password=$c_password=$gender="";
        $fullname=Input::get('ufname');
        $username=Input::get('unameid');
        $email=Input::get('email');
        $password=Input::get('pass');
        $c_password=Input::get('cpass');
        $gender=Input::get('gender');

        if($fullname == "" || $username == "" || $email == "" || $password == "" || $c_password == "" || $gender == ""){
            $status['mass'] = "Fill all Fields";
            $status['mass_staus'] = 2;
        }else {

            if ($password === $c_password) {

    
                $q = new LoginregModel;
                $data = $q->where('u_name_id' , $username)->get();
                $datacount = $data->count();
            

                if ($datacount > 0 ) {
                    
                    $status['mass'] = "User name is Already used";
                    $status['mass_staus'] = 2;
                }
                else {


                    $q=new LoginregModel;
                    $q->u_name=$fullname;
                    $q->u_name_id=$username;
                    $q->u_email=$email;
                    $q->u_password=$password;
                    $q->u_gender=$gender;
                    $save = $q->save();
                    if ($save) {
                        
                    $status['mass'] = "Registration is succesfully";
                    $status['mass_staus'] = 1;

                    }

                    $a=new HobbiesModel;
                    $a->user_id=$q->u_id;
                    $a->hobbies = "";
                    $a->favourite_TV_Shows = "";
                    $a->favourite_Movies = "";
                    $a->favourite_Games = "";
                    $a->favourite_Music_Bands_Artists = "";
                    $a->favourite_Books = "";
                    $a->favourite_Writers = "";
                    $a->other_Interests = "";
                    $a->save();
                    

                    $b=new EducationModel;
                    $b->user_id=$q->u_id;
                    $b->college_university= "";
                    $b->college_joining_date= "";
                    $b->address_of_college= "";
                    $b->secondary_school= "";
                    $b->school_joining_date= "";
                    $b->address_of_school= "";
                    $b->save();
                          
                }


            }else{
                
                $status['mass'] = "password is miss matched";
                $status['mass_staus'] = 3;
            }
           
        }

        return $status;


        
        

    }
    public function login(){
        $username=Input::get('user_name');
        $password=Input::get('pass');
        
        $c = new LoginregModel;
        $data = $c->where('u_name_id' , $username)->where('u_password', $password)->get();
        $datacount = $data->count();
       if ($datacount > 0) {
        
        session()->put('userid',$username);
        session()->put('u_id',$data[0]['u_id']);
        session()->put('u_profile',$data[0]['u_profilepic']);
        session()->put('u_cs',$data[0]['u_cstatus']);
        //return redirect()->route('home');
         $status['mass'] = $username;
         $status['mass_staus'] = 1;

       }
       else {
        $status['mass'] = "User name or pass word are not metched";
        $status['mass_staus'] = 4;
        
       }
       return $status;
       
        
    }
    public function logout(){
        session()->flush('userid');
        return redirect('loginreg');
    }
    public function setcs(){
        $cs = Input::get('cs');

        $c =LoginregModel::find(session()->get('u_id'));
        $c->u_cstatus= $cs;
        $c->save();
        session()->put('u_cs',$cs);
        return $cs;
    }


    public function setsession($data)
        {

            session()->put('userid',$data);
            echo "session set <br/>";
        }
    public function getsession()
        {
                if(session()->has('userid'))
                {
                    $userid=session()->get('userid');
                    echo "</br>";
                    echo "session set name : ".$userid;
                }else {
                    echo "</br>";
                    echo "session not set";
                    
                }
                if(session()->has('u_id'))
                {
                    $userid=session()->get('u_id');
                    echo "</br>";
                    echo "session set id : ".$userid;
                }else {
                    echo "</br>";
                    echo "session not set";
                    
                }
        }

    public function profilepicupload(){

    }



    

}
