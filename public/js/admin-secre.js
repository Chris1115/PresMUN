// Declare function to be excuted when the document is ready
$(function(){

    $('#image').change(function (e) { 
        const oFReader = new FileReader();

        $('#secrePreview').css('display', 'block');

        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent)
        {
            $('#secrePreview').attr('src', oFREvent.target.result);
        }
    });

    $.ajax({
        url:'/admin/subdivision/getAll',
        method:'post',
        dataType: 'json',
        success:function(data) {
            $('#division_id').change(function (e) {
                const options = document.getElementById('subdivision_id');

                while (options.lastChild)
                {
                    options.removeChild(options.lastChild);
                }
                
                // console.log(options);
                let param = $(this).val();
                $.each(data, function (indexInArray, valueOfElement) { 
                     if(data[indexInArray].divisions_id == param)
                     {
                        let option = document.createElement('option');
                        option.textContent = data[indexInArray].sd_name;
                        option.value = data[indexInArray].id
                        options.append(option);
                     }
                });
            });
            // console.log(data);
        }
    });

    // onclick event on add modal button
    $('#addModalBtn').click(function (e) { 
        $('#secreForm').attr('action', '/admin/secre/insert');
    });

    $('.editModalBtn').click(function (e) { 
        const id = $(this).data('id');
        const path = '/admin/secre/edit/'+ id; 
        const path2 = '/admin/secre/getdata/'+ id; 
        $('#secreForm').attr('action', path)

        // Doing ajax, to return specefic user data to be inserted in modal form
        $.ajax({
            url:path2,
            data: { id:id },
            method:'post',
            dataType: 'json',
            success:function(data) {
                $('#id').val(data.id);
                $('#name').val(data.s_name);
                $('#division_id').val(data.divisions_id);
                $('#subdivision_id').val(data.subdivisions_id);
                $('#achievements').val(data.s_achievements);
                $('#description').val(data.s_description);
                // console.log(data);
                let param = data.divisions_id;

                $.ajax({
                    url:'/admin/subdivision/getAll',
                    method:'post',
                    dataType: 'json',
                    success:function(data) {
                    const options = document.getElementById('subdivision_id');
    
                    while (options.lastChild)
                    {
                        options.removeChild(options.lastChild);
                    }
                    
                    $.each(data, function (indexInArray, valueOfElement) { 
                            if(data[indexInArray].divisions_id == param)
                            {
                                let option = document.createElement('option');
                                option.textContent = data[indexInArray].sd_name;
                                option.value = data[indexInArray].id
                                options.append(option);
                            }
                    });
                        // console.log(data);
                    }
                });
            }
        });
    });
});