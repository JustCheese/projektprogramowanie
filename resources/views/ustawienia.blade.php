@extends('layouts.app')
@section('content')

<form action="/ustawienia" method="GET">
    @csrf
    <input type="submit" value="Usuń konto pajacu" name="delete">
</form>
    
    
@endsection