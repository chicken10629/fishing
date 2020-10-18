<?php

namespace App;

use App\Fish;
/*Fishモデルを指定。*/
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     
    protected $table = 'fish';
    /*fishテーブルのみからデータを拾う。上に使うモデルを指定してるが、
    コントローラーはデフォで"ファイル名s"と複数形で拾ってくるので、名前を指定して"s"を付けない*/
    protected $fillable = 'fish_name';
    /*指定したカラム「fish_name」）のみを拾う。*/
    public function dayfishing()
    {
        return $this->hasmany('App\Dayfishing');
    }

    
}
