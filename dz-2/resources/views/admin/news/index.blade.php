@extends('layouts.main')

@section('content')
    <ul>
    @foreach($news as $item)
        <li>
            <a href="{{ route('admin::news::show', $item) }}">{{ $item->title }}</a>
        </li>
    @endforeach
    </ul>

    {!! Form::open(['route' => ['admin::news::create'], 'method' => 'GET']) !!}
    {!! Form::submit('Добавить новость') !!}
    {!! Form::close() !!}

@endsection
