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

Route::get('/', function () { return view('index'); });

Route::get('/chart/flot.html', "Landerv2\ChartController@flot");

Route::get('/component/animation.html', 'Landerv2\ComponentController@animation');
Route::get('/component/pricing.html', 'Landerv2\ComponentController@pricing');
Route::get('/component/button.html', 'Landerv2\ComponentController@button');
Route::get('/component/tabsaccordion.html', 'Landerv2\ComponentController@tabsaccordion');
Route::get('/component/notification.html', 'Landerv2\ComponentController@notification');
Route::get('/component/panel.html', 'Landerv2\ComponentController@panel');
Route::get('/component/loading.html', 'Landerv2\ComponentController@loading');
Route::get('/component/slider.html', 'Landerv2\ComponentController@slider');
Route::get('/component/grid.html', 'Landerv2\ComponentController@grid');
Route::get('/component/others.html', 'Landerv2\ComponentController@others');
Route::get('/component/typography.html', 'Landerv2\ComponentController@typography');
Route::get('/component/sortable.html', 'Landerv2\ComponentController@sortable');
Route::get('/component/carousel.html', 'Landerv2\ComponentController@carousel');
Route::get('/component/icon.html', 'Landerv2\ComponentController@icon');



Route::get('/api/flot.php', 'DataController@flot');

Route::get('api/datatable.php', 'DataController@datatable');

// handling all not existed urls (for react)
Route::get('/{any}.html', function ($any) {

    Log::debug("ROUTE::ANY: $any");
    // any other url, subfolders also
    return View::make("landerv2/$any");
})->where('any', '.*');