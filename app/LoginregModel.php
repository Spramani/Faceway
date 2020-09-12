<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginregModel extends Model
{
    protected $table="users";
    public $timestamps=false;
    protected $fillable=['u_name','u_name_id','u_email','u_password','u_gender'];
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    //  protected $guarded = [];
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'u_id';
    
}
