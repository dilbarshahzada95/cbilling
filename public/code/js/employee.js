$(document).ready(function() {
    employee();
    departments();
});
function employee(){
    var manageTable = $('#employee-table').DataTable();
    manageTable.destroy();
    manageTable = $("#employee-table").DataTable({
        "ajax": {
            "url": '',
            'type': "GET",
        },
        "order": [[0, 'asc']],
        lengthMenu: [
            [10, 25, 50, 100, -1],
            ['10', '25', '50', '100', 'All']],



   });
}

function departments(){
    var manageTable = $('#department-table').DataTable();
    manageTable.destroy();
    manageTable = $("#department-table").DataTable({
        "ajax": {
            "url": '',
            'type': "GET",
        },
        "order": [[0, 'asc']],
        lengthMenu: [
            [10, 25, 50, 100, -1],
            ['10', '25', '50', '100', 'All']],



   });
}

