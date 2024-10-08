
<div class="flex justify-center mt-5 md:items-center md:justify-center">
    <div class="flex flex-col w-full gap-3 px-5 md:w-1/2">
        <div class="flex gap-1 mb-3 ml-5 md:w-full">
            <img src="logo/logo.png" alt="" style="width: 20px">
            <h2 class="font-bold">Veritas College of Irosin</h2>
        </div>

        <a href="{{route('profile')}}" class="py-3 pl-3 border-2 rounded-md ">
            <div class="flex w-full gap-2">
                <div class="rounded-full ">
                    <img class="w-10 h-10 rounded-full md:h-14 md:w-14" src="{{url('storage',$user->image)}}" >
                </div>

                <div>
                    <h2 class="font-bold">{{$user->name}}</h2>
                    <p>{{$user->email}}</p>
                </div>
            </div>
        </a>
        <div class="grid grid-flow-col grid-rows-2 gap-4 px-5 py-4">
            <div class="flex flex-col items-center justify-center">
                <a href="{{route('student')}}">
                    <img class="" src="logo/students.png" alt="">
                </a>
                <h2 class="font-bold">Student</h2>
            </div>
            <div class="flex flex-col items-center justify-center">
                <a href="">
                    <img class="" src="logo/courses.png" alt="">
                </a>
                <h2 class="font-bold">Courses</h2>
            </div>
            <div class="flex flex-col items-center justify-center">
                <a href="{{route('news')}}">
                    <img class="" src="logo/news.png" alt="">
                </a>
                <h2 class="font-bold">News</h2>
            </div>
            <div class="flex flex-col items-center justify-center">
                <a href="{{route('event')}}">
                    <img class="" src="logo/events.png" alt="">
                </a>
                <h2 class="font-bold">Events</h2>
            </div>
            <div class="flex flex-col items-center justify-center">
                <a href="{{route('forum')}}">
                    <img class="" src="logo/forums.png" alt="">
                </a>
                <h2 class="font-bold">Forums</h2>
            </div>
            <div class="flex flex-col items-center justify-center">
                <a href="{{route('faculty')}}">
                    <img class="" src="logo/faculty.png" alt="">
                </a>
                <h2 class="font-bold">Faculty</h2>
            </div>


        </div>
        <div class="flex justify-center">
            <button wire:click='logout' class="px-5 py-2 font-bold text-white bg-green-500 rounded-lg hover:bg-green-400">Loguot</button>
        </div>
    </div>



</div>

