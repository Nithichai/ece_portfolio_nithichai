function update_personal(){
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
            $("#personal").html(data);
        },
        error : function(data) {
            console.log(data);
        }
    });
}
