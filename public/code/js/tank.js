$(document).ready(function() {
    tank();
});
function tank(){
    var manageTable = $('#tank-table').DataTable();
    manageTable.destroy();
    manageTable = $("#tank-table").DataTable({
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
