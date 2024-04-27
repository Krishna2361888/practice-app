<?php

use App\Http\Controllers\IdeaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ DashboardController::class , 'index' ])->name('dashboard');

Route::post('/ideas', [ IdeaController::class , 'store' ])->name('ideas.store');

Route::delete('/ideas/{id}', [ IdeaController::class , 'destroy' ])->name('idea.destroy');


Route::get('/terms', function(){
    return view('terms');
});
