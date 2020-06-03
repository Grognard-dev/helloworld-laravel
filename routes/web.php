<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{prenom}-{age}','HelloController@show');
/*Route::get('/hello/{prenom}-{age}', function ($prenom,$age) {
  


    return view('hello',[
        'toto' => $prenom,
        'age'=> $age
    ]
    
    
    );
});
*/

Route::get('compteur/{nombre}', function ($nombre)
{
    for($i = 1; $i <= $nombre; $i++){
        echo $i.'<br>';
    }
});

Route::get('articles', function()
{
    $articles = ['article1','article2'];
    return view('articles',[
        'articles' => $articles
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
