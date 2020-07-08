
<div id="container" class="container">
	

	
	

	<div class="col-md-12">
	<!-- <button type="button" class="btn btn-primary">Add Contact</button> -->
	<br/><br/>


  <table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th class="th-sm">
      </th>
      <th class="th-sm">Name
      </th>
      <th class="th-sm">Email
      </th>
      <th class="th-sm">Mobile
      </th>
      
      <th class="th-sm">Status
      </th>
      <th class="th-sm">View
      </th>
      <th class="th-sm">added by
      </th>
      <th class="th-sm">Date
      </th>
     
    </tr>
  </thead>
  <tbody>
  <?php foreach($allContact as $view){?>
    <tr>
    <td><img src="<?= base_url().$view['photo']; ?>"  style="width:50px;border-radius:180px;"/></td>
      <td><a href="<?= base_url();?>home/profile/<?= $view['contactId']; ?>"><?= $view['firstName']; ?> <?= $view['lastName']; ?></a></td>
      <td><?= $view['email']; ?></td>
      <td><?= $view['mobile']; ?></td>
      <td>
      <a href="#" class="label label-<?php if($view['status'] == "public"){ echo 'primary'; }else{ echo 'danger';} ?>"><?= $view['status'];?></a>
      </td>
      <td><?= $view['view']; ?></td>
      <td><?= $view['fullname']; ?></td>
      <td><?= date("d M Y", strtotime($view['date'])); ?></td>
      
    </tr>
  <?php } ?>

  
  </tbody>

</table>

	</div>


</body>
