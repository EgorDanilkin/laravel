@extends('layouts.main')

@section('content')
    {!! Form::open(['route' => ['admin::news::update', $news], 'files' => true]) !!}

    {!! Form::label('title', 'Заголовок') !!}
    {!! Form::text('title', $news->title) !!}<br>

    {!! Form::label('contents', 'Содержание') !!}
    {!! Form::textarea('contents', $news->content) !!}<br>

    {!! Form::label('category', 'Категория') !!}
    {!! Form::select('category', $categories, $news->category_id) !!}<br>

    {!! Form::label('source', 'Источник') !!}
    {!! Form::select('source', $sources, $news->source_id) !!}<br>

    {!! Form::label('image', 'Изображение') !!}
    {!! Form::file('image') !!}<br>

    {!! Form::submit('Изменить') !!}

    {!! Form::close() !!}
@endsection
