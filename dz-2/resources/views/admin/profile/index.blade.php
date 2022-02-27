@extends('layouts.main')

@section('content')
    @foreach($users as $user)
        <a href="{{ route('admin::profile::show', $user) }}">{{ $user->name }}</a><br>
    @endforeach

    {!! Form::open(['route' => ['admin::profile::create'], 'method' => 'GET']) !!}
    {!! Form::submit(__('labels.create')) !!}
    {!! Form::close() !!}

@endsection
