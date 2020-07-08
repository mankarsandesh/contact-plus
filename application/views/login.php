<title>Contact Plus - Login</title>

<div id="container">
	

	<div id="body" style="width:80%;margin:30px auto;">
	
    <style>
    .error_msg{color:red;}
    .message{color:green;}
    </style>
    <div class="card col-md-4" style="margin:30px auto;">
    <h4 style="text-align:center;margin-top:30px;">
        <span style="color:#334554;">Contact</span>
        <span style="color:orange;"> Plus</span>
    </h4>
    <h4 style="text-align:center;margin-top:30px;"> Login Contact Plus</h4>
        <article class="card-body">

            <?php
            if (isset($logout_message)) {
            echo "<div class='message'>";
            echo $logout_message;
            echo "</div>";
            }
            ?>
            <?php
            if (isset($message_display)) {
            echo "<div class='message'>";
            echo $message_display;
            echo "</div>";
            }
            ?>

       
           <?php echo form_open('home/user_login_process'); ?>
            <?php
            echo "<div class='error_msg'>";
            if (isset($error_message)) {
            echo $error_message;
            }
            echo validation_errors();
            echo "</div>";
            ?>
            <div class="form-group">
                <label>Your email</label>
                <input name="email" class="form-control" placeholder="Email" type="email">
            </div> <!-- form-group// -->
            <div class="form-group">
                
                <label>Your password</label>
                <input class="form-control" name="password" placeholder="******" type="password">
            </div> <!-- form-group// --> 
            <div class="form-group"> 
            <div class="checkbox">
            <label> <input type="checkbox"> Save password </label>
            </div> <!-- checkbox .// -->
            </div> <!-- form-group// -->  
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Login  </button>
            </div> <!-- form-group// -->         
            <a href="<?= base_url();?>home/register" class="float-right btn btn-outline-primary">Register</a>                                                  
        </form>
        </article>
    </div> 
	
</div>


</body>
