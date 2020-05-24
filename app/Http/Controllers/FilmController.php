<?php

namespace App\Http\Controllers;
Use \Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
    public function ustawienia(){
        return view('ustawienia');
    }
    public function zmiany(){
        $user = auth()->user();
        $use = $user->id;
        $now = NOW();
        $odd = DB::table('users')
            ->where('id', $use)
            ->get();
        $pass = $user->password;
        $wypoz = DB::table('wypozyczenie')
            ->join('users', 'user_id', '=', 'id')
            ->join('filmy', 'id_film', '=', 'film_id')
            ->select('wypozyczenie.*', 'users.*', 'filmy.*')
            ->where('id', $use)
            ->where('oddane', FALSE)
            ->get();
        $date = date('Y-m-d');
        if(request('haslo')){
            if(Hash::check(request('old'), $pass)){
                if(request('new')===request('newnew')){
                    $password = Hash::make(request('new'));
                    $users = DB::table('users')
                    ->where('id', $use)
                    ->update(['password' => $password]);
                    return redirect('/ustawienia');
                }
                else{
                    echo "Hasła nie są takie same!";
                }
            }
            else{
                echo "Wpisz poprawne hasło!";
            }
        }
        if(request('delete')){
            $suma = 0; 
            foreach($wypoz as $date2){ 
                $suma+=1;
            }
            if($suma){
                echo "<script type='text/javascript'>alert('Nie możesz usunąć konta, ponieważ masz nieoddane fimy!');</script>";
            }  
            else{
                $users = DB::table('users')
                ->where('id', $use)
                ->update(['deleted_at' => $now]);
                return redirect('/');
            } 
        }
        return view('ustawienia');
            
    }
}
