<!doctype html>
	<html lang="en">
    <head>
        <title>Tour Hotels Add</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <?php include('top.inc.php') ?>
        <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 60%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
	</head>  
	<body>
		<div id="wrapper">
          	<?php include('header.inc.php') ?>	
          	<?php include('left.inc.php') ?>	
        	<div class="main">
				<div class="main-content">
					<div class="container-fluid">
			   			<div class="col-md-12">
                        	<div class="panel-heading col-md-12 col-xs-12 padding_opx panel-heading_1">
								<div class="col-md-12 col-xs-12 padding_opx">
                                	<div class="col-md-6 padding_opx">
										<h3 class="panel-title title_h3"><b> 
                                        	<i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Tour Hotels Add</b></h3>
									</div>
                             
								</div>
							</div>
							<div class="panel">
                        		<div class="panel-body">
                            		<div class="col-md-12 col-xs-12" style="margin-top: 23px;">
                                		<div class="panel panel-default text-center">
                                            <div class="panel-heading" style="padding-top: 8px; padding-bottom: 0px;">
                                                <p>	Create Tour Package in 10 simple steps! </p>
                                            </div>
                                    	</div>
                                    	<div class="stepwizard">
                      						<div class="stepwizard-row">
                                                <div class="stepwizard-step col-md-1">
                                                    <a href="<?php echo base_url('admin/tour_generalinfo/edit?id='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle">1</button></a>
                                                    <p>General Info ITI</p>
                                                </div>
                                                
                                           		<div class="stepwizard-step col-md-1">
                                           			<a href="<?php echo base_url('admin/tour_itinerary/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >2</button></a>
                                                	<p>Short Itinerary</p>
                                            	</div>
                                                 <div class="stepwizard-step col-md-1">
                                                    <a href="<?php echo base_url('admin/tour_itinerarydetails/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle">3</button></a>
                                                    <p>Operational Itinerary Detail</p>
                                                </div>
                                              	<div class="stepwizard-step col-md-1">
                                                 	<a href="<?php echo base_url('admin/tour_hotels/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" disabled="disabled">4</button></a>
                                                	<p>Hotel</p>
                                            	</div>	
										  		<div class="stepwizard-step col-md-1">
                                                    <a href="<?php echo base_url('admin/tour_transport/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle" >5</button></a>
                                                	<p>Transport</p>
                                            	</div>
                            
                                           		<div class="stepwizard-step col-md-1">
                                                	<a href="<?php echo base_url('admin/tour_driverhotel/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle" >6</button></a>
                                            		<p>Driver Hotel</p>
                                        		</div>
                            
                                                <div class="stepwizard-step col-md-1">
                                                     <a href="<?php echo base_url('admin/tour_sightseeing/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle" >7</button></a>
                                                    <p>Sight Seeing</p>
                                                </div>
                            
                                         		<div class="stepwizard-step col-md-1">
                                                	<a href="<?php echo base_url('admin/tour_meals/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle" >8</button></a>
                                            		<p>Meals</p> 
                                        		</div> 
                                                
                                                 <div class="stepwizard-step col-md-1">
                                                        <a href="<?php echo base_url('admin/tour_totalcost/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle" >9</button></a>
                                                    <p>Total Cost</p> 
                                                </div>
                                                
                                                  <div class="stepwizard-step col-md-1">
                                                       <a href="<?php echo base_url('admin/tour_inclusionexclusion/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-default btn-circle" >10</button></a>
                                                            <p>Inclusion<br>Exclusion</p>
                                                        </div>
                                                
                                            	
                                                
                                               
                							</div>
                					</div>
                    			</div>

           				
		
	<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 14">
<link rel=File-List
href="Foram%20SIV-5556G-2020%20TVL%202021%2051%20PAX_files/filelist.xml">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
x\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<style id="Foram SIV-5556G-2020 TVL 2021 51 PAX_25272_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.font525272
	{color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Tahoma, sans-serif;
	mso-font-charset:0;}
.font625272
	{color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Tahoma, sans-serif;
	mso-font-charset:0;}
