<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\TodoController;
Route::prefix("/api/todos")->group(function(){
Route::get("/all",[TodoController::class,'index']);
Route::get("/show/{tid}",[TodoController::class,'show']);
Route::post("/add",[TodoController::class,'addTodo']);
Route::put("/update/{tid}",[TodoController::class,'updateTodo']);
Route::delete("/delete/{tid}",[TodoController::class,'deleteTodo']);
});

use App\Http\Controllers\PostController;
Route::prefix("/api/posts")->group(function(){
Route::get("/all",[PostController::class,'index']);
Route::get("/show/{pid}",[PostController::class,'show']);
Route::post("/add",[PostController::class,'addPost']);
Route::put("/update/{pid}",[PostController::class,'updatePost']);
Route::delete("/delete/{pid}",[PostController::class,'deletePost']);
});
