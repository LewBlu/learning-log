<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;

class DashboardController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        $articles = Article::all();
        return view('dashboard.index', [
            'tags' => $tags,
            'articles' => $articles,
        ]);
    }
}
