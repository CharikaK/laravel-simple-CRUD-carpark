<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Laravel 8
use App\Http\Controllers\CarListControllers;

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

// with controllers
//Route::get('/','HomeController@index'); // Laravel 7
Route::get('/', [HomeController::class, 'index']); // Laravel 8

Route::get('/showAll', [HomeController::class, 'showAll']);

Route::get('/car/{id}', [CarListControllers::class, 'show'] );

Route::get('getFirstBasedOnColour/{color}', [CarListControllers::class, 'getFirstBasedOnColour']);

// show all by color


/**
 * ->name('add_acar') route name
 * add this into form action={{route('add_acar')}}
*/
Route::post('/add', [CarListControllers::class, 'add'])->name('add_acar'); 

// Get the edit form first
Route::get('/edit-car/{id}', [CarListControllers::class, 'editCar']);
// Now update the data from edit form
Route::post('/update-car', [CarListControllers::class, 'updateCar'])->name('car.update');

Route::get('/delete-car/{id}', [CarListControllers::class, 'deleteCar']);








// without controllers
/* Route::get('/', function () {
    return view('welcome');
});
 

Route::get('/about', function () {
    echo "Hello. This will be the about page.";
    return view('about');
});

*/