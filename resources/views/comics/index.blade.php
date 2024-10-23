@extends('layouts.app')

@section('content')
<section id="comics-list">
        <div class="container">
            {{-- {{ dd($comicsList) }} --}}
            <ul class="list-comics">
                @foreach ($comicsList as $comic)
                    <li class="card-comics">
                        <a href="#">
                            <div class="img-box">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" />
                            </div>
                        </a>
                        <a href="#">
                            <h3>{{ $comic['series'] }}</h3>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
</section>
@endsection

@php
    $listLinks = config('db.listLinks');
    $footerListLinks = config('db.footerListLinks');
@endphp
