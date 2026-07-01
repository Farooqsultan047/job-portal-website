<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\JobController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/account/register',[AccountController::class,'registraction'])
    ->name('account.register');


Route::post('/account',[AccountController::class, 'processRegistration'])->Name('account.processRegistration');

Route::get('/login',[AccountController::class, 'login'])->Name('account.login') ;

Route::post('/process-login',
    [AccountController::class, 'authenticate'])
    ->name('account.authenticate');


Route::get('/logout',[AccountController::class,'logout'])
    ->name('account.logout');

Route::get('/forgot', [AccountController::class, 'forgot'])->name('account.forgot');







// login hu tu tab page open hu

Route::middleware('auth')->group(function () {

Route::get('/jobpost', [JobController::class,'jobpost'])->name('job.jobpost');
Route::get('/jobs',[JobController::class,'findjob'])->name('job.findjob'); 
Route::get('/jobdetail/{id}',[JobController::class,'jobdetail'])->name('jobdetail');
Route::get('/myjobs', [JobController::class,'myjob'])->name('myjob');
Route::get('/jobapplied', [JobController::class,'jobapplied'] )->name('jobapplied');
Route::get('/savedjobs',
    [JobController::class,'savedjobs'])
    ->name('savejob');

Route::post('/savedjobs',
    [JobController::class,'storeJob'])
    ->name('job.save');


Route::get('/accountsetting', [JobController::class,'accountsetting'])->name('accountsetting');

});








