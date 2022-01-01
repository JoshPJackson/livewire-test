@extends('layouts.public')

@section('content')

<div class="bg-purple flex w-100 h-full items-center justify-center">
    <div class="bg-white rounded-xl shadow h-fit p-10">
        <img src="/images/logo_purple.png" alt="logo" class="w-1/2 mx-auto">
        <h1 class="font-header text-gray-700 text-3xl my-8 text-center">Please log in</h1>
        <livewire:forms.login/>
    </div>
</div>

@endsection
