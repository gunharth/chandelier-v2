<?php

namespace App;
use App\Item;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [];

    public function items()
    {
    	return $this->hasMany(Item::class);
    }
}
