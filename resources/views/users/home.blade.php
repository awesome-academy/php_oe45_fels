@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="text-center">
            <h1> {{ trans('field.home') }}</h1>
            <h1>{{ trans('field.Sun') }}</h1>
            
            <div class="home">
                <div class="home-steel">
                <a class="btn btn-success" href="{{ route('words.index') }}">
                    {{ trans('field.Word') }}
                </a>
                
                <a class="btn btn-success"  href="{{ route('topic') }}">
                    {{ trans('field.Start') }}
                </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
