@extends('layouts.app')
@section('content')

<h3>Zmień hasło</h3>
<form action="/ustawienia" method="POST">
    @csrf
    <input type="password" name="old" placeholder="Stare hasło" required>
    <input type="password" name="new" placeholder="Nowe hasło" required> 
    <input type="password" name="newnew" placeholder="Powtórz nowe hasło" required>
    <input type="submit" value="Zmień hasło" name="haslo">
</form>

<form action="/ustawienia" method="POST">
    @csrf
    <input type="submit" value="Usuń konto pajacu" name="delete">
</form>
    
    
@endsection