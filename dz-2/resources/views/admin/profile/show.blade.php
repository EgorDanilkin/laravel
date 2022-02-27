@extends('layouts.main')

@section('content')
    {{ $user->name }}<br>
    {!! Form::open(['route' => ['admin::profile::edit', $user], 'method' => 'GET']) !!}
    {!! Form::submit(__('labels.edit')) !!}
    {!! Form::close() !!}

    {!! Form::open(['route' => ['admin::profile::destroy', $user], 'method' => 'GET']) !!}
    {!! Form::submit(__('labels.delete')) !!}
    {!! Form::close() !!}
@endsection
