@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('field.Words List') }}</div>

                <div class="card-body">
                        <div class="container d-flex justify-content-end">
                            <div class="form-group container">
                                <input type="text" name="search" id="search" class="form-control" placeholder="{{ trans('field.Search Words') }}" />
                            </div>
                            @if (auth()->user())
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ trans('field.Filter') }}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ route('words.index') }}">{{ trans('field.All') }}</a>
                                        <a class="dropdown-item" href="{{ route('words.filter',['filter' => 'Learned']) }}">{{ trans('field.Learned') }}</a>
                                        <a class="dropdown-item" href="{{ route('words.filter',['filter' => 'Unlearned']) }}">{{ trans('field.Unlearned') }}</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <ul class="list-group list-group-flush search-result">
                            @foreach ($words as $word)
                                <li class="list-group-item"><a href="{{ route('words.show',['word' => $word->id]) }}">{{ $word->vocabulary }}</a></li>
                            @endforeach
                        </ul>
                        <div class="row justify-content-center">
                            {{ $words->links() }}
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer-scripts')
      @include('scripts.search')
@endsection
