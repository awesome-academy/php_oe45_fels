@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between">
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ Auth::user()->name }}</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">{{ trans('field.Account Info') }}</a></li>
                    <li class="list-group-item"><a href="{{ route('words.filter',['filter' => 'Learned']) }}">{{ trans('field.Learned') }}</a></li>
                    <li class="list-group-item"><a href="#">{{ trans('field.My Lesson') }}</a></li>
                    <li class="list-group-item"><a href="#">{{ trans('field.My Exam Results') }}</a></li>
                </ul>
                
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ trans('field.Account Info') }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>{{ trans('field.Name') }}</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{ Auth::user()->name }}</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label>Email</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label>{{ trans('field.Password') }}</label>
                        </div>
                        <div class="col-md-6">
                            <p type="password">**********</p>
                        </div>
                    </div>
                    <div class="container d-flex justify-content-end">
                        <a href="#" type="button" class="btn btn-primary">{{ trans('field.Edit') }}</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
