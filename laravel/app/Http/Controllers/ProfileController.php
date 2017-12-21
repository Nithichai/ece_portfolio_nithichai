<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Personal;
use App\Reward;

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
        $reward = Reward::where('id', Auth::id())->get();
        if (!count($reward)) {
            $reward = new Reward;
            $reward->user_id = Auth::id();
            $reward->save();
        }
        return view('profiles.index', [
            'personal' => $personal[0],
            'reward' => $reward[0]
        ]);
    }

    public function edit() {
        $personal = Personal::where('id', Auth::id())->get();
        if (!count($personal)) {
            $personal = new Personal;
            $personal->user_id = Auth::id();
            $personal->save();
        }
        $reward = Reward::where('id', Auth::id())->get();
        if (!count($reward)) {
            $reward = new Reward;
            $reward->user_id = Auth::id();
            $reward->save();
        }
        return view('profiles.edit', [
            'personal' => $personal[0],
            'reward' => $reward[0]
        ]);
    }

    public function store(Request $request) {
        $personal = Personal::where('id', Auth::id())
        ->update([
            'student_id' => $request->student_id,
            'address' => $request->address,
            'GPA' => $request->gpa
        ]);
        return redirect('/profile');
    }
}
