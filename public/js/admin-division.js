// Declare function to be excuted when the document is ready
$(function(){

    // onclick event on add modal button
    $('#addModalBtn1').click(function (e) { 
        $('#divisionForm').attr('action', '/admin/division/insert');
        
    });

    $('.editModalBtn1').click(function (e) { 
        const id = $(this).data('id');
        const path = '/admin/division/edit/'+ id; 
        const path2 = '/admin/division/getdata/'+ id; 
        $('#divisionForm').attr('action', path)

        // Doing ajax, to return specefic user data to be inserted in modal form
        $.ajax({
            url:path2,
            data: { id:id },
            method:'post',
            dataType: 'json',
            success:function(data) {
                $('#d_id').val(data.id);
                $('#d_name').val(data.d_name);
                $('#d_description').val(data.d_description);
                // console.log(data);
            }
        });
    });




    // AJAX for Personel Data Edit

    $('#addModalBtn2').click(function (e) { 
        $('#subdivisionForm').attr('action', '/admin/subdivision/insert');
        
    });

    $('.editModalBtn2').click(function (e) { 
        const id = $(this).data('id');
        const path = '/admin/subdivision/edit/'+ id; 
        const path2 = '/admin/subdivision/getdata/'+ id; 
        $('#subdivisionForm').attr('action', path)

        // Doing ajax, to return specefic user data to be inserted in modal form
        $.ajax({
            url:path2,
            data: { id:id },
            method:'post',
            dataType: 'json',
            success:function(data) {
                $('#sd_id').val(data.id);
                $('#sd_name').val(data.sd_name);
                $('#divisions_id').val(data.divisions_id);
                $('#sd_description').val(data.sd_description);
                console.log(data);
            }
        });
    });
});