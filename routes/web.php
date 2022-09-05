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
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'index']);

Route::get('/product/pagina/{id?}', function ($id = 1)  {
    return view('pagina',['id'=> $id]);
});

Route::get('/product/{id?}', function ($id = '')  {
    return view('product',['id'=>$id]);
});

Route::get('/clicou', function () {
    $count = false;
    $count = !$count;
    if($count)
    {
        return view('pagina');
    }
    else
        return view('pagina1');
});