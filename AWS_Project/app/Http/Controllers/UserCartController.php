<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCartController extends Controller
{
    //

    public function add_to_cart($userId, $id){
        dd($userId, $id);
    }
}
