@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
            @foreach($latest as $latest)
                <div class="col-xs-12 input-position text-center col-sm-6 col-lg-3 col-xl-3" id="{{$latest->id_film}}">
                    <a href="/baza/{{$latest->id_film}}"><img class="animeimg" src="img/{{$latest->id_film}}.jpg"></a>
                </div>
            @endforeach
            <div>
</div>
@endsection