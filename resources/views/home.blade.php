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
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Pomyślnie zalogowano!
                </div>
            </div>
        </div>
    </div><br /><br />
        <h1>Najnowsze filmy anime<h1>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <img class="animeimg" src="img/img1.jpg">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <img class="animeimg" src="img/img2.jpg">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <img class="animeimg" src="img/img3.jpg">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <img class="animeimg" src="img/img4.jpg">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <img class="animeimg" src="img/img4.jpg">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <img class="animeimg" src="img/img4.jpg">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <img class="animeimg" src="img/img4.jpg">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <img class="animeimg" src="img/img4.jpg">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <img class="animeimg" src="img/img4.jpg">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <img class="animeimg" src="img/img4.jpg">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <img class="animeimg" src="img/img4.jpg">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <img class="animeimg" src="img/img4.jpg">
        </div>
    <div>
    </div>
@endsection
