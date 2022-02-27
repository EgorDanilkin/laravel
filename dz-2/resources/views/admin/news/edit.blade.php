@extends('layouts.main')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(['route' => ['admin::news::update', $news], 'files' => true]) !!}

    {!! Form::label('title', __('labels.title')) !!}
    {!! Form::text('title', $news->title) !!}<br>

    {!! Form::label('content', __('labels.content')) !!}
    {!! Form::textarea('content', $news->content) !!}<br>

    {!! Form::label('category_id', __('labels.category')) !!}
    {!! Form::select('category_id', $categories, $news->category_id) !!}<br>

    {!! Form::label('source', __('labels.source')) !!}
    {!! Form::select('source', $sources, $news->source_id) !!}<br>

    {!! Form::label('image', __('labels.image')) !!}
    {!! Form::file('image') !!}<br>

    {!! Form::submit(__('labels.save')) !!}

    {!! Form::close() !!}
@endsection
