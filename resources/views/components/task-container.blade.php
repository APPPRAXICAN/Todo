<div
    class="p-2 border-b-2 bg-[{{ $color }}]  border-black w-full hover:bg-orange-500 hover:text-white transition duration-500 ">
    <div class="text-2xl font-bold">{{ $title }}</div>
    <div class="ml-2 flex justify-between">
        <p>{{ $body }}</p>
        <div class="inline-flex gap-2">
            <form action="/home/task-check/{{$id}}" method="GET">
                <button type="submit" class="hover:text-green-600">
                    <i class="fa-regular fa-circle-check" style="color: #63E6BE;"></i>
                </button>
            </form>
            <form action="/home/task/{{$id}}" method="post">
                @csrf
                @method('Delete')
                <button type="submit" class="hover:text-red-600 ">
                    <i class="fa-solid fa-trash-can" style="color: #ff051e;"></i>
                </button>        
            </form>
            <form action="/home/task/{{$id}}/edit" method="GET">
                <button type="submit" class="hover:text-blue-600 ">
                    <i class="fa-solid fa-pen-to-square" style="color: #74C0FC;"></i>
                </button>
            </form>
        </div>
    </div>
    <div class="ml-2">
        <p>{{$dateTime}}</p>
    </div>
</div>
