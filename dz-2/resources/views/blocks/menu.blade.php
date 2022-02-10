<nav>
    <ul>
        @foreach($menu as $item)
            <li><a href="{{ route($item['alias']) }}">{{ $item['title'] }}</a></li>
        @endforeach
    </ul>
</nav>
