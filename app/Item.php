<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job;

class Item extends Model
{
    public function job()
    {
    	return $this->belongsTo(Job::class);
    }
}
