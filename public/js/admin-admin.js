// Declare function to be excuted when the document is ready
$(function(){

    // onclick event on add modal button
    $('#addModalBtn').click(function (e) { 
        $('#adminForm').attr('action', '/admin/admin/insert');
        
    });

    $('.editModalBtn').click(function (e) { 
        const id = $(this).data('id');
        const path = '/admin/admin/edit/'+ id; 
        const path2 = '/admin/admin/getdata/'+ id; 
        $('#adminForm').attr('action', path)

        // Doing ajax, to return specefic user data to be inserted in modal form
        $.ajax({
            url:path2,
            data: { id:id },
            method:'post',
            dataType: 'json',
            success:function(data) {
                $('#id').val(data.id);
                $('#username').val(data.u_username);
                $('#password').val(data.u_password);
                // console.log(data);
            }
        });
    });
});