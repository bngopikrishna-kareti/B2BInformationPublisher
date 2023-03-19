<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Idea;

class UserCartController extends Controller
{
    //

    public function add_to_cart($userId, $id){

        $wishlist = DB::table('users_cart')
                        ->where('userId','=',$userId)
                        ->get()->toArray();
        $added = false;
        for($i=0; $i<count($wishlist); $i++)
        {
            if($wishlist[$i]->ideaId == $id)
            {
                $added = true;
                break;
            }
        }
        if(!$added)
            DB::insert('insert into users_cart (userId,ideaId) values (?,?)',[$userId,$id]);
            return view('idea',[
                'idea' => Idea::find($id),
                'userId'=> $userId,
                'id' => $id
            ]);
    }

    public function user_wishlist($id){

        $user_wishlist = DB::table("users_cart")
                                ->where('userId','=',$id)
                                ->get()->toArray();

        $ideas_id_list = [];

        for($i=0; $i<count($user_wishlist); $i++){
            array_push($ideas_id_list,$user_wishlist[$i]->ideaId);
        }
        $ideas = DB::table('ideas')
                        ->whereIn('id',(array)$ideas_id_list)
                        ->get()->toArray();
        return view('user_cart',[
            'ideas' => $ideas,
        ]);

    }

  
}
