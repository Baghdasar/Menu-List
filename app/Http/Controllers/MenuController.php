<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class MenuController extends Controller
{

public function addMenu(Request  $request){
    // dump($request->name);
    // dump($request->parentId);
$menu = Category::create([
    'name'=>$request->name,
    'parentId'=>$request->parentId,
]);

return back();
}
public function delMenu(Request $request){
    $menu_del = Category::where('id',$request->parentId)->delete();
    return back();
}
}
