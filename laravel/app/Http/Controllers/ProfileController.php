<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $personal = Personal::where('email', Auth::user()->email)->get();
        return view('profiles.index', [
            'personal' => $personal[0]
        ]);
    }

    public function edit() {
        $personal = Personal::where('email', Auth::user()->email)->get();
        return view('profiles.edit', [
            'personal' => $personal[0]
        ]);
    }

    public function store(Request $request) {
        return redirect('/profile');
    }
}
