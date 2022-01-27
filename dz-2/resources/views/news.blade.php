@extends('layouts.main')

@section('content')
    <h3>{{ $news['title'] }}</h3>
    <p>{{ $news['text'] }}</p>
@endsection
