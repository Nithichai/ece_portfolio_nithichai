<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reward;

class RewardController extends Controller
{
    public function update(Request $request) {
        $personal = Reward::where('id', Auth::id())
        ->update([
            'name' => $request->name,
            'year' => $request->year
        ]);
        return view('rewards.update', [
            'personal' => $personal[0],
            'reward' => $reward[0]
        ]);
    }
}
