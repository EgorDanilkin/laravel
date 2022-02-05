@extends('layouts.main')

@section('content')
    {!! Form::open(['route' => 'admin::news::store', 'files' => true]) !!}

    {!! Form::label('title', 'Заголовок') !!}
    {!! Form::text('title') !!}<br>

    {!! Form::label('contents', 'Содержание') !!}
    {!! Form::textarea('contents') !!}<br>

    {!! Form::label('category', 'Категория') !!}
    {!! Form::select('category', $categories) !!}<br>

    {!! Form::label('source', 'Источник') !!}
    {!! Form::select('source', $sources) !!}<br>

    {!! Form::label('image', 'Изображение') !!}
    {!! Form::file('image') !!}<br>

    {!! Form::submit('Создать') !!}

    {!! Form::close() !!}
@endsection
