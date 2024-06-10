<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $r)
    {


        $tasks = Task::where([
            ['user_id', Auth::user()->id],
            ['checked',false],
        ])
        ->where(function($query) use ($r) {
            $query->where('title', 'like', '%' . $r->search . '%')
                  ->orWhere('body', 'like', '%' . $r->search . '%');
        })
        ->simplePaginate(3);

        return view('home.index', ['tasks' => $tasks]);
    }
}
