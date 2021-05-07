@extends('layouts.app')

@section('content')

<form action="search" method="POST">
    @csrf
    <input type="text" name="searchAnime" placeholder="anime name" />
    <input type="submit" />
</form>

@endsection
