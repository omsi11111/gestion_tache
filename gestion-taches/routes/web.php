<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Route pour les tâches
Route::resource('tasks', TaskController::class);
