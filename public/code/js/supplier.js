$(document).ready(function () {
  //   alert()
  supplier()
})
function supplier() {
  var manageTable = $('#suppliers-table').DataTable()
  manageTable.destroy()
  manageTable = $('#suppliers-table').DataTable({
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
