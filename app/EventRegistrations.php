<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventRegistrations extends Model
{
   
    protected $table = 'eventRegistrations';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
        'user_id', 'event_id', 'email', 'allergies', 'name', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        #'id',
    ];
}
