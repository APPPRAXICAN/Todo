<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {           
        return view('home.index',
        ['tasks'=>Task::where('user_id',Auth::user()->id)
        ->where('checked',false)
        ->latest()
        ->simplePaginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.formCreation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Title'=>'required|max:15|string',
            'Body'=>'required|max:50|string'
        ]);

        Task::create([
            'title'=>$request->Title,
            'body'=>$request->Body,
            'user_id'=>Auth::user()->id
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
            $task = Task::find($id);
            
            return view('home.form-edit',['task'=>$task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::find($id);
        $task->title = $request->Title;
        $task->body = $request->Body;
        $task->save();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('home');
    }
    
    public function checkTask(string $id){
        $task = Task::find($id) ;
        $task->checked = true ;
        $task->save();
        return redirect()->route('home');
    }
}
