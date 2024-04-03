<?php

use App\Http\Controllers\SendMail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/about-us', function () {
    return view('about-us');
});


Route::post('/contact', [SendMail::class, 'SendContactMail']);
Route::post('/send-proposal', [SendMail::class, 'SendProposalMail']);
Route::post('/send-parnership-mail', [SendMail::class, 'SendPartnershipMail']);
