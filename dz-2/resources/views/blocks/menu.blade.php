<nav>
    <ul>
        @foreach($menu as $item)
            @if(array_key_exists('alias', $item))
                <li><a href="{{ route($item['alias']) }}">{{ $item['title'] }}</a></li>
            @else
                <ul>
                    {{ $item['title']}}
                    @foreach($item as $nestedItem)
                        @if(is_array($nestedItem))
                            <li><a href="{{ route($nestedItem['alias']) }}">{{ $nestedItem['title'] }}</a></li>
                        @endif
                    @endforeach
                </ul>
            @endif
        @endforeach
    </ul>
</nav>
