@extends('layouts.app')
@section('content')
    <div class="container">
    <span class="blue"><h3>Wypożyczone:</h3></span> <br />
    @foreach($wypoz as $wyp)
        {{ $wyp->nazwa }}  
        <form action="/panel" method="POST">
            @csrf
            <input type="hidden" name="hidden" value="{{ $wyp->id_wypozyczenie }}">
            <input class="btt" type="submit" name="oddaj" value="Oddaj film">
        </form><br />
    @endforeach

    <span class="blue"><h3>Oddane:</h3></span> <br />
    @foreach($odd as $odd)
        {{ $odd->nazwa }} <br />
    @endforeach <br />

    <span class="blue"><h3>Filmy, które zalegają za zwrotem:</h3></span>
    @foreach($wypoz as $date2)
         @if($date2->data_odd < $date) <br /> 
             {{ $date2->nazwa }} 
         @endif
    @endforeach <br />
    
    <a href="/ustawienia"><input style="float: right;" type="submit" name="wypozycz" value="Ustawienia" class="btt"></a>
    </div>
@endsection