@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">add a post</div>

                    <div class="panel-body">
                        {!! Form::open(['url' => 'api/post']) !!}
                        <div>
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::label('description', 'Description:') !!}
                            {!! Form::text('description', null, ['class' => 'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::label('price', 'Steine:') !!}
                            {!! Form::text('price', null, ['class' => 'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::label('user_id', 'User:') !!}
                            {!! Form::hidden('user_id', '1') !!}
                        </div>
                        <div>
                            {!! Form::label('status', 'Status:') !!}
                            {!! Form::text('status', null, ['class' => 'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::submit('add post', ['class' => 'btn btn-primary form-control']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
