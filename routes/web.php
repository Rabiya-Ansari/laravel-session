<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\logics;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});

Route::get("/directive", function () {
    return view("directive");
});

Route::get("/students", [logics::class, "getStudents"]);

Route::get("/cards", [logics::class, "productsData"]);

Route::get('/addemployee', function () {
    return view('addemployee');
});


Route::get('/getemployee', [EmployeeController::class, "getEmployee"]);



Route::post('/addemployee', [EmployeeController::class, "addEmployee"]);