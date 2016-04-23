@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Your Messages, {{Auth::user()->name}}</div>

                    <div class="panel-body">

                        @for($i = 0; $i < sizeOf($messages); $i++)
                            <div>Nachricht {{ $i }}: {{ $messages[$i]}} </div>
                        @endfor

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
