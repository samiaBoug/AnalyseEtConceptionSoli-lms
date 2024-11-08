<?php
namespace App\Modules\GestionCategories\Seeders;

use App\Modules\GestionCategories\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Technology']);
        Category::create(['name' => 'Health']);
        Category::create(['name' => 'Lifestyle']);
    }
}