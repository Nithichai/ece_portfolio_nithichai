@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Student Accout</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/students">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="student_id" class="col-md-4 control-label">Student ID</label>
                            <div class="col-md-6">
                                <input id="student_id" type="text" class="form-control" name="student_id" value="{{ $personal->student_id }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gpa" class="col-md-4 control-label">GPA</label>
                            <div class="col-md-6">
                                <input id="gpa" type="text" class="form-control" name="{{ $personal->GPA }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-md-4 control-label">Address</label>
                            <div class="col-md-6">
                                <textarea id="address" class="form-control" name="{{ $personal->address }}" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" value="ok" action="/profile" method="post" class="btn btn-primary">
                                <a href="/home" class="btn btn-default">cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
