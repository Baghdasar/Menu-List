<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Models\Category;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
  
    // $categories = Category::where('parentId',0)->with('children')->get();
}
