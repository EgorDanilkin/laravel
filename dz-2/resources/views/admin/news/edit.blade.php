@extends('layouts.main')

@section('content')
    {!! Form::open(['route' => ['admin::news::update', $news], 'files' => true]) !!}

    {!! Form::label('title', __('labels.title')) !!}
    {!! Form::text('title', $news->title) !!}<br>

    {!! Form::label('contents', __('labels.content')) !!}
    {!! Form::textarea('contents', $news->content) !!}<br>

    {!! Form::label('category', __('labels.category')) !!}
    {!! Form::select('category', $categories, $news->category_id) !!}<br>

    {!! Form::label('source', __('labels.source')) !!}
    {!! Form::select('source', $sources, $news->source_id) !!}<br>

    {!! Form::label('image', __('labels.image')) !!}
    {!! Form::file('image') !!}<br>

    {!! Form::submit(__('labels.save')) !!}

    {!! Form::close() !!}
@endsection
