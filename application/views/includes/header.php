<?php error_reporting(0);?>
<div class="top1_wrapper">
  <div class="container">
    <div class="top1 clearfix" style="margin-bottom:0px;">
      <!-- <div class="email1"><a href="#">support@travelagency.com</a></div>
      <div class="phone1">+917 3386831</div> -->
      <!-- <div class="social_wrapper">
        <ul class="social clearfix">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
        </ul>
      </div> -->
      
      <ul style="display: flex;float: right;list-style:none;margin-bottom: 0px;padding-top: 4px;padding-left:10px;">
        <li><a href="<?php echo base_url('visa');?>" style="text-decoration: none;"><h4 class="visa"> VISA</h4></a></li>
        <li><a href="<?php //echo base_url('forex');?>" style="text-decoration: none;"><h4 class="forex">FOREX</h4></a></li>
      </ul>

      
      
      <!--<div class="covid-pos">
        <div class="popup-flex">
        <button id="popup-btn" class="covid">C<br>o<br>v<br>i<br>d<br> <br>P<br>r<br>o<br>t<br>o<br>c<br>o<br>l<br>s</button></div>
       

          <div id="popup-wrapper" class="popup-container">
            <div class="popup-content">
              
              <img src="<?php echo base_url('assets/images/covid-protocol.png');?>" style="width:100%;">
              <span id="close">I Understand</span>
            </div>
          </div>

           <div id="myModal" class="modal">
          <!-- Modal content -->
          <!--<div class="modal-content">
            <span class="close">&times;</span>
            <img src="<?php //echo base_url('assets/images/covid-protocol.png');?>">
           <!-- <p>Some text in the Modal..</p>-->
         <!-- </div>

        </div>
      </div>-->


      <div class="phone1"><i class="fa fa-phone login-user"></i>+91 7338683611 </div>
      <div class="login1_wrapper">
        <ul class="login1 clearfix">
		
          <?php  	if($this->session->userdata('user_id') == '') { ?>
                  <li><a href="<?php echo base_url('login');?>"><i class="fa fa-unlock-alt login-user"></i> Login / Register</a></li>
          <?php  } else { ?>		  
                  <li><a href="<?php echo base_url('userhome');?>"><i class="fa fa-user login-user"></i> My Account</a></li>
                  <li><a href="<?php echo base_url('login/logout');?>"><i class="fa fa-unlock-alt login-user"></i> Logout</a></li> 
          <?php  } ?>

        </ul>
      </div>
    </div>
  </div>
</div>

<div class="top2_wrapper">
  <div class="">
    <div class="top2 clearfix">
      <header>
        <div class="logo_wrapper">
          <a href="<?php echo base_url();?>" class="logo">
            <img src="<?php echo base_url('assets/images/logo_1.png');?>" alt="" class="img-responsive">
          </a>
        </div>
      </header>
      <div class="navbar navbar_ navbar-default" style="display: block;">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?php //echo '<pre>'; print_r($mainmenu); die; ?>
        <div class="navbar-collapse navbar-collapse_ collapse">
          <ul class="nav navbar-nav sf-menu clearfix">
            <?php 
                foreach ($mainmenu as $key => $mainValue) { 
                    
                  @$childmenu=$mainValue['child']; 
            ?>  
                  <li <?php if(count($childmenu) > 0 ){?>class="sub-menu sub-menu-1"<?php } ?>><a href="<?php echo base_url();?><?php echo $mainValue['MenuTitle'] ?>"><?php if($mainValue['MenuName'] == 'Home'){ ?><i class="fa fa-home"></i><?php }else if($mainValue['MenuName'] == 'Flights'){  ?><i class="fa fa-plane"></i><?php }else if($mainValue['MenuName'] == 'Hotels'){  ?><i class="fa fa-building"></i><?php }else if($mainValue['MenuName'] == 'Destinations'){ ?><i class="fa fa-map-marker"></i><?php }else if($mainValue['MenuName'] == 'Themes'){ ?><i class="fa fa-picture-o"></i><?php } ?><?php echo $mainValue['MenuName']; ?></a><?php if(count($childmenu) > 0 ){ ?>

                    <ul>

                      <?php foreach ($childmenu as $key => $childValue) { ?>

                        <li><a href="<?php echo base_url();?><?php echo $childValue['MenuTitle']; ?>"><?php echo $childValue['MenuName']; ?></a></li>
                      
                      <?php } ?>
                    
                    </ul>

                    <?php } ?>
                  </li>
            
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>