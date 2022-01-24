@extends('layouts.main')

@section('content')
    @forelse($news as $id => $item)
        <div>
            <a href="{{ route('news', $id + 1)}}">{{ $item['title'] }}</a>
        </div>
    @empty
        В данной категории новостей нет
    @endforelse
@endsection

