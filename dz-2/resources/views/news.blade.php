@extends('layouts.main')

@section('content')
    <h3>{{ $news['title'] }}</h3>
    <h6>{{ $news['category'] }}</h6>
    <p>{{ $news['text'] }}</p>
@endsection
