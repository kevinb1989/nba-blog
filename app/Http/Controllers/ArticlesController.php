<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\User;
use App\Tag;

use Carbon\Carbon;

class ArticlesController extends Controller
{
    public function index(){
    	$articles = User::find(1) -> articles() -> latest('published_at') -> get();         

    	return view('articles.index', compact('articles'));
    }

    public function show($id){
    	$article = Article::findOrFail($id);

    	return view('articles.show', compact('article'));
    }

    public function create(){
        $tags = Tag::lists('name', 'id');
    	return view('articles.create', compact('tags'));
    }

    public function store(ArticleRequest $request){
    	$input = $request -> all();

        $article = Article::create($input);

        $article->tags()->attach($request -> input('tag_list'));

        \Session::flash('flash_message','Your article has been added!');

    	return redirect('articles');
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        $tags = Tag::lists('name', 'id');

        return view('articles.edit', compact('article')) -> with('tags', $tags);
    }

    public function update($id, ArticleRequest $request){
        $article = Article::findOrFail($id);
        $article -> update($request -> all());

        $article->tags()->sync($request -> input('tag_list'));

        return redirect('articles');
    }
}
