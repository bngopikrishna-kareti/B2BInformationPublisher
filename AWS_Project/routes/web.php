<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function(){
    return view('user',[
        'ideas' => Idea::all()
    ]);
});


Route::get('/idea/{id}',function($id){
    return view('idea',[
        'idea' => Idea::find($id)
    ]);
});