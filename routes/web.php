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
Route::get ('/', function () {
    return view( 'welcome') ;
});
Route::get('contact ','Pagecontroller@contact');
Route::post('contact ','Pagecontroller@storeContact');
Route::get('clear-my-name ','Pagecontroller@clearName');

Route::get('about ','Pagecontroller@about');

Route::get('meeting' , 'Pagecontroller@meeting');
Route::get('HomePageAdvisor' , 'Pagecontroller@HomePageAdvisor');


Route::get('Advisor ','Pagecontroller@Advisor');
Route::get('Regulations ','Pagecontroller@Regulations');
Route::get('HomePage ','Pagecontroller@HomePage');
Route::get('GPA ','Pagecontroller@GPA');
Route::get('Profile ','Pagecontroller@Profile');

Route::get('Login ','Pagecontroller@Login');
Route::get('Student ','Pagecontroller@Student');
Route::get('History ','Pagecontroller@History');
Route::get('Homep ','Pagecontroller@Homep');
Route::get('meet ','Pagecontroller@meet');
Route::get('meetings ','Pagecontroller@meetings');
Route::get('meetis' , 'Pagecontroller@meetis');
Route::get('HistoryAd ','Pagecontroller@HistoryAd');

Route::get('Report ','Pagecontroller@Report');


Route::get( 'system-clos',function () {

    return ' the bage clos now son after week';
} );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
