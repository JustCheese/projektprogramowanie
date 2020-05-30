@extends('layouts.app')
@section('content')
<img class="animeimg" src="/img/{{$film->id_film}}.jpg">
        {{ $film->nazwa }} <br />
        @if ($suma)
            <button>Wypożycz</button>
        @else
            <h1> Aby wypożyczyć, proszę się zalogować! </h1>
        @endif
        {{ $film->opis }}
        
@endsection