<?php

namespace App\Modules\GestionArticle\Seeders;

use App\Modules\GestionArticle\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        Article::create(['title' => 'First Article', 'content' => 'This is the first article content.', 'category_id' => 1]);
        Article::create(['title' => 'Second Article', 'content' => 'This is the second article content.', 'category_id' => 2]);
    }
}