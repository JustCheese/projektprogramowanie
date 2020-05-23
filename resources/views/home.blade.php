@extends('layouts.app')

@section('content')
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
    <div id="test">
        <h1>Najnowsze filmy<h1>
    <div id="imgnow">
        <img class="hov" src="img/now1.png">
        <img class="hov" src="img/now2.png">
        <img class="hov" src="img/now3.png">
        <img class="hov" src="img/now4.png">
        <img class="hov " src="img/now5.png">
    <div>
    </div>
</div>
@endsection
