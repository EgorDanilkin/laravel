@extends('layouts.main')

@section('content')
    {!! Form::open(['route' => 'admin::category::create']) !!}

    {!! Form::close() !!}
@endsection
