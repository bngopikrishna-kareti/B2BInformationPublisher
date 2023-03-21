<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function update(Request $request, $id){
        DB::table('users')
                ->where('id',$id)
                ->update(['first_name' => $request->first_name,
                          'last_name' => $request->last_name,
                          'email' => $request->email_address,
                          'interested_tags' => $request->tags]);
        
        return view('user_profile',[
                    'user' => User::find($id),
                    'id' => $id
                ]);
            
    }
}
