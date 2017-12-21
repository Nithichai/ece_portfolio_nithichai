<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Personal;

class PersonalController extends Controller
{
    public function update(Request $request) {
        $personal = Personal::where('id', Auth::id())
        ->update([
            'student_id' => $request->student_id,
            'address' => $request->address,
            'GPA' => $request->gpa
        ]);
        $personal = Personal::where('id', Auth::id())->get();
        return view('profiles.edit', [
            'personal' => $personal[0]
        ]);
    }
}
