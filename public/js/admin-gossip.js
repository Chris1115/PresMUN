// Declare function to be excuted when the document is ready
$(function(){

    // onclick event on add modal button
    $('#addModalBtn').click(function (e) { 
        $('#gossipForm').attr('action', '/admin/gossip/insert');
        
    });

    $('.editModalBtn').click(function (e) { 
        const id = $(this).data('id');
        const path = '/admin/gossip/edit/'+ id; 
        const path2 = '/admin/gossip/getdata/'+ id; 
        $('#gossipForm').attr('action', path)

        // Doing ajax, to return specefic user data to be inserted in modal form
        $.ajax({
            url:path2,
            data: { id:id },
            method:'post',
            dataType: 'json',
            success:function(data) {
                $('#id').val(data.id);
                $('#title').val(data.g_title);
                $('#message').val(data.g_message);
                $('#receiver').val(data.g_receiver);
                $('#sender').val(data.g_sender);
                // console.log(data);
            }
        });
    });
});