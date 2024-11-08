<?php
// app/Modules/GestionArticle/Models/Article.php
namespace App\Modules\GestionArticle\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\GestionCategories\Models\Category;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}