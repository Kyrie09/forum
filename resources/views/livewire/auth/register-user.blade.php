<div class="flex items-center justify-center">
    <div  class="w-full px-5 md:w-1/2">
        <form wire:submit="create">

            <div class="flex justify-center mb-2">
                <img src="logo/logo.png"  class="w-1/4" alt="">
            </div>
            <h2 class="mb-2 font-bold text-center">Veritas College of Irosin</h2>
            <div class="w-full p-2 md:w-full" >{{ $this->form }}
                <div class="px-2 mt-2">
                    @error('password') <span class="text-red-500 error" >{{ $message }}</span> @enderror
                </div>
            <button type="submit" class="w-full py-2 mt-3 text-white rounded-lg hover:bg-green-300 bg-gradient-to-r from-green-700 to-green-500">
                Register
            </button>
            <div class="flex flex-col justify-center w-full mt-2 text-center">
                <a href="{{route('login')}}" class="underline hover:text-green-500">Have an account?</a>
            </div>

        </div>
        </form>

        <x-filament-actions::modals />
    </div>

</div>
