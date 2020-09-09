<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'PagesController@index');

Route::get('/tech-skills', 'PagesController@techSkills');
Route::get('/work-experience', 'PagesController@workExperience');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
//Contact Form Controller
Route::post('/contact', 'PagesController@contactForm');
//Contact Thank You Page
Route::get('/contact-thanks', 'PagesController@contactThanks');
Route::get('/projects', 'PagesController@projects');
Route::get('/clients', 'PagesController@clients');
Route::get('/dashboard', 'DashboardController@index');

// Run Command php artisan route:list to see routes  === OR === Look inside Posts Controller


// Auth::routes();



//Disable Register Link For Website - uncomment code for production
Auth::routes(['register' => false]);
