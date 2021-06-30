@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('field.list') }}</div>

                <div class="card-body">
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('home') }}" title=""> <i class="fas fa-backward "></i> </a>
                    </div>
                    <table class="table table-bordered ">
                        <tr>
                            <th class="book">{{ trans('field.name') }}</th>
                            <th class="book">{{ trans('field.options') }}</th>
                        </tr>
                            @foreach($topics as $topic)
                                <tr class="book">
                                    <td>{{ $topic->name }}</td>
                                    <td>
                                        <form action="" method="POST">
                                            <a href="" title="{{ trans('field.go') }}">
                                                <i class="fas fa-book-reader text-success fa-lg "></i>
                                            </a>
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                        @endforeach
                    </table>
                    {!! $topics->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
