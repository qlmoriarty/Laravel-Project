<?php

namespace App\Http\Controllers;

use App\Article;
//use Illuminate\Http\Request;

use App\Http\Requests;
use Carbon\Carbon;
use Request;

class ArticlesController extends Controller
{

    public function index()
    {
//       Получить все
//        $articles = Article::all();
//      Получить последние
        $articles = Article::latest()->get();
        return view('articles.index', compact('articles'));
//    return $articles;
    }
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }
    public function store(Requests\CreateArticleRequest $request)
    {
        $input = Request::all();


        Article::create($input);

//        $input = Request::get('body');
        return redirect('articles');
//        return $input;
    }
    public function edit($id)
    {
        $article = Article::findORFail($id);

        return view('articles.edit', compact('article'));

//        return $edit;
    }

}
