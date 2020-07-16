<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticlesController extends Controller
{
    public function index()
    {
      $arts = Article::paginate(2);
      return view('articles.index', ['articles' => $arts]);
    }

    public function show($id)
    {
      $art = Article::find($id);
      return view('articles.show',['article' => $art]);
    }
}
