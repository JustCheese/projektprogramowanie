@extends('layouts.app')

@section('content')
@php 
$suma = 0; 
    foreach($wypoz as $date2){
        if($date2->data_odd < $date) 
            $suma+=1;
    }
if($suma) 
    echo "<script type='text/javascript'>alert('Masz zaległe, nieoddane filmy! Sprawdź je w panelu użytkownika!');</script>";
@endphp

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Witamy na naszej stronie!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">z
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div><br /><br />
        <div class="container">
        <h1 style="text-align: center;">Ostatnio dodane:</h1>
            <div class="row">
            @foreach($latest as $latest)
                <div class="col-xs-12 input-position text-center col-sm-6 col-lg-3 col-xl-3" id="{{$latest->id_film}}">
                    <a href="/baza/{{$latest->id_film}}"><img class="animeimg" src="img/{{$latest->id_film}}.jpg"></a>
                </div>
            @endforeach
            <div>
        </div>
    </div>
    </div><br /><br />
        <div class="container">
        <h1 style="text-align: center;">Najczęściej wypożyczane:</h1>
            <div class="row">
            @foreach($most as $most)
                <div class="col-xs-12 input-position text-center col-sm-6 col-lg-3 col-xl-3" id="{{$most->film_id}}">
                    <a href="/baza/{{$most->film_id}}"><img class="animeimg" src="img/{{$most->film_id}}.jpg"></a>
                </div>
            @endforeach
            <div>
        </div>
    </div>
        <a href="/baza"><h1 class="baza">BAZA DOSTEPNYCH FILMÓW</h1></a>
@endsection

