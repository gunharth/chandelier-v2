<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\JobDataFilter;
use App\Job;

class Item extends Model
{
    use JobDataFilter;

    protected $fillable = [];

    protected $filter = [
        'id', 'job_id', 'product_id', 'description'
    ];

    public function job()
    {
    	return $this->belongsTo(Job::class);
    }
}
