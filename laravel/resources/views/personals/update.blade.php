<form class="form-horizontal" method="POST" action="/personal/update">
    {{ csrf_field() }}
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
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                ok
            </button>
            <a href="/home" class="btn btn-default">cancel</a>
        </div>
    </div>
</form>
