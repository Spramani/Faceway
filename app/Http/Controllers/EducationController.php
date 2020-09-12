<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\facades\Input;
use App\EducationModel;

class EducationController extends Controller
{

    public function education_view()
    {
        $userid = session()->get('u_id');

        $c = new EducationModel;
        $data = $c->where('user_id', $userid)->get();

        return view('education', compact('data'));
    }

    public function profile_education_save()
    {
        $c_and_u=Input::get('candus');
        $c_and_j=Input::get('candjs');
        $c_and_d=Input::get('candds');
        $s_and_u=Input::get('sandus');
        $s_and_j=Input::get('sandjs');
        $s_and_d=Input::get('sandds');
        

        $userid = session()->get('u_id');

        $hid=new EducationModel;
        $hhid=$hid->where("user_id",$userid)->get();

        $c=EducationModel::find($hhid[0]['e_id']);


        $c->college_university = $c_and_u;
        $c->college_joining_date=$c_and_j;
        $c->address_of_college=$c_and_d;
        $c->secondary_school=$s_and_u;
        $c->school_joining_date=$s_and_j;
        $c->address_of_school=$s_and_d;


        $arr=$c->save();


        if($arr){
            $sts['type']=1;
            $sts['msg']="Changes save sucessfully";
          }
          else {
            $sts['type']=0;
            $sts['msg']="some thing is wrong";
          }
  
          return $sts;
        
    }
    
}
