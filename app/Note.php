<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //

    public function notes(){

    return $this->belongTo(Note::class);
    }
}
