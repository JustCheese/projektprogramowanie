<?php

namespace App\Http\Controllers;
Use \Carbon\Carbon;
use Illuminate\Http\Request;
use App\Film;
use App\Wypozyczenia;
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
        $users = DB::table('users')->select('users.*')->get();
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
                    echo "<script type='text/javascript'>alert('Hasła nie są takie same!');</script>";
                }
            }
            else{
                echo "<script type='text/javascript'>alert('Wpisz poprawne hasło!');</script>";
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
        if(request('namee')){
            $sum = 0; 
            foreach($users as $dat){
            if($dat->name === request('name')){
                $sum+=1;
            } 
            }
            if($sum)
                echo "<script type='text/javascript'>alert('Nazwa użytkownika już istnieje!');</script>";
            else{
                $users = DB::table('users')
                ->where('id', $use)
                ->update(['name' => request('name')]);
                return redirect('/ustawienia');
            }
        }
        if(request('email')){
            $su = 0; 
            foreach($users as $dat){
            if($dat->email === request('newm')){
                $su+=1;
            } 
            }
            if($su) 
                echo "<script type='text/javascript'>alert('Taki email już istnieje!');</script>";
            else{
                $users = DB::table('users')
                    ->where('id', $use)
                    ->update(['email' => request('newm')]);
                    return redirect('/ustawienia');
            }
        }
        
        return view('ustawienia');
            
    }
    public function baza(){
        $filmy = Film::all();
        $search = 0;
        $name = explode(" ", request('name'));
        if(request('search')){
            $search = Film::Where(function($query) use($name){
                for($i = 0; $i < count($name); $i++){
                    $query->orwhere('reżyser', 'like',  '%'. $name[$i] .'%')
                        ->orwhere('nazwa', 'like',  '%'. $name[$i] .'%')
                        ->orwhere('gatunek', 'like',  '%'. $name[$i] .'%')
                        ->orwhere('rok_premiery', 'like',  '%'. $name[$i] .'%');
                }      
            })->get();  
            return view('baza', [
                'search'=> $search, 
            ]);
        }
        return view('baza', [
            'filmy'=> $filmy, 
            'search'=> $search,
        ]);
    }
    public function show($id){
        $film = Film::findOrFail($id);
        $suma = 0;
        if($user = auth()->user()){
            $suma+=1;
        }
        return view('film', [
            'film'=> $film,
            'suma'=> $suma,
        ]);
    }
    public function wypozycz($id){
        $film = Film::findOrFail($id);
        $user = auth()->user();
        $use = $user->id;
        $sum = 0;
        $suma = 0;
        if($user = auth()->user()){
            $suma+=1;
        }
        $wypozyczenia = Wypozyczenia::all();
        if(request('wypozycz')){
            $wyp = new Wypozyczenia();
            $wyp->id_wypozyczenie = NULL;
            $wyp->film_id = $id; 
            $wyp->user_id = $use;
            $wyp->data_wyp = NOW();
            $wyp->data_odd = date('Y-m-d', strtotime(NOW(). ' +30 days'));
            $wyp->oddane = FALSE;
            foreach($wypozyczenia as $w){
                if($w->film_id == $id && $w->user_id == $use && $w->oddane == FALSE){
                    $sum+=1;
                }
            }
            if($sum){
                echo "<script type='text/javascript'>alert('Już masz ten film wypożyczony!');</script>";  
            }
            else{
                $wyp->save();
                return redirect('/panel');
            }
            return view('film', [
                'film'=> $film,
                'suma'=> $suma,
            ]);
         }
    }
    public function oddaj(Request $request){
        $oddaj = DB::table('wypozyczenie')->select('wypozyczenie.*')->get();
        $name = $request->input('hidden');
        if(request('oddaj')){
            $oddaj = DB::table('wypozyczenie')
                ->where('id_wypozyczenie', $name)
                ->update(['oddane' => TRUE]);
                return redirect('/panel');
        }
    }
    
}