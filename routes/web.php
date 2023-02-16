<?php

use Illuminate\Support\Facades\Mail;
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
    $user = [
        'name' => 'Harsukh Makwana',
        'info' => 'Laravel & Python Devloper'
    ];

    Mail::to('letenantdoniyor@gmail.com')->send(new \App\Mail\MailableName($user));

    dd("success");
});
