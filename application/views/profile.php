
<div id="container" class="container">
	



	<div class="col-md-12">
        <?php foreach($contactInfo as $userInfo){?>
        <div class="col-sm-6 col-md-4">
            <img src="<?= base_url(). $userInfo['photo']; ?>" alt=""  class="img-rounded img-responsive" />
        </div>

        <div class="col-sm-6 col-md-8">
            <h4>
                <?= $userInfo['firstName'];?> <?= $userInfo['middleName'];?> <?= $userInfo['lastName'];?></h4>
           
            <p>
                <i class="glyphicon glyphicon-envelope"></i> <?= $userInfo['mobile'];?> / <?= $userInfo['landline'];?>
                <br />
                <i class="glyphicon glyphicon-envelope"></i> <?= $userInfo['email'];?>
                <br />
                <i class="glyphicon glyphicon-gift"></i> <?= $userInfo['date'];?> </p>
                <span><i class="fa fa-lock" aria-hidden="true"></i> <?= $userInfo['status'];?>  </span> <br/>
                <span><i class="fa fa-eye" aria-hidden="true"></i> <?= $userInfo['view'];?> Views </span>
                <p>
                <i class="fa fa-sticky-note" aria-hidden="true"></i> <?= $userInfo['notes'];?> 
                </p>
                
        </div>
        <?php } ?>

	</div>


</body>
