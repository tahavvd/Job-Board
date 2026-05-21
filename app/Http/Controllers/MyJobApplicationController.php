<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;

class MyJobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'job_application.index',
            [
                'applications' => auth()->user()->jobApplications()
                    ->with(
                        [
                            'jobOffer' => fn($query) => $query
                                ->withTrashed()
                                ->withCount('jobApplications')
                                ->withAvg('jobApplications', 'expected_salary'),
                            'jobOffer.employer'
                        ]
                    )
                    ->latest()->get()
            ]
        );
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobApplication $myApplication)
    {
        $myApplication->delete();
        return redirect()->back()->with('success', 'Application removed.');
    }
}
