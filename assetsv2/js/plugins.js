
(function ($) {


    $('#approvedPlugin, #forApproval, #notSafeplugin, #statusApproval, #userList, #publicViewTable').DataTable({
      "pageLength": 50,
      order: [ 0, 'asc' ]

    });


    



      $('#dashBoardTable').DataTable({
      "pageLength": 50,
      columnDefs: [ { type: 'date', 'targets': [3] }],
      order: [[ 3, 'desc' ]]
      
    });


})(jQuery);