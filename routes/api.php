<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('todos/api/v1')->group(function () {
    // Define your API routes here
    Route::get('/', [TodoController::class, 'index']); // GET /todos/api/v1
    Route::get('{id}', [TodoController::class, 'show']); // GET /todos/api/v1/{id}
    Route::post('/', [TodoController::class, 'store']); // POST /todos/api/v1
    Route::put('{id}', [TodoController::class, 'update']); // PUT /todos/api/v1/{id}
    Route::delete('{id}', [TodoController::class, 'destroy']); // DELETE /todos/api/v1/{id}
});
