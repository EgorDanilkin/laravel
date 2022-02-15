@extends('layouts.main')

@section('content')
    @foreach($users as $user)
        <a href="{{ route('admin::profile::show', $user) }}">{{ $user->name }}</a>
    @endforeach
@endsection
