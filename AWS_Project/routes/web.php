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
    return view('userlogin');
});
Route::get('/Add_RMs',function(){
    return view('Add_RMs');
});
Route::get('/Delete_RMs',function(){
    return view('Delete_RMs');
});


Route::get('/clients_view',function(){
    return view('clients_view');
});

Route::get('/homepage',function(){
    return view('homepage');
});

Route::get('/adminpasswordreset',function(){
    return view('adminpasswordreset');
}
);

Route::get('/registerasuser',function(){
    return view('registerasuser');
});

Route::get('/sector_page',function(){
    return view('sector_page');
});

Route::get('/available_ideas',function(){
    return view('available_ideas');
});
Route::get('/AddIdea',function(){
    return view('AddIdea');
});

Route::get("/Remove_idea",function(){
    return view('Remove_idea');
});
Route::get('/user/{id}', function(Request $request, $id){
    return view('user',[
        'ideas' => Idea::all(),
        'id' => $id,
        'user' => User::find($id),
        'notifications' => $request->notifications ? true : false
    ]);
})-> where('id', '[0-9]*');


Route::get('user/{userId}/idea/{id}',function($userId,$id){
    return view('idea',[
        'idea' => Idea::find($id),
        'userId'=> $userId,
        'id' => $id
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

Route::get('/user/{id}/wishlist',[UserCartController::class,'user_wishlist']);