<div class="flex justify-center mt-5 h-dvh md:items-center md:justify-center">
    <div class="flex flex-col w-full gap-3 px-5 md:w-1/2">

        <div class="flex items-center justify-between w-full px-5 mt-5">
            <a href="{{route('student')}}" class="font-bold text-red-500">X</a>
            <a class="text-green-500 "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
              </svg>

            </a>

        </div>
        <h2 class="mb-3 font-bold text-center">Year</h2>

            <div class="grid w-full grid-flow-col grid-rows-6 gap-4 px-5 py-4 ">
                @forelse ($years as $year)
                <a href="{{route('block',['id'=>$year->id])}}" class="w-full py-3 font-bold text-center text-white bg-green-500 border-2 rounded-md hover:bg-green-400 ">
                    <h2>{{$year->year}}</h2>
                </a>
                @empty
                <p class="text-xl font-bold text-center text-gray-400">Empty</p>
                @endforelse


              </div>


    </div>
</div>

