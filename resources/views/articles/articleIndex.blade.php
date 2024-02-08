@extends('layouts.default') {{-- Gebruik layout (sjabloon) 'default' --}}

@section('page-title', 'Artikel index') {{-- "Veld" 'page-title' van sjabloon wordt voor deze pg ingevuld met 'Homepage'. --}}

@section('content') {{-- "Veld" 'content' van sjabloon wordt voor deze pg ingevuld met alles tussen de tags. --}}
    <h1>Articles home</h1>

    <h2>Mijn artikels</h2>
    <p>Dit is de artikels homepage.</p>

    <ul>
        <li><a href="{{route('article.show', 1)}}">Artikel 1</a></li>
        <li><a href="{{route('article.show', 2)}}">Artikel 2</a></li>
        <li><a href="{{route('article.show', 3)}}">Artikel 3</a></li>
        <li><a href="{{route('article.show', 4)}}">Artikel 4</a></li>
    </ul>
@endsection
