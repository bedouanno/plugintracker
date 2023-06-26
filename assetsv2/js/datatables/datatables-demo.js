// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTables').DataTable({"pageLength": 50});
});

$(document).ready(function() {
  $("#dataTable").DataTable({
    // execute callback when DataTable is completely initialiazed
    "initComplete": function() {
      // Select the column whose header we need replaced using its index(0 based)
      this.api().column(3).every(function() {
        var column = this;
        // Put the HTML of the <select /> filter along with any default options 
        var select = $('<select class="form-control input-sm"><option value="">All</option></select>')
          // remove all content from this column's header and 
          // append the above <select /> element HTML code into it 
          .appendTo($(column.header()).empty())
          // execute callback when an option is selected in our <select /> filter
          .on('change', function() {
            // escape special characters for DataTable to perform search
            var val = $.fn.dataTable.util.escapeRegex(
              $(this).val()
            );

            // Perform the search with the <select /> filter value and re-render the DataTable
            column
              .search(val ? '^' + val + '$' : '', true, false)
              .draw();
          });
        // fill the <select /> filter with unique values from the column's data
        column.data().unique().sort().each(function(d, j) {
          select.append("<option value='" + d + "'>" + d + "</option>")
        });
      });
    },
    "columnDefs": [{
      targets: [3],
      orderable: false
    }]
  });
});

