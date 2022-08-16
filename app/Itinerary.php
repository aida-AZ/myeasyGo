<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    //
    public $table = "itinerary1";

    protected $fillable = [
        'user_id', 'destination_id', 'user_pref_id',
    ];
}
