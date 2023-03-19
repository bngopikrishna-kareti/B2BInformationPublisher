<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;
use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserCartController;


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

Route::get('/user/{id}', function($id){
    return view('user',[
        'ideas' => Idea::all(),
        'id' => $id,
        'user' => User::find($id)
    ]);
})-> where('id', '[0-9]*');


Route::get('user/{userId}/idea/{id}',function($userId,$id){
    return view('idea',[
        'idea' => Idea::find($id),
        'userId'=> $userId
    ]);
});

Route::get('user/{userId}/idea/{id}/add_to_cart',[UserCartController::class,'add_to_cart']);


Route::get('user_profile/{id}',function($id){
    return view('user_profile',[
        'user' => User::find($id),
        'id' => $id
    ]);
})-> where('id', '[0-9]*');


Route::get('/user/{id}',[IdeaController::class,'filter']);

Route::get('/user_profile/{id}/update',[UserController::class,'update']);