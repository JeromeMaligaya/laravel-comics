@extends('layouts.app')

@section('content')
<main>
    <section id="comics-list">
            <div class="container">
                {{-- {{ dd($comicsList) }} --}}
                <ul class="list-comics">
                    @foreach ($comicsList as $comic)
                        <li class="card-comics">
                            <a href="{{ route("route-comicShow", $loop->index) }}">
                                <div class="img-box">
                                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" />
                                </div>
                            </a>
                            <a href="{{ route("route-comicShow", $loop->index) }}">
                                <h3>{{ $comic['series'] }}</h3>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
    </section>
</main>
@endsection

@php
    $listLinks = config('db.listLinks');
    $footerListLinks = config('db.footerListLinks');
@endphp
