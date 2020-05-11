@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="/style/stylelogowanie.css">
@endsection

@section('content')
    <header>
        <div class="main-header">
            <h1>Logowanie</h1>
            <hr />
            <p>
                <input type="text" placeholder="Nazwa użytkownika">
            </p>
            <p>
                <input type="password" placeholder="Hasło">
            </p>
            <a href="/register"><p id="register">
                Nie masz konta? Zarejestruj się!
            </p></a>
            <p>
                <button>Zaloguj</button>
            </p>
        </div>
    </header>
@endsection