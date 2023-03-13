<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class IdeaController extends Controller
{
    public function filter(Request $request, $id)
    {
        if ($request->filter){
            $filtered_ideas = DB::table('ideas')
                                    ->where('title','like','%'.$request->filter.'%')
                                    ->get();
        }
        else{
            $filtered_ideas = DB::table('ideas')
                                    ->get();
        }
        
        return view('user',[
            'id' => $id,
            'user' => User::find($id),
            'ideas' => json_decode($filtered_ideas, true)
       ]);
        // return Response($filtered_ideas);
    }
}
