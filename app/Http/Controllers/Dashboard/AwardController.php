<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Award;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AwardController extends Controller
{
    public function index(Request $request)
    {
        $query = Award::query();

        // Handle search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('award_from', 'like', "%{$search}%");
            });
        }

        // Handle sorting
        $query->latest('received_at');

        // Handle pagination
        $awards = $query->paginate(16);

        if ($request->ajax()) {
            return view('dashboard.awards.partials.list', compact('awards'));
        }

        return view('dashboard.awards.index', [
            'awards' => $awards,
            'title' => 'Sertifikat & Piagam'
        ]);
    }

    public function create()
    {
        return view('dashboard.awards.create', [
            'title' => 'Tambah Sertifikat/Piagam'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'award_from' => 'required|string|max:255',
            'received_at' => 'required|date',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:500',
        ]);

        $image = $request->file('image');
        $filename = time() . '_' . $image->getClientOriginalName();

        // Save original image
        $image->storeAs('public/awards', $filename);

        Award::create([
            'name' => $validated['name'],
            'award_from' => $validated['award_from'],
            'received_at' => $validated['received_at'],
            'file_name' => $filename,
        ]);

        return redirect()
            ->route('dashboard.awards.index')
            ->with('success', 'Sertifikat/Piagam berhasil ditambahkan');
    }

    public function edit(Award $award)
    {
        return view('dashboard.awards.edit', [
            'award' => $award,
            'title' => 'Edit Sertifikat/Piagam'
        ]);
    }

    public function update(Request $request, Award $award)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'award_from' => 'required|string|max:255',
            'received_at' => 'required|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:500',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            Storage::disk('public')->delete('awards/' . $award->file_name);

            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();

            // Save original image
            $image->storeAs('public/awards', $filename);

            $validated['file_name'] = $filename;
        }

        $award->update($validated);

        return redirect()
            ->route('dashboard.awards.index')
            ->with('success', 'Sertifikat/Piagam berhasil diperbarui');
    }

    public function destroy(Award $award)
    {
        // Delete image
        Storage::disk('public')->delete('awards/' . $award->file_name);

        $award->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()
            ->route('dashboard.awards.index')
            ->with('success', 'Sertifikat/Piagam berhasil dihapus');
    }
}
