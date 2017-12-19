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
        $this->middleware('auth');
        $personal = new Personal;
        $personal->student_id = $request->student_id;
        $personal->email = $request->email;
        $personal->address = $request->address;
        $personal->GPA = $request->gpa;
        $personal->user_id = Auth::id();
        $personal->save();
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
}
