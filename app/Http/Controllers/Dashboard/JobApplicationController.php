<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{
    public function index()
    {
        $applications = JobApplication::latest()
            ->paginate(10);

        return view('dashboard.job-applications.index', [
            'applications' => $applications,
            'title' => 'Job Applications'
        ]);
    }

    public function show(JobApplication $jobApplication)
    {
        return view('dashboard.job-applications.show', [
            'jobApplication' => $jobApplication,
            'title' => 'Job Application Details'
        ]);
    }

    public function destroy(JobApplication $jobApplication)
    {
        // Delete the pas_foto file if it exists
        if ($jobApplication->pas_foto) {
            Storage::disk('public')->delete($jobApplication->pas_foto);
        }

        $jobApplication->delete();

        return redirect()
            ->route('dashboard.job-applications.index')
            ->with('success', 'Job application deleted successfully.');
    }
}
