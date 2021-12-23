@extends('layouts.app')

@section('content')

    <x-card header="Link Bank">

        <x-slot name="headerLinks">
            <button type="button" class="bg-purple text-white font-bold px-4 rounded-full mr-2 hover:bg-purple-500">
                <i class="lni lni-plus"></i>
                New
            </button>
            <div>
                <input type="text"
                       class="bg-white rounded-full px-4 py-2 border focus:outline-none focus:border-purple hover:border-purple w-96"
                       value="" placeholder="search...."/>
                <button type="button" class="absolute -translate-x-8 translate-y-2">
                    <i class="lni lni-search-alt bg-white"></i>
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
