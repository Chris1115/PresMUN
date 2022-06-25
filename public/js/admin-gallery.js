// Declare function to be excuted when the document is ready
$(function(){

    // onclick event on add modal button
    $('#addModalBtn').click(function (e) { 
        $('#galleryForm').attr('action', '/admin/gallery/insert');
        
    });

    $('.editModalBtn').click(function (e) { 
        const id = $(this).data('id');
        const path = '/admin/gallery/edit/'+ id; 
        const path2 = '/admin/gallery/getdata/'+ id; 
        $('#galleryForm').attr('action', path)

        // Doing ajax, to return specefic user data to be inserted in modal form
        $.ajax({
            url:path2,
            data: { id:id },
            method:'post',
            dataType: 'json',
            success:function(data) {
                $('#id').val(data.id);
                $('#title').val(data.ga_title);
                $('#image').val(data.ga_image);
                // console.log(data);
            }
        });
    });
});