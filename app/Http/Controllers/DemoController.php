<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class DemoController extends Controller
{
    function article(Request $request)
    {
        $article = Article::find(2);
        return $article;
    }

    function articles(Request $request)
    {
        $articles = Article::all();
        return $articles;
    }
}
