<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        // $articles = Article::all();
        $articles = Cache::remember('articles', 22*60, function() {
            return Article::all();
        });
        return response()->json($articles);
    }
}