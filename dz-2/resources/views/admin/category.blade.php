@extends('layouts.main')

@section('content')
    {!! Form::open(['route' => 'admin::category::create']) !!}
    {!! Form::label('category_id', 'id') !!}
    {!! Form::number('category_id') !!}
    {!! Form::label('category_title', 'Название категории') !!}
    {!! Form::text('category_title') !!}
    {!! Form::submit('Создать') !!}
    {!! Form::close() !!}
@endsection
