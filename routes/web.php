<?php

use App\Http\Controllers\IdeaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ DashboardController::class , 'index' ])->name('dashboard');

Route::post('/idea', [ IdeaController::class , 'store' ])->name('idea.create');


Route::get('/terms', function(){
    return view('terms');
});