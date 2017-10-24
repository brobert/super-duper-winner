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

Route::get('/',                             'Landerv2\HomeController@index');

Route::get('/chart/flot.html',              'Landerv2\ChartController@flot');

Route::get('/index.html', 'Landerv2\HomeController@index');
Route::get('/widget.html', 'Landerv2\HomeController@widget');

Route::get('/layout/default.html', 'Landerv2\LayoutController@default');
Route::get('/layout/fixed/sidebar.html', 'Landerv2\Layout\FixedController@sidebar');
Route::get('/layout/fixed/header.html', 'Landerv2\Layout\FixedController@header');
Route::get('/layout/reveal/header.html', 'Landerv2\Layout\RevealController@header');
Route::get('/layout/with/footer.html', 'Landerv2\Layout\WithController@footer');
Route::get('/layout/navbar/collapse.html', 'Landerv2\Layout\NavbarController@collapse');

Route::get('/table/default.html', 'Landerv2\TableController@default');
Route::get('/table/datatable.html', 'Landerv2\TableController@datatable');

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

Route::get('/form/validation.html', 'Landerv2\FormController@validation');
Route::get('/form/wysiwyg.html', 'Landerv2\FormController@wysiwyg');
Route::get('/form/wizard.html', 'Landerv2\FormController@wizard');
Route::get('/form/imagecrop.html', 'Landerv2\FormController@imagecrop');
Route::get('/form/element.html', 'Landerv2\FormController@element');
Route::get('/form/xeditable.html', 'Landerv2\FormController@xeditable');
Route::get('/form/layout.html', 'Landerv2\FormController@layout');
Route::get('/form/fileupload.html', 'Landerv2\FormController@fileupload');

Route::get('/chart/flot.html', 'Landerv2\ChartController@flot');

Route::get('/maps/vector.html', 'Landerv2\MapsController@vector');
Route::get('/maps/google.html', 'Landerv2\MapsController@google');

Route::get('/page/calendar.html', 'Landerv2\PageController@calendar');
Route::get('/page/starter.html', 'Landerv2\PageController@starter');
Route::get('/page/profile.html', 'Landerv2\PageController@profile');
Route::get('/page/register.html', 'Landerv2\PageController@register');
Route::get('/page/faq.html', 'Landerv2\PageController@faq');
Route::get('/page/login.html', 'Landerv2\PageController@login');
Route::get('/page/invoice.html', 'Landerv2\PageController@invoice');
Route::get('/page/message/bubble.html', 'Landerv2\Page\MessageController@bubble');
Route::get('/page/message/rich.html', 'Landerv2\Page\MessageController@rich');
Route::get('/page/invoice/printable.html', 'Landerv2\Page\InvoiceController@printable');
Route::get('/page/login/returned.html', 'Landerv2\Page\LoginController@returned');
Route::get('/page/timeline/v2.html', 'Landerv2\Page\TimelineController@v2');

Route::get('/page/error/500.html', 'Landerv2\Page\ErrorController@error_500');
Route::get('/page/error/403.html', 'Landerv2\Page\ErrorController@error_403');
Route::get('/page/error/404.html', 'Landerv2\Page\ErrorController@error_404');

Route::get('/page/email/view.html', 'Landerv2\Page\EmailController@view');
Route::get('/page/email/inbox.html', 'Landerv2\Page\EmailController@inbox');
Route::get('/page/media/gallery.html', 'Landerv2\Page\MediaController@gallery');
Route::get('/page/media/album.html', 'Landerv2\Page\MediaController@album');
Route::get('/page/blog/grid.html', 'Landerv2\Page\BlogController@grid');
Route::get('/page/blog/default.html', 'Landerv2\Page\BlogController@default');
Route::get('/page/blog/single.html', 'Landerv2\Page\BlogController@single');



Route::get('/api/flot.php', 'DataController@flot');
Route::get('/api/flot/{type}', 'DataController@flot');

Route::get('api/datatable.php', 'DataController@datatable');

// handling all not existed urls (for react)
Route::get('/{any}.html', function ($any) {

    Log::debug("ROUTE::ANY: $any");
    // any other url, subfolders also
    return View::make("landerv2/$any");
})->where('any', '.*');