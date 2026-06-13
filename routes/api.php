<?php

use App\Http\Controllers\Api\TareaController;
use Illuminate\Support\Facades\Route;

Route::apiResource('tareas', TareaController::class);