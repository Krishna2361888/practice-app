<?php

use App\Http\Controllers\IdeaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ DashboardController::class , 'index' ])->name('dashboard');

Route::get('/ideas/{idea}', [ IdeaController::class , 'show' ])->name('ideas.show');

Route::post('/ideas', [ IdeaController::class , 'store' ])->name('ideas.store');

Route::get('/ideas/{idea}/edit', [ IdeaController::class , 'edit' ])->name('ideas.edit');

Route::put('/ideas/{idea}', [ IdeaController::class , 'update' ])->name('ideas.update');

Route::delete('/ideas/{idea}', [ IdeaController::class , 'destroy' ])->name('idea.destroy');


Route::get('/terms', function(){
    return view('terms');
});
