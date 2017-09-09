
@extends('base')
@section('title', isset($memo) ? $memo->title : 'Create')
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
    <div>
    {!! Form::open(['url' => 'memo']) !!}

        {{ Form::hidden('id', isset($memo) ? $memo->id : '') }}

        <div>
            {{ Form::label('title', null, ['class' => 'control-label']) }}
            {{ Form::text('title', (isset($memo)) ? $memo->title : '') }}
        </div>
        <div>
            {{ Form::label('memo', null, ['class' => 'control-label']) }}
            {{ Form::textarea('memo', (isset($memo)) ? $memo->memo : '') }}
        </div>

    {{ Form::submit('save') }}
    {!! Form::close() !!}
    </div>
@endsection
