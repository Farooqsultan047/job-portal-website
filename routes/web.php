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


// login hu tu tab page open hu

    Route::middleware('auth')->group(function () {

    Route::get('/postjob',[JobController::class,'jobpost']);

});


Route::get('/forgot', [AccountController::class, 'forgot'])->name('account.forgot');
Route::get('/postjob', [JobController::class,'jobpost'])->name('job.jobpost');
Route::get('/jobs',[JobController::class,'findjob'])->name('job.findjob'); 


Route::get('/jobdetail',[JobController::class,'jobdetail'])->name('jobdetail');
Route::get('/myjobs', [JobController::class,'myjob'])->name('myjob');

Route::get('/jobapplied', [JobController::class,'jobapplied'] )->name('jobapplied');
Route::get('/savedjobs',[JobController::class,'savejob'])->name('savejob');
Route::get('/jobdetail', [JobController::class,'accountsetting'])->name('accountsetting');