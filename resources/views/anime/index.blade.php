@extends('layouts.app')

@section('content')

    <h1> Wszystkie anime </h1>

    @foreach($allAnimes as $anime)
        {{-- slug --}}
        <div style="width:25%;float:left;">
        <a href=""><img src="/{{str_replace(":", "", str_replace(" ", "-", strtolower($anime->name)))}}.jpg" style="width:180px"></a> <br>
        Nazwa:      {{ $anime->name }}      <br>
        Opis:      {{ $anime->description }}      <br>
        Typ:        {{ $anime->type }}      <br>
        Premiera:   {{ $anime->premiere }}  <br>
        Status:      {{ $anime->status }}      <br>
        Sezon:      {{ $anime->season }}      <br>
        Studio:     {{ $anime->studio }}    <br>
        Odcinki:     {{ $anime->episodes }}    <br>
        Tagi:
        @foreach($anime->genres as $genre)
          {{ $genre }},
        @endforeach
        <br><br>
        @foreach(array_reverse($anime->episodesLinks) as $episode)
        {{-- @foreach($anime->episodesLinks as $episode) --}}
            {{$episode['id']}}
            {{$episode['name']}}  <br>
            {{$episode['url']}}  <br>  <br>
        @endforeach
        </div>
    @endforeach

@endsection



