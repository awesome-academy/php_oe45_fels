@extends('layouts.page')
@section('title', 'Home')
@section('content')

    <header class="header-home">
    <h1> {{ trans('message.home') }}</h1>
    <h1>{{ trans('message.Sun') }}</h1>
    
    <div class="home">
        <div class="home-steel">
        <a href="">
            <button href="" class="button-homepage">{{ trans('message.Word') }}</button>
        </a>
        
        <a href="{{ route('topic') }}">
            <button class="button-homepage">{{ trans('message.Start') }}</button>
        </a>
        </div>
    </div>
    </header>

@endsection
