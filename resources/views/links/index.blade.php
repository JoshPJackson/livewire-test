@extends('layouts.app')

@section('content')

    <x-card header="Link Bank">

        <x-slot name="headerLinks">
            <a href="{{ route('links.index') }}" class="flex bg-purple text-white font-bold px-4 rounded-full mr-2 hover:bg-purple-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 self-center" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
            </a>
            <button type="button" class="bg-purple text-white font-bold px-4 rounded-full mr-2 hover:bg-purple-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                New
            </button>
            <div>
                <input type="text"
                       class="bg-white rounded-full px-4 py-2 border focus:outline-none focus:border-purple hover:border-purple w-96"
                       value="" placeholder="search...."/>
                <button type="button" class="absolute -translate-x-8 translate-y-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </x-slot>

        <div class="grid grid-cols-3 pb-2 mb-2">
            <div class="font-bold text-gray-500 ml-2">Link</div>
            <div>Destination</div>
            <div class="text-center">Visits</div>
        </div>

        <div class="border-b border-t border-purple pb-1 mt-2">

            @foreach ($links as $link)

                <a href="#">
                    <div class="grid grid-cols-3 my-1 hover:bg-purple-100 rounded-lg">
                        <div class="text-gray-400 ml-2 font-thin">{{ $link->path }}</div>
                        <div class="text-gray-400 font-thin">{{ $link->destination }}</div>
                        <div class="text-gray-400 font-thin text-center">0</div>
                    </div>
                </a>

            @endforeach

        </div>

    </x-card>

@endsection
