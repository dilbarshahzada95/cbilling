$(document).ready(function () {
  customer()
  price()
  tag()
})
function customer() {
  var manageTable = $('#customer-table').DataTable()
  manageTable.destroy()
  manageTable = $('#customer-table').DataTable({
    ajax: {
      url: '',
      type: 'GET',
    },
    scrollY: '50vh',
    scrollCollapse: true,
    paging: false,
    scrollX: true,
    // scroll design
    scroller: {
      loadingIndicator: true,
    },
    order: [[0, 'asc']],
    lengthMenu: [
      [10, 25, 50, 100, -1],
      ['10', '25', '50', '100', 'All'],
    ],
  })
}
function price() {
  var manageTable = $('#price-table').DataTable()
  manageTable.destroy()
  manageTable = $('#price-table').DataTable({
    ajax: {
      url: '',
      type: 'GET',
    },
    scrollY: '50vh',
    scrollCollapse: true,
    paging: false,
    scrollX: true,
    // scroll design
    scroller: {
      loadingIndicator: true,
    },

    order: [[0, 'asc']],
    lengthMenu: [
      [10, 25, 50, 100, -1],
      ['10', '25', '50', '100', 'All'],
    ],
  })
}

function tag() {
  var manageTable = $('#tag-table').DataTable()
  manageTable.destroy()
  manageTable = $('#tag-table').DataTable({
    ajax: {
      url: '',
      type: 'GET',
    },
    scrollY: '50vh',
    scrollCollapse: true,
    paging: false,
    scrollX: true,
    // scroll design
    scroller: {
      loadingIndicator: true,
    },

    order: [[0, 'asc']],
    lengthMenu: [
      [10, 25, 50, 100, -1],
      ['10', '25', '50', '100', 'All'],
    ],
  })
}
