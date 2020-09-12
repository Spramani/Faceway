<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OTPModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'otp_table';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false; 

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'o_id';
}
