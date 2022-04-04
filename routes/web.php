<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\FranchiseController ;

 


Route::get('/', function () {
    return view('welcome');
});


/******************* Investore ********************/
 

Route::get('/investors/create', [InvestorController::class, 'create'])  ;
Route::post('/investors/store', [InvestorController::class, 'store'])->name('/investors/store');


/******************* franchise ********************/
 

Route::get('/franchise/create', [FranchiseController::class, 'create'])  ;
Route::post('/franchise/store', [FranchiseController::class, 'store'])->name('franchise.store');


// Route::resource('franchise', FranchiseController::class);
// Route::resource('investors', 'InvestorController');

Route::get('/list', function () {
    return View::make('list');
}); 



Route::get('/franchise', function () {
    return View::make('franchise');
}); 


Route::get('/business', function () {
    return View::make('business');
}); 

 
Route::get('/business', function () {
    return view('business');
});


// Route::resource('busninesses', BusinessController::class);
// Route::resource('franchises', FranchiseController::class);
// Route::resource('investors', InvestorController::class);
// Route::resource('formats', FormatController::class);

 