<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * API to hit: http://localhost/laravel-poc/public/api/addnewtask?taskName={"taskName"}&api_token={"api_token"}
 */
Route::middleware('ToDoOps')->post('/addnewtask', [ToDoController::class,'addNewTask']);

/**
 * API to hit: http://localhost/laravel-poc/public/api/deletetask?taskId={"taskId"}&api_token={"api_token"}
 */
Route::middleware('ToDoOps')->post('/deletetask', [ToDoController::class,'deleteTask']);

/**
 * API to hit: http://localhost/laravel-poc/public/api/updateTaskName?api_token={"api_token"}&taskId={"taskId"}&taskName={"taskName"}
 */
Route::middleware('ToDoOps')->post('/updateTaskName', [ToDoController::class,'updateTaskName']);

/**
 * API to hit: http://localhost/laravel-poc/public/api/markTaskCompleted?api_token={"api_token"}&taskId={"taskId"}
 */
Route::middleware('ToDoOps')->post('/markTaskCompleted', [ToDoController::class,'markTaskCompleted']);

/**
 * 
 */
Route::post('/get-api-token', function (Request $request) {
    $apiToken = decrypt($request->input('laravelApiToken'));
    if ($apiToken != config('app.inner_transaction_token')) {
        abort(401, 'Unauthorized');
    }
    return response()->json(['api_token' => encrypt(config('app.api_token'))]);
});





