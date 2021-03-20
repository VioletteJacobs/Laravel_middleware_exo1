<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    // acces uniquement si enregistrer 
    public function __construct()
    {
        $this->middleware(["auth","IsWebmaster", "RoleVerification"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $articles = Article::all();
        return view("pages.article.article", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view("pages.article.createArticle" );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = New Article;
        $store->title = $request->title;
        $store->text = $request->text;
        $store->user_id = Auth::user()->id;
        $store->save();
        return redirect("/article");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view("pages.article.showArticle", compact("article"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $users = User::all();
        return view ("pages.article.editArticles", compact("users", "article"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $validate = $request->validate([
            "title" => "required|string|max:700",
            "text" => "required"
        ]);
        $article->title = $request->title; 
        $article->text = $request->text;
        $article->save();
        return redirect("/article");

        // $update = Article::find($id);
        // $update->title = $request->title;
        // $update->text = $request->text;
        // $update->user_id = Auth::user()->id;
        // $update->save();
        // return redirect("/article");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article ->delete();
        return redirect ("/article");
    }
}
