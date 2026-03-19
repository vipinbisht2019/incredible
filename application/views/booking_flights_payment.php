<?php //echo "<pre>"; print_r($_SESSION); die; ?>
<html lang="en">
<head>
<title>Booking Flight Payment</title>  
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">

<?php include('includes/css.php'); ?>
<link href="<?php echo base_url('assets/css/flight.css');?>" rel="stylesheet">

<style>
::selection {
  color: #fff;
  background-color: #0ac229;
}

main {
  width: 95%;
  margin: 2em auto;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.accordion__container {
  margin-bottom: 10px;
  background-repeat: no-repeat;
  padding: 0.5em 0.5em;
  /*box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);*/
  width: 100%;
  border: 1px solid #ddd;
  border-radius: 5px;
}
.accordion__container.default {display: block;}
.accordion__container:last-type {
  margin-bottom: 0;
}
.accordion__question__container {
  display: flex;
  flex-direction: row;
  justify-content: end;
  align-items: center;
  margin-bottom: 0em;
}
.accordion__question {
  color: black;
}
.accordion__btn {
  display: inline-block;
  background: none;
  border: none;
  /*border: 2px solid currentColor;*/
  border-radius: 3px;
  color: #b3b3b3;
  cursor: pointer;
}
.accordion__btn i {
  font-size: 1.2em;
  padding: 0.15em;
}
.accordion__answer__container {
  display: none;
}

.active__accordion {
  display: block;
}
input, select, textarea {
    color: #404040;
}
select {
    padding: 10px 10px;
}

.psng {
color: rgb(255, 255, 255);
font-size: 11px;
text-transform: uppercase;
margin-right: 10px;
padding: 3px 7px 1px;
border-radius: 3px;
background: rgb(201, 96, 89);
}
.art-allperson li:last-child {
    width: 59%;
    float: right;
    text-align: center;
}
 .panel-title{ font-size:13px;padding: 0;display: flex; }
 .panel-group .panel + .panel {
    margin-top: 0px;
}
.panel{ border: 0px solid transparent; }  
.panel-default > .panel-heading {
    color: #333;
    background-color: #f5f5f500;
    border-color: #ddd;
    border-bottom: 1px solid #ddd;
    padding: 15px;
}
.panel-group {
    margin-bottom: 20px;
    background: #fff;
    box-shadow: 0px 0px 20px #e0e0e0;
    border-radius: 8px;
}   
.panel-default > .panel-heading + .panel-collapse > .panel-body{ border-bottom: 1px solid #ddd; }
.faresummery__heading-box {
    background: #e5e5e5;
    display: inline-block;
    width: 100%;
    padding: 10px;
    color: #000;
    font-weight: bold;
    font-size: 14px;
    border-radius: 6px 6px 0 0;
}      
.faresummery__heading-box span { color: #444 }    
.panel-title > a {
    text-decoration: none;
}                 


 .tabs-left {
  border-bottom: none;
  padding-top: 0px;
  border-right: 0px solid #ddd;
  background: #eff3fb;
  height: 350px;
}
.tabs-left>li {
  float: none;
  margin-bottom: 2px;
  margin-right: -1px;
  border-bottom: 1px solid #ddd;
  font-size: 13px;
    font-weight: 500;
}
.tabs-left>li.active>a,
.tabs-left>li.active>a:hover,
.tabs-left>li.active>a:focus {
  border-bottom-color: #ddd;
    border-right-color: transparent;
    background: #fff;
    border: none;
    border-left: 3px solid #e55366;
    border-radius: 0px;
}
.tabs-left>li>a {
  border-radius: 4px 0 0 4px;
  margin-right: 0;
  display:block;
}    
.tab-content{ margin-top: 0px; } 
.apt-firstep::before{ background-color: #4aa301;color:#fff }
.apt-second::before{ background-color:#4aa301;color:#fff }      
.apt-third::before{ background-color:#4aa301;color:#fff }      
 .apt-forth::before{ background-color:#333;color:#fff } 
 @media (min-width: 320px) and (max-width: 991px){ .apt-section{ display:none; } }              
</style>        
        
	
</head>
    <body class="not-front page-post">    
        <div id="main">
            <?php include('includes/header.php'); ?>  
                <?php 
                    
                    if(!empty($this->session->userdata('totalGrossAmount'))){

                        $totalAmount = $this->session->userdata('totalGrossAmount');
                        
                    }else{
                        
                        $totalAmount = $this->session->userdata('grossTotal');
                    }


                    $phoneNo = $this->session->userdata('users_mobile');
                    $email = $this->session->userdata('users_email');                   

                    $txnid = time();
                    $surl = 'surl';
                    $furl = 'furl';        
                    $key_id = "rzp_test_R5vXLMgcOxTe68";
                    //$key_id = "rzp_live_Xu1V8kawGkEYo0";
                    $currency_code = 'INR';
                    $total= ($totalAmount*100);     
                    $amount = ($totalAmount*100);   
                    $card_holder_name = 'Dev-ops';
                    $email = $email;
                    $phone = $phoneNo;
                    $name =  $this->session->user_fname;
                    $return_url = base_url().'flights/callback';

                ?>
            <div class="breadcrumbs1_wrapper">
                <div class="container">
                    <div class="breadcrumbs1"><a href="index.html">Home</a><span>/</span>Pages<span>/</span>Payment</div>
                </div>
            </div>
    <!----------------------------------------------------------- STEPS WIZARDS -------------------------------------------------------->

            <div class="apt-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 booking-top-btn no-padding">
                            <div class="apt-common apt-firstep apt-active">
                                <span class="graycolor">
                                <span>FIRST STEP</span>
                                </span>
                                <h4 class="apt-flightiti">
                                <span>Flight Itinerary</span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-sm-3 booking-top-btn no-padding">
                            <div class="apt-common apt-second apt-active">
                                <span class="graycolor">
                                <span>SECOND STEP</span>
                                </span>
                                <h4 class="apt-flightiti">
                                <span>Passenger Details</span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-sm-3 booking-top-btn no-padding">
                            <div class="apt-common apt-third apt-active">
                                <span class="graycolor">
                                <span>THIRD STEP</span>
                                </span>
                                <h4 class="apt-flightiti">
                                <span>Review</span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-sm-3 booking-top-btn no-padding">
                            <div class="apt-common apt-forth apt-active">
                                <span class="graycolor">
                                <span>FINISH</span>
                                </span>
                                <h4 class="apt-flightiti">
                                <span>Payments</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <!----------------------------------------------------------- STEPS WIZARDS -------------------------------------------------------->

            <section class="flight-destinations">
                <div class="container">
                    <div class="row">
                        <div id="content" class="col-lg-9" style="border-top: 1px solid #ececec;padding: 0;">
                            <div class="">
                                <!-- <div class="col-xs-3" style=" padding: 0;">
                                    <ul class="nav nav-tabs tabs-left">
                                        <li class="active"><a href="#ClientInfo" data-toggle="tab">Deposit</a></li>
                                        <li><a href="#tab2" data-toggle="tab">Net Banking/ Credit Card/ </a></li> 
                                    </ul>
                                </div>-->
                                   
                                <form name="razorpay-form" id="razorpay-form" action="<?php echo $return_url; ?>" method="POST">
                                    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" />
                                    <input type="hidden" name="merchant_total" id="merchant_total" value="<?php echo $total; ?>"/>
                                    <input type="hidden" name="merchant_amount" id="merchant_amount" value="<?php echo $amount; ?>"/>
                                </form>
                                <div class="col-xs-9">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="ClientInfo">
                                            <p class="creditmodule-paragragh card-headingbg"><i class="fa fa-credit-card"></i> By placing this order, you agree to our <a href="<?php echo base_url("terms_condition"); ?>"> <b>Terms  Of Use </b></a> and <a href="<?php echo base_url("terms_condition"); ?>"><b> Privacy Policy </b> </a> </p>
                                            <input type="submit" onclick="getPay(this);" id="submit-pay"   value="Pay Now <?php if(!empty($this->session->userdata('totalGrossAmount'))){ echo number_format($this->session->userdata('totalGrossAmount'),2); }else{ echo number_format($this->session->userdata('grossTotal'),2); } ?>" class="btn btn-primary" style="right:33%"/>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <div class="tab-pane active" id="ClientInfo">
                                                <p class="creditmodule-paragragh card-headingbg"> <i class="fa fa-credit-card"></i> Please note: You may be redirected to bank page to complete your transaction. By making this booking, you agree to our Terms of Use and Privacy Policy.</p>
                                                <p>Payment Fee : <i class="fa fa-inr"></i> 50.00</p>
                                                <a class="btn-blue " href="<?php echo base_url();?>flights/booking_flights_success"> Pay Now <span>₹ <?php echo $this->session->userdata('grossTotal'); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                        <?php if($_SESSION['bookingType'] == 'international'){ ?>
                        <div class="col-md-3 booking-row">
                            <div class="col-md-12 sidebar-item">
                                <div class="detail-title"><h3>Fare Summary <span class="fare-sumry"><!--Travelers 1 Adult--></span></h3></div>
                                    <div class="input2_wrapper">
                                        <label class="col-md-8">Base Fare</label>
                                        <div class="col-md-4 pad-l-r">
                                            <span class="red"> <i class="fa fa-inr"></i> &nbsp;<?php echo number_format($this->session->userdata('baseFareTotal'),2); ?>                                            
                                                <div class="tooltip-container">
                                                    <i class="fa fa-info-circle padd-font"></i>
                                                    <div class="tooltip-content">
                                                        <ul class="pad-0">
                                                            <li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>
                                                            <li class="tooltip-p lne-hgt">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Adult Base Fare</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('adultTotalBaseFare'); ?></li>
                                                                </ul>
                                                            </li>
                                                            <?php if($this->session->userdata('childTotalBaseFare')  > 0){ ?>
                                                                <li class="tooltip-p lne-hgt">
                                                                    <ul class="df-padd">
                                                                        <li class="lne-hgt">Child Base Fare</li>
                                                                        <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('childTotalBaseFare'); ?></li>
                                                                    </ul>
                                                                </li>
                                                            <?php } ?>                                                        
                                                            <?php if($this->session->userdata('infantTotalBaseFare') > 0){ ?>
                                                                <li class="tooltip-p lne-hgt">
                                                                    <ul class="df-padd">
                                                                        <li class="lne-hgt">Infant Base Fare</li>
                                                                        <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('infantTotalBaseFare'); ?></li>
                                                                    </ul>
                                                                </li>
                                                            <?php } ?>                                               
                                                        </ul>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="input2_wrapper">
                                        <label class="col-md-8">Fee &amp; Surcharge</label>
                                        <div class="col-md-4 pad-l-r">
                                        <span class="red"> 
                                            <i class="fa fa-inr"></i> &nbsp;<?php echo number_format($this->session->userdata('totalTaxFare'),2); ?>   
                                            <div class="tooltip-container">
                                                <i class="fa fa-info-circle padd-font"></i>
                                                <div class="tooltip-content">
                                                    <ul class="pad-0">
                                                        <li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Airline GST</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('totalAGST'); ?></li>
                                                            </ul>
                                                        </li>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Management Fee</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('totalMFT'); ?></li>
                                                            </ul>
                                                        </li>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Management Fee</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('totalMF'); ?></li>
                                                            </ul>
                                                        </li>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Other Taxes</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('totalOT'); ?></li>
                                                            </ul>
                                                        </li>
                                                        <?php if($this->session->userdata('totalYQ') > 0){ ?>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">YQ</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php  echo $this->session->userdata('totalYQ'); ?></li>
                                                            </ul>
                                                        </li>
                                                        <?php } ?>
                                                        <?php if($this->session->userdata('totalYR') > 0){ ?>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">YR</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php  echo $this->session->userdata('totalYR'); ?></li>
                                                            </ul>
                                                        </li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                    <?php if(!empty($this->session->userdata('totalBaggageMeal'))){ ?>
                                    <div class="input2_wrapper">
                                        <label class="col-md-8">Meal, Baggage</label>
                                        <div class="col-md-4 pad-l-r">
                                            <span class="red"><i class="fa fa-inr"></i>&nbsp;<?php echo number_format($this->session->userdata('totalBaggageMeal'),2); ?>
                                                <div class="tooltip-container">
                                                    <i class="fa fa-info-circle padd-font"></i>
                                                    <div class="tooltip-content">
                                                        <ul class="pad-0">
                                                            <li class="tooltip-heading"><b class="tooltip-b">Meals, Baggage</b></li>
                                                            <li class="tooltip-p">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Baggage</li>
                                                                    <li class="tooltip-infopos" id="totalBagAmount"> </li>
                                                                </ul>
                                                            </li>
                                                            <li class="tooltip-p">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Meals</li>
                                                                    <li class="tooltip-infopos" id="totalMMealAmount"> </li>
                                                                </ul>
                                                            </li>
                                                            <!-- <li class="tooltip-p">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Seat</li>
                                                                    <li class="tooltip-infopos" id="totalSSeatAmount"></i> </li>
                                                                </ul>
                                                            </li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                        <!-- <div class="col-md-4 pad-l-r">
                                            <span class="red"> <i class="fa fa-inr"></i>  <?php //echo $this->session->userdata('totalBaggageMeal'); ?>
                                                <div class="tooltip-container">
                                                    <i class="fa fa-info-circle padd-font"></i>
                                                    <div class="tooltip-content">
                                                        <ul class="pad-0">
                                                            <li class="tooltip-heading"><b class="tooltip-b">Addons</b></li>
                                                            <li class="tooltip-p">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Charity Donation</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> 10</li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </span>
                                        </div> -->
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="clearfix"></div>
                                <div class="clearfix"></div>
                                <div class="border-2px"></div>
                                <div class="input2_wrapper">
                                    <label class="col-md-6 mp"><h5 class="mp">Total Amount</h5></label>
                                    <div class="col-md-6 pad-l-r">
                                        <?php if(!empty($this->session->userdata('totalGrossAmount'))){ ?>

                                            <span class="red total-amt mp"><i class="fa fa-inr"></i> &nbsp;<?php echo number_format($this->session->userdata('totalGrossAmount'),2); ?></span>

                                        <?php }else{  ?>

                                            <span class="red total-amt mp"><i class="fa fa-inr"></i> &nbsp;<?php echo number_format($this->session->userdata('grossTotal'),2); ?></span>

                                       <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                                <div class="margin-top"></div>
                                    <div class="col-md-12 sidebar-item">
                                        <div class="detail-title"><h3>Apply Discount<br><span class="fare-sumry">Have Discount/ Promo code to Redeem</span></h3></div>
                                        <div class="input2_wrapper">
                                            <form class="form-inline">
                                                <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputName2" placeholder="Promo Code" style="margin-top:0px;height: 35px;border-radius: 2px;">
                                                </div>
                                                <button type="submit" class="btn btn-success" style="background-color: #244082;border-color: #244082;">Send</button>
                                            </form>                                   
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>                           
                                    <div class="clearfix"></div>                            
                                </div>
                            </div>
                        </div>
                        <?php }else{ ?>

                        <div class="col-md-3 booking-row">
                            <div class="col-md-12 sidebar-item">
                                <div class="detail-title"><h3>Fare Summary <span class="fare-sumry"><!--Travelers 1 Adult--></span></h3></div>
                                    <div class="input2_wrapper">
                                        <label class="col-md-8">Base Fare</label>
                                        <div class="col-md-4 pad-l-r">
                                            <span class="red"> <i class="fa fa-inr"></i> &nbsp;<?php echo number_format($this->session->userdata('baseFareReTotal'),2); ?>                                            
                                                <div class="tooltip-container">
                                                    <i class="fa fa-info-circle padd-font"></i>
                                                    <div class="tooltip-content">
                                                        <ul class="pad-0">
                                                            <li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>
                                                            <li class="tooltip-p lne-hgt">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Adult Base Fare</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('adultTotalBaseFare'); ?></li>
                                                                </ul>
                                                            </li>
                                                            <?php if($this->session->userdata('childTotalBaseFare')  > 0){ ?>
                                                                <li class="tooltip-p lne-hgt">
                                                                    <ul class="df-padd">
                                                                        <li class="lne-hgt">Child Base Fare</li>
                                                                        <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('childTotalBaseFare'); ?></li>
                                                                    </ul>
                                                                </li>
                                                            <?php } ?>                                                        
                                                            <?php if($this->session->userdata('infantTotalBaseFare') > 0){ ?>
                                                                <li class="tooltip-p lne-hgt">
                                                                    <ul class="df-padd">
                                                                        <li class="lne-hgt">Infant Base Fare</li>
                                                                        <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('infantTotalBaseFare'); ?></li>
                                                                    </ul>
                                                                </li>
                                                            <?php } ?>                                               
                                                        </ul>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="input2_wrapper">
                                        <label class="col-md-8">Fee &amp; Surcharge</label>
                                        <div class="col-md-4 pad-l-r">
                                        <span class="red"> 
                                            <i class="fa fa-inr"></i> &nbsp;<?php echo number_format($this->session->userdata('totalTaxFare'),2); ?>   
                                            <div class="tooltip-container">
                                                <i class="fa fa-info-circle padd-font"></i>
                                                <div class="tooltip-content">
                                                    <ul class="pad-0">
                                                        <li class="tooltip-heading"><b class="tooltip-b">Fee &amp; Taxes</b></li>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Airline GST</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('totalAGST'); ?></li>
                                                            </ul>
                                                        </li>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Management Fee</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('totalMFT'); ?></li>
                                                            </ul>
                                                        </li>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Management Fee</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('totalMF'); ?></li>
                                                            </ul>
                                                        </li>
                                                        <li class="tooltip-p lne-hgt">
                                                            <ul class="df-padd">
                                                                <li class="lne-hgt">Other Taxes</li>
                                                                <li class="tooltip-infopos"><i class="fa fa-inr"></i> &nbsp;<?php echo $this->session->userdata('totalOT'); ?></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                    <?php if(!empty($this->session->userdata('totalBaggageMeal'))){ ?>
                                    <div class="input2_wrapper">
                                        <label class="col-md-8">Meal, Baggage</label>
                                        <div class="col-md-4 pad-l-r">
                                            <span class="red"><i class="fa fa-inr"></i>&nbsp;<?php echo number_format($this->session->userdata('totalBaggageMeal'),2); ?>
                                                <div class="tooltip-container">
                                                    <i class="fa fa-info-circle padd-font"></i>
                                                    <div class="tooltip-content">
                                                        <ul class="pad-0">
                                                            <li class="tooltip-heading"><b class="tooltip-b">Meals, Baggage</b></li>
                                                            <li class="tooltip-p">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Baggage</li>
                                                                    <li class="tooltip-infopos" id="totalBagAmount"> </li>
                                                                </ul>
                                                            </li>
                                                            <li class="tooltip-p">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Meals</li>
                                                                    <li class="tooltip-infopos" id="totalMMealAmount"> </li>
                                                                </ul>
                                                            </li>
                                                            <!-- <li class="tooltip-p">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Seat</li>
                                                                    <li class="tooltip-infopos" id="totalSSeatAmount"></i> </li>
                                                                </ul>
                                                            </li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                        <!-- <div class="col-md-4 pad-l-r">
                                            <span class="red"> <i class="fa fa-inr"></i>  <?php //echo $this->session->userdata('totalBaggageMeal'); ?>
                                                <div class="tooltip-container">
                                                    <i class="fa fa-info-circle padd-font"></i>
                                                    <div class="tooltip-content">
                                                        <ul class="pad-0">
                                                            <li class="tooltip-heading"><b class="tooltip-b">Addons</b></li>
                                                            <li class="tooltip-p">
                                                                <ul class="df-padd">
                                                                    <li class="lne-hgt">Charity Donation</li>
                                                                    <li class="tooltip-infopos"><i class="fa fa-inr"></i> 10</li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </span>
                                        </div> -->
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="clearfix"></div>
                                <div class="clearfix"></div>
                                <div class="border-2px"></div>
                                <div class="input2_wrapper">
                                    <label class="col-md-6 mp"><h5 class="mp">Total Amount</h5></label>
                                    <div class="col-md-6 pad-l-r">
                                        <?php if(!empty($this->session->userdata('totalGrossAmount'))){ ?>

                                            <span class="red total-amt mp"><i class="fa fa-inr"></i> &nbsp;<?php echo number_format($this->session->userdata('totalGrossAmount'),2); ?></span>

                                        <?php }else{  ?>

                                            <span class="red total-amt mp"><i class="fa fa-inr"></i> &nbsp;<?php echo number_format($this->session->userdata('grossTotal'),2); ?></span>

                                       <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                                <div class="margin-top"></div>
                                    <div class="col-md-12 sidebar-item">
                                        <div class="detail-title"><h3>Apply Discount<br><span class="fare-sumry">Have Discount/ Promo code to Redeem</span></h3></div>
                                        <div class="input2_wrapper">
                                            <form class="form-inline">
                                                <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputName2" placeholder="Promo Code" style="margin-top:0px;height: 35px;border-radius: 2px;">
                                                </div>
                                                <button type="submit" class="btn btn-success" style="background-color: #244082;border-color: #244082;">Send</button>
                                            </form>                                   
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>                           
                                    <div class="clearfix"></div>                            
                                </div>
                            </div>
                        </div>
                        <?php } ?>

            </section>            
                
            <?php include('includes/footer.php'); ?>
            <?php include('includes/js.php'); ?>

        </div>

            <script>
                const btns = document.querySelectorAll('.accordion__btn');
                const answers = document.querySelectorAll('.accordion__answer__container');
                const icons= document.querySelectorAll('.fa');



                for(let i=0;i < btns.length;i++) {
                
                btns[i].addEventListener('click', function () {
                    for(let j=0;j < btns.length;j++) {
                    if(j !== i){
                        answers[j].classList.remove('active__accordion');
                        icons[j].classList.add('fa-plus');
                        icons[j].classList.remove('fa-minus');  } 
                    }
                    answers[i].classList.toggle('active__accordion');
                    icons[i].classList.toggle('fa-plus');
                    icons[i].classList.toggle('fa-minus');
                    });
                }
            </script>
            <script>
                function showHideDiv(ele) {
                    var srcElement = document.getElementById(ele);
                    if (srcElement != null) {
                        if (srcElement.style.display == "block") {
                            srcElement.style.display = 'none';
                        }
                        else {
                            srcElement.style.display = 'block';
                        }
                        return false;
                    }
                }
            </script>

        
    <!----------------------------------------------- Start Payment Gateway------------------------------------------------->
            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
            <script>
                $(document).ready(function(){
                    //getPay();
                });
                var razorpay_options = {

                    key: "<?php echo $key_id; ?>",
                    amount: "<?php echo $total; ?>",
                    name: "<?php echo $name; ?>",
                    description: "Transaction",
                    netbanking: true,
                    currency: "<?php echo $currency_code; ?>",
                    prefill: {
                    name:"<?php echo $card_holder_name; ?>",
                    email: "<?php echo $email; ?>",
                    contact: "<?php echo $phone; ?>"
                    },
                    notes: {
                    soolegal_product: "test",
                    },
                    handler: function (transaction) {
                    
                        document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
                        document.getElementById('razorpay-form').submit();
                    },
                    "modal": {
                        "ondismiss": function(){
                            location.reload()
                        }
                    }

                };
                var razorpay_submit_btn, razorpay_instance;

                function getPay(el){
                    if(typeof Razorpay == 'undefined'){
                    setTimeout(getPay, 200);
                    if(!razorpay_submit_btn && el){
                        razorpay_submit_btn = el;
                        el.disabled = true;
                        el.value = 'Please wait...';  
                    }
                    } else {
                    if(!razorpay_instance){
                        razorpay_instance = new Razorpay(razorpay_options);
                        if(razorpay_submit_btn){
                        razorpay_submit_btn.disabled = false;
                        razorpay_submit_btn.value = "Pay Now";
                        }
                    }
                    razorpay_instance.open();
                    }
                }  

            
            </script>
    <!----------------------------------------------- END Payment Gateway------------------------------------------------->
    </body>
</html>		
		