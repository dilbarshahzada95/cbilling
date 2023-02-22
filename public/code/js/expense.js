$(document).ready(function() {
    expense_category();
    expense();

});
function expense_category(){
    var manageTable = $('#expense_category-table').DataTable();
    manageTable.destroy();
    manageTable = $("#expense_category-table").DataTable({
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

function expense(){
    var manageTable = $('#expense-table').DataTable();
    manageTable.destroy();
    manageTable = $("#expense-table").DataTable({
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
