
@extends('base')
@section('title', 'sample test')
@section('content')
@if (count($errors) > 0)
    <div class="">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    {!! Form::open(['url' => 'memo']) !!}

    {{ Form::label('title', null, ['class' => 'control-label']) }}
    {{ Form::text('title', '') }}
    {{ Form::label('memo', null, ['class' => 'control-label']) }}
    {{ Form::textarea('memo', '') }}
    {{ Form::submit('save') }}

    {!! Form::close() !!}
@endsection
