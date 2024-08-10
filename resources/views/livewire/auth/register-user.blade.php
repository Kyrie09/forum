<div class="flex justify-center items-center">
    <div  class="w-full md:w-1/2 px-5">
        <form wire:submit="create">

            <div class="flex justify-center mb-2">
                <img src="logo/logo.png"  class="w-1/4" alt="">
            </div>
            <h2 class="font-bold text-center mb-2">Veritas College of Irosin</h2>
            <div class="w-full md:w-full p-2" >{{ $this->form }}

            <button type="submit" class="w-full hover:bg-green-300 mt-3 rounded-lg py-2 text-white  bg-gradient-to-r from-green-700 to-green-500">
                Register
            </button>
            <div class="flex flex-col text-center justify-center mt-2 w-full">
                <a href="{{route('login')}}" class="underline hover:text-green-500">Have an account?</a>
            </div>

        </div>
        </form>

        <x-filament-actions::modals />
    </div>

</div>
