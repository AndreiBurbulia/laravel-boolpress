<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Article;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Con la paginazione
// Route::get('articles', function () {
//     $articles = Article::paginate();
//     return $articles;
// });

/*
// con le relazioni con get
Route::get('articles', function () {
     $articles = Article::with(['category', 'tags'])->get();  //va a prendere il nome della funzione della relazione
     return $articles;
});
*/
/*
// con le relazioni con paginate 
Route::get('articles', function () {
    $articles = Article::with(['category', 'tags'])->paginate();  //va a prendere il nome della funzione della relazione
    return $articles;
});
*/

Route::get('articles', 'API\ArticleController@index');
