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

Route::get('/', function () {
    return view('dashboard/welcome');
});


Route::get('/typography', function () {
    return view('dashboard/typography');
});

Route::get('/helper-classes', function () {
    return view('dashboard/helper-classes');
});


Route::prefix('widgets')->group(function () {

    Route::get('cards/basic', function () {
        return view('dashboard/widgets/cards/basic');
    });

    Route::get('cards/colored', function () {
        return view('dashboard/widgets/cards/colored');
    });

    Route::get('cards/no-header', function () {
        return view('dashboard/widgets/cards/no-header');
    });

    Route::get('infobox/infobox-1', function () {
        return view('dashboard/widgets/infobox/infobox-1');
    });

    Route::get('infobox/infobox-2', function () {
        return view('dashboard/widgets/infobox/infobox-2');
    });

    Route::get('infobox/infobox-3', function () {
        return view('dashboard/widgets/infobox/infobox-3');
    });

    Route::get('infobox/infobox-4', function () {
        return view('dashboard/widgets/infobox/infobox-4');
    });

    Route::get('infobox/infobox-5', function () {
        return view('dashboard/widgets/infobox/infobox-5');
    });

});


Route::prefix('ui')->group(function () {
    Route::get('alerts', function () {
        return view('dashboard/ui/alerts');
    });

    Route::get('animations', function () {
        return view('dashboard/ui/animations');
    });

    Route::get('badges', function () {
        return view('dashboard/ui/badges');
    });

    Route::get('breadcrumbs', function () {
        return view('dashboard/ui/breadcrumbs');
    });

    Route::get('badges', function () {
        return view('dashboard/ui/badges');
    });

    Route::get('buttons', function () {
        return view('dashboard/ui/buttons');
    });

    Route::get('collapse', function () {
        return view('dashboard/ui/collapse');
    });

    Route::get('colors', function () {
        return view('dashboard/ui/colors');
    });

    Route::get('dialogs', function () {
        return view('dashboard/ui/dialogs');
    });

    Route::get('colors', function () {
        return view('dashboard/ui/colors');
    });

    Route::get('icons', function () {
        return view('dashboard/ui/icons');
    });

    Route::get('labels', function () {
        return view('dashboard/ui/labels');
    });

    Route::get('list-group', function () {
        return view('dashboard/ui/list-group');
    });

    Route::get('media-object', function () {
        return view('dashboard/ui/media-object');
    });

    Route::get('modals', function () {
        return view('dashboard/ui/modals');
    });
});


