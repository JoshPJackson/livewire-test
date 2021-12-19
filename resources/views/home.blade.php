@extends('layouts.app')

@section('content')
    <div>
        <div class="bg-purple flex justify-between items-center h-fit">
            <div>
                <a href="{{ route('home') }}">
                    <img src="/images/logo_white.png" alt="logo" class="h-12 px-5 py-3"/>
                </a>
            </div>
            <div class="">
                <input type="text" class="" value=""/>
                <i class="lni lni-search-alt"></i>
            </div>
            <div>
                <i class="lni lni-user"></i>
                <i class="lni lni-chevron-down"></i>
            </div>
        </div>
        <div class="justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
