@extends('layouts.default') {{-- Gebruik layout (sjabloon) 'default' --}}

@section('page-title', "Artikel $id") {{-- "Veld" 'page-title' van sjabloon wordt voor deze pg ingevuld met 'Homepage'. --}}

@section('content') {{-- "Veld" 'content' van sjabloon wordt voor deze pg ingevuld met alles tussen de tags. --}}
    <h1>Concreet artikel</h1>
    <h2>Artikel met id {{$id}}</h2>
    <p>Deze php genereert artikelpagina's obv een db. Dus met een hoop echo's, bv article_title, article_body, ...</p>
@endsection

