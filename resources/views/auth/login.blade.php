@extends('layouts.public')

@section('content')

<div class="bg-purple flex w-100 h-full items-center justify-center">
    <div class="bg-white rounded-xl shadow h-fit p-10">
        <img src="/images/logo_purple.png" alt="logo" class="w-1/2 mx-auto">
        <h1 class="font-header text-gray-700 text-3xl my-8 text-center">Please log in</h1>
        <form class="grid grid-rows-2 grid-cols-min-auto-1 gap-x-2" id="login" action="/login" method="post">
            @csrf
            <label for="email" class="mb-2 text-lg text-sans w-min mt-2 font-thin text-right">Email</label>
            <input type="email" class="mb-4 py-2 px-5 d-block w-full rounded-full border border-2 focus:outline-none focus:border-purple hover:border-purple text-gray-400" name="email" id="email" placeholder="me@example.com">
            <label for="password" class="mb-2 text-lg text-sans w-min mt-2 font-thin">Password</label>
            <input type="password" class="mb-4 py-2 px-5 d-block w-full rounded-full border border-2 focus:outline-none focus:border-purple hover:border-purple text-gray-400" name="password" id="password">
        </form>
        <div class="flex justify-between">
            <a class="text-gray-400 text-sm hover:text-purple mt-3" href="#">Forgot Password?</a>
            <div>
                <a href="#" class="border-blue-300 border-2 text-blue-300 px-4 py-2 rounded-full hover:ring-4 hover:ring-blue-100">Create Account</a>
                <button type="submit" form="login" class="text-white bg-purple rounded-full px-4 py-2 ring-4 ring-transparent hover:ring-fuchsia-300">Sign In</button>
            </div>
        </div>
    </div>
</div>

@endsection
