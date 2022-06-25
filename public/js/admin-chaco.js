// Declare function to be excuted when the document is ready
$(function(){

    // onclick event on add modal button
    $('#addModalBtn1').click(function (e) { 
        $('#chacoForm').attr('action', '/admin/chaco/insert');
        
    });

    $('.editModalBtn1').click(function (e) { 
        const id = $(this).data('id');
        const path = '/admin/chaco/edit/'+ id; 
        const path2 = '/admin/chaco/getdata/'+ id; 
        $('#chacoForm').attr('action', path)

        // Doing ajax, to return specefic user data to be inserted in modal form
        $.ajax({
            url:path2,
            data: { id:id },
            method:'post',
            dataType: 'json',
            success:function(data) {
                $('#id').val(data.id);
                $('#name').val(data.c_name);
                $('#topic').val(data.c_topic);
                $('#description').val(data.c_description);
                // console.log(data);
            }
        });
    });




    // AJAX for Personel Data Edit

    $('#addModalBtn2').click(function (e) { 
        $('#chacoPersForm').attr('action', '/admin/chaco_pers/insert');
        
    });

    $('.editModalBtn2').click(function (e) { 
        const id = $(this).data('id');
        const path = '/admin/chaco_pers/edit/'+ id; 
        const path2 = '/admin/chaco_pers/getdata/'+ id; 
        $('#chacoPersForm').attr('action', path)

        // Doing ajax, to return specefic user data to be inserted in modal form
        $.ajax({
            url:path2,
            data: { id:id },
            method:'post',
            dataType: 'json',
            success:function(data) {
                $('#pers_id').val(data.id);
                $('#pers_name').val(data.cp_name);
                // $('#image').val(data.cp_image);
                $('#role').val(data.cp_role);
                $('#institution').val(data.cp_institution);
                $('#chacos_id').val(data.chacos_id);
                $('#achievements').val(data.cp_achievements);
                $('#pers_description').val(data.cp_description);
                // console.log(data);
            }
        });
    });
});