<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\OpenPosition;
use Illuminate\Http\Request;

class OpenPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'Kelola Posisi';

        $query = OpenPosition::query();

        // Handle search
        if ($request->filled('search')) {
            $query->where('nama_posisi', 'like', '%' . $request->search . '%');
        }

        // Handle sorting
        $sort = $request->input('sort', 'created_at');
        $order = $request->input('order', 'desc');

        if (in_array($sort, ['nama_posisi', 'created_at'])) {
            $query->orderBy($sort, $order);
        }

        // Handle pagination
        $perPage = 10;
        $open_positions = $query->paginate($perPage);

        if ($request->ajax()) {
            return view('dashboard.open_positions.partials.table', compact('open_positions'));
        }

        return view('dashboard.open_positions.index', compact('open_positions', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Posisi Baru';
        return view('dashboard.open_positions.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'positions' => 'required|array|min:1',
            'positions.*' => 'required|string|max:255',
        ]);

        foreach ($validated['positions'] as $position) {
            OpenPosition::create([
                'nama_posisi' => $position
            ]);
        }

        return redirect()
            ->route('dashboard.open-positions.index')
            ->with('success', count($validated['positions']) . ' posisi berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OpenPosition $openPosition)
    {
        $title = 'Edit Posisi';
        return view('dashboard.open_positions.edit', compact('openPosition', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OpenPosition $openPosition)
    {
        $validated = $request->validate([
            'nama_posisi' => 'required|string|max:255',
        ]);

        $openPosition->update($validated);

        return redirect()
            ->route('dashboard.open-positions.index')
            ->with('success', 'Posisi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OpenPosition $openPosition)
    {
        $openPosition->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()
            ->route('dashboard.open-positions.index')
            ->with('success', 'Posisi berhasil dihapus');
    }
}
