<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function jobpost()
    {
        $jobs = Job::all();

        return view('front.job.jobpost', compact('jobs'));
    }

    public function findjob()
    {
        $jobs = Job::all();

        return view('front.job.findjob', compact('jobs'));
    }

    public function jobdetail($id)
    {
        $job = Job::findOrFail($id);

        return view('front.job.jobdetail', compact('job'));
    }
    

    public function myjob()
{
    $jobs = Job::where('user_id', Auth::id())->get();

    return view('front.job.myjob', compact('jobs'));
}

    public function jobapplied()
    {
        return view('front.job.jobapplied');
    }

    public function accountsetting()
    {
        return view('front.job.accountsetting');
    }

    public function savedJobs()
    {
        return view('front.job.savejob');
    }

    public function storeJob(Request $request)
    {
        Job::create([
             'user_id' => Auth::id(),
            'title'            => $request->title,
            'category'         => $request->category,
            'job_nature'       => $request->job_nature,
            'vacancy'          => $request->vacancy,
            'salary'           => $request->salary,
            'location'         => $request->location,
            'description'      => $request->description,
            'benefits'         => $request->benefits,
            'responsibility'   => $request->responsibility,
            'qualifications'   => $request->qualifications,
            'keywords'         => $request->keywords,
            'company'          => $request->company,
            'website'          => $request->website,
        ]);

        return redirect()->back()->with('success', 'Job Saved Successfully');
    }
}

