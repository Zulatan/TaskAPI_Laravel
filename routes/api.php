<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) { return $request->user(); });
// add the following lines
Route::get('tasks', [TaskController::class, 'index']);
// Route::post('tasks', [TaskController::class, 'store']);
// Route::post('tasks/delete', [TaskController::class, 'delete']);
// Route::post('tasks/complete', [TaskController::class, 'complete']);
