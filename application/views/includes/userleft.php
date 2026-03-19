<div class="row">
		<div class="col-md-12 hidden-xs hidden-sm">
				<div class="panel">
						<div class="panel-heading" style="padding:5px;">
		            <h3 style="font-size:20px;margin-top:0px;margin-bottom:0px;padding:5px;font-size: 18px;text-transform: capitalize;"><i class="fa fa-align-justify"></i>  User Options</h3>				 
						</div>
						
						<div class="panel-body user_left">
								<ul>
										<li> <a href="<?php echo base_url('userhome'); ?>"><i class="fa fa-dashboard"></i>  Dashboard </a></li>
										<li> <a href="<?php echo base_url('booking/index'); ?>"><i class="fa fa-shopping-basket"></i>  View Booking </a> </li>
					                    <!--    <li> <a href="<?php echo base_url('userorder/view'); ?>"><i class="fa fa-shopping-basket"></i>  View Orders </a>
															</li> -->
					                    <li> <a href="<?php echo base_url('profile'); ?>"><i class="fa fa-picture-o"></i> Edit Profile  </a></li>
					                    <!--    <li> <a href="<?php //echo base_url('wishlist'); ?>"><i class="fa fa-heart"></i> Wishlist  </a></li>
					                    <li> <a href="<?php //echo base_url('complaint/view'); ?>"><i class=" fa fa-comments-o"></i> Complaint Management </a></li>-->
					                    <li> <a href="<?php echo base_url('changepassword'); ?>"><i class="fa fa-edit"></i> Change Password</a></li>
					                    <li> <a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-sign-out"></i>  Logout </a></li>						
								</ul>	  
            </div>	
        </div>
		</div>
</div>

<div class="col-md-12 hidden-lg hidden-md">
  	<div class="dropdown">
    		<button style="background-color: #000;" class="btn dropdown-toggle" type="button" data-toggle="dropdown"> <i class="fa fa-server"></i> 
    		</button>
    		<ul class="dropdown-menu">
            <div class="user_left">
								<ul>
										<li> <a href="<?php echo base_url('userhome'); ?>"><i class="fa fa-dashboard"></i>  Dashboard </a></li>
										<li> <a href="<?php echo base_url('booking/index'); ?>"><i class="fa fa-shopping-basket"></i>  View Booking </a></li>
                   	<!--   <li> <a href="<?php echo base_url('userorder/view'); ?>"><i class="fa fa-shopping-basket"></i>  View Orders </a></li>
										-->
                    <li> <a href="<?php echo base_url('profile'); ?>"><i class="fa fa-picture-o"></i> Edit Profile  </a></li>
                    <li> <a href="<?php echo base_url('wishlist'); ?>"><i class="fa fa-heart"></i> Wishlist  </a></li>
                    <li> <a href="<?php echo base_url('complaint/view'); ?>"><i class=" fa fa-comments-o"></i> Complaint Management </a></li>
                    <li> <a href="<?php echo base_url('changepassword'); ?>"><i class="fa fa-edit"></i> Change Password</a></li>
                    <li> <a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-sign-out"></i>  Logout </a></li>
								</ul>	  
            </div>
    		</ul>
  	</div>
</div>