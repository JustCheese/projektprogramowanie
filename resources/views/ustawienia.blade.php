@extends('layouts.app')
@section('content')

<h3>Zmień dane</h3>
<form action="/ustawienia" method="POST">
    @csrf
    <input type="password" name="old" placeholder="Stare hasło" required>
    <input type="password" name="new" placeholder="Nowe hasło" required> 
    <input type="password" name="newnew" placeholder="Powtórz nowe hasło" required>
    <input type="submit" value="Zmień" name="haslo">
</form>

<form action="/ustawienia" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nowa nazwa" required>
    <input type="submit" value="Zmień" name="namee">
</form>

<form action="/ustawienia" method="POST">
    @csrf
    <input type="text" name="newm" placeholder="Nowy email" required>
    <input type="submit" value="Zmień email" name="email">
</form>

<form action="/ustawienia" method="POST">
    @csrf
    <input type="submit" value="Usuń konto pajacu" name="delete">
</form>
    
    
@endsection