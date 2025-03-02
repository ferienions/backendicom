<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;

use App\Http\Controllers\ScategorieController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
//hethy t3awa4 hekom les 5 routes :

/*Route::middleware('api')->group(function () {
    Route::resource('categories', CategorieController::class);
    });*/

    Route::get("/categories",[CategorieController::class,"index"]);
    Route::post("/categories",[CategorieController::class,"store"]);
    Route::get("/categories/{id}",[CategorieController::class,"show"]);
    
    Route::delete("/categories/{id}",[CategorieController::class,"destroy"]);
    Route::put("/categories/{id}",[CategorieController::class,"update"]);

   
Route::middleware('api')->group(function () {

Route::resource('scategories', ScategorieController::class);

});

Route::get('/scat/{idcat}', [ScategorieController::class,'showSCategorieByCAT']);