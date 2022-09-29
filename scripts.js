$(document).ready(function() {
    $('.deletebtn').on('click', function() {
        $('#deleteModal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();
        console.log(data);
        $('#delete_id').val(data[0]);

    });
});
$(document).ready(function() {
    $('.editbtn').on('click', function() {
        $('#editModal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();
        console.log(data);
        $('#update_id').val(data[0]);
        $('#title1').val(data[1]);
        $('#email1').val(data[2]);
        $('#message1').val(data[3]);
        $('#created').val(data[4]);
        $('#status').val(data[5]);


    });
});