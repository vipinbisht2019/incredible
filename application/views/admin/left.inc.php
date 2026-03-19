<div id="sidebar-nav" class="sidebar">
   <div class="sidebar-scroll">
	    <nav>
	       <ul class="nav">
           
     <!-- *********************************************************************************** -->
     	<?php if($_SESSION['admin_role'] == '1' ){ ?>
        	<li><a href="<?php echo base_url('admin/admin/view'); ?>" class="active"><i class="fa fa-caret-right" style="color: #eee;"></i> <span>Super  Admin Manager </span></a></li>
             <li><a href="<?php echo base_url('admin/menu/view'); ?>" ><i class="fa fa-caret-right" style="color: #eee;"></i> <span>  Menu Manager </span></a></li>
      <!-- *********************************************************************************** -->    
        <li><a href="<?php echo base_url('admin/clients/view'); ?>" ><i class="fa fa-caret-right" style="color: #eee;"></i> <span>  Client Profile Manager </span></a></li>
 
  <li><a href="#Employee" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span> Employee Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
       <div id="Employee" class="collapse ">
           <ul class="nav">
               <li><a href="<?php echo base_url('admin/employee/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Employee Manager </span></a></li> 
           
           </ul>
         </div>
       </li>                         
                    
 
 <li>  
    <a href="#Lead" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Lead Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
       <div id="Lead" class="collapse ">
           <ul class="nav">
<li><a href="<?php echo base_url('admin/leads/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Leads Manager</span></a></li> 
<li><a href="<?php echo base_url('admin/leadcategory/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Category Manager</span></a></li> 
<li><a href="<?php echo base_url('admin/leadstatus/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Status Manager</span></a></li> 
<li><a href="<?php echo base_url('admin/leadsource/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Source Manager</span></a></li> 
<li><a href="<?php echo base_url('admin/mealplan/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Meal Plan Manager</span></a></li>
<li><a href="<?php echo base_url('admin/flightoption/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Flight Option Manager</span></a></li>
<li><a href="<?php echo base_url('admin/leadsreminders/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Reminders Manager</span></a></li> 

<li><a href="<?php echo base_url('admin/leadcontactgroup/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Contact Group Manager</span></a></li> 
<li><a href="<?php echo base_url('admin/leadcontact/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Contact Manager</span></a></li> 
<li><a href="<?php echo base_url('admin/leadgroupemail'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Send Email to Group</span></a></li>
<li><a href="<?php echo base_url('admin/leadindividualsemail'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Send Email to Individuals</span></a></li>


<li><a href="<?php echo base_url('admin/leadsemailremplate/view'); ?>" class=""><i class="fa fa-caret-right" style="color:#eee;"></i><span>Email Template Manager</span></a></li> 
            </ul>
         </div>
       </li>     
    
    
    <li>  
    
   <!-- *********************************************************************************** -->
   <li><a href="<?php echo base_url('admin/Clients/view'); ?>" ><i class="fa fa-caret-right" style="color: #eee;"></i> <span>  Clients Manager </span></a></li>
    

   <li>
     <a href="#subPages" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Tour Packages Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
        <div id="subPages" class="collapse ">
           <ul class="nav">


    <li><a href="<?php echo base_url('admin/tour_generalinfo/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Tour Packages Manager </span></a></li> 
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/toursbooking/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Tour Packages Booking Manager</span></a></li>  
    <!-- *********************************************************************************** holidaybooking --> 
    <!--<li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Cancellation Manager</span></a></li> -->
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/regions/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Regions Manager</span></a></li>  
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/locations/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Destinations Manager</span></a></li>  
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/theams/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Themes Manager</span></a></li>  
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/categories/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Category Manager</span></a></li>  
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/inclusion/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Inclusion / Exclusion Manager</span></a></li>  
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/feature/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Highlights Manager</span></a></li> 
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/termscondition/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Terms Condition Manager</span></a></li>     
    <!-- *********************************************************************************** --> 
  <li><a href="<?php echo base_url('admin/cancellationpolicy/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Cancellation Policies Manager</span></a></li>
      <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/faretype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Fare Type Manager</span></a></li>
         <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/frequency/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Frequency Manager</span></a></li>
           <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/promocode/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Promo Code Manager</span></a></li>
    <!-- *********************************************************************************** --> 
      <li><a href="<?php echo base_url('admin/boardingpoints/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Boarding points Manager</span></a></li>
    <!-- *********************************************************************************** --> 
  <!--  <li><a href="<?php echo base_url('admin/vehicle/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Package Vihecle Manager</span></a></li>-->
    <li><a href="<?php echo base_url('admin/toursbookingenc/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Unpaid Tour  Booking Manager</span></a></li> 
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/tourenquiry/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Enquiry  Manager</span></a></li>
    <!-- *********************************************************************************** -->
    <li><a href="<?php echo base_url('admin/review/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Review Manager</span></a></li>
    <!-- *********************************************************************************** --> 
    <!--    <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Frequency Manager</span></a></li> -->

             </ul>
        </div>
      </li>  
       
        <li><a href="#Account" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Account Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
       <div id="Account" class="collapse ">
           <ul class="nav">
                     
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Payments Receivable </span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Payable to Supplier </span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Profit </span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Expenses </span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Re-Funds </span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Direct booking Payments</span></a></li> 
               
           </ul>
         </div>
       </li>                         
                    
  
      
      
<li><a href="#Reports" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Reports Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
       <div id="Reports" class="collapse ">
           <ul class="nav">
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Sales Manager</span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Tours Wise Manager</span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Month Wise Manager</span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Proparty Wise Manager</span></a></li> 
           </ul>
         </div>
       </li>   
       
     <li><a href="#Suppliers" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Suppliers Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
       <div id="Suppliers" class="collapse ">
           <ul class="nav">
      
               <li><a href="<?php echo base_url('admin/suppliers/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Suppliers </span></a></li> 
               <li><a href="<?php echo base_url('admin/supplierstype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Suppliers Type </span></a></li> 
    
           </ul>
         </div>
       </li>                         
                         
               
    <li>
      <a href="#subPages1" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Hotels Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
        <div id="subPages1" class="collapse ">
           <ul class="nav">

               <!-- *********************************************************************************** cancellationpolicy --> 
               
               
    <li><a href="<?php echo base_url('admin/hoteltype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Type</span></a></li> 
   <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/hoteles/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel  Manager</span></a></li>
   <!-- *********************************************************************************** --> 
 <!--   <li><a href="<?php //echo base_url('admin/facilities/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Facilities Manager</span></a></li>-->
   <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/roomtype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Room Type</span></a></li>
    
    <li><a href="<?php echo base_url('admin/roomratetype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Room Rate Type</span></a></li>
    
    <li><a href="<?php echo base_url('admin/taxtype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Tax Type</span></a></li>
   <!-- *********************************************************************************** -->  
  <!--  <li><a href="<?php //echo base_url('admin/hotelsenquiry/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Enquiry Manager</span></a></li> -->
                  
            <!-- *********************************************************************************** -->    
            <!-- <li><a href="<?php echo base_url('admin/gallary/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Gallary Manager</span></a></li> -->  
            <!-- *********************************************************************************** --> 
            
            <!--<li><a href="<?php echo base_url('admin/staff/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Staff Manager</span></a></li>-->

         </ul>
        </div>
      </li>      
      
      
    
    
      
         
   
    <li>
      <a href="#subPages5" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Agents Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
        <div id="subPages5" class="collapse ">
           <ul class="nav">

               <!-- *********************************************************************************** cancellationpolicy --> 
            <li><a href="<?php echo base_url('admin/agents/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Agent Manager</span></a></li> 
            <li><a href="<?php echo base_url('admin/agentscommission/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Agent Commission Manager</span></a></li>            <li><a href="<?php echo base_url('admin/agentspermission/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Permission Manager</span></a></li> 
      

         </ul>
        </div>
      </li>            


<li><a href="<?php echo base_url('admin/payments/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Payments  Manager</span></a></li> 


    <li>
      <a href="#subPages51" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Blog Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
        <div id="subPages51" class="collapse ">
           <ul class="nav">

        <!-- *************************** cancellation policy ****************************************************** --> 
        <li><a href="<?php echo base_url('admin/blogcategory/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Category Manager</span></a></li> 
        <li><a href="<?php echo base_url('admin/blogposting/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Posting Manager</span></a></li>           
        <li><a href="<?php echo base_url('admin/commnets/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Approved Comments Manager</span></a></li> 
        <li><a href="<?php echo base_url('admin/newcomments/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>New Comments Manager</span></a></li> 
      

         </ul>
        </div>
      </li>            


<!-- 
      <li>
      <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
        <div id="subPages" class="collapse ">
          <ul class="nav">
                          <li><a href="page-profile.html" class="">Profile</a></li>
                          <li><a href="page-login.html" class="">Login</a></li>
                          <li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
            </ul>
        </div>
      </li>  -->   
                <!-- *********************************************************************************** --> 
 
 <?php /*?>
 
				   
			<li><a href="<?php echo base_url('admin/events/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Event Manager</span></a></li>
			<!-- *********************************************************************************** -->  
			<li><a href="<?php echo base_url('admin/members/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Members Manager</span></a></li>
			<!-- *********************************************************************************** -->
			<li><a href="<?php echo base_url('admin/bills/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Members Bill Manager</span></a></li>
			<!-- *********************************************************************************** -->
			<li><a href="<?php echo base_url('admin/payments/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Members Payment History Manager</span></a></li>
			<!-- *********************************************************************************** -->
			<li><a href="<?php echo base_url('admin/regions/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Regions Manager</span></a></li>
			<!-- *********************************************************************************** -->
			<li><a href="<?php echo base_url('admin/sponsors/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Sponsors Manager</span></a></li>
					
<?php */?>    
    <!-- *********************************************************************************** -->
  <!--  <li><a href="<?php //echo base_url('admin/gallary/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Gallary Manager</span></a></li> -->
     <li><a href="<?php echo base_url('admin/gallary/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Ready For Adventure Manager</span></a></li> 
    <li><a href="<?php echo base_url('admin/iptraking/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>IP Tracking Manager</span></a></li> 
    
     <!-- *********************************************************************************** -->
    <li><a href="<?php echo base_url('admin/gallary_images/view?id=20'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Gallary Images Manager</span></a></li>
    <!-- *********************************************************************************** -->
    <li><a href="<?php echo base_url('admin/faq/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>FAQ Manager</span></a></li>
        <!-- *********************************************************************************** -->  
    <li><a href="<?php echo base_url('admin/testimonials/view'); ?>" class=""><i class="fa fa-caret-right" style="color: #eee;"></i><span>Testimonials Manager</span></a></li>
        <!-- *********************************************************************************** -->      
    <li><a href="<?php echo base_url('admin/sliders/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Flash Manager</span></a></li>
    <!-- *********************************************************************************** -->     
    <li><a href="<?php echo base_url('admin/statichome/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>CMS Manager</span></a></li>
    
      <li><a href="<?php echo base_url('admin/country/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Country Manager</span></a></li>
         <li><a href="<?php echo base_url('admin/state/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>State Manager</span></a></li>
            <li><a href="<?php echo base_url('admin/city/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>City Manager</span></a></li>
     <!-- *********************************************************************************** -->     
    <li><a href="<?php echo base_url('admin/password'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Change Password</span></a></li>
    <!-- *********************************************************************************** -->     
    <li><a href="<?php echo base_url('admin/login/logout'); ?>" class=""><i class="fa fa-caret-right" style="color: #eee;"></i> <span>Logout</span></a></li>
        <?php } ?>
        
         <?php if($_SESSION['admin_role'] == '3' ){ ?>
           <li><a href="<?php echo base_url('admin/menu/view'); ?>" ><i class="fa fa-caret-right" style="color: #eee;"></i> <span>  Menu Manager </span></a></li>
      <!-- *********************************************************************************** -->    
        <li><a href="<?php echo base_url('admin/clients/view'); ?>" ><i class="fa fa-caret-right" style="color: #eee;"></i> <span>  Client Profile Manager </span></a></li>
 
  <li><a href="#Employee" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span> Employee Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
       <div id="Employee" class="collapse ">
           <ul class="nav">
               <li><a href="<?php echo base_url('admin/employee/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Employee Manager </span></a></li> 
           
           </ul>
         </div>
       </li>                         
                    
 
 <li>  
    <a href="#Lead" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Lead Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
       <div id="Lead" class="collapse ">
           <ul class="nav">
<li><a href="<?php echo base_url('admin/leads/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Leads Manager</span></a></li> 
<li><a href="<?php echo base_url('admin/leadcategory/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Category Manager</span></a></li> 
<li><a href="<?php echo base_url('admin/leadstatus/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Status Manager</span></a></li> 
<li><a href="<?php echo base_url('admin/leadsource/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Source Manager</span></a></li> 
<li><a href="<?php echo base_url('admin/mealplan/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Meal Plan Manager</span></a></li>
<li><a href="<?php echo base_url('admin/flightoption/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Flight Option Manager</span></a></li>
<li><a href="<?php echo base_url('admin/leadsreminders/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Reminders Manager</span></a></li> 

<li><a href="<?php echo base_url('admin/leadcontactgroup/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Contact Group Manager</span></a></li> 
<li><a href="<?php echo base_url('admin/leadcontact/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Contact Manager</span></a></li> 
<li><a href="<?php echo base_url('admin/leadgroupemail'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Send Email to Group</span></a></li>
<li><a href="<?php echo base_url('admin/leadindividualsemail'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Send Email to Individuals</span></a></li>


<li><a href="<?php echo base_url('admin/leadsemailremplate/view'); ?>" class=""><i class="fa fa-caret-right" style="color:#eee;"></i><span>Email Template Manager</span></a></li> 
            </ul>
         </div>
       </li>     
    
    
    <li>  
    
   <!-- *********************************************************************************** -->
   <li><a href="<?php echo base_url('admin/Clients/view'); ?>" ><i class="fa fa-caret-right" style="color: #eee;"></i> <span>  Clients Manager </span></a></li>
    

   <li>
     <a href="#subPages" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Tour Packages Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
        <div id="subPages" class="collapse ">
           <ul class="nav">


    <li><a href="<?php echo base_url('admin/tour_generalinfo/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Tour Packages Manager </span></a></li> 
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/toursbooking/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Tour Packages Booking Manager</span></a></li>  
    <!-- *********************************************************************************** holidaybooking --> 
    <!--<li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Cancellation Manager</span></a></li> -->
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/regions/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Regions Manager</span></a></li>  
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/locations/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Destinations Manager</span></a></li>  
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/theams/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Themes Manager</span></a></li>  
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/categories/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Category Manager</span></a></li>  
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/inclusion/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Inclusion / Exclusion Manager</span></a></li>  
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/feature/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Highlights Manager</span></a></li> 
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/termscondition/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Terms Condition Manager</span></a></li>     
    <!-- *********************************************************************************** --> 
  <li><a href="<?php echo base_url('admin/cancellationpolicy/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Cancellation Policies Manager</span></a></li>
      <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/faretype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Fare Type Manager</span></a></li>
         <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/frequency/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Frequency Manager</span></a></li>
           <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/promocode/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Promo Code Manager</span></a></li>
    <!-- *********************************************************************************** --> 
      <li><a href="<?php echo base_url('admin/boardingpoints/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Boarding points Manager</span></a></li>
    <!-- *********************************************************************************** --> 
  <!--  <li><a href="<?php echo base_url('admin/vehicle/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Package Vihecle Manager</span></a></li>-->
    <li><a href="<?php echo base_url('admin/toursbookingenc/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Unpaid Tour  Booking Manager</span></a></li> 
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/tourenquiry/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Enquiry  Manager</span></a></li>
    <!-- *********************************************************************************** -->
    <li><a href="<?php echo base_url('admin/review/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Review Manager</span></a></li>
    <!-- *********************************************************************************** --> 
    <!--    <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Frequency Manager</span></a></li> -->

             </ul>
        </div>
      </li>  
       
        <li><a href="#Account" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Account Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
       <div id="Account" class="collapse ">
           <ul class="nav">
                     
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Payments Receivable </span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Payable to Supplier </span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Profit </span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Expenses </span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Re-Funds </span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Direct booking Payments</span></a></li> 
               
           </ul>
         </div>
       </li>                         
                    
  
      
      
<li><a href="#Reports" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Reports Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
       <div id="Reports" class="collapse ">
           <ul class="nav">
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Sales Manager</span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Tours Wise Manager</span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Month Wise Manager</span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Proparty Wise Manager</span></a></li> 
           </ul>
         </div>
       </li>   
       
     <li><a href="#Suppliers" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Suppliers Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
       <div id="Suppliers" class="collapse ">
           <ul class="nav">
      
               <li><a href="<?php echo base_url('admin/suppliers/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Suppliers </span></a></li> 
               <li><a href="<?php echo base_url('admin/supplierstype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Suppliers Type </span></a></li> 
    
           </ul>
         </div>
       </li>                         
                    
               
        
               
    <li>
      <a href="#subPages1" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Hotels Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
        <div id="subPages1" class="collapse ">
           <ul class="nav">

               <!-- *********************************************************************************** cancellationpolicy --> 
               
               
    <li><a href="<?php echo base_url('admin/hoteltype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Type</span></a></li> 
   <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/hoteles/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel  Manager</span></a></li>
   <!-- *********************************************************************************** --> 
 <!--   <li><a href="<?php //echo base_url('admin/facilities/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Facilities Manager</span></a></li>-->
   <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/roomtype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Room Type</span></a></li>
    
    <li><a href="<?php echo base_url('admin/roomratetype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Room Rate Type</span></a></li>
    
    <li><a href="<?php echo base_url('admin/taxtype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Tax Type</span></a></li>
   <!-- *********************************************************************************** -->  
  <!--  <li><a href="<?php //echo base_url('admin/hotelsenquiry/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Enquiry Manager</span></a></li> -->
                  
            <!-- *********************************************************************************** -->    
            <!-- <li><a href="<?php echo base_url('admin/gallary/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Gallary Manager</span></a></li> -->  
            <!-- *********************************************************************************** --> 
            
            <!--<li><a href="<?php echo base_url('admin/staff/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Staff Manager</span></a></li>-->

         </ul>
        </div>
      </li>      
      
      
    
    
      
         
   
    <li>
      <a href="#subPages5" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Agents Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
        <div id="subPages5" class="collapse ">
           <ul class="nav">

               <!-- *********************************************************************************** cancellationpolicy --> 
            <li><a href="<?php echo base_url('admin/agents/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Agent Manager</span></a></li> 
            <li><a href="<?php echo base_url('admin/agentscommission/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Agent Commission Manager</span></a></li>            <li><a href="<?php echo base_url('admin/agentspermission/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Permission Manager</span></a></li> 
      

         </ul>
        </div>
      </li>            


<li><a href="<?php echo base_url('admin/payments/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Payments  Manager</span></a></li> 



    <li>
      <a href="#subPages51" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Blog Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
        <div id="subPages51" class="collapse ">
           <ul class="nav">

        <!-- *************************** cancellation policy ****************************************************** --> 
        <li><a href="<?php echo base_url('admin/blogcategory/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Category Manager</span></a></li> 
        <li><a href="<?php echo base_url('admin/blogposting/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Posting Manager</span></a></li>           
        <li><a href="<?php echo base_url('admin/commnets/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Approved Comments Manager</span></a></li> 
        <li><a href="<?php echo base_url('admin/newcomments/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>New Comments Manager</span></a></li> 
      

         </ul>
        </div>
      </li>            


<!-- 
      <li>
      <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
        <div id="subPages" class="collapse ">
          <ul class="nav">
                          <li><a href="page-profile.html" class="">Profile</a></li>
                          <li><a href="page-login.html" class="">Login</a></li>
                          <li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
            </ul>
        </div>
      </li>  -->   
                <!-- *********************************************************************************** --> 
 
 <?php /*?>
 
				   
			<li><a href="<?php echo base_url('admin/events/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Event Manager</span></a></li>
			<!-- *********************************************************************************** -->  
			<li><a href="<?php echo base_url('admin/members/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Members Manager</span></a></li>
			<!-- *********************************************************************************** -->
			<li><a href="<?php echo base_url('admin/bills/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Members Bill Manager</span></a></li>
			<!-- *********************************************************************************** -->
			<li><a href="<?php echo base_url('admin/payments/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Members Payment History Manager</span></a></li>
			<!-- *********************************************************************************** -->
			<li><a href="<?php echo base_url('admin/regions/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Regions Manager</span></a></li>
			<!-- *********************************************************************************** -->
			<li><a href="<?php echo base_url('admin/sponsors/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Sponsors Manager</span></a></li>
					
<?php */?>    
    <!-- *********************************************************************************** -->
  <!--  <li><a href="<?php //echo base_url('admin/gallary/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Gallary Manager</span></a></li> -->
     <li><a href="<?php echo base_url('admin/gallary/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Ready For Adventure Manager</span></a></li> 
    <li><a href="<?php echo base_url('admin/iptraking/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>IP Tracking Manager</span></a></li> 
    
     <!-- *********************************************************************************** -->
    <li><a href="<?php echo base_url('admin/gallary_images/view?id=20'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Gallary Images Manager</span></a></li>
    <!-- *********************************************************************************** -->
    <li><a href="<?php echo base_url('admin/faq/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>FAQ Manager</span></a></li>
        <!-- *********************************************************************************** -->  
    <li><a href="<?php echo base_url('admin/testimonials/view'); ?>" class=""><i class="fa fa-caret-right" style="color: #eee;"></i><span>Testimonials Manager</span></a></li>
        <!-- *********************************************************************************** -->      
    <li><a href="<?php echo base_url('admin/sliders/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Flash Manager</span></a></li>
    <!-- *********************************************************************************** -->     
    <li><a href="<?php echo base_url('admin/statichome/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>CMS Manager</span></a></li>
    
      <li><a href="<?php echo base_url('admin/country/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Country Manager</span></a></li>
         <li><a href="<?php echo base_url('admin/state/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>State Manager</span></a></li>
            <li><a href="<?php echo base_url('admin/city/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>City Manager</span></a></li>
     <!-- *********************************************************************************** -->     
    <li><a href="<?php echo base_url('admin/password'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Change Password</span></a></li>
    <!-- *********************************************************************************** -->     
    <li><a href="<?php echo base_url('admin/login/logout'); ?>" class=""><i class="fa fa-caret-right" style="color: #eee;"></i> <span>Logout</span></a></li>
    <!-- *********************************************************************************** -->    
               
         <?php } ?>
          <?php if($_SESSION['admin_role'] == '4' ){ ?>
            <li><a href="<?php echo base_url('admin/menu/view'); ?>" ><i class="fa fa-caret-right" style="color: #eee;"></i> <span>  Menu Manager </span></a></li>
      <!-- *********************************************************************************** -->    
        <li><a href="<?php echo base_url('admin/clients/view'); ?>" ><i class="fa fa-caret-right" style="color: #eee;"></i> <span>  Client Profile Manager </span></a></li>
 
  <li><a href="#Employee" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span> Employee Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
       <div id="Employee" class="collapse ">
           <ul class="nav">
               <li><a href="<?php echo base_url('admin/employee/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Employee Manager </span></a></li> 
           
           </ul>
         </div>
       </li>                         
                    
 
 <li>  
    <a href="#Lead" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Lead Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
       <div id="Lead" class="collapse ">
           <ul class="nav">
<li><a href="<?php echo base_url('admin/leads/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Leads Manager</span></a></li> 
<li><a href="<?php echo base_url('admin/leadcategory/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Category Manager</span></a></li> 
<li><a href="<?php echo base_url('admin/leadstatus/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Status Manager</span></a></li> 
<li><a href="<?php echo base_url('admin/leadsource/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Source Manager</span></a></li> 
<li><a href="<?php echo base_url('admin/mealplan/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Meal Plan Manager</span></a></li>
<li><a href="<?php echo base_url('admin/flightoption/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Flight Option Manager</span></a></li>
<li><a href="<?php echo base_url('admin/leadsreminders/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Reminders Manager</span></a></li> 

<li><a href="<?php echo base_url('admin/leadcontactgroup/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Contact Group Manager</span></a></li> 
<li><a href="<?php echo base_url('admin/leadcontact/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Contact Manager</span></a></li> 
<li><a href="<?php echo base_url('admin/leadgroupemail'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Send Email to Group</span></a></li>
<li><a href="<?php echo base_url('admin/leadindividualsemail'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Send Email to Individuals</span></a></li>


<li><a href="<?php echo base_url('admin/leadsemailremplate/view'); ?>" class=""><i class="fa fa-caret-right" style="color:#eee;"></i><span>Email Template Manager</span></a></li> 
            </ul>
         </div>
       </li>     
    
    
    <li>  
    
   <!-- *********************************************************************************** -->
   <li><a href="<?php echo base_url('admin/Clients/view'); ?>" ><i class="fa fa-caret-right" style="color: #eee;"></i> <span>  Clients Manager </span></a></li>
    

   <li>
     <a href="#subPages" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Tour Packages Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
        <div id="subPages" class="collapse ">
           <ul class="nav">


    <li><a href="<?php echo base_url('admin/tour_generalinfo/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Tour Packages Manager </span></a></li> 
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/toursbooking/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Tour Packages Booking Manager</span></a></li>  
    <!-- *********************************************************************************** holidaybooking --> 
    <!--<li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Cancellation Manager</span></a></li> -->
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/regions/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Regions Manager</span></a></li>  
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/locations/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Destinations Manager</span></a></li>  
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/theams/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Themes Manager</span></a></li>  
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/categories/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Category Manager</span></a></li>  
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/inclusion/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Inclusion / Exclusion Manager</span></a></li>  
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/feature/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Highlights Manager</span></a></li> 
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/termscondition/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Terms Condition Manager</span></a></li>     
    <!-- *********************************************************************************** --> 
  <li><a href="<?php echo base_url('admin/cancellationpolicy/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Cancellation Policies Manager</span></a></li>
      <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/faretype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Fare Type Manager</span></a></li>
         <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/frequency/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Frequency Manager</span></a></li>
           <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/promocode/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Promo Code Manager</span></a></li>
    <!-- *********************************************************************************** --> 
      <li><a href="<?php echo base_url('admin/boardingpoints/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Boarding points Manager</span></a></li>
    <!-- *********************************************************************************** --> 
  <!--  <li><a href="<?php echo base_url('admin/vehicle/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Package Vihecle Manager</span></a></li>-->
    <li><a href="<?php echo base_url('admin/toursbookingenc/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Unpaid Tour  Booking Manager</span></a></li> 
    <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/tourenquiry/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Enquiry  Manager</span></a></li>
    <!-- *********************************************************************************** -->
    <li><a href="<?php echo base_url('admin/review/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Review Manager</span></a></li>
    <!-- *********************************************************************************** --> 
    <!--    <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Frequency Manager</span></a></li> -->

             </ul>
        </div>
      </li>  
       
        <li><a href="#Account" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Account Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
       <div id="Account" class="collapse ">
           <ul class="nav">
                     
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Payments Receivable </span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Payable to Supplier </span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Profit </span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Expenses </span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Re-Funds </span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Direct booking Payments</span></a></li> 
               
           </ul>
         </div>
       </li>                         
                    
  
      
      
<li><a href="#Reports" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Reports Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
       <div id="Reports" class="collapse ">
           <ul class="nav">
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Sales Manager</span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Tours Wise Manager</span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Month Wise Manager</span></a></li> 
               <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Proparty Wise Manager</span></a></li> 
           </ul>
         </div>
       </li>   
       
     <li><a href="#Suppliers" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Suppliers Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
       <div id="Suppliers" class="collapse ">
           <ul class="nav">
      
               <li><a href="<?php echo base_url('admin/suppliers/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Suppliers </span></a></li> 
               <li><a href="<?php echo base_url('admin/supplierstype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Suppliers Type </span></a></li> 
    
           </ul>
         </div>
       </li>                         
                    
         
	                  
               
	 <li>
      <a href="#subPages2" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Flights Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
        <div id="subPages2" class="collapse ">
           <ul class="nav">
                
   <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/flights/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Flight  Manager</span></a></li>
   <!-- *********************************************************************************** --> 
 <!--   <li><a href="<?php // echo base_url('admin/roomtype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Flight Room Type</span></a></li>
    
    <li><a href="<?php // echo base_url('admin/roomratetype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Flight Room Rate Type</span></a></li>
    
    <li><a href="<?php // echo base_url('admin/taxtype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Tax Type</span></a></li>
		-->
         </ul>
        </div>
      </li>   		 		
        
               
    <li>
      <a href="#subPages1" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Hotels Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
        <div id="subPages1" class="collapse ">
           <ul class="nav">

               <!-- *********************************************************************************** cancellationpolicy --> 
               
               
    <li><a href="<?php echo base_url('admin/hoteltype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Type</span></a></li> 
   <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/hoteles/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel  Manager</span></a></li>
   <!-- *********************************************************************************** --> 
 <!--   <li><a href="<?php //echo base_url('admin/facilities/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Facilities Manager</span></a></li>-->
   <!-- *********************************************************************************** --> 
    <li><a href="<?php echo base_url('admin/roomtype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Room Type</span></a></li>
    
    <li><a href="<?php echo base_url('admin/roomratetype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Room Rate Type</span></a></li>
    
    <li><a href="<?php echo base_url('admin/taxtype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Tax Type</span></a></li>
   <!-- *********************************************************************************** -->  
  <!--  <li><a href="<?php //echo base_url('admin/hotelsenquiry/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Enquiry Manager</span></a></li> -->
                  
            <!-- *********************************************************************************** -->    
            <!-- <li><a href="<?php echo base_url('admin/gallary/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Gallary Manager</span></a></li> -->  
            <!-- *********************************************************************************** --> 
            
            <!--<li><a href="<?php echo base_url('admin/staff/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Staff Manager</span></a></li>-->

         </ul>
        </div>
      </li>      
      
      
    
    
      
         
   
    <li>
      <a href="#subPages5" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Agents Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
        <div id="subPages5" class="collapse ">
           <ul class="nav">

               <!-- *********************************************************************************** cancellationpolicy --> 
            <li><a href="<?php echo base_url('admin/agents/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Agent Manager</span></a></li> 
            <li><a href="<?php echo base_url('admin/agentscommission/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Agent Commission Manager</span></a></li>            <li><a href="<?php echo base_url('admin/agentspermission/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Permission Manager</span></a></li> 
      

         </ul>
        </div>
      </li>            


<li><a href="<?php echo base_url('admin/payments/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Payments  Manager</span></a></li> 



    <li>
      <a href="#subPages51" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Blog Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
        <div id="subPages51" class="collapse ">
           <ul class="nav">

        <!-- *************************** cancellation policy ****************************************************** --> 
        <li><a href="<?php echo base_url('admin/blogcategory/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Category Manager</span></a></li> 
        <li><a href="<?php echo base_url('admin/blogposting/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Posting Manager</span></a></li>           
        <li><a href="<?php echo base_url('admin/commnets/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Approved Comments Manager</span></a></li> 
        <li><a href="<?php echo base_url('admin/newcomments/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>New Comments Manager</span></a></li> 
      

         </ul>
        </div>
      </li>            


<!-- 
      <li>
      <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
        <div id="subPages" class="collapse ">
          <ul class="nav">
                          <li><a href="page-profile.html" class="">Profile</a></li>
                          <li><a href="page-login.html" class="">Login</a></li>
                          <li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
            </ul>
        </div>
      </li>  -->   
                <!-- *********************************************************************************** --> 
 
 <?php /*?>
 
				   
			<li><a href="<?php echo base_url('admin/events/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Event Manager</span></a></li>
			<!-- *********************************************************************************** -->  
			<li><a href="<?php echo base_url('admin/members/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Members Manager</span></a></li>
			<!-- *********************************************************************************** -->
			<li><a href="<?php echo base_url('admin/bills/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Members Bill Manager</span></a></li>
			<!-- *********************************************************************************** -->
			<li><a href="<?php echo base_url('admin/payments/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Members Payment History Manager</span></a></li>
			<!-- *********************************************************************************** -->
			<li><a href="<?php echo base_url('admin/regions/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Regions Manager</span></a></li>
			<!-- *********************************************************************************** -->
			<li><a href="<?php echo base_url('admin/sponsors/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Sponsors Manager</span></a></li>
					
<?php */?>    
    <!-- *********************************************************************************** -->
  <!--  <li><a href="<?php //echo base_url('admin/gallary/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Gallary Manager</span></a></li> -->
     <li><a href="<?php echo base_url('admin/gallary/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Ready For Adventure Manager</span></a></li> 
    <li><a href="<?php echo base_url('admin/iptraking/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>IP Tracking Manager</span></a></li> 
    
     <!-- *********************************************************************************** -->
    <li><a href="<?php echo base_url('admin/gallary_images/view?id=20'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Gallary Images Manager</span></a></li>
    <!-- *********************************************************************************** -->
    <li><a href="<?php echo base_url('admin/faq/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>FAQ Manager</span></a></li>
        <!-- *********************************************************************************** -->  
    <li><a href="<?php echo base_url('admin/testimonials/view'); ?>" class=""><i class="fa fa-caret-right" style="color: #eee;"></i><span>Testimonials Manager</span></a></li>
        <!-- *********************************************************************************** -->      
    <li><a href="<?php echo base_url('admin/sliders/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Flash Manager</span></a></li>
    <!-- *********************************************************************************** -->     
    <li><a href="<?php echo base_url('admin/statichome/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>CMS Manager</span></a></li>
    
      <li><a href="<?php echo base_url('admin/country/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Country Manager</span></a></li>
         <li><a href="<?php echo base_url('admin/state/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>State Manager</span></a></li>
            <li><a href="<?php echo base_url('admin/city/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>City Manager</span></a></li>
     <!-- *********************************************************************************** -->     
    <li><a href="<?php echo base_url('admin/password'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Change Password</span></a></li>
    <!-- *********************************************************************************** -->     
    <li><a href="<?php echo base_url('admin/login/logout'); ?>" class=""><i class="fa fa-caret-right" style="color: #eee;"></i> <span>Logout</span></a></li>
    <!-- *********************************************************************************** -->    
               
         <?php } ?>
         
         
         <!------------------------------------ CRM LEFT MENU START ------------------------------------------>
         
          <?php if($_SESSION['admin_role'] == '2' ){ ?>
          		
                <!-------------------------------------------------------------------------------------------->
      
  				<li>
                	<a href="#Employee" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> 
                    	<span> Employee Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
                   	</a>
       				<div id="Employee" class="collapse ">
           				<ul class="nav">
               				<li>
                            	<a href="<?php echo base_url('admin/employee/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i>
                                	<span> Employee Manager </span>
                                </a>
                            </li> 
                        </ul>
         			</div>
               	</li>                         
                
                <!-------------------------------------------------------------------------------------------->
 
 				<li>  
    				<a href="#Lead" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i>
                    	<span>Lead Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
                    </a>
       				<div id="Lead" class="collapse ">
           				<ul class="nav">
							<li>
                            	<a href="<?php echo base_url('admin/leads/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i>
                                	<span> Leads Manager</span>
                                 </a>
                            </li> 
							<li>
                            	<a href="<?php echo base_url('admin/leadstatus/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Status Manager</span>
                                </a>
                            </li> 
							<li>
                            	<a href="<?php echo base_url('admin/leadsource/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Source Manager</span></a>
                            </li> 
							<!--<li><a href="<?php echo base_url('admin/mealplan/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Meal Plan Manager</span></a></li>
							<li><a href="<?php echo base_url('admin/flightoption/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Flight Option Manager</span></a></li>-->
							<li>
                            	<a href="<?php echo base_url('admin/leadsreminders/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Reminders Manager</span>
                                </a>
                            </li> 
                            <li>
                            	<a href="<?php echo base_url('admin/leadcontactgroup/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Contact Group Manager</span>
                                </a>
                            </li> 
							<li>
                            	<a href="<?php echo base_url('admin/leadcontact/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Contact Manager</span>
                                </a>
                            </li> 
							<li>
                            	<a href="<?php echo base_url('admin/leadgroupemail'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Send Email to Group</span>
                                </a>
                            </li>
							<li>
                            	<a href="<?php echo base_url('admin/leadindividualsemail'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Send Email to Individuals</span>
                                </a>
                            </li>
                            <li>
                            	<a href="<?php echo base_url('admin/leadsemailremplate/view'); ?>" class=""><i class="fa fa-caret-right" style="color:#eee;"></i><span>Email Template Manager</span>
                                </a>
                            </li> 
            			</ul>
         			</div>
       			</li>       
                
                	<!-------------------------------------------------------------------------------------------->
                
        		<li>
                	<a href="#Account" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Account Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
                    </a>
                   <div id="Account" class="collapse ">
                       <ul class="nav">
                                 
                           <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Payments Receivable </span></a></li> 
                           <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Payable to Supplier </span></a></li> 
                           <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Profit </span></a></li> 
                           <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Expenses </span></a></li> 
                           <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Re-Funds </span></a></li> 
                           <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span> Direct booking Payments</span></a></li> 
                           
                       </ul>
                     </div>
       			</li>    
                
                <!-------------------------------------------------------------------------------------------->
                
                <li><a href="#Reports" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Reports Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                   <div id="Reports" class="collapse ">
                       <ul class="nav">
                           <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Sales Manager</span></a></li> 
                           <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Tours Wise Manager</span></a></li> 
                           <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Month Wise Manager</span></a></li> 
                           <li><a href="#" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Proparty Wise Manager</span></a></li> 
                       </ul>
                     </div>
       			</li>   
       			
                	<!-------------------------------------------------------------------------------------------->
    
                <li>
                  <a href="#subPages1" data-toggle="collapse" class="collapsed"> <i class="fa fa-caret-right" style="color: #eee;"></i> <span> <span>Hotels Manager</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages1" class="collapse ">
                       <ul class="nav">           
                <li><a href="<?php echo base_url('admin/hoteltype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Type</span></a></li> 
                <li><a href="<?php echo base_url('admin/hoteles/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel  Manager</span></a></li> 
                <li><a href="<?php echo base_url('admin/roomtype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Room Type</span></a></li>
                
                <li><a href="<?php echo base_url('admin/roomratetype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Hotel Room Rate Type</span></a></li>
                
                <li><a href="<?php echo base_url('admin/taxtype/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Tax Type</span></a></li>
              
                     </ul>
                    </div>
                  </li>   
                  
                  	<li><a href="<?php echo base_url('admin/sightseeing/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Sight Seeing Manager</span></a></li>
                  
                  	<!-------------------------------------------------------------------------------------------->
                    
                   <li><a href="<?php echo base_url('admin/country/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Country Manager</span></a></li>
                   
                   <!-------------------------------------------------------------------------------------------->
         			<li><a href="<?php echo base_url('admin/state/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>State Manager</span></a></li>
         
                 	<!-------------------------------------------------------------------------------------------->
            		<li><a href="<?php echo base_url('admin/city/view'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>City Manager</span></a></li>
                     <!--------------------------------------------------------------------------------------------> 
                    <li><a href="<?php echo base_url('admin/password'); ?>" class=""> <i class="fa fa-caret-right" style="color: #eee;"></i><span>Change Password</span></a></li>
                    <!-------------------------------------------------------------------------------------------->  
                    <li><a href="<?php echo base_url('admin/login/logout'); ?>" class=""><i class="fa fa-caret-right" style="color: #eee;"></i> <span>Logout</span></a></li>
                    <!-------------------------------------------------------------------------------------------->
           <?php } ?>     
	          </ul>				
          </nav>
    </div>
</div>