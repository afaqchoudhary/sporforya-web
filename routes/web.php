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

/**********************************
 * ------<[dashboard route]>------
 **********************************/

Route::get('dashboard', function () {
    return view('dashboard');
});

/**********************************
 * ------<[statistics route]>------
 **********************************/

Route::get('statistics', function () {
    return view('statistics');
});

/****************************************
 * ------<[usermanagement routes]>------
 ****************************************/

Route::get('usermanagement/groups/index', function () {
    return view('usermanagement.groups.index');
});

/****************************************
 * ------<[userpermissions routes]>------
 ****************************************/

Route::get('usermanagement/userpermissions/index', function () {
    return view('usermanagement.userpermissions.index');
});

/****************************************
 * ------<[users routes]>------
 ****************************************/

Route::get('usermanagement/users/index', function () {
    return view('usermanagement.users.index');
});

/****************************************
 * ------<[accountsettings routes]>------
 ****************************************/

Route::get('accountsettings', function () {
    return view('accountsetting');
});

/****************************************
 * ------<[mail routes]>------
 ****************************************/

Route::get('mail/inbox', function () {
    return view('mail.inbox');
});

Route::get('mail/compose', function () {
    return view('mail.compose');
});

Route::get('mail/read', function () {
    return view('mail.read');
});