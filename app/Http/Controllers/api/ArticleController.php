<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
    public function show(){
        $article = Article::with('comments','tags','state')->first();
        return new ArticleResource($article);
    }
}
