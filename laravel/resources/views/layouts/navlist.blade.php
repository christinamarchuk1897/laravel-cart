<ul class="nav justify-content-center">
    @if (Route::currentRouteName() == 'catalog' || Route::currentRouteName() == 'catalog.show')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('catalog', 'all') }}">All</a>
        </li>
    @endif
    @foreach ($data as $item)
        <li>
           <a class="nav-link" href="{{ route($route, $item->id) }}">{{ $item->name }}</a>
        </li>
    @endforeach
</ul>
