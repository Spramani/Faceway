<?php

namespace App\Http\Controllers;

use App\HobbiesModel;
use Illuminate\Support\Facades\Input;

class HobbiesController extends Controller
{

    public function hobbies_view()
    {
        $userid = session()->get('u_id');

        $c = new HobbiesModel;
        $data = $c->where('user_id', $userid)->get();

        return view('hobbies', compact('data'));
    }

    public function profile_hobbies_save()
    {

        $userid = session()->get('u_id');

        $hobbie = Input::get('hobbiess');
        $FavouriteTVShows = Input::get('Favourite_TV_Shows');
        $FavouriteMovies = Input::get('Favourite_Movies');
        $FavouriteGames = Input::get('Favourite_Games');
        $FavouriteMusicBands = Input::get('Favourite_Music_Bands');
        $FavouriteBooks = Input::get('Favourite_Books');
        $FavouriteWriters = Input::get('Favourite_Writers');
        $OtherInterests = Input::get('Other_Interests');

        $hid = new HobbiesModel;
        $hhid = $hid->where("user_id", $userid)->get();
        $c = HobbiesModel::find($hhid[0]['h_id']);

        $c->hobbies = $hobbie;
        $c->favourite_TV_Shows = $FavouriteTVShows;
        $c->favourite_Movies = $FavouriteMovies;
        $c->favourite_Games = $FavouriteGames;
        $c->favourite_Music_Bands_Artists = $FavouriteMusicBands;
        $c->favourite_Books = $FavouriteBooks;
        $c->favourite_Writers = $FavouriteWriters;
        $c->other_Interests = $OtherInterests;
        $arr = $c->save();
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

    public function test($id)
    {
        $qry2 = new HobbiesModel;
        // $data=$c->where('h_id',$id)->get();
        $qry = HobbiesModel::find($id);
        $userid = $qry->user_id;
        // $datafind = $qry2->where('userid',$userid)->get()->count();
        dd($userid);
    }

}
