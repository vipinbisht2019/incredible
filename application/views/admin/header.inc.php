<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand" style="padding: 5px 39px;width: 1018px;">
    	<?php if($_SESSION['adm_name'] == 'CRM Admin'){ ?>
        <a href="<?php echo base_url('admin/desktop'); ?>"><img  src="<?php echo base_url('assets/admin/img/stop-n-stop-logo.png') ?>" class="img-responsive logo"></a>
        <?php }if($_SESSION['adm_name'] == 'Incrediable Vacations India'){ ?> 
			
			<a href="<?php echo base_url('admin/desktop'); ?>"><img  src="<?php echo base_url('assets/admin/img/incredible.png') ?>" class="img-responsive logo"></a>
			<?php } if($_SESSION['adm_name'] == 'Sans Destinations Admin'){ ?> 
			<a href="<?php echo base_url('admin/desktop'); ?>"><img  src="<?php echo base_url('assets/admin/img/stopnshop.png') ?>" style="width:8%;" class="img-responsive logo"></a>
			<?php }if($_SESSION['adm_name'] == 'Super Admin'){  ?> 
			<a href="<?php echo base_url('admin/desktop'); ?>"><img  src="<?php echo base_url('assets/admin/img/stop-n-stop-logo.png') ?>"  class="img-responsive logo"></a>
			<?php }	?>
		
       
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- <img src="<?php echo base_url('assets/admin/img/user.png') ?>" class="img-circle" alt="Avatar">  -->
                        <span style="font-size:16px;"><?php echo $_SESSION['adm_name'];?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('admin/admin/view'); ?>"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                        <li><a href="<?php echo base_url('admin/login/logout'); ?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>