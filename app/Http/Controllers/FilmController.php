<?php

namespace App\Http\Controllers;
Use \Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    public function panel(){
        $user = auth()->user();
        $user = $user->id;
        $wypoz = DB::table('wypozyczenie')
            ->join('users', 'user_id', '=', 'id')
            ->join('filmy', 'id_film', '=', 'film_id')
            ->select('wypozyczenie.*', 'users.*', 'filmy.*')
            ->where('id', $user)
            ->where('oddane', FALSE)
            ->get();
        $odd = DB::table('wypozyczenie')
            ->join('users', 'user_id', '=', 'id')
            ->join('filmy', 'id_film', '=', 'film_id')
            ->select('wypozyczenie.*', 'users.*', 'filmy.*')
            ->where('id', $user)
            ->where('oddane', TRUE)
            ->get();
        $date = date('Y-m-d');
        return view('panel', [
            'wypoz'=> $wypoz, 
            'odd'=> $odd,
            'date'=> $date,
        ]);
    }
}
