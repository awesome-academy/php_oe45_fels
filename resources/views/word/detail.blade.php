@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 blog-main">
            <div class="blog-post">
                <h2 class="blog-post-title">{{ $word->vocabulary }}</h2>
                <p class="blog-post-meta">{{ trans('field.Spelling') }} :  {{ $word->spelling }} <a href=""> (loa)</a></p>
                <p>{{ trans('field.Category') }} : {{ $word->category_id}}</p>
                <hr>
                <h5>{{ trans('field.Meanings') }}</h5>
                <p>{{ $word->translate }}</p>
            </div>
            @if (auth()->user())
                <div class="container d-flex justify-content-end">
                    <form method="POST" action="{{ route('user.update', ['user' => auth()->user()->id]) }}">
                        @method('PATCH')
                        @csrf
                        <input type="hidden" name="word_id" value="{{ $word->id }}">
                        @if ($learned)
                            <button class="btn btn-outline-secondary">{{ trans('field.Forget') }}</button>
                        @else
                            <button class="btn btn-outline-primary">{{ trans('field.Got it!') }}</button>
                        @endif
                    </form>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
