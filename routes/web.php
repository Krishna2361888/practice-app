<?php

use App\Http\Controllers\IdeaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ DashboardController::class , 'index' ])->name('dashboard');

Route::get('/ideas/{idea}', [ IdeaController::class , 'show' ])->name('ideas.show');

Route::post('/ideas', [ IdeaController::class , 'store' ])->name('ideas.store');

Route::delete('/ideas/{id}', [ IdeaController::class , 'destroy' ])->name('idea.destroy');


Route::get('/terms', function(){
    return view('terms');
});
