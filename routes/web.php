<?php

use App\Http\Controllers\FormController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {


    return view(
        'home',
        ['status' => $request->session()->pull('status', null)]
    );
})->name('home');

Route::post('/', [FormController::class, 'send']);
