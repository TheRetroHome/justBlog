<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
    public function show(Request $request){
        $slug = $request->get('slug');
        $article = Article::findBySlug($slug);
        return new ArticleResource($article);
    }
    public function viewsIncrement(Request $request){
        $slug = $request->get('slug');
        $article = Article::findBySlug($slug);
        $article->state->increment('views');
        return new ArticleResource($article);
    }
    public function likesIncrement(Request $request){
        $slug = $request->get('slug');
        $article = Article::findBySlug($slug);
    }
}
