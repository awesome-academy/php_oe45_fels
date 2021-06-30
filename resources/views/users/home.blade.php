@extends('layouts.app')

@section('content')
    <header class="header-home">
        <h1 class="title"> {{ trans('home.home') }}</h1>
        <h1 class="title">{{ trans('home.Sun') }}</h1>
        
        <div class="home">
            <div class="home-steel">
            <a href="">
                <button href="" class="button-homepage">{{ trans('home.Word') }}</button>
            </a>
            
            <a href="{{ route('topic') }}">
                <button class="button-homepage">{{ trans('home.Start') }}</button>
            </a>
            </div>
        </div>
    </header>
@endsection
