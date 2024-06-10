<div class="h-fit bg-orange-500 p-2 grid grid-cols-1 sm:grid-cols-3">
    <div class="text-5xl rounded  text-white flex ml-2 justify-center sm:justify-start">
        <div class="bg-amber-700 rounded rounded-r-none p-2">
            <h1>To</h1>
        </div>
        <div class="bg-white rounded rounded-l-none p-2">
            <h1 class="text-orange-400">do</h1>
        </div>
    </div>
    <div class="flex justify-center w-full ">
            <form action="/home/search" class="w-full mt-4" method="post">
                @csrf
                <div class="inline-flex w-full ">
                    <input type="text" class="p-2 bg-[#e8f0fe] w-full rounded hover:outline-none rounded-r-none " name="search" placeholder="search for task">
                    <input type="submit" value="Search" class="bg-white text-orange-500 p-2 rounded rounded-l-none cursor-pointer ">
                </div>
            </form>
    </div>
    <div class="flex justify-end  gap-4 text-white text-center text-xl">
        <div class=" place-self-center mr-2 mt-2">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="">Log Out</button>
            </form>
        </div>
    </div>

</div>