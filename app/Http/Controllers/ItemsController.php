<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{
    
    public function index() 
    {
    	$items = Item::filterPaginateOrder();
    	return response()->json($items);
    }
}
