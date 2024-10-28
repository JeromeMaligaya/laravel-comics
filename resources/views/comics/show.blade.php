@extends('layouts.app')

@section('content')
<main>
    <section id="comic-item">
        <div class="container">
            <div class="comic-card">
                <div class="img-box">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </div>
                <div class="comic-info">
                    <h1>{{ $comic['title'] }}</h1>
                    <h3>Series: {{ $comic['series'] }}</h3>
                    <p>Price: {{ $comic['price'] }}</p>
                    <p>Sale Date: {{ $comic['sale_date'] }}</p>
                    <p>{{ $comic['description'] }}</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@php
    $listLinks = config('db.listLinks');
    $footerListLinks = config('db.footerListLinks');
@endphp

