@extends('layouts.app')
@section('content')


<div class="container sr">
    <div class="card">
<h1 class="sr">USTAWIENIA</h1>
<form action="/ustawienia" method="POST">
    @csrf
    <input class="dl" type="text" name="name" placeholder="Nowa nazwa" required >
    <input class="btt" type="submit" value="Zmień" name="namee">
    <p id="nazwa1"></p>
</form>
<form action="/ustawienia" method="POST">
    @csrf
    <input class="dl" type="text" name="newm" placeholder="Nowy email" required>
    <input class="btt" type="submit" value="Zmień" name="email">
    <p id="nazwa2"></p>
</form>
<br />
<form action="/ustawienia" method="POST">
    @csrf
    <input class="dl2" type="password" name="old" placeholder="Stare hasło" required><br />
    <input class="dl2" type="password" name="new" placeholder="Nowe hasło" required> <br />
    <input class="dl2" type="password" name="newnew" placeholder="Powtórz nowe hasło" required><br />
    <p id="nazwa3"></p>
    <input class="btt" type="submit" value="Zmień" name="haslo">
</form>
<br />

<br />
<br />
<form action="/ustawienia" method="POST">
    @csrf
    <input type="submit" value="USUŃ KONTO" name="delete" style="background-color: red; border: 1px rgb(103, 0, 0); font-weight: 700; margin-bottom: 25px;">
    <p id="nazwa4"></p>
</form>
</div>
</div>
<script>    
        var sumka1 = {!! json_encode($sumka1 ?? '') !!};
        var sumka2 = {!! json_encode($sumka2 ?? '') !!};
        var sumka3 = {!! json_encode($sumka3 ?? '') !!};
        var sumka4 = {!! json_encode($sumka4 ?? '') !!};
        var sumka5 = {!! json_encode($sumka5 ?? '') !!};
        if(sumka1)
            document.getElementById("nazwa1").innerHTML = "Nazwa jest już zajęta!";
        if(sumka2)
            document.getElementById("nazwa2").innerHTML = "E-Mail jest już zajęty!";
        if(sumka3)
            document.getElementById("nazwa3").innerHTML = "Hasła nie są takie same!";
        if(sumka4)
            document.getElementById("nazwa4").innerHTML = "Nie możesz usunąć konta, ponieważ masz zaległe, nieoddane filmy!";
        if(sumka5)
            document.getElementById("nazwa3").innerHTML = "Wpisz poprawne hasło!";
        
</script>
@endsection