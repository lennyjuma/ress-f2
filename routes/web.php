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

use Illuminate\Support\Facades\DB;

Route::get('/', function (\App\About $about) {
//    $about_number = DB::table('abouts')->count();
//    $about = DB::table('abouts')->get();
    return view('home');
});
Route::get('/admin', function () {
    return view('admn');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Members routes
/*Route::get('/members', 'MembersController@index')->name('members.index');
Route::get('/members/create', 'MembersController@create')->name('members.create');
Route::post('/members', 'MembersController@store')->name('members.store');
Route::get('/members/{members}', 'MembersController@show')->name('members.show');
Route::get('/members/{members}/edit', 'MembersController@edit')->name('members.edit');
Route::put('/members/{members}', 'MembersController@update')->name('members.update');
Route::delete('/member/{members}', 'MembersController@destroy')->name('member.destroy');
//About routes
Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/about/create', 'AboutController@create')->name('about.create');
Route::post('/about', 'AboutController@store')->name('about.store');
Route::get('/about/{about} ', 'AboutController@show')->name('about.show');
Route::get('/about/{about}/edit', 'AboutController@edit')->name('about.edit');
Route::put('/about/{about}', 'AboutController@update')->name('about.update');
Route::delete('/about/{about}', 'AboutController@destroy')->name('about.destroy');
//service routes
Route::get('/service', 'ServiceController@index')->name('service.index');
Route::get('/service/create', 'ServiceController@create')->name('service.create');
Route::post('/service', 'ServiceController@store')->name('service.store');
Route::get('/service/{service} ', 'ServiceController@show')->name('service.show');
Route::get('/service/{service}/edit', 'ServiceController@edit')->name('service.edit');
Route::put('/service/{service}', 'ServiceController@update')->name('service.update');
Route::delete('/service/{service}', 'ServiceController@destroy')->name('service.destroy');*/
//cv routes
/*Route::get('/cv', 'ReferenceController@index')->name('cv.index');
Route::get('/cv/create', 'ReferenceController@create')->name('cv.create');
Route::post('/cv', 'ReferenceController@store')->name('cv.store');
Route::get('/cv/{reference}', 'ReferenceController@show')->name('cv.show');
Route::get('/cv/{reference}/edit', 'ReferenceController@edit')->name('cv.edit');
Route::put('/cv/{reference}', 'ReferenceController@update')->name('cv.update');
Route::delete('/cv/{reference}', 'ReferenceController@destroy')->name('cv.destroy');*/

Route::resource('cv', 'RessController');
Route::resource('service', 'ServiceController');
Route::resource('about', 'AboutController');
Route::resource('members', 'MembersController');
Route::resource('article', 'ArticleController');
Route::resource('contact', 'ContactsController');



/*Route::group(['namespace' => 'Ress'], function()
{
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::resource('ress/cv', 'ReferenceController');
    Route::resource('ress/members', 'MembersController');
    Route::resource('ress/about', 'AboutController');
    Route::resource('ress/service', 'ServiceController');


});*/
