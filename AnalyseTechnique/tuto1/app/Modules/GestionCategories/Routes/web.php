<?php

use Illuminate\Support\Facades\Route;
use App\Modules\GestionCategories\Controllers\CategorieController;

Route::prefix('articles')->group(
    function(){
        Route::get('/' , [CategorieController::class, 'index'])->name('articles.index') ;
        Route::get('/create', [CategorieController::class , 'create'])->name('articles.create');
        Route::post('/', [CategorieController::class , 'store'])->name('articles.store');
        Route::get('{id}', [CategorieController::class, 'show'])->name('articles.show');
        Route::get('{id}/edit' , [CategorieController::class, 'edit'])->name('articles.edit');
        Route::put('{id}' , [CategorieController::class , 'update']) ->name('articles/update');
        Route::delete('{id}' , [CategorieController::class, 'destroy'])->name('articles.destroy')->name('articles.destroy');
});