<?php

use App\Http\Controllers\Api\V1\TasksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('/tasks', [TasksController::class, "index"])->name("tasks.index");
// Route::post('/tasks', [TasksController::class, "store"])->name("tasks.store"); 
// Route::post('/tasks/{task}', [TasksController::class, "show"])->name("tasks.show"); 
// Route::delete('/tasks/{task}', [TasksController::class, "destroy"])->name("tasks.destroy"); 

Route::prefix('v1')->group(function(){
    Route::apiResource("tasks", TasksController::class);
});
 
