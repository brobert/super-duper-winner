<?php

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

use Illuminate\Support\Facades\Log as Log;

Route::get('/', function () {
    return view('index');
});

Route::get('/api/flot.php', 'FlotController@flot');

Route::get('api/datatable.php', 'DataController@datatable');

// handling all not existed urls (for react)
Route::get('/{any}.html', function ($any) {

    Log::debug("ROUTE::ANY: $any");
    // any other url, subfolders also
    return View::make("landerv2/$any");
})->where('any', '.*');