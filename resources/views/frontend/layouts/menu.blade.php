<ul>
    @foreach($items as $item)
        <li><a href="{{ $item->link() }}" title="{{ $item->title }}"><span>{{ $item->title }}</span></a></li>
    @endforeach
</ul>