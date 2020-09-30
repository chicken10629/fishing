<?php

namespace App;

use App\Fish;
/*Fishモデルを指定。*/
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     
    protected $table = 'fish';
    /*fishテーブルのみからデータを拾う。上に使うモデルを指定してるが、入れる必要ある？*/
    protected $fillable = 'fish_name';
    /*指定したカラム「fish_name」）のみを拾う。*/


    
}
