<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Film;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $user = $user->id;
        $wypoz = DB::table('wypozyczenie')
            ->join('users', 'user_id', '=', 'id')
            ->join('filmy', 'id_film', '=', 'film_id')
            ->select('wypozyczenie.*', 'users.*', 'filmy.*')
            ->where('id', $user)
            ->where('oddane', FALSE)
            ->get();
        $date = date('Y-m-d');
        $latest = Film::orderBy('id_film', 'desc')->take(4)->get();
        return view('home', [
            'wypoz'=> $wypoz, 
            'date'=> $date,
            'latest'=> $latest,
        ]);
    }
    
}
