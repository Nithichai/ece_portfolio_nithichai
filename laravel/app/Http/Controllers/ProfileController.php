<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Personal;
use App\Reward;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $personal = $this->check_create_personal();
        $reward = $this->check_create_reward();
        return view('profiles.index', [
            'personal' => $personal[0],
            'reward' => $reward[0]
        ]);
    }

    public function edit() {
        $personal = $this->check_create_personal();
        $reward = $this->check_create_reward();
        return view('profiles.edit', [
            'personal' => $personal[0],
            'reward' => $reward[0]
        ]);
    }

    public function store(Request $request) {
        // $user = User::where('id', Auth::id())
        // ->update([
        //     'name' => $request->name,
        //     'email' => $request->email
        // ]);
        $personal = Personal::where('user_id', Auth::id())
        ->update([
            'student_id' => $request->student_id,
            'address' => $request->address,
            'GPA' => $request->gpa
        ]);
        return redirect('/profile');
    }

    private function check_create_personal() {
        $personal = Personal::where('user_id', Auth::id())->get();
        if (!count($personal)) {
            $personal = new Personal;
            $personal->user_id = Auth::id();
            $personal->save();
        }
        return $personal;
    }

    private function check_create_reward() {
        $reward = Reward::where('user_id', Auth::id())->get();
        if (!count($reward)) {
            $reward = new Reward;
            $reward->user_id = Auth::id();
            $reward->save();
        }
        return $reward;
    }
}
