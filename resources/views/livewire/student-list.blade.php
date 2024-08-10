<div class="flex justify-center mt-5 md:items-center md:justify-center">
    <div class="flex flex-col w-full gap-3 px-5 md:w-1/2">
        <a href="/" class="font-bold text-red-500">X</a>
        <h2 class="mb-3 font-bold text-center">Students List</h2>
        <div class="grid w-full grid-flow-col grid-rows-6 gap-4 px-5 py-4 md:w-1/2">
            <div class="flex flex-col">
            <h2 class="bold">Male</h2>
            @for ($i = 1; $i <= 10; $i++)
                <p>{!!$i!!}. User{!!$i!!} </p>
            @endfor
            </div>
            <div class="flex flex-col">
                <h2 class="bold">Female</h2>
            @for ($i = 1; $i <= 10; $i++)
                <p>{!!$i!!}. User{!!$i!!} </p>
            @endfor
            </div>

          </div>
    </div>
</div>

