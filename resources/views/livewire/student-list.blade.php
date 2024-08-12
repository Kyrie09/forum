<div class="flex justify-center mt-5 md:items-center md:justify-center">
    <div class="flex flex-col w-full gap-3 px-5 md:w-1/2">
        <div class="flex items-center justify-between w-full">
            <a href="/" class="font-bold text-red-500">X</a>
            <a class="text-green-500 "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
              </svg>
            </a>

        </div>

        <h2 class="mb-3 font-bold text-center">Students List</h2>
        <div class="grid w-full grid-flow-col grid-rows-6 gap-4 px-5 py-4 md:w-1/2">
            <div class="flex flex-col">
            <h2 class="font-bold">Male</h2>
            @forelse ($males as $male)
                    <p> <span>{{ $loop->iteration }}. </span> {{$male->first_name}} {{$male->middle_name}} {{$male->last_name}}</p>
            @empty
            @endforelse
            </div>
            <div class="flex flex-col">
                <h2 class="font-bold">Female</h2>
                @forelse ($females as $female)
                    <p> <span>{{ $loop->iteration }}. </span> {{$female->first_name}} {{$female->middle_name}} {{$female->last_name}}</p>
                @empty

                @endforelse
            </div>

          </div>
    </div>
</div>

