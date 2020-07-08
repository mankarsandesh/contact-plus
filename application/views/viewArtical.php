
<div id="container">
	

	<div id="body" style="width:80%;margin:30px auto;">
	<h3>View Artical Details.</h3>

    <?php
    if(count($Viewartical) > 0){
    ?>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
       
        <th>Title</th>
        <th>Description</th>
        <th>Author</th>
        <th>Image</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      
      foreach($Viewartical as $data){?>
      <tr>
        <td><?= $data->title;?> </td>
        <td><?= $data->description;?> </td>
        <td><?= $data->author;?> </td>
        <td><img src="<?= base_url().$data->image;?>" width="100px" /> </td>
        <td><?= $data->date;?> </td>
        <td><a href='<?= base_url();?>home/deletedata?id=<?= $data->postId; ?>'> Delete</a></td>
      </tr>      
      <?php
         }
       
      ?>
     
    </tbody>
  </table>
        <?php 
             }else{
                echo "<p style='text-align:center;margin:50px auto;'>There are no artical.</p>";
            }   
        ?>

    </div>

	
</div>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
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


</body>
