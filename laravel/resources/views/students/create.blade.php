@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Student Accout</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/students">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="student_id" class="col-md-4 control-label">Student ID</label>
                            <div class="col-md-6">
                                <input id="student_id" type="text" class="form-control" name="student_id" value="{{ old('student_id') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-md-4 control-label">Address</label>
                            <div class="col-md-6">
                                <textarea id="address" class="form-control" name="address" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gpa" class="col-md-4 control-label">GPA</label>
                            <div class="col-md-6">
                                <input id="gpa" type="text" class="form-control" name="gpa" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                                <a href="/students" class="btn btn-default">
                                    Back
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
