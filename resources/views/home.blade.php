@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1><a href="{{ route('adminView') }}">Welcome to admin Page</a></h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
