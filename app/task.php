<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    public function scopeIncomplete($query)
    {
    	return $query->where('completed', 0);
    }
}
