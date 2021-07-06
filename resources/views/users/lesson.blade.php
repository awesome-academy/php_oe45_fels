@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('field.lesson') }}</div>

                <div class="card-body">
                    <div class="text-right">
                        <a class="btn btn-primary" href="{{ route('topic') }}" title=""> <i class="fas fa-backward "></i> </a>
                    </div>
                    <table class="table table-bordered text-center">
                        <tr>
                            <th class="book">{{ trans('field.lessons') }}</th>
                            <th class="book">{{ trans('field.options') }}</th>
                        </tr>
                        @foreach($lessons as $lesson)
                            <tr class="book">
                                <td>{{ $lesson->name }}</td>
                                <td>
                                    <form action="" method="POST">
                                         <a href="" title="{{ trans('field.ready') }}">
                                            <i class="fas fa-book-reader text-danger fa-lg "></i>
                                        </a>
                                         @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
