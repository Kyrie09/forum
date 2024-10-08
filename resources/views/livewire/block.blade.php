<div class="flex justify-center mt-5 h-dvh md:items-center md:justify-center">
    <div class="flex flex-col w-full gap-3 px-5 md:w-1/2">

        <a href="{{route('year',$id)}}" class="font-bold text-red-500">X</a>
        <h2 class="mb-3 font-bold text-center">Blocks</h2>
        <div class="grid w-full grid-flow-col grid-rows-6 gap-4 px-5 py-4">
            @forelse ($blocks as $block)
            <a href="{{route('student-list',['id'=>$block->id])}}" class="py-3 font-bold text-center text-white bg-green-500 border-2 rounded-md hover:bg-green-400 "><h2>{{$block->block}}</h2></a>
            @empty
            <p class="text-xl font-bold text-center text-gray-400">Empty</p>
            @endforelse

          </div>
    </div>
</div>

