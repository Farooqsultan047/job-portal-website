<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

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

 public function savedJobs()
{
    return view('front.job.savejob');
}

public function storeJob(Request $request)
{
   Job::create([
    'title' => $request->title,
    'company' => $request->company,
    'location' => $request->location,
    'salary' => $request->salary,
]);

    return redirect()->back();
}
}

