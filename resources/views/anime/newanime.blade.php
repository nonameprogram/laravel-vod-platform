@extends('layouts.app')

@section('content')

<form action="add-anime" method="POST">
    @csrf
    <input type="text" name="Name" placeholder="anime name" />
    <input type="submit" />
</form>

@endsection
