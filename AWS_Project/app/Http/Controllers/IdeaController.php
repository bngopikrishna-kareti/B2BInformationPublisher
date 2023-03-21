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
       
        $filtered_ideas = $this->get_filtered_ideas($request,$id);
        $filtered_ideas = $this->paginate($filtered_ideas, 10);
        $filtered_path = $this->get_filter_path($request,$id);

        $filtered_ideas -> withPath($filtered_path);

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

    public function filter_interested_ideas($ideas,$interested_tags){

        $filtered_ideas = [];
        $tags = explode(',',$interested_tags[0]->interested_tags);
        for($i = 0; $i < count($ideas); $i++){
            $idea_tags = explode(',',$ideas[$i]->tags);
            if(count(array_intersect($idea_tags,$tags)) > 0){
                array_push($filtered_ideas, $ideas[$i]);
            }
        }
        return $filtered_ideas;
    }


    public function get_filtered_ideas($request,$id){

        if ($request->filter){
            $filtered_ideas = DB::table('ideas')
                                    ->where('title','like','%'.$request->filter.'%')
                                    ->get()->toArray();
        }
        else if($request->interested_ideas){
            $ideas = DB::table('ideas')
                                    ->get()->toArray();
            $interested_tags = DB::table('users')
                                        ->select('interested_tags')
                                        ->where('id','=',$id)
                                        ->get();
            $filtered_ideas = $this->filter_interested_ideas($ideas,$interested_tags);
        }
        else{
            $filtered_ideas = DB::table('ideas')
                                    ->get()->toArray();
        }

        return $filtered_ideas;
    }

    public function get_filter_path($request, $id){

        if($request->filter){
            $filtered_path = '/user/'.$id.'?filter='.$request->filter;
        }
        else if($request->interested_ideas){
            $filtered_path = '/user/'.$id.'?interested_ideas='.$request->interested_ideas;
        }
        else{
            $filtered_path = '/user/'.$id;
        }

        return $filtered_path;
    }

}
