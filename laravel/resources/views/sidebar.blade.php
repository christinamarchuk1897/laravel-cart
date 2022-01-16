{{-- @extends('layouts.app') --}}

<div class="sidebar">
    <ul class="sidebar-wrapper">
        <li class="sidebar-item">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li>
            <a href="{{ route('catalog') }}">Catalog</a>
        </li>
        {{-- <li>
            <a href="{{ route('wishlist') }}"></a>
        </li>
        <li>
            <a href="{{ route('favorites') }}"></a>
        </li> --}}
        <li>
            <a href="{{ route('settings') }}">Settings</a>
        </li>
    </ul>
</div>
