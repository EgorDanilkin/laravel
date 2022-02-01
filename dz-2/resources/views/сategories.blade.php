@extends('layouts.main')

@section('content')
    <ul>
    @foreach ($categories as $category)
        <li>
            <a href="{{ route('news::category', $category->title)}}">{{ $category->title }}</a>
        </li>
    @endforeach
    </ul>
@endsection
