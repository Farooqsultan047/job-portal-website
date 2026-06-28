<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    //
     public function jobpost(){
        return view('front.job.jobpost');
        
    } 

    public function findjob(){
        return view ('front.job.findjob');
    }


    public function jobdetail(){
        return view('front.job.jobdetail');
        
    }

    public function myjob(){
         return view('front.job.myjob');
    }

    public function jobapplied(){
        return view('front.job.jobapplied');
    }
    public function accountsetting(){
        return view('front.job.accountsetting');
    }

    public function savejob(){
     return   view('front.job.savejob');
    } 

    
}

