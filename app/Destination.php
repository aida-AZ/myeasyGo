<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    //
    public $table = "destination";

    protected $fillable = [
        'name', 
    ];
}

