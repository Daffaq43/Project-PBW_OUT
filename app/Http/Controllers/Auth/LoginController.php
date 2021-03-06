<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // validation
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // sign the user in
        if (!Auth::attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid Login Detail');
        }

        // redirect
        if (auth()->user()->hak_akses == 'admin') {
            return redirect()->route('admin');
        } else {
            return redirect()->route('dashboard');
        }
    }
}
