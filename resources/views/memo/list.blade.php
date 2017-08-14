@extends('base')
@section('title', 'sample test')
@section('content')
    {!! Form::open(['url' => 'memo']) !!}

    {{ Form::label('title', null, ['class' => 'control-label']) }}
    {{ Form::text('username') }}
    {{ Form::label('body', null, ['class' => 'control-label']) }}
    {{ Form::textarea('email', 'example@gmail.com') }}
    {{ Form::submit('Click Me!') }}

    {!! Form::close() !!}
@endsection
