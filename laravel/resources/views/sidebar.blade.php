
<div id="viewport">
  <div id="sidebar">
    @if (isset($data))
        <ul class="nav">
            @auth
                    @if (Route::currentRouteName() == 'catalog' || Route::currentRouteName() == 'catalog.show')
                        <li>
                            <a href="{{ route('catalog', 'all') }}">All</a>
                        </li>
                    @endif
            @endauth
            @guest
                @if (Route::currentRouteName() == 'guestCatalog' || Route::currentRouteName() == 'guestCatalogShow')
                    <li>
                    <a href="{{ route('guestCatalog', 'all') }}">All</a>
                </li>
                @endif
            @endguest
            @foreach ($data as $item)
                <li>
                    @auth
                        <a href="{{ route($route, $item->id) }}">{{ $item->name }}</a>
                    @endauth
                    @guest
                        <a href="{{ route('guestCatalogShow', $item->id) }}">{{ $item->name }}</a>
                    @endguest
                </li>
            @endforeach
        </ul>
    @endif
  </div>
</div>
