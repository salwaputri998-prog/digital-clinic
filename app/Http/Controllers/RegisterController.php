<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Menampilkan form register
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Proses registrasi user baru
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);

        // Auto login setelah registrasi
        Auth::login($user);

        return redirect('/dashboard')
            ->with('success', 'Registrasi berhasil! Selamat datang ' . $user->name);
    }
}