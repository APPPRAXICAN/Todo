@extends('layouts.master')
<div class=" flex flex-col">
    @include('components.top-panel')
    <div class="h-fit m-auto shadow-sm shadow-black rounded sm:w-4/5 sm:mt-20 w-full mt-0 ">
        <div class="text-3xl text-gray-400 p-4 font-bold border-b-2 border-grey flex gap-2 sm:justify-between">
            <div>#Tasks</div>
            @if (isset($allBtn))
                <div class="p-2 border-2 border-black rounded text-xl text-black hover:bg-orange-500 hover:text-white transition duration-300">
                    <a href="/home">All</a>
                </div>
            @endif
        </div>
        @if (count($tasks) > 0)

            @foreach ($tasks as $task)
                @include('components.task-container', [
                    'title' => $task->title,
                    'body' => $task->body,
                    'color' => '#dbdbdb',
                    'id' => $task->id,
                    'dateTime' => $task->created_at,
                ])
            @endforeach
            {{ $tasks->onEachSide(0)->links() }}
        @else
            <div class="h-96 text-5xl flex items-center justify-center text-gray-400">
                <div>
                    No Tasks Here!
                </div>
            </div>

        @endif

    </div>



    <div class="cursor-point">
        <span
            class="sm:w-20 sm:h-20 rounded-full bg-orange-500 right-5  bottom-[23rem]  fixed w-16 h-16 sm:right-10  sm:bottom-10 animate-ping [animation-duration:_2s]">
        </span>
        <form action="/home/task/create" method="GET">
            <div
                class="text-3xl bg-orange-500 fixed right-5  bottom-[23rem]      sm:right-10  sm:bottom-10 w-16 h-16 sm:w-20 sm:h-20 rounded-full  text-white font-bold inline-flex justify-center items-center">
                <input type="submit" value="+" class="cursor-pointer mb-2">
            </div>
        </form>
    </div>

</div>
