<div class="flex justify-center mt-5 h-dvh md:items-center md:justify-center">
    <div class="flex flex-col items-center w-full gap-3 px-5 ">
        <div class="flex flex-col">
            <div class="flex gap-3 mt-5 ">
                <a class="w-1/4 font-bold text-red-500" href="/">X</a>
                <h2 class="font-bold">Account Settings</h2>
            </div>
            <div class="flex flex-col justify-center ">
                <div class="flex justify-center mt-11">
                    <img class="w-1/2" src="logo/profile.png" alt="">
                </div>

                <h2 class="font-bold text-center">Username</h2>
                <p class="text-center">user@gmail.com</p>
            </div>
          </div>
          <div class="grid w-full grid-flow-col grid-rows-4 gap-4 px-5 py-4 md:w-1/2">
            <a href="{{route('notification')}}" class="py-3 font-bold text-center text-white bg-green-500 border-2 rounded-md hover:bg-green-400 ">
                <h2>Notifications</h2>
            </a>
            <a href="{{route('notification')}}" class="py-3 font-bold text-center text-white bg-green-500 border-2 rounded-md hover:bg-green-400 "><h2>Messages</h2></a>
            <a href="{{route('notification')}}" class="py-3 font-bold text-center text-white bg-green-500 border-2 rounded-md hover:bg-green-400 "><h2>Contact Admin</h2></a>
            <a href="{{route('notification')}}" class="py-3 font-bold text-center text-white bg-green-500 border-2 rounded-md hover:bg-green-400 "><h2>Edit Profile</h2></a>
          </div>
    </div>

</div>
