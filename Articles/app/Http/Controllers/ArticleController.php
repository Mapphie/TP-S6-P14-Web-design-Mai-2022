<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller {

    public function new(){
        $categories = Categorie::all();
        return view('newArticle',compact('categories'));
    }

    public function create(Request $request){
        $titre = $request->get('titre');
        $resume = $request->get('resume');
        $id_categorie = $request->get('categorie');
        $contenu = $request->get('contenu');

        $name = Storage::disk('public_uploads')->put('images',$request->image);

        $article = new Article();

        $article->titre = $titre;
        $article->resume = $resume;
        $article->image = $name;
        $article->id_categorie = $id_categorie;
        $article->contenu = $contenu;
        $article->save();
        return redirect()->route('home');
    }

    public function modifier($id){
        $article =  Article::find($id);
        $categories = Categorie::all();
       return view('ModifArticle',compact('article','categories'));
    }

    public function modifier_article(Request $request){
        $id = $request->get('id');
        $article = Article::find($id);
        $name = Storage::disk('public')->put('images',$request->image);

        $article->titre = $request->get('titre');
        $article->resume = $request->get('resume');
        $article->image = $name;
        $article->id_categorie = $request->get('categorie');
        $article->contenu = $request->get('contenu');
        $article->date=date('Y/m/d');
        $article->update();

        return redirect()->route('getArticle',['id'=>$id]);
    }

    public function uploadimage(Request $request){
        if($request->hasFile('upload')){
            $originName = $request->file('upload')->getClientOriginalName();
            $filename = pathinfo($originName,PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $filename = $filename.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('media'),$filename);
            $url = asset('media/'.$filename);
            return response()->json(
                ['filename'=> $filename,
                    'uploaded'=>1,
                    'url'=>$url
                ]);
        }
    }

    public function getArticle($idd){
       $article =  Article::find($idd);
       $categories = Categorie::all();
       return view('infoArticle',compact('article','categories'));
    }

    public function supp($id){
        $article= Article::find($id);
        $article->etat = -1;
        $article->update();
        return response()->json(['message' => 'L\'élément a été supprimé avec succès']);
    }
}
