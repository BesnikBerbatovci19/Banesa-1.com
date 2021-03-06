<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    protected $guarded = [];

       public function user(){
           return $this->belongsTo(User::class);
       }

       public function photo(){

           return $this->hasOne(Photo::class);

       }
}
