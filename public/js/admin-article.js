// Declare function to be excuted when the document is ready
$(function(){

    // onclick event on add modal button
    $('#addModalBtn').click(function (e) { 
        $('#articleForm').attr('action', '/admin/article/insert');
        
    });

    $('.editModalBtn').click(function (e) { 
        const id = $(this).data('id');
        const path = '/admin/article/edit/'+ id; 
        const path2 = '/admin/article/getdata/'+ id; 
        $('#articleForm').attr('action', path)

        // Doing ajax, to return specefic user data to be inserted in modal form
        $.ajax({
            url:path2,
            data: { id:id },
            method:'post',
            dataType: 'json',
            success:function(data) {
                $('#id').val(data.id);
                $('#title').val(data.a_title);
                $('#image').val(data.a_image);
                $('#headline').val(data.a_headline);
                $('#description').val(data.a_description);
                // console.log(data);
            }
        });
    });
});