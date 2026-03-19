<div class="top1_wrapper">
  <div class="container">
    <div class="top1 clearfix">
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
      
      <ul style="display: flex;float: right;list-style:none;margin-bottom: 0px;padding-top: 4px;">
        <li><a href="<?php echo base_url('visa');?>" style="text-decoration: none;"><h4 class="visa">VISA</h4></a></li>
        <li><a href="<?php echo base_url('forex');?>" style="text-decoration: none;"><h4 class="forex">FOREX</h4></a></li>
      </ul>
      
      <div class="covid-pos">
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
          <div class="modal-content">
            <span class="close">&times;</span>
            <img src="<?php echo base_url('assets/images/covid-protocol.png');?>">
           <!-- <p>Some text in the Modal..</p>-->
          </div>

        </div>
      </div>
      <div class="phone1"><i class="fa fa-phone login-user"></i>+917 3386831</div>
      <div class="login1_wrapper">
        <ul class="login1 clearfix">
          <li><a href="<?php echo base_url('login');?>"><i class="fa fa-user login-user"></i> Login / Register</a></li>
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
      <div class="navbar navbar_ navbar-default">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-collapse navbar-collapse_ collapse">
          <ul class="nav navbar-nav sf-menu clearfix">
            <?php 

             //echo '<pre>'; print_r($mainmenu);
              $i=0;
                for($j=0;$j<count(@$mainmenu);$j++){ 
                
                //echo '<pre>'; print_r($mainmenu); '</pre>' ;
                    
                $childmenu=@$mainmenu[$j]['child']; 
                    
            ?>
           <li style="margin-bottom: 0px;" <?php if(count($childmenu) > 0 ){?> class="sub-menu sub-menu-1" <?php } ?>><a <?php if(@$pagename==$mainmenu[$j]['AssociatedId']) { ?>class="active"<?php } ?> target="<?php echo @$mainmenu[$j]['Target']; ?>" href="<?php if($mainmenu[$j]['AssociatedId']!='#') {  echo base_url($mainmenu[$j]['AssociatedId']); if($mainmenu[$j]['AssociatedId']=='content/page') { ?>/<?php echo $mainmenu[$j]['MenuID']; } }else { echo"#";} ?>"<?php if(count($childmenu) > 0) { ?>data-toggle="dropdown"<?php } ?> ><?php echo $mainmenu[$j]['MenuName']; ?></a>
              <?php 
                if(count($childmenu) > 0 ){ ?> 
                                    
                <!--<div class="second-level-menu-padding">-->
                <ul>
                  <?php  
                    for($k=0;$k<count($childmenu);$k++){ 
                      $subchildmenu=@$childmenu[$k]['subchild'];
                  ?>
                  <li style="margin-bottom: 0px;" ><a href="<?php  if($childmenu[$k]['AssociatedId']!='#') { echo base_url($childmenu[$k]['AssociatedId']); if($childmenu[$k]['AssociatedId']=='content/page' || $childmenu[$k]['AssociatedId']=='facilities') { ?>/<?php echo $childmenu[$k]['MenuID'];  } } else { echo"#"; } ?>"><?php echo $childmenu[$k]['MenuName'];?></a> 
                  <?php 
                    if(count($subchildmenu) > 0 ){ ?> 
                                        
                      <ul>
                                                    
                        <?php  
                          for($m=0;$m<count($subchildmenu);$m++){ ?>
                    
                          <li style="margin-bottom: 0px;">
                            <a href="<?php  if($subchildmenu[$m]['AssociatedId']!='#') { echo base_url($subchildmenu[$m]['AssociatedId']); if($subchildmenu[$m]['AssociatedId']=='content/page' || $subchildmenu[$m]['AssociatedId']=='facilities') { ?>/<?php echo $subchildmenu[$m]['MenuID'];  } } else { echo"#"; } ?>">
                              <?php echo $subchildmenu[$m]['MenuName'];?>
                            </a>
                                                                                 
                          </li>
                        <?php } ?>
                      </ul>
                                        
                  <?php } ?>
                                                            
                  </li>
                                                            
                  <?php }?>
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