.xl6525272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"dd\/mmm";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DCE6F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl6625272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#F2F2F2;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl6725272
	{padding:0px;
	mso-ignore:padding;
	color:#974706;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Percent;
	text-align:right;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#F2F2F2;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl6825272
	{padding:0px;
	mso-ignore:padding;
	color:#974706;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:right;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#F2F2F2;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl6925272
	{padding:0px;
	mso-ignore:padding;
	color:#974706;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:right;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DCE6F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7025272
	{padding:0px;
	mso-ignore:padding;
	color:#963634;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:right;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DCE6F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7125272
	{padding:0px;
	mso-ignore:padding;
	color:#963634;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:right;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#B8CCE4;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7225272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:ddd;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DCE6F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7325272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7425272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:right;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#FDE9D9;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7525272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#FDE9D9;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7625272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:bold;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#B8CCE4;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7725272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7825272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:bold;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#CCC0DA;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl7925272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:bold;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DCE6F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8025272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:bold;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#D8E4BC;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8125272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:bold;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#EBF1DE;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8225272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:bold;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#C4D79B;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8325272
	{padding:0px;
	mso-ignore:padding;
	color:#963634;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#C5D9F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8425272
	{padding:0px;
	mso-ignore:padding;
	color:#974706;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:right;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DCE6F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8525272
	{padding:0px;
	mso-ignore:padding;
	color:#963634;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:right;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DCE6F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8625272
	{padding:0px;
	mso-ignore:padding;
	color:#963634;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:right;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#C5D9F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8725272
	{padding:0px;
	mso-ignore:padding;
	color:#963634;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:right;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#D8E4BC;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8825272
	{padding:0px;
	mso-ignore:padding;
	color:#963634;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:right;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#EBF1DE;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8925272
	{padding:0px;
	mso-ignore:padding;
	color:#963634;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:right;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#C4D79B;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9025272
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9125272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9225272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9325272
	{padding:0px;
	mso-ignore:padding;
	color:red;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9425272
	{padding:0px;
	mso-ignore:padding;
	color:red;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:Fixed;
	text-align:right;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9525272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9625272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:bold;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#C5D9F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9725272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:bold;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#F2F2F2;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9825272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#E6B8B7;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9925272
	{padding:0px;
	mso-ignore:padding;
	color:blue;
	font-size:11.0pt;
	font-weight:bold;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DDD9C4;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10025272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#D8E4BC;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl10125272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#D8E4BC;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl10225272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#D8E4BC;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10325272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl10425272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl10525272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10625272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#DDD9C4;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10725272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#DDD9C4;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10825272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#FDE9D9;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10925272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EBF1DE;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11025272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EBF1DE;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11125272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EBF1DE;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11225272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#F2F2F2;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11325272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#F2F2F2;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11425272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#F2F2F2;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11525272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#DCE6F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11625272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#DCE6F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11725272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#DCE6F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11825272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#C5D9F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11925272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#C5D9F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl12025272
	{padding:0px;
	mso-ignore:padding;
	color:#7030A0;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#C5D9F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl12125272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#C5D9F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl12225272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#C5D9F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl12325272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#DDD9C4;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl12425272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#DDD9C4;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl12525272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#DDD9C4;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl12625272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#DDD9C4;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl12725272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#C5D9F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl12825272
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#C5D9F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:normal;}
-->
</style>
</head>

<body>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="Foram SIV-5556G-2020 TVL 2021 51 PAX_25272" align=center
x:publishsource="Excel">
<form name="hotel" id="hotel" method="POST" action="<?php base_url();?>submitHotel">
<table border=0 cellpadding=0 cellspacing=0 width=2409 class=xl7725272
 style='border-collapse:collapse;table-layout:fixed;width:1811pt'>
 <col class=xl7725272 width=179 style='mso-width-source:userset;mso-width-alt:
 6546;width:134pt'>
 <col class=xl7725272 width=59 style='mso-width-source:userset;mso-width-alt:
 2157;width:97pt'>
 <col class=xl9525272 width=39 style='mso-width-source:userset;mso-width-alt:
 1426;width:29pt'>
 <col class=xl7725272 width=59 style='mso-width-source:userset;mso-width-alt:
 2157;width:97pt'>
 <col class=xl7725272 width=39 style='mso-width-source:userset;mso-width-alt:
 1426;width:29pt'>
 <col class=xl7725272 width=36 style='mso-width-source:userset;mso-width-alt:
 1316;width:27pt'>
 <col class=xl7725272 width=287 style='mso-width-source:userset;mso-width-alt:
 10496;width:215pt'>
 <col class=xl7725272 width=24 span=2 style='mso-width-source:userset;
 mso-width-alt:877;width:45pt'>
 <col class=xl7725272 width=38 span=2 style='mso-width-source:userset;
 mso-width-alt:1389;width:35pt'>
 <col class=xl7725272 width=32 style='mso-width-source:userset;mso-width-alt:
 1170;width:35pt'>
 <col class=xl7725272 width=38 style='mso-width-source:userset;mso-width-alt:
 1389;width:35pt'>
 <col class=xl7725272 width=32 style='mso-width-source:userset;mso-width-alt:
 1170;width:24pt'>
 <col class=xl7725272 width=38 style='mso-width-source:userset;mso-width-alt:
 1389;width:29pt'>
 <col class=xl7725272 width=32 style='mso-width-source:userset;mso-width-alt:
 1170;width:24pt'>
 <col class=xl7725272 width=35 style='mso-width-source:userset;mso-width-alt:
 1280;width:26pt'>
 <col class=xl7725272 width=59 style='mso-width-source:userset;mso-width-alt:
 2157;width:46pt'>
 <col class=xl7725272 width=45 style='mso-width-source:userset;mso-width-alt:
 1645;width:46pt'>
 <col class=xl7725272 width=38 style='mso-width-source:userset;mso-width-alt:
 1389;width:46pt'>
 <col class=xl7725272 width=32 span=2 style='mso-width-source:userset;
 mso-width-alt:1170;width:46pt'>
 <col class=xl7725272 width=53 span=2 style='mso-width-source:userset;
 mso-width-alt:1938;width:40pt'>
 <col class=xl7725272 width=45 span=2 style='mso-width-source:userset;
 mso-width-alt:1645;width:34pt'>
 <col class=xl7725272 width=53 span=2 style='mso-width-source:userset;
 mso-width-alt:1938;width:40pt'>
 <col class=xl7725272 width=45 span=2 style='mso-width-source:userset;
 mso-width-alt:1645;width:34pt'>
 <col class=xl7725272 width=38 style='mso-width-source:userset;mso-width-alt:
 1389;width:46pt'>
 <col class=xl7725272 width=39 style='mso-width-source:userset;mso-width-alt:
 1426;width:46pt'>
 <col class=xl7725272 width=46 style='mso-width-source:userset;mso-width-alt:
 1682;width:46pt'>
 <col class=xl7725272 width=39 style='mso-width-source:userset;mso-width-alt:
 1426;width:46pt'>
 <col class=xl7725272 width=53 span=3 style='mso-width-source:userset;
 mso-width-alt:1938;width:40pt'>
 <col class=xl7725272 width=52 span=2 style='mso-width-source:userset;
 mso-width-alt:1901;width:39pt'>
 <col class=xl7725272 width=137 style='mso-width-source:userset;mso-width-alt:
 5010;width:40pt'>
 <col class=xl7725272 width=175 style='mso-width-source:userset;mso-width-alt:
 6400;width:131pt'>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl7725272 width=179 style='height:15.0pt;width:134pt'><a
  name="RANGE!A1"></a></td>
  <td class=xl7725272 width=59 style='width:44pt'></td>
  <td class=xl9525272 width=39 style='width:29pt'></td>
  <td class=xl7725272 width=59 style='width:44pt'></td>
  <td class=xl7725272 width=39 style='width:29pt'></td>
  <td class=xl7725272 width=36 style='width:27pt'></td>
  <td class=xl7725272 width=287 style='width:215pt'></td>
  <td class=xl7725272 width=24 style='width:18pt'></td>
  <td class=xl7725272 width=24 style='width:18pt'></td>
  <td class=xl7725272 width=38 style='width:29pt'></td>
  <td class=xl7725272 width=38 style='width:29pt'></td>
  <td class=xl7725272 width=32 style='width:24pt'></td>
  <td class=xl7725272 width=38 style='width:29pt'></td>
  <td class=xl7725272 width=32 style='width:24pt'></td>
  <td class=xl7725272 width=38 style='width:29pt'></td>
  <td class=xl7725272 width=32 style='width:24pt'></td>
  <td class=xl7725272 width=35 style='width:26pt'></td>
  <td class=xl7725272 width=59 style='width:44pt'></td>
  <td class=xl7725272 width=45 style='width:34pt'></td>
  <td class=xl7725272 width=38 style='width:29pt'></td>
  <td class=xl7725272 width=32 style='width:24pt'></td>
  <td class=xl7725272 width=32 style='width:24pt'></td>
  <td class=xl7725272 width=53 style='width:40pt'></td>
  <td class=xl7725272 width=53 style='width:40pt'></td>
  <td class=xl7725272 width=45 style='width:34pt'></td>
  <td class=xl7725272 width=45 style='width:34pt'></td>
  <td class=xl7725272 width=53 style='width:40pt'></td>
  <td class=xl7725272 width=53 style='width:40pt'></td>
  <td class=xl7725272 width=45 style='width:34pt'></td>
  <td class=xl7725272 width=45 style='width:34pt'></td>
  <td class=xl7725272 width=45 style='width:34pt'></td>
  <td class=xl7725272 width=38 style='width:29pt'></td>
  <td class=xl7725272 width=39 style='width:29pt'></td>
  <td class=xl7725272 width=46 style='width:35pt'></td>
  <td class=xl7725272 width=39 style='width:29pt'></td>
  <td class=xl7725272 width=53 style='width:40pt'></td>
  <td class=xl7725272 width=53 style='width:40pt'></td>
  <td class=xl7725272 width=53 style='width:40pt'></td>
  <td class=xl7725272 width=52 style='width:39pt'></td>
  <td class=xl7725272 width=52 style='width:39pt'></td>
  <td class=xl7725272 width=137 style='width:103pt'></td>
  <td class=xl7725272 width=175 style='width:131pt'></td>
 </tr>
 
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7325272 style='height:20.1pt;font-weight: bold;'><?php echo $getTourGeneralInfo['FileNo']; ?></td>
  <td colspan=2 class=xl10825272 style='border-right:.5pt solid black;
  border-left:none;font-weight: bold;'></td>
  <td class=xl7425272 style='border-left:none;font-weight: bold;'>Paying PAX : </td>
  <td class=xl7525272><input name="minimum_pax" id="minimum_pax" value = "<?php echo $getTourGeneralInfo['PayingPax']; ?>" disabled></td>
  <td rowspan=2 class=xl9625272>Nts</td>
  <td class=xl9825272 style='border-left:none;font-weight: bold;'><?php echo $getTourGeneralInfo['ItineraryTitle']; ?></td>
  <td colspan=2 rowspan=2 class=xl12325272 width=48 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:36pt;font-weight: bold;'>Room Type</td>
  <td colspan=4 class=xl9725272 style='border-left:none'>Room Rate</td>
  <td colspan=4 class=xl11525272 style='border-right:.5pt solid black;
  border-left:none;font-weight: bold;'>Total</td>
  <td colspan=6 class=xl11225272 style='border-right:.5pt solid black;
  border-left:none;font-weight: bold;'>Tax</td>
  <td colspan=4 class=xl11525272 style='border-right:.5pt solid black;
  border-left:none;font-weight: bold;'>Total</td>
  <td colspan=4 class=xl11825272 style='border-right:.5pt solid black;
  border-left:none;font-weight: bold;'>Per Person</td>
  <td colspan=4 class=xl11525272 style='border-right:.5pt solid black;
  border-left:none;font-weight: bold;'>BREAKFAST</td>
  <td class=xl7625272 style='border-left:none'>PORT</td>
  <td colspan=5 class=xl10925272 style='border-right:.5pt solid black;
  border-left:none;font-weight: bold;'>Total/Person</td>
  <td rowspan=2 class=xl10625272 style='border-bottom:.5pt solid black;font-weight: bold;'>Vendor</td>
  <td class=xl7725272></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl7825272 width=179 style='height:20.1pt;border-top:none;
  width:134pt'>City</td>
  <td class=xl7925272 style='border-top:none;border-left:none'>IN</td>
  <td class=xl7925272 style='border-top:none;border-left:none'>DOW</td>
  <td class=xl9625272 style='border-top:none;border-left:none'>OUT</td>
  <td class=xl9625272 style='border-top:none;border-left:none'>DOW</td>
  <td class=xl9925272 style='border-top:none;border-left:none'><a
  href="#'Total Cost'!A1">ACCOMMODATION</a></td>
  <td class=xl9725272 style='border-top:none;border-left:none'>DBL</td>
  <td class=xl9725272 style='border-top:none;border-left:none'>TWN</td>
  <td class=xl9725272 style='border-top:none;border-left:none'>TRP</td>
  <td class=xl9725272 style='border-top:none;border-left:none'>QUD</td>
  <td class=xl7925272 style='border-top:none;border-left:none'>DBL</td>
  <td class=xl7925272 style='border-top:none;border-left:none'>TWN</td>
  <td class=xl7925272 style='border-top:none;border-left:none'>TRP</td>
  <td class=xl7925272 style='border-top:none;border-left:none'>QUD</td>
  <td class=xl9725272 style='border-top:none;border-left:none'>1(%)</td>
  <td class=xl9725272 style='border-top:none;border-left:none'>2(%)</td>
  <td class=xl9725272 style='border-top:none;border-left:none'>3(%)</td>
  <td class=xl9725272 style='border-top:none;border-left:none'>CT</td>
  <td class=xl9725272 style='border-top:none;border-left:none'>RF</td>
  <td class=xl9725272 style='border-top:none;border-left:none'>5</td>
  <td class=xl7925272 style='border-top:none;border-left:none'>DBL</td>
  <td class=xl7925272 style='border-top:none;border-left:none'>TWN</td>
  <td class=xl7925272 style='border-top:none;border-left:none'>TRP</td>
  <td class=xl7925272 style='border-top:none;border-left:none'>QUD</td>
  <td class=xl9625272 style='border-top:none;border-left:none'>DBL</td>
  <td class=xl9625272 style='border-top:none;border-left:none'>TWN</td>
  <td class=xl9625272 style='border-top:none;border-left:none'>TRP</td>
  <td class=xl9625272 style='border-top:none;border-left:none'>QUD</td>
  <td class=xl7925272 style='border-top:none;border-left:none'>BF/PP</td>
  <td class=xl7925272 style='border-top:none;border-left:none'>BF/D</td>
  <td class=xl7925272 style='border-top:none;border-left:none'>BF/T</td>
  <td class=xl7925272 style='border-top:none;border-left:none'>BF/Q</td>
  <td class=xl7625272 style='border-top:none;border-left:none'>PP</td>
  <td class=xl8025272 style='border-top:none;border-left:none'>SGL</td>
  <td class=xl8125272 style='border-top:none;border-left:none'>DBL</td>
  <td class=xl8225272 style='border-top:none;border-left:none'>TWN</td>
  <td class=xl8125272 style='border-top:none;border-left:none'>TRP</td>
  <td class=xl8225272 style='border-top:none;border-left:none'>QUD</td>
  <td class=xl7725272></td>
 </tr>
 <?php
 	$i=0;
	
  foreach($getItineraryCities as $key => $cityValue){ 
  
  ?>
 <tr height=26 style='mso-height-source:userset;height:20.1pt;background: #f9f9f9;'>
  <td height=26 class=xl10325272 width=179 style='height:20.1pt;border-top:
  none;width:134pt;'><?php echo $cityValue['city_name'];?></td>

  <td class=xl6525272 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="date" name="checkindate" id="checkindate<?php echo $i;?>" value="<?php echo $cityValue['ItenaryDateIn']; ?>" style="width: 125px;font-family: inherit;" disabled></td>
  <td class=xl7225272 style='border-top:none;border-left:none;background: #f9f9f9;'><input name="checkinday" id="checkinday<?php echo $i;?>" value = "<?php echo $cityValue['ItenaryDayIn'];?>" disabled style="width: 35px"></td>
  <td class=xl6525272 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="date" name="checkoutdate" id="checkoutdate<?php echo $i;?>" value="<?php echo $cityValue['ItenaryDateOut']; ?>" onChange="getTotal(<?php echo $i;?>);" style="width: 124px;font-family: inherit;" disabled></td>
  <td class=xl7225272 style='border-top:none;border-left:none;background: #f9f9f9;'><input name="checkoutday" id="checkoutday<?php echo $i;?>" value = "<?php echo $cityValue['ItenaryDayOut'];?>" disabled style="width: 35px"></span></td>

  
  <?php foreach($cityValue['noOfNights'] as $key => $nights){ ?>
  <td class=xl8325272 style='border-top:none;border-left:none;background: #f9f9f9;'> <input name="noofnights" id="noofnights<?php echo $i;?>" value = "<?php echo $nights['OverNightCity'];?>" disabled style="width: 35px"></td>
  <?php } ?>
  <td class=xl10325272 width=287 style='border-top:none;border-left:none;
  width:215pt;background: #f9f9f9;'>
  <div class="row" style="margin-left: 7px;">
    <div class="col-md-6">
    	<select style="width: 118px;font-family: inherit;" name="hotel_name[]" id="hotel_name<?php echo $i;?>">
      	<option value="">Select Hotel List</option>
      	<?php foreach($cityValue['hotelList'] as $key => $hotelValue){?>
    			<option value="<?php echo $hotelValue['HotelId'];?>"<?php if($hotel_detail[$i]['HotelId'] ==  $hotelValue['hotelId']){echo "selected" ;}?>><?php echo $hotelValue['HotelName']?></option>
          <?php } ?>
      </select>
    </div>
    <div class="col-md-6">
      <buton id="myBtn">
        <a href="javascript:void(0)" class="btn btn-success addMoreDept"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
      </buton>
      
    </div>
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3 style="text-align: center;font-size: 21px;">Add New Hotel</h3>
          <div class="panel">
            <div class="panel-body">
              <!-- Html ##################################################### -->
              <div class="col-md-12 col-xs-12 margin_top">
                <?php
                if($error = $this->session->flashdata('hoteles')){  ?>
                  <div class="alert alert-danger alert-dismissable">
                    <?= $error ?>
                  </div>
                <?php        
              }
              // ------------------------------ admin form open ---------------------------------
              $attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
              echo form_open_multipart('admin/hoteles/add', $attributes);
              ?>
              <div class="col-md-12 padding_opx">
                <label class="col-md-2 text-left padding_opx">Select Hotel Type* </label>
                <div class="col-md-5 form-group padding_opx">
                  <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('hoteltypeId'); ?></span>
                  <?php
                  unset($options);
                  $options['']='Select Hotel Type';
                  foreach($hoteltype as $val)
                    {
                      $options[$val['hoteltypeId']] = $val['hoteltypeName'];
                    }  
                    $selected=set_value('hoteltypeId');
                    echo form_dropdown('hoteltypeId', $options,$selected,'class="form-control margin_bottom"');
                    ?>
                </div>
              </div>     

              <div class="col-md-12 padding_opx">
                <label class="col-md-2 text-left padding_opx">
                  <span> Name * </span></label>
                  <div class="col-md-5 form-group padding_opx">
                    <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('HotelName'); ?></span>
                    <?php
                    // ------------------------------ Login Id form open ---------------------------------
                    $data = array('name'  => 'HotelName', 'id' => 'HotelName', 'value'=>set_value('HotelName'), 'placeholder' => 'Hotel Name', 'class'=>"form-control margin_bottom");
                    echo form_input($data);
                    ?>
                  </div>
              </div>

              <div class="col-md-12 padding_opx">
                <label class="col-md-2 text-left padding_opx">Rating * </label>
                <div class="col-md-2 form-group padding_opx">
                  <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('StarRating'); ?></span>
                  <?php
                  // ------------------------------ adm_status form  ---------------------------------
                  $options = array
                  (
                    '1'         => '1 Star',
                    '2'         => '2 Star',
                    '3'         => '3 Star',
                    '4'         => '4 Star',
                    '5'         => '5 Star',
                  );

                  echo form_dropdown('StarRating', $options, '','class="form-control margin_bottom"');
                  ?>
                </div>
              </div> 

              <div class="col-md-12 padding_opx">
                <label class="col-md-2 text-left padding_opx">
                  <span> Location * </span></label>
                  <div class="col-md-5 form-group padding_opx">
                    <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Locality'); ?></span>
                    <?php
                    // ------------------------------ Login Id form open ---------------------------------
                    $data = array('name'  => 'Locality', 'id' => 'Locality', 'value'=>set_value('Locality'), 'placeholder' => 'Location', 'class'=>"form-control margin_bottom");
                       echo form_input($data);
                       ?>
                  </div>
              </div>  

              <div class="col-md-12 padding_opx">
                <label class="col-md-2 text-left padding_opx">
                  <span> Country * </span>
                </label>
                <div class="col-md-5 form-group padding_opx">
                  <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Country'); ?></span>
                  <?php
                  // ------------------------------ Login Id form open ---------------------------------
                    /*   $data = array('name'  => 'Country', 'id' => 'Country', 'value'=>set_value('Country'), 'placeholder' => 'Country', 'class'=>"form-control margin_bottom");
                       echo form_input($data);*/
                  ?>
                  <select name="countryid" id="countryid" onChange="getState()";>
                    <option value="">Select Country</option>
                    <?php foreach($country_list as $country){ ?>
                      <option value="<?php echo $country['countryid']?>"><?php echo $country['country']?></option>
                      <?php }?>
                    </select>
                  </div>
                </div>  

                <div class="col-md-12 padding_opx">
                  <label class="col-md-2 text-left padding_opx">
                    <span> State * </span></label>
                    <div class="col-md-5 form-group padding_opx">
                      <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('State'); ?></span>
                      <?php
                        // ------------------------------ Login Id form open ---------------------------------
                        /* $data = array('name'  => 'State', 'id' => 'State', 'value'=>set_value('State'), 'placeholder' => 'State', 'class'=>"form-control margin_bottom");
                       echo form_input($data);*/
                      ?>
                      <select name="stateid" id="stateid" onChange="getCity();">
                        <option value="">Select State</option>
                        <?php foreach($state_list as $state){ ?>
                          <option value="<?php echo $state['StatesID']?>"><?php echo $state['StatesName']?></option>
                          <?php }?>
                      </select>
                    </div>
                  </div>  

                  <div class="col-md-12 padding_opx">
                    <label class="col-md-2 text-left padding_opx">
                      <span> City * </span></label>
                      <div class="col-md-5 form-group padding_opx">
                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('City'); ?></span>
                        <?php
                        /*                  // ------------------------------ Login Id form open ---------------------------------
                        $data = array('name'  => 'City', 'id' => 'City', 'value'=>set_value('City'), 'placeholder' => 'City', 'class'=>"form-control margin_bottom");
                       echo form_input($data);*/
                      ?>
                        <select name="cityid" id="cityid">
                          <option value="">Select City</option>
                          <?php foreach($city_list as $city){ ?>
                            <option value="<?php echo $city['cityid']?>"><?php echo $city['city_name']?></option>
                            <?php }?>
                          </select>
                        </div>
                      </div>  

                      <div class="col-md-12 padding_opx">
                        <label class="col-md-2 text-left padding_opx">Overview </label>
                        <div class="col-md-8 form-group padding_opx">
                          <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Description'); ?></span>
                          <?php
                          // ------------------------------ adm address no Password form open ---------------------------------
                          $data = array('name'  => 'Overview', 'id' => 'Overview','value'=>set_value('Overview') ,  'placeholder' => 'Overview', 'class'=>"form-control margin_bottom");
                                         echo form_textarea($data);
                          ?>
                          <p>&nbsp;</p>
                        </div>
                      </div>  

                      <div class="col-md-12 padding_opx">
                        <label class="col-md-2 text-left padding_opx">
                          <span> Small Image </span>
                        </label>
                        <div class="col-md-5 form-group padding_opx">
                          <?php
                          // ------------------------------ Login Id form open ---------------------------------
                          $data = array('name'  => 'SmallImage[]',  'class'=>"form-control margin_bottom");
                          echo form_upload($data);
                          ?>                            
                        </div>
                      </div>

                      <div class="col-md-12 padding_opx">
                        <label class="col-md-2 text-left padding_opx">
                          <span> Bigger Image (Header)</span>
                        </label>
                        <div class="col-md-5 form-group padding_opx">
                          <?php
                          // ------------------------------ Login Id form open ---------------------------------
                          $data = array('name'  => 'SmallImage[]',  'class'=>"form-control margin_bottom");
                          echo form_upload($data);
                          ?>                            
                        </div>
                      </div>

                      <div class="col-md-12 padding_opx">
                        <label class="col-md-2 text-left padding_opx">
                          <span> Select Facilities </span>
                        </label>
                        <div class="col-md-5 form-group padding_opx">
                          <?php
                           foreach($hotel_facilities as $fh_val)
                           {                            
                          ?>
                          <div class="col-md-6 form-group padding_opx">
                            <?php 
                            $data = array
                            (
                              'name'          => 'HotelFacilities[]',
                              'value'         => $fh_val['FId'] ,
                              'id'            => 'HotelFacilities',
                              'style'         => 'margin:10px'
                            );
                            
                            echo form_checkbox($data);
                            echo $fh_val['Title'] 
                            ?>                              
                          </div>
                          <?php } ?>  
                          <p>&nbsp;</p>
                        </div>
                      </div>

                      <div class="col-md-12 padding_opx">
                        <label class="col-md-2 text-left padding_opx">Sort Order </label>
                        <div class="col-md-2 form-group padding_opx">
                          <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Description'); ?></span>
                          <?php
                           // ------------------------------ adm address no Password form open ---------------------------------
                          $data = array('name'  => 'SortOrder', 'id' => 'SortOrder','value'=>set_value('SortOrder') ,  'placeholder' => 'Sort Order', 'class'=>"form-control margin_bottom");
                          echo form_input($data);
                          ?>
                        </div>
                      </div>  

                      <div class="col-md-12 padding_opx">
                        <label class="col-md-2 text-left padding_opx"> Status </label>
                        <div class="col-md-2 form-group padding_opx">
                          <?php
                          // ------------------------------ adm_status form  ---------------------------------
                          $options = array
                          (
                            'Y' => 'Active',
                            'N' => 'Inactive',
                          );
                          echo form_dropdown('Status', $options, '','class="form-control margin_bottom"');
                          ?>                            
                        </div>
                      </div>   

                      <div class="col-md-12 padding_opx">
                        <label class="col-md-2 text-left padding_opx"></label>
                        <div class="col-md-5 form-group padding_opx">
                          <?php
                          $data = array('flag'  => 'yes');
                          echo form_hidden($data);
                          //------------------------------------------------------------------------------------------------------------------- 
                          $data = array('name'  => 'smt_enter', 'value' => 'Submit',   'class'=>"btn btn-primary");
                          echo form_submit($data);
                          ?>
                        </div>
                      </div>
                      <?php   // ------------------------------ admin form open ---------------------------------
                      echo form_close(); 
                     ?>
                   </div>
                   <!--Html ##################################################  -->
                 </div>
               </div>
             </div>
           </div>
         </div>
       </td>
	   
  <td colspan=2 class=xl12725272 width=48 style='border-right:.5pt solid black;
  border-left:none;width:36pt;background: #f9f9f9;'>
  	<select style="width: 118px;font-family: inherit;" name="roomtype[]" id="roomtype<?php echo $i;?>">
    	<option value="">Select Room Type</option>
    	<?php foreach($roomtypelist as $key => $roomTypeValue){?>
  			<option value="<?php echo $roomTypeValue['RoomTitle'];?>" <?php if($hotel_detail[$i]['roomType'] ==  $roomTypeValue['RoomTitle']){ echo "selected" ;}?>><?php echo $roomTypeValue['RoomTitle']?></option>
        <?php } ?>
    </select>
  </td>
  <td class=xl6625272 align=right style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="dbl[]" id="dbl<?php echo $i;?>" value = "<?php echo $hotel_detail[$i]['dbl']; ?>" onChange="getTotal(<?php echo $i;?>);" style="width: 45px;"></td>
  <td class=xl6625272 align=right style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="twn[]" id="twn<?php echo $i;?>" value = "<?php echo $hotel_detail[$i]['twn']; ?>" onChange="getTotal(<?php echo $i;?>);" style="width: 45px;"></td>
  <td class=xl6625272 align=right style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="trp[]" id="trp<?php echo $i;?>" value = "<?php echo $hotel_detail[$i]['trp']; ?>" onChange="getTotal(<?php echo $i;?>);" style="width: 45px;"></td>
  <td class=xl6625272 align=right style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="qud[]" id="qud<?php echo $i;?>" value = "<?php echo $hotel_detail[$i]['qud']; ?>" onChange="getTotal(<?php echo $i;?>);" style="width: 45px;"></td>
  <td class=xl8425272 style='border-top:none;border-left:none;background: #f9f9f9;'><span name="dbl" id="DBL<?php echo $i;?>"><?php echo $hotel_detail[$i]['total_dbl']; ?></span></td>
  <td class=xl8525272 style='border-top:none;border-left:none;background: #f9f9f9;'><span name="twn" id="TWN<?php echo $i;?>"><?php echo $hotel_detail[$i]['total_twn']; ?></span></td>
  <td class=xl8525272 style='border-top:none;border-left:none;background: #f9f9f9;'><span name="trp" id="TRP<?php echo $i;?>"><?php echo $hotel_detail[$i]['total_trp']; ?></span></td>
  <td class=xl8525272 style='border-top:none;border-left:none;background: #f9f9f9;'><span name="qud" id="QUD<?php echo $i;?>"><?php echo $hotel_detail[$i]['total_qud']; ?></span></td>
  <td class=xl6725272 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="percent" name="one[]" id="one<?php echo $i;?>" value="<?php echo $hotel_detail[$i]['one']; ?>" onChange="getTotal(<?php echo $i;?>);" style="width: 60px;"></td>
  <td class=xl6725272 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="two[]" id="two<?php echo $i;?>" value="<?php echo $hotel_detail[$i]['two']; ?>" onChange="getTotal(<?php echo $i;?>);" style="width: 60px;"></td>
    <td class=xl6825272 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="three[]" id="three<?php echo $i;?>" value="<?php echo $hotel_detail[$i]['three']; ?>" onChange="getTotal(<?php echo $i;?>);" style="width: 60px;"></td>
  <td class=xl6825272 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="ct[]" id="ct<?php echo $i;?>" value="<?php echo $hotel_detail[$i]['ct']; ?>" onChange="getTotal(<?php echo $i;?>);" style="width: 60px;"></td>
  <td class=xl6825272 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="rf[]" id="rf<?php echo $i;?>" value="<?php echo $hotel_detail[$i]['rf']; ?>" onChange="getTotal(<?php echo $i;?>);"style="width: 60px;"></td>

  <td class=xl6825272 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="five[]" id="five<?php echo $i;?>" value="<?php echo $hotel_detail[$i]['five']; ?>" onChange="getTotal(<?php echo $i;?>);" style="width: 52px;"></td>
  <td class=xl6925272 style='border-top:none;border-left:none;background: #f9f9f9;'><span name="DBLTotal" id="DBLTotal<?php echo $i;?>" ><?php echo $hotel_detail[$i]['total_tax_amount_dbl']; ?></span></td>
  <td class=xl7025272 style='border-top:none;border-left:none;background: #f9f9f9;'><span name="TWNTotal" id="TWNTotal<?php echo $i;?>"><?php echo $hotel_detail[$i]['total_tax_amount_twn']; ?></span></td>
  <td class=xl7025272 style='border-top:none;border-left:none;background: #f9f9f9;'><span name="TRPTotal" id="TRPTotal<?php echo $i;?>"><?php echo $hotel_detail[$i]['total_tax_amount_trp']; ?></span></td>
  <td class=xl7025272 style='border-top:none;border-left:none;background: #f9f9f9;'><span name="QUDTotal" id="QUDTotal<?php echo $i;?>"><?php echo $hotel_detail[$i]['total_tax_amount_qud']; ?></span></td>
  <td class=xl8625272 style='border-top:none;border-left:none;background: #f9f9f9;'><span name="DBLPPTotal" id="DBLPPTotal<?php echo $i;?>"><?php echo $hotel_detail[$i]['dbl_pp']; ?></span></td>
  <td class=xl8625272 style='border-top:none;border-left:none;background: #f9f9f9;'><span name="TWNPPTotal" id="TWNPPTotal<?php echo $i;?>"><?php echo $hotel_detail[$i]['twn_pp']; ?></span></td>
  <td class=xl8625272 style='border-top:none;border-left:none;background: #f9f9f9;'><span name="TRPPPTotal" id="TRPPPTotal<?php echo $i;?>"><?php echo $hotel_detail[$i]['trp_pp']; ?></span></td>
  <td class=xl8625272 style='border-top:none;border-left:none;background: #f9f9f9;'><span name="QUDPPTotal" id="QUDPPTotal<?php echo $i;?>"><?php echo $hotel_detail[$i]['qud_pp']; ?></span></td>
  <td class=xl6925272 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="bf_pp[]" id="bf_pp<?php echo $i;?>" value="<?php echo $hotel_detail[$i]['bf_pp']; ?>" onChange="getTotal(<?php echo $i;?>);"  style="width: 60px;"></td>
  <td class=xl7025272 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="bf_d[]" id="bf_d<?php echo $i;?>" value="<?php echo $hotel_detail[$i]['bf_d']; ?>" onChange="getTotal(<?php echo $i;?>);"  style="width: 60px;"></td>
  <td class=xl6925272 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="bf_t[]" id="bf_t<?php echo $i;?>" value="<?php echo $hotel_detail[$i]['bf_t']; ?>" onChange="getTotal(<?php echo $i;?>);"  style="width: 60px;"></td>
  <td class=xl6925272 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="bf_q[]" id="bf_q<?php echo $i;?>" value="<?php echo $hotel_detail[$i]['bf_q']; ?>" onChange="getTotal(<?php echo $i;?>);" style="width: 60px;"></td>
  <td class=xl7125272 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="port_pp[]" id="port_pp<?php echo $i;?>" value="<?php echo $hotel_detail[$i]['port_pp']; ?>" onChange="getTotal(<?php echo $i;?>);" style="width: 52px;"></td>
  <td class=xl8725272 style='border-top:none;border-left:none;background: #f9f9f9;'><span name="SGLFinalTotal" id="SGLFinalTotal<?php echo $i;?>" ><?php echo $hotel_detail[$i]['sglFinalTotal']; ?></span></td>
  <td class=xl8825272 style='border-top:none;border-left:none;background: #f9f9f9;'><span name="DBLFinalTotal" id="DBLFinalTotal<?php echo $i;?>" ><?php echo $hotel_detail[$i]['dblFinalTotal']; ?></span></td>
  <td class=xl8925272 style='border-top:none;border-left:none;background: #f9f9f9;'><span name="TWNFinalTotal" id="TWNFinalTotal<?php echo $i;?>" ><?php echo $hotel_detail[$i]['twnFinalTotal']; ?></span></td>
  <td class=xl8825272 style='border-top:none;border-left:none;background: #f9f9f9;'><span name="TRPFinalTotal" id="TRPFinalTotal<?php echo $i;?>" ><?php echo $hotel_detail[$i]['trpFinaltotal']; ?></span></td>
  <td class=xl8925272 style='border-top:none;border-left:none;background: #f9f9f9;'><span name="QUDFinalTotal" id="QUDFinalTotal<?php echo $i;?>" ><?php echo $hotel_detail[$i]['qudFinalTotal']; ?></span></td>
  <td class=xl10525272 style='border-top:none;border-left:none;background: #f9f9f9;'>
  
  <select name="vendor[]" id="vendor<?php echo $i;?>" onChange="getTotal(<?php echo $i;?>);">
  	<option value="">Select Vendor</option>
    <option value="tourism" <?php if($hotel_detail[$i]['vendorName'] == 'tourism'){echo "selected" ;}?>>Tourism Group</option>
  </select>
   <input type="hidden" name="tour_id[]" id="tour_id" value="<?php echo $TourId; ?>">
   <input type="hidden" name="noofnights[]" id="noofnights<?php echo $i;?>" value="<?php echo $cityValue['noOfNights'];?>">
  </td>
  <td class=xl7725272></td>
 </tr>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
 
 <script type= "text/javascript">
 
 
 	function getTotal(id){	

		var dbl = document.getElementById("dbl"+id).value;
		var twn = document.getElementById("twn"+id).value;
		var trp = document.getElementById("trp"+id).value;
		var qud = document.getElementById("qud"+id).value;
		
		var one = document.getElementById("one"+id).value;
		var two = document.getElementById("two"+id).value;
		var three = document.getElementById("three"+id).value;
		var rf = document.getElementById("rf"+id).value;
		var ct = document.getElementById("ct"+id).value;
		var five = document.getElementById("five"+id).value;
		
		var bfPP = document.getElementById("bf_pp"+id).value;
		var bfD = document.getElementById("bf_d"+id).value;
		var bfT = document.getElementById("bf_t"+id).value;
		var bfQ = document.getElementById("bf_q"+id).value;
		var portPP = document.getElementById("port_pp"+id).value;
		
		var checkindate = document.getElementById("checkindate"+id).value;		
		var checkoutdate = document.getElementById("checkoutdate"+id).value;
		
		var hotelName = document.getElementById("hotel_name"+id).value;
		var roomType = document.getElementById("roomtype"+id).value;
		var vendorName = document.getElementById("vendor"+id).value;
		
		var nights = document.getElementById("noofnights"+id).value;	
	
		
		var date1 = new Date(checkindate);
		var date2 = new Date(checkoutdate);
		var timeDiff = Math.abs(date2.getTime() - date1.getTime());
		var numberOfNights = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
		
		$('#noofnights'+id).text(numberOfNights);
		
		var totalDBL = (parseInt(nights) * parseInt(dbl));
		
		
		var totalTWN = (parseInt(nights) * parseInt(twn));
		var totalTRP = (parseInt(nights) * parseInt(trp));
		var totalQUD = (parseInt(nights) * parseInt(qud));
		
		if(totalDBL!=''){
			$('#DBL'+id).text(totalDBL);
		}
		if(totalTWN!=''){		
			$('#TWN'+id).text(totalTWN);
		}
		if(totalTRP!=''){		
			$('#TRP'+id).text(totalTRP);
		}
		if(totalQUD!=''){		
			$('#QUD'+id).text(totalQUD);
		}
		
		
		
		if((one!='' || one!=0) || (two!='' || two!=0) || (three!='' || three!=0) || (rf!='' || rf!=0) || (ct!='' || ct!=0) || (five!='' || five!=0)){
		
			var oneTaxAmountDBL = ((parseInt(totalDBL) * parseInt(one)) / 100);
			var twoTaxAmountDBL = ((parseInt(totalDBL) * parseInt(two)) / 100);
			var threeTaxAmountDBL = ((parseInt(totalDBL) * parseInt(three)) / 100);		
			
			var taxDBLAmount = (parseFloat(totalDBL) + parseFloat(oneTaxAmountDBL) +  parseFloat(twoTaxAmountDBL) +  parseFloat(threeTaxAmountDBL) +  parseFloat(rf) + parseFloat(ct) + parseFloat(five));
			var totalTaxDBL = parseFloat(taxDBLAmount).toFixed(2);
			
			var oneTaxAmountTWN = ((parseInt(totalTWN) * parseInt(one)) / 100);
			var twoTaxAmountTWN = ((parseInt(totalTWN) * parseInt(two)) / 100);
			var threeTaxAmountTWN = ((parseInt(totalTWN) * parseInt(three)) / 100);	
			
			var taxTWNAmount = (parseFloat(totalTWN) + parseFloat(oneTaxAmountTWN) +  parseFloat(twoTaxAmountTWN) +  parseFloat(threeTaxAmountTWN) +  parseFloat(rf) + parseFloat(ct) + parseFloat(five));
			var totalTaxTWN = parseFloat(taxTWNAmount).toFixed(2);
			
			var oneTaxAmountTRP = ((parseInt(totalTRP) * parseInt(one)) / 100);
			var twoTaxAmountTRP = ((parseInt(totalTRP) * parseInt(two)) / 100);
			var threeTaxAmountTRP = ((parseInt(totalTRP) * parseInt(three)) / 100);	
			
			var taxTRPAmount = (parseFloat(totalTRP) + parseFloat(oneTaxAmountTRP) +  parseFloat(twoTaxAmountTRP) +  parseFloat(threeTaxAmountTRP) +  parseFloat(rf) + parseFloat(ct) + parseFloat(five));
			var totalTaxTRP = parseFloat(taxTRPAmount).toFixed(2);
			
			var oneTaxAmountQUD = ((parseInt(totalQUD) * parseInt(one)) / 100);
			var twoTaxAmountQUD = ((parseInt(totalQUD) * parseInt(two)) / 100);
			var threeTaxAmountQUD = ((parseInt(totalQUD) * parseInt(three)) / 100);	
			
			var taxQUDAmount = (parseFloat(totalQUD) + parseFloat(oneTaxAmountQUD) +  parseFloat(twoTaxAmountQUD) +  parseFloat(threeTaxAmountQUD) +  parseFloat(rf) + parseFloat(ct) + parseFloat(five));
			var totalTaxQUD = parseFloat(taxQUDAmount).toFixed(2);			
		}
	
		
		if((one!='' || one!=0) || (two!='' || two!=0) || (three!='' || three!=0) || (rf!='' || rf!=0) || (ct!='' || ct!=0) || (five!='' || five!=0)){
		
			$('#DBLTotal'+id).text(totalTaxDBL);
			$('#TWNTotal'+id).text(totalTaxTWN);
			$('#TRPTotal'+id).text(totalTaxTRP);
			$('#QUDTotal'+id).text(totalTaxQUD);
			
			var dblTotal = (parseFloat(totalTaxDBL)/2);
			var DBLPPTotal = parseFloat(dblTotal).toFixed(2);
			$('#DBLPPTotal'+id).text(DBLPPTotal);
			
			var twnTotal = (parseFloat(totalTaxTWN)/2);
			var TWNPPTotal = parseFloat(twnTotal).toFixed(2);
			$('#TWNPPTotal'+id).text(TWNPPTotal);
			
			var trpTotal = (parseFloat(totalTaxTRP)/3);
			var TRPPPTotal = parseFloat(trpTotal).toFixed(2);
			$('#TRPPPTotal'+id).text(TRPPPTotal);
			
			var qudTotal = (parseFloat(totalTaxQUD)/4);
			var QUDPPTotal = parseFloat(qudTotal).toFixed(2);
			$('#QUDPPTotal'+id).text(QUDPPTotal);

	
		}
		var SGLFinalTotal = (parseFloat(totalTaxDBL) + parseFloat(bfPP) + parseFloat(portPP) );
		$('#SGLFinalTotal'+id).text(SGLFinalTotal);
		
		var DBLFinalTotal = (parseFloat(DBLPPTotal) + parseFloat(bfPP)  + parseFloat(portPP) );
		$('#DBLFinalTotal'+id).text(DBLFinalTotal);
		
		var TWNFinalTotal = (parseFloat(TWNPPTotal)  + parseFloat(bfD)  + parseFloat(portPP) );
		$('#TWNFinalTotal'+id).text(TWNFinalTotal);
		
		var TRPFinalTotal = (parseFloat(TRPPPTotal)  + parseFloat(bfT)  + parseFloat(portPP) );
		$('#TRPFinalTotal'+id).text(TRPFinalTotal);
		
		var QUDFinalTotal = (parseFloat(QUDPPTotal) +  parseFloat(bfQ) + parseFloat(portPP));
		$('#QUDFinalTotal'+id).text(QUDFinalTotal);
		
	
	
	}

	
 </script>
 
 
 <?php $i++;
 
} 
 
 ?>
 
</table>
<button type="submit" name="smt_enter" value="Save">Save</button>
<button type="submit" name="smt_enter_nxt" value="Save">Save & Next</button>
 </form>
</div>
<script>
	
</script>
        
		<?php include('footer.inc.php') ?>	
	
	<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>