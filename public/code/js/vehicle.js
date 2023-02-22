$(document).ready(function () {
  vehicle()
})
function vehicle() {
  var manageTable = $('#vehicle-table').DataTable()
  manageTable.destroy()
  manageTable = $('#vehicle-table').DataTable({
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
