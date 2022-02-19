@extends('layouts.main')

@section('content')
    {{ $news->title }}<br>
    {!! Form::open(['route' => ['admin::news::edit', $news], 'method' => 'GET']) !!}
    {!! Form::submit(__('labels.edit')) !!}
    {!! Form::close() !!}

    {!! Form::open(['route' => ['admin::news::destroy', $news], 'method' => 'GET']) !!}
    {!! Form::submit(__('labels.delete')) !!}
    {!! Form::close() !!}
@endsection
