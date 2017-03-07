<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\JobDataFilter;

class Product extends Model
{
    use JobDataFilter;

    protected $filter = [
        'id', 'type', 'name'
    ];

}
