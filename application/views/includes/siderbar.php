 <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="javascript:;" target="_blank">
      <img src="<?php echo base_url(); ?>assetsv2/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">Plugin Tracker 2</span>
    </a>
  </div>


  <hr class="horizontal light mt-0 mb-2">

  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      
<li class="nav-item">
  <a class="nav-link text-white " href="<?php echo base_url(); ?>dashboard">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">dashboard</i>
      </div>
    
    <span class="nav-link-text ms-1">Dashboard</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-white " href="<?php echo base_url(); ?>plugins/research">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">table_view</i>
      </div>
    
    <span class="nav-link-text ms-1">Research Plugins</span>
  </a>
</li>

 <li class="nav-item">
  <a class="nav-link text-white " href="<?php echo base_url(); ?>plugins/for-review">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">receipt_long</i>
      </div>
    

      <span class="nav-link-text ms-1">For Review <mark class="text-xxs bg-transparent text-white">(Leader Admin)</mark>
     <?php if($this->plugins_model->get_review_count(0) != 0): ?>
      <small class="badge text-xxs bg-danger p-2 rounded ml-2"><?php echo $this->plugins_model->get_review_count(0); ?></small> 
      <?php endif; ?>
    </span>
  </a>
</li>

  
 <li class="nav-item">
  <a class="nav-link text-white " href="<?php echo base_url(); ?>plugins/approved">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">receipt_long</i>
      </div>
    
    <span class="nav-link-text ms-1">Approved Plugins</span>
  </a>
</li>
 <li class="nav-item">
  <a class="nav-link text-white " href="<?php echo base_url(); ?>plugins/not-safe">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">close</i>
      </div>
    
    <span class="nav-link-text ms-1">Not Safe Plugins</span>
  </a>
</li>
  <!--
<li class="nav-item">
  <a class="nav-link text-white " href="./virtual-reality.html">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">view_in_ar</i>
      </div>
    
    <span class="nav-link-text ms-1">Virtual Reality</span>
  </a>
</li>


  
<li class="nav-item">
  <a class="nav-link text-white " href="./notifications.html">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">notifications</i>
      </div>
    
    <span class="nav-link-text ms-1">Notifications</span>
  </a>
</li> -->

  
    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
    </li>
  
<!-- <li class="nav-item">
  <a class="nav-link text-white " href="./profile.html">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">person</i>
      </div>
    
    <span class="nav-link-text ms-1">Profile</span>
  </a>
</li> -->


<li class="nav-item">
  <a class="nav-link text-white" href="<?php echo base_url(); ?>users/list">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">assignment</i>
      </div>
    
    <span class="nav-link-text ms-1">Users</span>

  </a>
</li>
 
<li class="nav-item">
  <a class="nav-link text-white" href="<?php echo base_url(); ?>logout">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">assignment</i>
      </div>
    
    <span class="nav-link-text ms-1">Sign Out</span>

  </a>
</li>



          

        
      
    </ul>
  </div>
  
  
</aside>

