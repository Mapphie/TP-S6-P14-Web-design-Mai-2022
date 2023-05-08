<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller{

    public function getArticles(){
        $articles = Article::where('etat', 0)->paginate(9);
        $categories = Categorie::all();
        return view('article',compact('articles','categories'));
    }

    public function home(){
        $articles = Article::where('etat', 0)->paginate(9);
        return view('home',compact('articles'));
    }

    public function createInfo(Request $request){
        $titre = $request->get('titre');
        $description = $request->get('description');
        $photo = $request->photo;
        $name = Storage::disk('public')->put('images',$request->photo);
        echo $name;

        return redirect()->route('getAll_Articles');
    }

    public function login(Request $request){
        $val = DB::select('SELECT * FROM login(?,?)',[$request->get('nom'),$request->get('mdp')]);
        if($val != 0){
            return redirect()->route('article');
        }
        else if($val == 0){
            $errorMessage = 'Mot de passe érroné';
        }
        return redirect()->back()->withErrors(['email' => $errorMessage]);
    }

    public function deconnexion(){
        $articles = Article::where('etat', 0)->paginate(9);
        $categories = Categorie::all();
        return view('home',compact('articles','categories'));
    }
}
