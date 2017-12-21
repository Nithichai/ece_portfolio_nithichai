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
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                {{ Auth::user()->name }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                {{ Auth::user()->email }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="student_id" class="col-md-4 control-label">Student ID</label>
                            <div class="col-md-6">
                                {{ $personal->student_id }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-md-4 control-label">Address</label>
                            <div class="col-md-6">
                                {{ $personal->address }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gpa" class="col-md-4 control-label">GPA</label>
                            <div class="col-md-6">
                                {{ $personal->GPA }}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="/profile/edit" class="btn btn-primary">
                                    edit
                                </a>
                                <a href="/home" class="btn btn-default">
                                    back
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
