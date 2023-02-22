$(document).ready(function() {
    customer();
});
function customer(){
    var manageTable = $('#customer-payment-table').DataTable();
    manageTable.destroy();
    manageTable = $("#customer-payment-table").DataTable({
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


