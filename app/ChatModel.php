<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatModel extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'chat';


    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [''];

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'chat_id';
}
