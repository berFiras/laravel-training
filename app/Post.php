<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //change table or fields 
    //table name
    // protected $table ='posts';
    //primary key
    // protected $primaryKey ='id';
    //timestamps
    // protected $timestamps =true;
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
