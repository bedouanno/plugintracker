
(function ($) {


    $('#approvedPlugin, #forApproval, #notSafeplugin, #statusApproval, #userList, #publicViewTable').DataTable({
      "pageLength": 50,
           dom: 'Bfrtip',
              buttons: [
   {
        extend: 'excel',
        text: 'Export to EXCEL',
      exportOptions: {
        columns: 'th:not(:last-child)'
        
      }
    }],
      columnDefs: [ { type: 'date', 'targets': [3] }],
    
      order: [ 0, 'asc' ]

    });


    



      $('#dashBoardTable').DataTable({
      "pageLength": 50,
      dom: 'Bfrtip',
      columnDefs: [ { type: 'date', 'targets': [3] }],
              buttons: [
            'csv', 'excel',
            
            
        ],
        exportOptions: {
            columns: ':not(.notexport)'
        },
      order: [[ 3, 'desc' ]]
      
    });


$('.dt-buttons button').removeClass("dt-button buttons-excel buttons-html5");
$('.dt-buttons button').addClass('btn btn-success');



})(jQuery);