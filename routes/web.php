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


/*
|--------------------------------------------------------------------------
| Front Routes (Website Pages)
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
    Route::get('/', 'CoreController@index')->name('welcome');
    Route::get('/category/{url}', 'CoreController@category')->name('category');
    Route::get('/packages/{service}', 'CoreController@packages')->name('packages');
    Route::get('/product/{productName}', 'CoreController@product')->name('product');
    Route::get('login/{provider}', 'SocialAccountController@redirectToProvider');
    Route::get('login/{provider}/callback', 'SocialAccountController@handleProviderCallback');
    Route::get('/profile', 'CoreController@userprofile')->name('userprofile')->middleware('auth');
    Route::get('/checkout', 'CoreController@checkout')->name('checkout');
    Route::get('/checkout2', 'CoreController@checkout2')->name('checkout2');

});

    Route::get('/preview/{id}', 'CoreController@preview')->name('preview');


/*
|--------------------------------------------------------------------------
| Front Routes (Website Actions)
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
    Route::post('/webrequest', 'CoreController@webRequest')->name('web.request');
    Route::post('/socialrequest', 'CoreController@socialRequest')->name('social.request');
    Route::post('/notebook', 'ProductController@notebook')->name('notebook.request');
    Route::post('/folder', 'ProductController@folder')->name('folder.request');
    Route::post('/card', 'ProductController@card')->name('card.request');
    Route::post('/letter', 'ProductController@letter')->name('letter.request');
    Route::post('/letterhead', 'ProductController@letterhead')->name('letterhead.request');
    Route::post('/brochure', 'ProductController@brochure')->name('brochure.request');
    Route::post('/flyer', 'ProductController@flyer')->name('flyer.request');
    Route::post('/bill', 'ProductController@bill')->name('bill.request');
    Route::post('/menu', 'ProductController@menu')->name('menu.request');
    Route::post('/sticker', 'ProductController@sticker')->name('sticker.request');
    Route::post('/rollup', 'ProductController@rollup')->name('rollup.request');
    Route::post('/userphone', 'CoreController@userPhone')->name('user.phone');
    Route::post('/usercompany', 'CoreController@userCompany')->name('user.company');
    
});


/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

    Auth::routes();

/*
|--------------------------------------------------------------------------
| Back Routes (Admin Dashboard Pages)
|--------------------------------------------------------------------------
*/

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/calendar', 'HomeController@calendar')->name('calendar');
    Route::get('/members', 'HomeController@members')->name('members');
    Route::get('/orders', 'HomeController@orders')->name('orders');
    Route::get('/requests', 'HomeController@requests')->name('requests');
    Route::get('/messages', 'HomeController@messages')->name('messages');
    Route::get('/print', 'HomeController@print')->name('print');
    Route::get('/admin_profile', 'HomeController@profile')->name('profile');
    Route::get('/setting', 'HomeController@setting')->name('setting');
    Route::get('/visits', 'HomeController@visits')->name('visits');

