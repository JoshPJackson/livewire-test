<div class="bg-purple flex w-100 h-full items-center justify-center">

    <div class="bg-white rounded-xl shadow h-fit p-10">

        <img src="/images/logo_purple.png" alt="logo" class="w-1/2 mx-auto">
        <h1 class="font-header text-gray-700 text-3xl my-8 text-center">Please log in</h1>

        <form id="login" wire:submit.prevent="login">

            @csrf

            <div class="grid grid-cols-min-auto-1 gap-x-2">
                <label for="email" class="mb-2 text-lg text-sans w-min mt-2 font-thin">Email</label>
                <x-basic-input wire:model.lazy="email" placeholder="me@me.com"/>
                <label for="password" class="mb-2 text-lg text-sans w-min mt-2 font-thin">Password</label>
                <x-basic-input type="password" wire:model.lazy="password"/>
            </div>


            <div class="flex justify-between">
                <a class="text-gray-400 text-sm hover:text-purple mt-3" href="#">Forgot Password?</a>
                <div>
                    <a href="#" class="border-blue-300 border-2 text-blue-300 px-4 py-2 rounded-full hover:ring-4 hover:ring-blue-100">Create Account</a>
                    <button type="submit" form="login" class="text-white bg-purple rounded-full px-4 py-2 ring-4 ring-transparent hover:ring-fuchsia-300">Sign In</button>
                </div>
            </div>

        </form>

    </div>

</div>
