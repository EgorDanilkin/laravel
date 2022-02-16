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
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    {!! Form::open(['route' => 'admin::news::store', 'files' => true]) !!}

    {!! Form::label('title', __('labels.title')) !!}
    {!! Form::text('title') !!}<br>

    {!! Form::label('content', __('labels.content')) !!}
    {!! Form::textarea('content') !!}<br>

    {!! Form::label('category_id', __('labels.category')) !!}
    {!! Form::select('category_id', $categories) !!}<br>

    {!! Form::label('source_id', __('labels.source')) !!}
    {!! Form::select('source_id', $sources) !!}<br>

    {!! Form::label('image', __('labels.image')) !!}
    {!! Form::file('image') !!}<br>

    {!! Form::submit(__('labels.create')) !!}

    {!! Form::close() !!}
@endsection
