<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
