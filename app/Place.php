<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     

    protected $fillable = 'prefecture_id' . 'place_name';
    /*指定したカラムのみを拾う。*/


    
}
