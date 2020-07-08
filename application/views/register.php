<title>Contact Plus - Register</title>

<div id="container">
	

	<div id="body" style="width:80%;margin:30px auto;">
	

    <div class="card col-md-4" style="margin:30px auto;">
    <h4 style="text-align:center;margin-top:30px;">
        <span style="color:#334554;">Contact</span>
        <span style="color:orange;"> Plus</span>
    </h4>
    <h4 style="text-align:center;margin-top:30px;"> Create new Account</h4>
    


        <article class="card-body">
       
        <?php if($this->session->flashdata('message')){
        echo '<div class="alert alert-success">
        <strong>Success!</strong> '.$this->session->flashdata('message').'
        </div>';    
        } ?>

       
        <?php echo form_open_multipart('home/submitregister');?>	
            <div class="form-group">
                <label>Your Name</label>
                <input name="fullname" class="form-control" placeholder="Full Name" type="text">
                <small id="error" class="form-text text-danger"><?php echo form_error('fullname'); ?></small>
            </div> <!-- form-group// -->
            <div class="form-group">
                <label>Your email</label>
                <input name="email" class="form-control" placeholder="Email" type="email">
                <small id="error" class="form-text text-danger"><?php echo form_error('email'); ?></small>
            </div> <!-- form-group// -->
            <div class="form-group">
               
                <label>Your password</label>
                <input class="form-control" name="password" placeholder="******" type="password">
                <small id="error" class="form-text text-danger"><?php echo form_error('password'); ?></small>
            </div> <!-- form-group// --> 
            <div class="form-group"> 
            <div class="checkbox">
            
            </div> <!-- checkbox .// -->
            </div> <!-- form-group// -->  
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Register  </button>
            </div> <!-- form-group// -->         
            <a href="<?= base_url();?>home" class="float-right btn btn-outline-primary">Login</a>                                                  
        </form>
        </article>
    </div> 
	
</div>


</body>
