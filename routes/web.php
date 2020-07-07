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



Route::prefix('csrf')->group(function(){
    Route::get('', 'HomeController@csrf');
});



Route::prefix('workers')->group(function () {
    Route::get('', 'WorkerController@getWorkers');
    Route::get('/{worker_id}', 'WorkerController@getWorkerById');
    Route::post('/new', 'WorkerController@createWorker');
    Route::post('/{worker_id}/avatar', 'WorkerController@addAvatar');
    Route::put('/{worker_id}/edit', 'WorkerController@editWorker');
    Route::delete('/{worker_id}/delete', 'WorkerController@removeWorkerById');

});



Route::prefix('positions')->group(function () {
    Route::get('', 'PositionController@getPositions');
});




Route::get('/csrf', 'WorkerController@index');







