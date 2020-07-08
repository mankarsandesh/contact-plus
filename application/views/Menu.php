
<body>
<style>
.search{
  width:40%;
    margin: 7px;
    padding: 7px;
    border-radius: 2px;
    background-color: #ececec;
    border: 1px solid #cccccc;
}
</style>


      
      <!-- Javascript -->
      <script>
         $(function() {
            var availableTutorials  =  [
               "ActionScript",
               "Bootstrap",
               "C",
               "C++",
            ];
            $( "#search" ).autocomplete({
               source: x
            });
         });
      </script>


<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Contact <span style="color:orange;">Plus</span></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="<?php  if($this->uri->segment(2) == "dashboard"){ echo 'active';} ?>"><a href="<?= base_url();?>home/dashboard">Dashboard</a></li>  
      <li class="<?php  if($this->uri->segment(2) == "mycontact"){ echo 'active';} ?>"><a href="<?= base_url();?>home/mycontact">My Contact</a></li>  
     
    </ul>
    <input type="text" class="search" id="search"  list="languageList" placeholder="Search..">
    <datalist id="languageList">
      <?php foreach($userName as $list){?>
      <option value="<?= $list['firstName'];?> <?= $list['lastName'];?> (<?= $list['mobile'];?>)" />
      <?php }?>
      
    
    </datalist>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Hello, <?= $fullname; ?></a></li>
      <li><a href="<?= base_url();?>home/logout"> Logout</a></li>
      
    </ul>
  </div>
</nav>

<!-- 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Contact Plus</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item <?php  if($this->uri->segment(2) == "addartical"){ echo 'active';} ?>">
        <a class="nav-link" href="<?= base_url();?>home/addartical">Add Artical</a>
      </li>
      <li class="nav-item <?php  if($this->uri->segment(2) == "viewartical"){ echo 'active';} ?>">
        <a class="nav-link" href="<?= base_url();?>home/viewartical">View Artical</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>    
</nav> -->