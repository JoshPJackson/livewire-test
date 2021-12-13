@extends('layouts.public')

@section('content')

<div class="bg-purple flex w-100 h-full items-center justify-center">
    <div class="bg-white rounded-xl shadow h-fit p-10">
        <img src="/images/logo_purple.png" alt="logo" class="w-1/2 mx-auto">
        <h1 class="font-header text-gray-700 text-3xl mt-8 text-center">Please log in</h1>
        <form class="grid grid-rows-2 grid-cols-min-auto-1">
            <label for="email" class="mb-2 text-lg text-sans w-min">Email</label>
            <input type="email" class="mb-4 py-2 px-5 d-block w-full rounded-full border border-2 focus:outline-none focus:border-purple hover:border-purple text-gray-400" name="email" id="email" placeholder="me@example.com">
            <label for="password" class="mb-2 text-lg text-sans w-min">Password</label>
            <input type="password" class="mb-4 py-2 px-5 d-block w-full rounded-full border border-2 focus:outline-none focus:border-purple hover:border-purple text-gray-400" name="password" id="password">
        </form>
    </div>
</div>

@endsection
