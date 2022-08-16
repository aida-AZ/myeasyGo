<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPref extends Model
{
    public $table = "user_pref";

    protected $fillable = [
        'attraction', 'dayStay', 'budget', 'foodType',
    ];
}
