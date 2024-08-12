<div class="flex justify-center mt-5 md:items-center md:justify-center">
    <div class="flex flex-col w-full gap-3 px-5 md:w-1/2">
        <div class="flex items-center justify-between w-full ">
            <a href="/" class="font-bold text-red-500">X</a>
            <a href="{{route('createNews')}}" class="text-green-500 "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
              </svg>
            </a>
        </div>
        <h1 class="mb-3 font-bold text-center">News</h1>

        <div class="flex flex-col gap-3 pb-5">
            @forelse ($news as $new)
            <div class="flex justify-center w-full">
                <div class="block max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <a href="{{url('storage',$new->image)}}" class="flex justify-center ">
                        <img class="w-1/2" src="{{url('storage',$new->image)}}" alt="">
                    </a>
                    <a href="">
                        <div>
                            {!!$new->post!!}
                         </div>
                    </a>

                </div>

                <div>
                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots3" data-dropdown-placement="bottom-start" class="inline-flex items-center self-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-800 dark:focus:ring-gray-600" type="button">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                           <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                        </svg>
                     </button>
                     <div id="dropdownDots3" class="z-10 hidden w-40 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">

                           <li>
                              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                           </li>
                           <li>
                              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                           </li>
                        </ul>
                     </div>
                </div>
           </div>
            @empty

            @endforelse

        </div>
    </div>
</div>
