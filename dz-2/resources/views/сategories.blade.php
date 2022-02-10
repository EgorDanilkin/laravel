@extends('layouts.main')

@section('content')
    <ul>
    @foreach ($categories as $category)
            <a href="{{ route('news::category', $category['title'])}}">{{ $category['title'] }}</a>
    @endforeach
    </ul>
@endsection
