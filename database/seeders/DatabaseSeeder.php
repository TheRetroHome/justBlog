<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use App\Models\State;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Article;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $tags = Tag::factory(10)->create();
        $articles = Article::factory(20)->create();
        $tags_id = $tags->pluck('id');

        $articles->each(function ($article) use ($tags_id){
           $article->tags()->attach($tags_id->random(3));
           Comment::factory(3)->create([
               'article_id'=>$article->id
           ]);
           State::factory(1)->create([
              'article_id'=>$article->id
           ]);
        });
    }
}
