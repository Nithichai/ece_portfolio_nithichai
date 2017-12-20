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
        $personal = Personal::where('id', Auth::id())->get();
        if (!count($personal)) {
            $personal = new Personal;
            $personal->user_id = Auth::id();
            $personal->save();
        }
        return view('profiles.index', [
            'personal' => $personal[0]
        ]);
    }

    public function edit() {
        $personal = Personal::where('id', Auth::id())->get();
        if (!count($personal)) {
            $personal = new Personal;
            $personal->user_id = Auth::id();
            $personal->save();
        }
        return view('profiles.edit', [
            'personal' => $personal[0]
        ]);
    }

    public function store(Request $request) {
        $personal = Personal::where('id', Auth::id())
        ->update([
            'student_id' => $request->student_id,
            'user_id' => Auth::id(),
            'address' => $request->address,
            'GPA' => $request->gpa
        ]);
        return redirect('/profile');
    }
}
