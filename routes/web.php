<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\GstBillController;
use App\Http\Controllers\PartyController;

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


// Route::get('/', function () {
    //     return view('welcome');
    // });
    
    //#basic route
    // #using Controller

     // laravel  7 method
// Route::get('/','AppController@index');

//new method for routing in Laravel 9

// Index page
Route::get('/', [AppController::class, 'index']);

// Party routes
Route::get('/add-party', [PartyController::class, 'addParty'])->name('addParty');
Route::post('/create-party', [PartyController::class, 'createParty'])->name('create-party');
Route::get('/manage-parties', [PartyController::class, 'index'])->name('manage-parties');
Route::get('/edit-party/{id}', [PartyController::class, 'editParty'])->name('editParty');
Route::put('/update-parties/{id}', [PartyController::class, 'updateParty'])->name('update-party');
Route::delete('/delete-parties/{party}', [PartyController::class, 'deleteParty'])->name('delete-party');



//GST Bill Routes
Route::get('/add-gst-bill', [GstBillController::class, 'addGstBill'])->name('add-gst-bill');
Route::post('/create-gst-bill', [GstBillController::class, 'createGstBill'])->name('create-gst-bill');

Route::get('/manage-gst-bills', [GstBillController::class, 'index'])->name('manage-gst-bills');
Route::get('/print-gst-bill/{id}', [GstBillController::class, 'print'])->name('print-gst-bill');

//soft delete
Route::get('/delete/{table}/{id}', [AppController::class, 'delete'])->name('delete');


//  /{name?} => Optional Parameters
//  /{name} => Required Parameters

// Route::get('/about/{name?}',[AppController::class,'about'] );