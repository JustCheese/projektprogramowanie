@extends('layouts.app')
@section('content')


<div class="container sr">
    <div class="card">
<h1 class="sr">USTAWIENIA</h1>
<form action="/ustawienia" method="POST">
    @csrf
    <input class="dl" type="text" name="name" placeholder="Nowa nazwa" required>
    <input class="btt" type="submit" value="Zmień" name="namee">
</form>
<form action="/ustawienia" method="POST">
    @csrf
    <input class="dl" type="text" name="newm" placeholder="Nowy email" required>
    <input class="btt" type="submit" value="Zmień" name="email">
</form>
<br />
<form action="/ustawienia" method="POST">
    @csrf
    <input class="dl2" type="password" name="old" placeholder="Stare hasło" required><br />
    <input class="dl2" type="password" name="new" placeholder="Nowe hasło" required> <br />
    <input class="dl2" type="password" name="newnew" placeholder="Powtórz nowe hasło" required><br />
    <input class="btt" type="submit" value="Zmień" name="haslo">
</form>
<br />

<br />
<br />
<form action="/ustawienia" method="POST">
    @csrf
    <input type="submit" value="USUŃ KONTO" name="delete" style="background-color: red; border: 1px rgb(103, 0, 0); font-weight: 700; margin-bottom: 25px;">
</form>
</div>
</div>
@endsection