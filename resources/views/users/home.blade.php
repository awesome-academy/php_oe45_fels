@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="text-center">
            <h1> {{ trans('field.home') }}</h1>
            <h1>{{ trans('field.Sun') }}</h1>
            
            <div class="home">
                <div class="home-steel">
                <a href="">
                    <button href="" class="button-homepage">{{ trans('field.Word') }}</button>
                </a>
                
                <a href="{{ route('topic') }}">
                    <button class="button-homepage">{{ trans('field.Start') }}</button>
                </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
