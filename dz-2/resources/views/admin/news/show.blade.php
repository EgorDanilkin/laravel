@extends('layouts.main')

@section('content')
    {{ $news->title }}<br>
    {!! Form::open(['route' => ['admin::news::edit', $news], 'method' => 'GET']) !!}
    {!! Form::submit('Изменить') !!}
    {!! Form::close() !!}

    {!! Form::open(['route' => ['admin::news::destroy', $news], 'method' => 'GET']) !!}
    {!! Form::submit('Удалить') !!}
    {!! Form::close() !!}
@endsection
