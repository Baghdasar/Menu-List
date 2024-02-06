<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Category;
use App\Http\Controllers\MenuController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $categories =Category::where('parentId',null)->with('getChild')->get();

    return view('welcome', ['menus' => $categories ]);
});

Route::post('/menu/level', [MenuController::class, 'addMenu'])->name('menu.level');
Route::post('/menu/level/del', [MenuController::class, 'delMenu'])->name('menu.level.del');
