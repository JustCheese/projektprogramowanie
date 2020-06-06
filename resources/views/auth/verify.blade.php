@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Zweryfikuj adres E-Mail</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Nowy link weryfikacyjny został wysłany na Twój E-Mail.
                        </div>
                    @endif

                    Przed kontynuacją sprawdź swój E-Mail, wysłaliśmy tam link weryfikacyjny.
                    Jeśli nie dostałeś E-Maila,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">kliknij tutaj, aby wysłać nowy.</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
