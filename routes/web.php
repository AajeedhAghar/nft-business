<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\FranchiseController ;
use App\Http\Controllers\BusinessController;

 


Route::get('/', function () {
    return view('welcome');
});


/******************* Investore ********************/
 

Route::get('/investors/create', [InvestorController::class, 'create'])  ;
Route::post('/investors/store', [InvestorController::class, 'store'])->name('/investors/store');


/******************* franchise ********************/
 

Route::get('/franchise/create', [FranchiseController::class, 'create'])  ;
Route::post('/franchise/store', [FranchiseController::class, 'store'])->name('franchise/store');



Route::post('/post_invsestors', [InvestorController::class, 'create'])->name('create.investor');
// Route::post('/post_invsestors', function () {

//     // return view('investors');
// });


// Route::resource('franchise', FranchiseController::class);
// Route::resource('investors', 'InvestorController');

Route::get('/list', function () {
    return view('listing');
});
Route::get('/franchise', function () {
    return view('franchise');
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
Route::post('/post_business', [BusinessController::class, 'create'])->name('create.business');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('busninesses', BusinessController::class);
Route::resource('franchises', FranchiseController::class);
Route::resource('investors', InvestorController::class);
Route::resource('formats', FormatController::class);
