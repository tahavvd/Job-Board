<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\JobOfferRequest;
use App\Models\JobOffer;

class MyJobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $this->authorize('viewAnyEmployer', JobOffer::class);

        return view(
            'my_jobs.index',
            [
                'myJobs' => auth()->user()->employer->jobOffers()->with([
                    'jobApplications',
                    'jobApplications.user',
                    'employer'
                ])->latest()->get()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', JobOffer::class);

        return view('my_jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobOfferRequest $request)
    {
        $this->authorize('create', JobOffer::class);

        auth()->user()->employer->jobOffers()->create($request->validated());

        return redirect()->route('my-jobs.index')->with('success', 'Job offer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobOffer $myJob)
    {
        $this->authorize('update', $myJob);

        return view('my_jobs.edit', ['job' => $myJob]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JobOfferRequest $request, JobOffer $myJob)
    {
        $this->authorize('update', $myJob);

        $myJob->update($request->validated());

        return redirect()->route('my-jobs.index')->with('success', 'Job updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobOffer $myJob)
    {
        $this->authorize('delete', $myJob);

        $myJob->delete();

        return redirect()->route('my-jobs.index')->with('success', 'Job deleted.');
    }
}
