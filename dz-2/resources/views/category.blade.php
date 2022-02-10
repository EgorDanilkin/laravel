@extends('layouts.main')

@section('content')
    @forelse($news as $item)
        <div>
            <a href="{{ route('news', $item['id'])}}">{{ $item['title'] }}</a>
        </div>
    @empty
        В данной категории новостей нет
    @endforelse
@endsection

