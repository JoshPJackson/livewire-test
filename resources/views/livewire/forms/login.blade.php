<div>
<form class="grid grid-cols-min-auto-1 gap-x-2" id="login" action="/login" method="post">
    @if ($errorMessage)
        <x-alert :message="$errorMessage"/>
    @endif

    @csrf
    <label for="email" class="mb-2 text-lg text-sans w-min mt-2 font-thin">Email</label>
    <x-basic-input wire:model.debounce.500ms="email" placeholder="{{ $emailPlaceholder }}" wire:de/>
    <label for="password" class="mb-2 text-lg text-sans w-min mt-2 font-thin">Password</label>
    <x-basic-input type="password" wire:model="password"/>
    <div class="flex justify-between">
        <a class="text-gray-400 text-sm hover:text-purple mt-3" href="#">Forgot Password?</a>
        <div>
            <a href="#" class="border-blue-300 border-2 text-blue-300 px-4 py-2 rounded-full hover:ring-4 hover:ring-blue-100">Create Account</a>
            <button type="submit" form="login" class="text-white bg-purple rounded-full px-4 py-2 ring-4 ring-transparent hover:ring-fuchsia-300">Sign In</button>
        </div>
    </div>
</form>
</div>
