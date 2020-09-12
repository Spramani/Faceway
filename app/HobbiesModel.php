<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HobbiesModel extends Model
{
    protected $table = "hobbies";
    public $timestamps = false;

    protected $fillable = [];

    protected $primaryKey = "h_id";
}
