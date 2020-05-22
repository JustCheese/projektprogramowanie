@extends('layouts.app')
@section('content')

    Wypożyczone: <br />
    @foreach($wypoz as $wyp)
        {{ $wyp->nazwa }} <br /> 
    @endforeach

    Oddane: <br />
    @foreach($odd as $odd)
        {{ $odd->nazwa }} <br />
    @endforeach <br />

    Filmy, które zalegają za zwrotem: 
    @foreach($wypoz as $date2)
         @if($date2->data_odd < $date) <br /> 
             {{ $date2->nazwa }} 
         @endif
    @endforeach
    
@endsection