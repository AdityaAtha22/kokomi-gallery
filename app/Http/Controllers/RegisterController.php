<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email|unique:users|email:dns',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        session()->flash('success', 'Registration has been successful, please login');
        return redirect('/login');
    }
}
