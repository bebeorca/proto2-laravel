@extends('layouts.main')
@section('container')
    <h2>Kategori: {{ $category }}</h2><br>

    @foreach ($menus as $menu)
        <ul style="list-style: none">
        
            <li>
                <h3>
                    <a href="/menus/{{ $menu->slug }}">
                        {{ $menu->menu }}
                    </a>
                </h3>
                
            </li>

        </ul>
    @endforeach

@endsection