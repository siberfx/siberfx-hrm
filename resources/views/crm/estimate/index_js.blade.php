<script>

  $(function(){
    "use strict";

    var estimates = <?php echo(($estimate_ids->content())) ?>;
    for(const id of estimates) {
        var btn = `
            <a href="#" onclick="confirmDelete('${id}')">
                <i class="fas fa-trash text-danger"></i>
            </a>
        `;
        $(`#delbtn${id}`).append(btn);
    }
  });  
  function showExtraButtons(id){
    $(`#extraButtons${id}`).show();
   }
   function hideExtraButtons(id){
    $(`#extraButtons${id}`).hide();
   }
   
  $('#estimatesTable').DataTable( {

  "order": [[ 0, "desc" ]],
  dom: '<"top"Bf>rt<"bottom"lip><"clear">',
  lengthMenu: [
      [ 10, 25, 50,100, -1 ],
      [ '10 rows', '25 rows', '50 rows','100 rows', 'Show all' ]
  ],
  buttons: [
      {
          extend: 'copyHtml5',
          exportOptions: {
              columns: [ 0, 1, 2, 3, 4, 5, 6, 7]
          }
      },
      {
          extend: 'csv',
          exportOptions: {
              columns: [ 0, 1, 2, 3, 4, 5, 6, 7]
          }
      },
      {
          extend: 'excel',
          exportOptions: {
              columns: [ 0, 1, 2, 3, 4, 5, 6, 7]
          }
      },
      {
          extend: 'pdf',
          exportOptions: {
              columns: [ 0, 1, 2, 3, 4, 5, 6, 7]
          }
      },
      {
          extend: 'print',
          exportOptions: {
              columns: [ 0, 1, 2, 3, 4, 5, 6, 7]
          }
      },
  ]
} );

    function confirmDelete(id){
        let choice = confirm("Are you sure, you want to delete this estimate and related data ?")
        if(choice){
            document.getElementById('delete-contact-'+id).submit();
        }
    }

  </script>