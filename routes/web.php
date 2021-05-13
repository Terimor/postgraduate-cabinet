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


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('events')->name('events/')->group(static function() {
            Route::get('/',                                             'EventsController@index')->name('index');
            Route::get('/create',                                       'EventsController@create')->name('create');
            Route::post('/',                                            'EventsController@store')->name('store');
            Route::get('/{event}/edit',                                 'EventsController@edit')->name('edit');
            Route::post('/{event}',                                     'EventsController@update')->name('update');
            Route::delete('/{event}',                                   'EventsController@destroy')->name('destroy');
            Route::get('/export',                                       'EventsController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('teachers')->name('teachers/')->group(static function() {
            Route::get('/',                                             'TeachersController@index')->name('index');
            Route::get('/create',                                       'TeachersController@create')->name('create');
            Route::post('/',                                            'TeachersController@store')->name('store');
            Route::get('/{teacher}/edit',                               'TeachersController@edit')->name('edit');
            Route::post('/{teacher}',                                   'TeachersController@update')->name('update');
            Route::delete('/{teacher}',                                 'TeachersController@destroy')->name('destroy');
            Route::get('/export',                                       'TeachersController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('courses')->name('courses/')->group(static function() {
            Route::get('/',                                             'CoursesController@index')->name('index');
            Route::get('/create',                                       'CoursesController@create')->name('create');
            Route::post('/',                                            'CoursesController@store')->name('store');
            Route::get('/{course}/edit',                                'CoursesController@edit')->name('edit');
            Route::post('/{course}',                                    'CoursesController@update')->name('update');
            Route::delete('/{course}',                                  'CoursesController@destroy')->name('destroy');
            Route::get('/export',                                       'CoursesController@export')->name('export');
        });
    });
});

Route::get('admin/science-manager','App\Http\Controllers\Admin\PageController@scienceManager')->name('science_manager');
