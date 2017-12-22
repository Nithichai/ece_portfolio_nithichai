@extends('layouts.app')

@section('content')
<script>
    function personal_update(){
        $.ajax({
            type : 'POST',
            url : '/personal/update',
            data : {
                '_token' : '<?php echo csrf_token() ?>',
                'student_id' : $('#student_id').val(),
                'address' : $('#address').val(),
                'gpa' : $('#gpa').val()
            },
            success : function(data){
                $('#personal_status').fadeIn();
                $('#personal_status').html(data);
                $('#personal_status').fadeOut(3000);
            },
            error : function(data) {
                console.log(data);
            }
        });
    }

    function reward_update(){
        $.ajax({
            type : 'POST',
            url : '/reward/update',
            data : {
                '_token' : '<?php echo csrf_token() ?>',
                'name' : $('#student_id').val(),
                'address' : $('#address').val(),
                'gpa' : $('#gpa').val()
            },
            success : function(data){
                $('#personal_status').fadeIn();
                $('#personal_status').html(data);
                $('#personal_status').fadeOut(3000);
            },
            error : function(data) {
                console.log(data);
            }
        });
    }
</script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Personal Data</div>
                <div class="panel-body" id="personal">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">{{ Auth::user()->name }}</div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">{{ Auth::user()->email }}</div>
                        </div>
                        <div class="form-group">
                            <label for="student_id" class="col-md-4 control-label">Student ID</label>
                            <div class="col-md-6">
                                <input id="student_id" type="text" class="form-control" name="student_id" value="{{ $personal->student_id }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-md-4 control-label">Address</label>
                            <div class="col-md-6">
                                <textarea id="address" class="form-control" name="address" required>{{ $personal->address }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gpa" class="col-md-4 control-label">GPA</label>
                            <div class="col-md-6">
                                <input id="gpa" type="text" class="form-control" name="gpa" value="{{ $personal->GPA }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button onclick="personal_update()" class="btn btn-primary">
                                    update
                                </button>
                                <a href="/home" class="btn btn-default">cancel</a>
                                <label id="personal_status"></label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel-heading">Edit Reward Data</div>
                <div class="panel-body" id="personal">
                    <div class="form-horizontal">
                        @foreach ($rewards as $reward)
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $reward->name }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="year" class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input id="year" type="text" class="form-control" name="year" value="{{ $reward->year }}" required>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button onclick="reward_update()" class="btn btn-primary">
                                    update
                                </button>
                                <a href="/home" class="btn btn-default">cancel</a>
                                <label class="col-md-6 col-md-offset-4" id="personal_status"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
