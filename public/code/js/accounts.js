$(document).ready(function () {
  accounts()
  balance_adjustment()
  balance_transfer()
  account_transaction_history()
})
function accounts() {
  var manageTable = $('#accounts-table').DataTable()
  manageTable.destroy()
  manageTable = $('#accounts-table').DataTable({
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
function balance_adjustment() {
  var manageTable = $('#balance-adjustment-table').DataTable()
  manageTable.destroy()
  manageTable = $('#balance-adjustment-table').DataTable({
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

function balance_transfer() {
  var manageTable = $('#balance-transfer-table').DataTable()
  manageTable.destroy()
  manageTable = $('#balance-transfer-table').DataTable({
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

function account_transaction_history() {
  var manageTable = $('#account-transaction-history-table').DataTable()
  manageTable.destroy()
  manageTable = $('#account-transaction-history-table').DataTable({
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
