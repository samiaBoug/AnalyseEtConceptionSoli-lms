<?php 



use Illuminate\Support\Facades\Route;
use App\Modules\GestionArticle\Controllers\ArticleController;

Route::prefix('articles')->group(
    function(){
        Route::get('/' , [ArticleController::class, 'index'])->name('categories.index') ;
        Route::get('/create', [ArticleController::class , 'create'])->name('categories.create');
        Route::post('/', [ArticleController::class , 'store'])->name('categories.store');
        Route::get('{id}', [ArticleController::class, 'show'])->name('categories.show');
        Route::get('{id}/edit' , [ArticleController::class, 'edit'])->name('categories.edit');
        Route::put('{id}' , [ArticleController::class , 'update']) ->name('categories/update');
        Route::delete('{id}' , [ArticleController::class, 'destroy'])->name('categories.destroy');
});