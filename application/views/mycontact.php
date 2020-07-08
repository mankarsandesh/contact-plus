
<div id="container" class="container">
	

	
	

	<div class="col-md-12">
	<a  href="<?= base_url();?>home/addcontact" class="btn btn-primary"  >Add Contact</a>
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
      <th class="th-sm">Date
      </th>
      <th class="th-sm">Action
      </th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($viewContact as $view){?>
    <tr>
    <td><img src="<?= base_url().$view['photo']; ?>"  style="width:50px;border-radius:180px;"/></td>
      <td><a href="<?= base_url();?>home/profile/<?= $view['contactId']; ?>"><?= $view['firstName']; ?> <?= $view['lastName']; ?></a></td>
      <td><?= $view['email']; ?></td>
      <td><?= $view['mobile']; ?></td>
     
      <td>
      <a href="#" class="label label-<?php if($view['status'] == "public"){ echo 'primary'; }else{ echo 'danger';} ?>"><?= $view['status'];?></a>
      </td>
      <td><?= $view['view']; ?></td>
      <td><?= date("d M Y", strtotime($view['date'])); ?></td>
      <td>
      <a href="<?= base_url();?>home/profile/<?= $view['contactId']; ?>" class="btn-sm btn-primary">View Profile</a>
      <a href="<?= base_url();?>home/deletedata?id=<?= $view['contactId']; ?>" class="btn-sm btn-danger">Delete</a>
      </td>
    </tr>
  <?php } ?>

  
  </tbody>

</table>
	</div>


</body>
