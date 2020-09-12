<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationModel extends Model
{

        protected $table = "education";
        public $timestamps = false;
    
        protected $fillable = [];
    
        protected $primaryKey = "e_id";
}
