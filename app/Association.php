<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    protected $table = 'associations';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
        'name', 'email', 'link_one', 'link_two', 'link_three', 'description', 'address', 'logo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
