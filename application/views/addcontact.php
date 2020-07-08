
<div  class="container">
	
<style>
.form-group{
  float:left;
  width:50%;
  height:70px;
}

</style>
	
	

<?php echo form_open_multipart('home/submitcontact');?>	
<div class="col-md-8">
  <h2>Create new contact</h2>
  <div class="form-group col-md-6">
    <label for="email">First Name:</label>
    <input type="hidden" class="form-control" name="addedby" value="<?= $userId; ?>">
    <input type="text" class="form-control" name="firstName">
    <small id="error" class="form-text text-danger"><?php echo form_error('firstName'); ?></small>
  </div>

  <div class="form-group col-md-6">
    <label for="email">Middle Name <small>(Optional)</small></label>
    <input type="text" class="form-control" name="middleName">
  </div>

  <div class="form-group col-md-6">
    <label for="email">Last Name:</label>
    <input type="text" class="form-control" name="lastName">
    <small id="error" class="form-text text-danger"><?php echo form_error('lastName'); ?></small>
  </div>

  <div class="form-group col-md-6">
    <label for="email">Email <small>(Optional)</small></label>
    <input type="email" class="form-control" name="email">
  </div>

  <div class="form-group col-md-6">
    <label for="email">Mobile </label>
    <input type="number" class="form-control" name="mobile">
    <small id="error" class="form-text text-danger"><?php echo form_error('mobile'); ?></small>
  </div>

  <div class="form-group col-md-6">
    <label for="email">Landline <small>(Optional)</small></label>
    <input type="number" class="form-control" name="landline">
  </div>

  <div class="col-md-12">
    <label for="email">Notes <small>(Optional)</small></label>
    <textarea class="form-control" rows="4" name="notes"></textarea>
  </div>

 
  <div class="col-md-12" style="margin-top:20px;">
   
    <label class="radio-inline">
      <input type="radio" name="status" value="public" checked>Public
    </label>
    <label class="radio-inline">
      <input type="radio" name="status" value="private" >Private
    </label>
  </div>
 
<br/><br/><br/>
  <div class=" col-md-12" style="margin-top:20px;">
    <label for="email">Photo <small>(Optional)</small></label>
    <input type="file" name="photo" class="form-control">
  </div>
  <br/><br/><br/>

  <div class=" col-md-12" style="margin-top:20px;">
  <button type="submit" class="btn btn-primary">Save Contact</button>
  </div>
  
 </div>
  
</form>




</div>


</body>
