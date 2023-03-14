<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class IdeaController extends Controller
{
    public function filter(Request $request, $id)
    {
        if ($request->filter){
            $filtered_ideas = DB::table('ideas')
                                    ->where('title','like','%'.$request->filter.'%')
                                    ->get()->toArray();
        }
        else{
            $filtered_ideas = DB::table('ideas')
                                    ->get()->toArray();
        }

        $filtered_ideas = $this->paginate($filtered_ideas, 10);
        $filtered_ideas -> withPath('/user/'.$id);

        return view('user',[
            'id' => $id,
            'user' => User::find($id),
            'ideas' => $filtered_ideas
       ]);
        // return Response($filtered_ideas);
    }

    public function paginate($items, $perPage = 4, $page = null){
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $total = count($items);
        $currentpage = $page;
        $offset = ($currentpage * $perPage) - $perPage ;
        $itemstoshow = array_slice($items , $offset , $perPage);
        return new LengthAwarePaginator($itemstoshow ,$total ,$perPage);
    }
}
