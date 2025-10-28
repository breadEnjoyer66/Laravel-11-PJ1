<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class JobApplicationController extends Controller
{
    public function index(Request $request)
    {
        $query = JobApplication::query();

        // Handle search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama_lengkap', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('no_hp_whatsapp', 'like', "%{$search}%");
            });
        }

        $applications = $query->latest()->paginate(10);

        if ($request->ajax()) {
            return view('dashboard.job-applications.partials.table', [
                'applications' => $applications
            ]);
        }

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

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()
            ->route('dashboard.job-applications.index')
            ->with('success', 'Job application deleted successfully.');
    }
}
