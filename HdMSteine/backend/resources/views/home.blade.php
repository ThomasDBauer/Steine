@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::user()->name}}'s Dashboard</div>

                <div class="panel-body">
                    You are logged in! <br>
                    You may view your messages or add a new post. HF
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
