
<div id="viewport">
  <div id="sidebar">
    @if (isset($data))
        <ul class="nav">
            @if (Route::currentRouteName() == 'catalog' || Route::currentRouteName() == 'catalog.show')
                <li>
                    <a href="{{ route('catalog', 'all') }}">All</a>
                </li>
            @endif
            @foreach ($data as $item)
                <li>
                    <a href="{{ route($route, $item->id) }}">{{ $item->name }}</a>
                </li>
            @endforeach
        </ul>
    @endif
  </div>
</div>
