<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobOffer;

class JobApplicationController extends Controller
{

    public function create(JobOffer $job)
    {
        $this->authorize('apply', [JobOffer::class, $job]);
        return view('job_application.create', ['jobOffer' => $job]);
    }

    public function store(Request $request, JobOffer $job)
    {
        $validatedData = $request->validate([
            'expected_salary' => 'numeric|min:0|nullable|max:1000000',
            'cv' => 'file|mimes:pdf,doc,docx,png,jpg,jpeg|max:2048|nullable'
        ]);

        $path = null;

        if ($request->hasFile('cv')) {
            $path = $request->file('cv')->store('cvs', 'private');
        }

        $job->jobApplications()->create([
            'user_id' => $request->user()->id,
            'expected_salary' => $validatedData['expected_salary'],
            'cv_path' => $path
        ]);

        return redirect()->route('jobs.show', $job)->with('success', 'Application submitted successfully!');
    }

    public function destroy(string $id)
    {
        //
    }
}
