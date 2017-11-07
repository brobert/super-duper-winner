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

Auth::routes();

Route::get('/',                                 'Controller@home')->name('home');

Route::middleware(['auth'])->group(function () {


    Route::prefix('landerv2')->group(function () {

        Route::get('/',                                 'Landerv2\HomeController@index')->name('landerv2');
        Route::get('/widget',                           'Landerv2\HomeController@widget')->name('widget');

        Route::get('/layout/default',                   'Landerv2\LayoutController@default')->name('layout.default');
        Route::get('/layout/fixed_sidebar',             'Landerv2\LayoutController@fixed_sidebar')->name('layout.fixed_sidebar');
        Route::get('/layout/fixed_header',              'Landerv2\LayoutController@fixed_header')->name('layout.fixed_header');
        Route::get('/layout/reveal_header',             'Landerv2\LayoutController@reveal_header')->name('layout.reveal_header');
        Route::get('/layout/with_footer',               'Landerv2\LayoutController@with_footer')->name('layout.with_footer');
        Route::get('/layout/navbar_collapse',           'Landerv2\LayoutController@navbar_collapse')->name('layout.navbar_collapse');

        Route::get('/table/default',                    'Landerv2\TableController@default')->name('table.default');
        Route::get('/table/datatable',                  'Landerv2\TableController@datatable')->name('table.datatable');

        Route::get('/component/animation',              'Landerv2\ComponentController@animation')->name('component.animation');
        Route::get('/component/pricing',                'Landerv2\ComponentController@pricing')->name('component.pricing');
        Route::get('/component/button',                 'Landerv2\ComponentController@button')->name('component.button');
        Route::get('/component/tabsaccordion',          'Landerv2\ComponentController@tabsaccordion')->name('component.tabsaccordion');
        Route::get('/component/notification',           'Landerv2\ComponentController@notification')->name('component.notification');
        Route::get('/component/panel',                  'Landerv2\ComponentController@panel')->name('component.panel');
        Route::get('/component/loading',                'Landerv2\ComponentController@loading')->name('component.loading');
        Route::get('/component/slider',                 'Landerv2\ComponentController@slider')->name('component.slider');
        Route::get('/component/grid',                   'Landerv2\ComponentController@grid')->name('component.grid');
        Route::get('/component/others',                 'Landerv2\ComponentController@others')->name('component.others');
        Route::get('/component/typography',             'Landerv2\ComponentController@typography')->name('component.typography');
        Route::get('/component/sortable',               'Landerv2\ComponentController@sortable')->name('component.sortable');
        Route::get('/component/carousel',               'Landerv2\ComponentController@carousel')->name('component.carousel');
        Route::get('/component/icon',                   'Landerv2\ComponentController@icon')->name('component.icon');

        Route::get('/form/validation',                  'Landerv2\FormController@validation')->name('form.validation');
        Route::get('/form/wysiwyg',                     'Landerv2\FormController@wysiwyg')->name('form.wysiwyg');
        Route::get('/form/wizard',                      'Landerv2\FormController@wizard')->name('form.wizard');
        Route::get('/form/imagecrop',                   'Landerv2\FormController@imagecrop')->name('form.imagecrop');
        Route::get('/form/element',                     'Landerv2\FormController@element')->name('form.element');
        Route::get('/form/xeditable',                   'Landerv2\FormController@xeditable')->name('form.xeditable');
        Route::get('/form/layout',                      'Landerv2\FormController@layout')->name('form.layout');
        Route::get('/form/fileupload',                  'Landerv2\FormController@fileupload')->name('form.fileupload');

        Route::get('/chart/flot',                       'Landerv2\ChartController@flot')->name('chart.flot');

        Route::get('/maps/google',                      'Landerv2\MapsController@google')->name('maps.google');
        Route::get('/maps/vector',                      'Landerv2\MapsController@vector')->name('maps.vector');

        Route::get('/page/blog/default',                'Landerv2\Page\BlogController@default')->name('page.blog.default');
        Route::get('/page/blog/grid',                   'Landerv2\Page\BlogController@grid')->name('page.blog.grid');
        Route::get('/page/blog/single',                 'Landerv2\Page\BlogController@single')->name('page.blog.single');
        Route::get('/page/calendar',                    'Landerv2\PageController@calendar')->name('page.calendar');
        Route::get('/page/email/view',                  'Landerv2\Page\EmailController@view')->name('page.email.view');
        Route::get('/page/email/inbox',                 'Landerv2\Page\EmailController@inbox')->name('page.email.inbox');
        Route::get('/page/error/500',                   'Landerv2\Page\ErrorController@error_500')->name('page.error.500');
        Route::get('/page/error/403',                   'Landerv2\Page\ErrorController@error_403')->name('page.error.403');
        Route::get('/page/error/404',                   'Landerv2\Page\ErrorController@error_404')->name('page.error.404');
        Route::get('/page/faq',                         'Landerv2\PageController@faq')->name('page.faq');
        Route::get('/page/invoice',                     'Landerv2\PageController@invoice')->name('page.invoice');
        Route::get('/page/invoice_printable',           'Landerv2\PageController@invoice_printable')->name('page.invoice_printable');
        Route::get('/page/login',                       'Landerv2\PageController@login')->name('page.login');
        Route::get('/page/login_returned',              'Landerv2\PageController@login_returned')->name('page.login_returned');
        Route::get('/page/media/album',                 'Landerv2\Page\MediaController@album')->name('page.media.album');
        Route::get('/page/media/gallery',               'Landerv2\Page\MediaController@gallery')->name('page.media.gallery');
        Route::get('/page/message/bubble',              'Landerv2\Page\MessageController@bubble')->name('page.message.bubble');
        Route::get('/page/message/rich',                'Landerv2\Page\MessageController@rich')->name('page.message.rich');
        Route::get('/page/profile',                     'Landerv2\PageController@profile')->name('page.profile');
        Route::post('/page/profile',                    'Landerv2\PageController@update_profile')->name('page.update_profile');
        Route::get('/page/register',                    'Landerv2\PageController@register')->name('page.register');
        Route::get('/page/starter',                     'Landerv2\PageController@starter')->name('page.starter');
        Route::get('/page/timeline_v2',                 'Landerv2\PageController@timeline_v2')->name('page.timeline_v2');

        Route::get('/api/flot/{type}',                  'DataController@flot')->name('api.flot');
        Route::get('/api/flot.php',                     'DataController@flot');
        Route::get('/api/datatable',                    'DataController@datatable')->name('api.datatable');

//     // handling all not existed urls (for react)
//     Route::get(
//         '/{any}{format?}',
//         function ($any) {
//             // any other url, subfolders also
//             return View::make("landerv2/$any");
//         }
//     )->where('any', '.*');
    });

    Route::prefix('npk')->group(function () {

        Route::get('/',                                 'Npk\HomeController@index')->name('npk');
        Route::get('/admin',                            'Npk\HomeController@index')->name('npk.admin');
        Route::get('/payments',                         'Npk\HomeController@index')->name('npk.payments');
    });
});
