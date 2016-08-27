$(document).ready(function() {
     // alert('test');
    $('#book-table').DataTable({
        "aLengthMenu": [5, 10,25, 50, 75, "All"],
        "pagingType": "full_numbers",
        "pageLength": 5

    });
    $('#genre-table').DataTable({
        "aLengthMenu": [5, 10,25, 50, 75, "All"],
        "pagingType": "full_numbers",
        "pageLength": 5
    });

});
