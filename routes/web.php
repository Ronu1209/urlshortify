<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('test');
});

/*Route::get('registration',function() {
    return view('registration');
});*/



Route::get('/registration',[UserController::class,'viewReg']);

Route::post('/adduser',[UserController::class, 'regUser']);

Route::get('/',[UserController::class,'login']);

Route::post('/login',[UserController::class, 'loginUser']);

Route::get('/dashboard',[UserController::class,'viewDashboard']);

Route::get('/logout',[UserController::class,'logout']);




