<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function index()
    {
        return view('dashboard.profile.index', [
            'title' => 'Profile Settings'
        ]);
    }

    public function update(Request $request)
    {
        $userId = Auth::id();

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $userId],
        ]);

        User::where('id', $userId)->update([
            'name' => $validated['name'],
            'username' => $validated['username'],
            'email' => $validated['email']
        ]);

        return redirect()
            ->route('dashboard.profile.index')
            ->with('success', 'Profile updated successfully.');
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        User::where('id', Auth::id())->update([
            'password' => Hash::make($validated['password'])
        ]);

        return redirect()
            ->route('dashboard.profile.index')
            ->with('success', 'Password updated successfully.');
    }
}
