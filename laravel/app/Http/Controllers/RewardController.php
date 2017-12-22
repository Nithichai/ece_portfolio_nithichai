<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Reward;

class RewardController extends Controller
{
    public function update(Request $request) {
        $reward = Reward::where('id', Auth::id())
        ->update([
            'name' => $request->name,
            'year' => $request->year
        ]);
        if ($reward) {
            return "update complete";
        }
        return "update not complete";
    }

    public function store () {

    }

    public function delete() {

    }
}
