<div>
    <div class="p-2 mt-2">
        <label for={{$forWhat}} class="">{{$forWhat}}</label><br>
        <input type={{$forType}} name="{{$forWhat}}" value="{{$forVal??''}}" class="p-2 bg-[#e8f0fe] rounded w-full hover:outline-none" placeholder="Enter your {{$forPlace}}">
        <p id="{{$forWhat}}-err" class="text-red-600"></p>
    </div>
</div>