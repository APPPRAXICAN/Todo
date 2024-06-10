@extends('layouts.master')
@section('content')
<div class=" flex flex-col">
    @include('components.top-panel')
  <div class="h-screen  flex ">
    <div class="m-auto w-full  sm:w-96 shadow-sm sm:shadow-black rounded  mt-32 sm:mt-auto">
        <form action="/home/task/{{$task->id}}" method="POST">
            @method('PUT')
            @csrf

            @include('components.formGroup' , [
            'forWhat'=>'Title',
            'forType'=>'text',
            'forVal'=>$task->title,
            'forPlace'=>'Title'
        ])
        <p class="text-red-600 ml-2">{{$errors->has('Title')?$errors->first('Title'):""}}</p>
        
        @include('components.formGroup' , [
            'forWhat'=>'Body',
            'forType'=>'text',
            'forVal'=>$task->body,
            'forPlace'=>'Task Discribtion'
        ])
        <p class="text-red-600 p-2">{{$errors->has('Body')?$errors->first('Body'):""}}</p>
        
        <div class="text-white p-2">
            {{-- <input type="hidden" value={{session('user_id')}} name="user_id"> --}}
            <input type="submit" value="Submit" class="w-full p-2 cursor-pointer bg-orange-500 rounded hover:bg-orange-600 transition duration-300 ">
        </div>
        </form>
    </div>
  </div>
</div>
@endsection