<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class ArticleController extends Controller
{
    public function liste_article(){
        $articles = Article::all();
        return view('article.liste', compact('articles'));
    }
    
    public function ajouter_article(){
        return view('article.ajouter');
    }

    public Function ajouter_article_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',

        ]);

        $article = new Article();
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->save();

        return redirect('/ajouter')->with('status', 'L\ article a bien été ajouté avec succes.');

    }

    public function modifier_article($id){
        $articles = Article::find($id);

        return view('article.modifier', compact('articles'));
    }

    public function modifier_article_traitement(Request $request){

        $request->validate([
            'nom' => 'required',
            'description' => 'required',

        ]);

        $article = Article::find($request->id);
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->update();
        return redirect('/article')->with('status', 'L\ article a bien été modifié avec succes.');


    }

    public function supprimer_article($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/article')->with('status', 'L\ article a bien été supprimé avec succes.');

    }
}
