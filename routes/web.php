<?php

use App\Http\Controllers\logics;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',function(){
 return view('home');
});


Route::get('/about',function(){
 return view('about');
});

Route::get("/cards", [logics::class,"productsData"]);
