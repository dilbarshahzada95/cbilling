$(document).ready(function () {
  transaction()
})
function transaction() {
  var manageTable = $('#transaction-table').DataTable()
  manageTable.destroy()
  manageTable = $('#transaction-table').DataTable({
    ajax: {
      url: '',
      type: 'GET',
    },
    order: [[0, 'asc']],
    lengthMenu: [
      [10, 25, 50, 100, -1],
      ['10', '25', '50', '100', 'All'],
    ],
  })
}
