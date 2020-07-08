<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"> </script> 

  <script type="text/javascript">
      
      jQuery(document).ready(function() {
    jQuery('#example').DataTable({
        "columnDefs": [
                    {
                       
                        "visible": false,
                        "searchable": false
                    }],
         "order": [[ 0, "desc" ]]
    });
} );
    </script>

</html>