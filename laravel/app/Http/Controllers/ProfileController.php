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
            'rewards' => $reward
        ]);
    }

    public function edit() {
        $personal = $this->check_create_personal();
        $reward = $this->check_create_reward();
        return view('profiles.edit', [
            'personal' => $personal[0],
            'rewards' => $reward
        ]);
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
