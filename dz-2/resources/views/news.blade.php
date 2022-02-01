@extends('layouts.main')

@section('content')
    <h3>{{ $news->title }}</h3>
    <p>{{ $news->content }}</p>
@endsection
