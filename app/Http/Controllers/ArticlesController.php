<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\User;

use Carbon\Carbon;

class ArticlesController extends Controller
{
    public function index(){
    	$articles = User::find(1) -> articles() -> latest() -> get(); 

    	return view('articles.index', compact('articles'));
    }

    public function show($id){
    	$article = Article::findOrFail($id);

    	return view('articles.show', compact('article'));
    }

    public function create(){
    	return view('articles.create');
    }

    public function store(ArticleRequest $request){
    	$input = $request -> all();
        Article::create($input);

        \Session::flash('flash_message','Your article has been added!');

    	return redirect('articles');
    }

    public function edit($id){
        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request){
        $article = Article::findOrFail($id);
        $article -> update($request -> all());

        return redirect('articles');
    }
}
