<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{

    public function index() {
        return view('students.index');
    }

    public function create() {
        $this->middleware('auth');
        return view('students.create');
    }

    public function store(Request $request) {
        $personal = Personal::where('user_id', Auth::id())->get();
        if (count($personal) > 0) {
            return redirect('/students/create');
        }
        $this->middleware('auth');
        $this->create_column($request);
        return redirect('/home');
    }

    public function show($id) {
        // from db to webpage
    }

    public function edit($id) {

    }

    public function update(Request $request, $id) {

    }

    public function destroy($id) {

    }

    private function create_column(Request $request) {
        $personal = new Personal;
        $personal->student_id = $request->student_id;
        $personal->user_id = Auth::id();
        $personal->email = Auth::user()->email;
        $personal->address = $request->address;
        $personal->GPA = $request->gpa;
        $personal->save();
    }
}
