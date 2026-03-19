<!doctype html>
	<html lang="en">
    <head>
        <title>Tour Driver Hotel Add</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <?php include('top.inc.php') ?>
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
                                        	<i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Tour Driver Hotel Add</b></h3>
									</div>
                                    <div class="col-md-6 padding_opx">
								  		<a href="<?php echo base_url('admin/tour_generalinfo/view'); ?>" 
                                        	class="btn btn-primary btn-primary1 pull-right margin_bottom">
                                            Return Back
                                        </a>
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
                                           <a href="<?php echo base_url('admin/tour_hotels/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >4</button></a>
                                                <p>Hotel</p>
                                            </div>
                                            
                                              <div class="stepwizard-step col-md-1">
                                           <a href="<?php echo base_url('admin/tour_transport/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" >5</button></a>
                                                <p>Transport</p>
                                            </div>
                    
                                            
                                            <div class="stepwizard-step col-md-1">
                                                <a href="<?php echo base_url('admin/tour_driverhotel/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" disabled="disabled">6</button></a>
                                                    <p>Driver Hotel</p>
                                            </div> 
                                            
                                          
                                            <div class="stepwizard-step col-md-1">
                                                <a href="<?php echo base_url('admin/tour_sightseeing/edit?TourId='.$TourId); ?>"><button type="button"  class="btn btn-default btn-circle">7</button></a>
                                                    <p>Sight Seeing</p>
                                            </div> 
                                               <div class="stepwizard-step col-md-1">
                                                <a href="<?php echo base_url('admin/tour_meals/edit?TourId='.$TourId); ?>"><button type="button"  class="btn btn-default btn-circle">8</button></a>
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


				</div>
			</div>
		</div>
	</div>
  </div>
</div>
<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 12">
<link rel=File-List href="driver-hotel_files/filelist.xml">
<style id="Foram SIV-5556G-2020 TVL 2021 51 PAX_87_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl1587
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	white-space:nowrap;}
.xl6487
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:60;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6587
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6687
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6787
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6887
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6987
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	white-space:nowrap;}
.xl7087
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	border:.5pt solid windowtext;
	background:#FFFFCC;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7187
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	background:#FFFFCC;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7287
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"d\/mmm";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DBE5F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7387
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:600;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	background:yellow;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7487
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	background:#DBE5F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7587
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	background:#FFFFCC;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7687
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:blue;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:#CCC0DA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7787
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:blue;
	font-size:11.0pt;
	font-weight:600;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7887
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	background:#D7E4BC;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl7987
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	background:#D7E4BC;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl8087
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
.xl8187
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
.xl8287
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
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
.xl8387
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	background:#D7E4BC;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8487
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
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
	background:#D7E4BC;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8587
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
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
	background:#D7E4BC;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8687
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
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
	background:#D7E4BC;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8787
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:600;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#F2DDDC;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8887
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:600;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#FCD5B4;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8987
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	text-align: center;
	font-weight:600;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:#8DB4E3;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9087
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:600;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#8DB4E3;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9187
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:600;
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
	white-space:nowrap;}
.xl9287
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:600;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#FFFFCC;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9387
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#FFFFCC;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9487
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:600;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#E6B9B8;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9587
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#E6B9B8;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9687
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:600;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#EEECE1;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9787
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:600;
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9887
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
-->
</style>
</head>

<body>
<div id="Foram SIV-5556G-2020 TVL 2021 51 PAX_87" align=center
x:publishsource="Excel" style="padding-left:20%;">
<form name="tour_driver" id="tour_driver" method="POST" action="<?php base_url();?>submitDriverHotel">
<table border=0 cellpadding=0 cellspacing=0 width=1379 style='border-collapse:
 collapse;table-layout:fixed;width:1039pt'>
 <col width=161 style='mso-width-source:userset;mso-width-alt:5888;width:121pt'>
 <col width=52 style='mso-width-source:userset;mso-width-alt:1901;width:100pt'>
 <col width=38 style='mso-width-source:userset;mso-width-alt:1389;width:55pt'>
 <col width=59 style='mso-width-source:userset;mso-width-alt:2157;width:100pt'>
 <col width=38 style='mso-width-source:userset;mso-width-alt:1389;width:55pt'>
 <col width=33 style='mso-width-source:userset;mso-width-alt:1206;width:25pt'>
 <col class=xl6887 width=214 style='mso-width-source:userset;mso-width-alt:
 7826;width:123pt'>
 <col width=46 span=2 style='mso-width-source:userset;mso-width-alt:1682;
 width:33pt'>
 <col width=60 style='mso-width-source:userset;mso-width-alt:2194;width:44pt'>
 <col width=48 style='mso-width-source:userset;mso-width-alt:1755;width:36pt'>
 <col width=35 style='mso-width-source:userset;mso-width-alt:1280;width:29pt'>
 <col width=38 style='mso-width-source:userset;mso-width-alt:1389;width:29pt'>
 <col width=35 style='mso-width-source:userset;mso-width-alt:1280;width:29pt'>
 <col width=46 style='mso-width-source:userset;mso-width-alt:1682;width:35pt'>
 <col width=53 style='mso-width-source:userset;mso-width-alt:1938;width:40pt'>
 <col width=38 span=2 style='mso-width-source:userset;mso-width-alt:1389;
 width:29pt'>
 <col width=53 style='mso-width-source:userset;mso-width-alt:1938;width:40pt'>
 <col width=60 style='mso-width-source:userset;mso-width-alt:2194;width:44pt'>
 <col width=188 style='mso-width-source:userset;mso-width-alt:6875;width:93pt'>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1587 width=161 style='height:15.0pt;width:121pt'><a
  name="RANGE!A1"></a></td>
  <td class=xl1587 width=52 style='width:39pt'></td>
  <td class=xl1587 width=38 style='width:29pt'></td>
  <td class=xl1587 width=59 style='width:44pt'></td>
  <td class=xl1587 width=38 style='width:29pt'></td>
  <td class=xl1587 width=33 style='width:25pt'></td>
  <td class=xl6887 width=214 style='width:161pt'></td>
  <td class=xl1587 width=46 style='width:35pt'></td>
  <td class=xl1587 width=46 style='width:35pt'></td>
  <td class=xl1587 width=60 style='width:45pt'></td>
  <td class=xl1587 width=48 style='width:36pt'></td>
  <td class=xl1587 width=35 style='width:26pt'></td>
  <td class=xl1587 width=38 style='width:29pt'></td>
  <td class=xl1587 width=35 style='width:26pt'></td>
  <td class=xl1587 width=46 style='width:35pt'></td>
  <td class=xl1587 width=53 style='width:40pt'></td>
  <td class=xl1587 width=38 style='width:29pt'></td>
  <td class=xl1587 width=38 style='width:29pt'></td>
  <td class=xl1587 width=53 style='width:40pt'></td>
  <td class=xl1587 width=60 style='width:45pt'></td>
  <td class=xl1587 width=188 style='width:141pt'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl7387 style='height:15.0pt'><?php echo $getTourGeneralInfo['FileNo']; ?></td>
  <td colspan=2 class=xl9287 style='border-right:.5pt solid black'></td>
  <td colspan=3 class=xl9487 style='border-left:none'></td>
  <td class=xl7687><a href="#'Total Cost'!A1"><span style='color:blue;
  font-weight:600;text-decoration:underline;text-underline-style:single'>Accommodation</span></a></td>
  <td class=xl8787 style='border-left:none'>Pax</td>
  <td class=xl8787 style='border-left:none'><input name="minimum_pax" id="minimum_pax" value = "<?php echo $getTourGeneralInfo['PayingPax']; ?>" disabled></td>
  <td colspan=10 class=xl9687 style='border-left:none'>Average cost of Driver
  in Single Occupancy</td>
  <td class=xl6487 style='border-left:none'>SGL</td>
  <td rowspan=2 class=xl9787 style='border-bottom:.5pt solid black'>Vendor</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8887 style='height:15.0pt'>City</td>
  <td class=xl8987 style='border-top:none;border-left:none'>Date In</td>
  <td class=xl9087 style='border-top:none;border-left:none'>DOW</td>
  <td class=xl8987 style='border-top:none;border-left:none'>Date Out</td>
  <td class=xl9087 style='border-top:none;border-left:none'>DOW</td>
  <td class=xl6487 style='border-top:none;border-left:none'>Nts</td>
  <td class=xl7787 style='border-top:none;border-left:none'><a
  href="#'Total Cost'!A1">Hotel</a></td>
  <td class=xl9187 style='border-top:none;border-left:none'>R/R</td>
  <td class=xl9187 style='border-top:none;border-left:none'>Total</td>
  <td class=xl9187 style='border-top:none;border-left:none'>1</td>
  <td class=xl9187 style='border-top:none;border-left:none'>2</td>
  <td class=xl9187 style='border-top:none;border-left:none'>3</td>
  <td class=xl9187 style='border-top:none;border-left:none'>CT</td>
  <td class=xl9187 style='border-top:none;border-left:none'>RF</td>
  <td class=xl9187 style='border-top:none;border-left:none'>5</td>
  <td class=xl9187 style='border-top:none;border-left:none'>Total</td>
  <td class=xl9187 style='border-top:none;border-left:none'>PP</td>
  <td class=xl9187 style='border-top:none;border-left:none'>BF/D</td>
<!--  <td class=xl9187 style='border-top:none;border-left:none'>BF/T</td>-->
  <td class=xl9187 style='border-top:none;border-left:none'>Portage</td>
  <td class=xl9187 style='border-top:none;border-left:none'>T/PP</td>
 </tr>
 <?php 
 //echo '<pre>';print_r($hotel_detail);
 	$i=0;
 	foreach($getItineraryCities as $key => $cityValue){?>
         <tr height=26 style='mso-height-source:userset;height:20.1pt'>
          <td height=26 class=xl8087 width=161 style='height:20.1pt;border-top:none;
          width:121pt'><input name="city_name[]" id="city_name<?php echo $i; ?>" value="<?php echo $cityValue['city_name']; ?>" style="width: 55px;" disabled></td>
          <td class=xl7287 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="date" name="checkindate[]" id="checkindate<?php echo $i;?>" value="<?php echo $cityValue['ItenaryDateIn']?>" style="width: 128px;font-family: inherit;" disabled></td>
          <td class=xl7487 style='border-top:none;border-left:none;background: #f9f9f9;'><input name="checkinday[]" id="checkinday<?php echo $i;?>" value = "<?php echo $cityValue['ItenaryDayIn'];?>" disabled></td>
          <td class=xl7287 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="date" name="checkoutdate[]" id="checkoutdate<?php echo $i;?>" value="<?php echo $cityValue['ItenaryDateOut']?>" style="width: 128px;font-family: inherit;" disabled></td>
          <td class=xl7487 style='border-top:none;border-left:none;background: #f9f9f9;'><input name="checkoutday[]" id="checkoutday<?php echo $i;?>" value = "<?php echo $cityValue['ItenaryDayOut'];?>" disabled></span></td>
            <?php foreach($cityValue['noOfNights'] as $key => $nights){ ?>
          <td class=xl6587 style='border-top:none;border-left:none;background: #f9f9f9;'><input name="noofnights[]" id="noofnights<?php echo $i;?>" value = "<?php echo $nights['OverNightCity'];?>" disabled>
		  <input type="hidden" name="noofnights[]" id="noofnights<?php echo $i;?>" value="<?php echo $nights['OverNightCity'];?>>"></td>
            <?php } ?>
          <td class=xl8287 width=214 style='border-top:none;border-left:none;
          width:161pt;background: #f9f9f9;'>	
          	<select style="width: 118px;font-family: inherit;" name="hotel_name[]" id="hotel_name<?php echo $i;?>">
            <option>No Hotel</option>
    			<option>Select Hotel List</option>
					<?php foreach($cityValue['hotelList'] as $key => $hotelValue){?>
                        <option value="<?php echo $hotelValue['HotelId'];?>" <?php if($hotel_detail[$i]['hotelId'] == $hotelValue['HotelId']){echo "selected"; }?>><?php echo $hotelValue['HotelName']?></option>
                    <?php } ?>
    		</select>
          </td>
		  <?php //print_r($hotel_detail);?>
          <td class=xl6987 align=right style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="room_rate[]" id="room_rate<?php echo $i;?>" value="<?php echo $hotel_detail[$i][room_rate];?>" onChange="getDriverHotelTotal(<?php echo $i; ?>);" style="width: 40px;"></td>
          <td class=xl6587 style='border-top:none;border-left:none;background: #f9f9f9;'><span name= "ratetotal[]" id="ratetotal<?php echo $i;?>"><?php echo $hotel_detail[$i][total];?></span></td>
          <td class=xl6687 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="tax_one[]" id="tax_one<?php echo $i;?>" value="<?php echo $hotel_detail[$i][tax_one];?>" onChange="getDriverHotelTotal(<?php echo $i; ?>);"  style="width: 55px;"></td>
          <td class=xl6687 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="tax_two[]" id="tax_two<?php echo $i;?>" value="<?php echo $hotel_detail[$i][tax_two];?>" onChange="getDriverHotelTotal(<?php echo $i; ?>);"  style="width: 45px;"></td>
          <td class=xl6787 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="tax_three[]" id="tax_three<?php echo $i;?>" value="<?php echo $hotel_detail[$i][tax_three];?>" onChange="getDriverHotelTotal(<?php echo $i; ?>);"  style="width: 35px;"></td>
          <td class=xl6787 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="tax_four[]" id="tax_four<?php echo $i;?>" value="<?php echo $hotel_detail[$i][tax_four];?>" onChange="getDriverHotelTotal(<?php echo $i; ?>);"  style="width: 35px;"></td>
          <td class=xl6787 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="tax_five[]" id="tax_five<?php echo $i;?>" value="<?php echo $hotel_detail[$i][tax_five];?>" onChange="getDriverHotelTotal(<?php echo $i; ?>);"  style="width: 35px;"></td>
        <td class=xl6787 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="tax_six[]" id="tax_six<?php echo $i;?>"  value="<?php echo $hotel_detail[$i][tax_six];?>" onChange="getDriverHotelTotal(<?php echo $i; ?>);"  style="width: 40px;"></td>
          <td class=xl6787 style='border-top:none;border-left:none;background: #f9f9f9;'><span name= "tax_total[]" id="tax_total<?php echo $i;?>"><?php echo $hotel_detail[$i][tax_total];?></span></td>
          <td class=xl6787 style='border-top:none;border-left:none;background: #f9f9f9;'><span name= "per_person[]" id="per_person<?php echo $i;?>"><?php echo $hotel_detail[$i][pp];?></span></td>
          <td class=xl6787 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="bf_d[]" id="bf_d<?php echo $i;?>" value="<?php echo $hotel_detail[$i][bf_d];?>" onChange="getDriverHotelTotal(<?php echo $i; ?>);"  style="width: 35px;"></td>
         <!-- <td class=xl6787 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="bf_t[]" id="bf_t<?php //echo $i;?>" onChange="getDriverHotelTotal(<?php echo $i; ?>);"  style="width: 35px;"></td>-->
          <td class=xl6787 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="portage[]" id="portage<?php echo $i;?>" value="<?php echo $hotel_detail[$i][portage];?>" onChange="getDriverHotelTotal(<?php echo $i; ?>);"  style="width: 50px;"></td>
          <td class=xl6787 style='border-top:none;border-left:none;background: #f9f9f9;'><span name= "driver_total[]" id="driver_total<?php echo $i;?>"><?php echo $hotel_detail[$i][total_pp];?></span></td>
          <td class=xl6987 style='border-top:none;border-left:none;background: #f9f9f9;'>
          	<select style="width: 120px;font-family: inherit;" name="vendor[]" id="vendor<?php echo $i;?>" onChange="getDriverHotelTotal(<?php echo $i;?>);" >
                <option>Select Vendor</option>
                <option value="tourism" <?php if($hotel_detail[$i]['vendor_name'] == 'tourism'){echo "selected" ;}?>>Tourism Group</option>
            </select>
            <input type="hidden" name="tour_id[]" id="tour_id<?php echo $i;?>" value="<?php echo $TourId; ?>">
			

          </td>
         </tr>
 		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script type= "text/javascript">
			
			function getDriverHotelTotal(id){
	
				var totalRate = 0;
				
				var checkInDate = document.getElementById("checkindate"+id).value;
	
				var days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
				var checkinDay = days[new Date(checkInDate).getDay()];		
				$('#checkinday'+id).text(checkinDay);
				
				var checkOutDate = document.getElementById("checkoutdate"+id).value;
				
				var day = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
				var checkOutDay = day[new Date(checkOutDate).getDay()];		
				$('#checkoutday'+id).text(checkOutDay);
				
				var date1 = new Date(checkInDate);
				var date2 = new Date(checkOutDate);
				var timeDiff = Math.abs(date2.getTime() - date1.getTime());
				var numberOfNights = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
				
				$('#noofnights'+id).text(numberOfNights);
				
				var hotelName = document.getElementById("hotel_name"+id).value;
				
				var roomRate = document.getElementById("room_rate"+id).value;

				var noofnights = document.getElementById("noofnights"+id).value;
				
				
				totalRate = (parseInt(noofnights) * parseInt(roomRate));
				$('#ratetotal'+id).text(totalRate);
				
				var taxOne = document.getElementById("tax_one"+id).value;
				var taxTwo = document.getElementById("tax_two"+id).value;
				var taxThree = document.getElementById("tax_three"+id).value;
				var taxFour = document.getElementById("tax_four"+id).value;
				var taxFive = document.getElementById("tax_five"+id).value;
				var taxSix = document.getElementById("tax_six"+id).value;
				
				
			/*	if(taxOne !='' || taxOne !=0){
				
					var tax_total =  (parseInt(totalRate) + parseInt(taxOne));
					$('#tax_total'+id).text(tax_total);
				}*/
				/*if(taxOne !='' || taxOne !=0){
				
					var tax_total =  (parseInt(totalRate) + parseInt(taxOne));
					$('#tax_total'+id).text(tax_total);
				}*/
				
				if((taxOne!='' || taxOne!=0) || (taxTwo!='' || taxTwo!=0) || (taxThree!='' || taxThree!=0) || (taxFour!='' || taxFour!=0) || (taxFive!='' || taxFive!=0) || (taxSix!='' || taxSix!=0)){
				
					var oneTaxAmount = ((parseInt(totalRate) * parseInt(taxOne)) / 100);
					var twoTaxAmount = ((parseInt(totalRate) * parseInt(taxTwo)) / 100);
					var threeTaxAmount = ((parseInt(totalRate) * parseInt(taxThree)) / 100);
									
					
					var taxAmount =  (parseInt(totalRate) + parseInt(oneTaxAmount) + parseInt(twoTaxAmount) + parseInt(threeTaxAmount) + parseInt(taxFour) + parseInt(taxFive) +  parseInt(taxSix));
					var tax_total = parseFloat(taxAmount).toFixed(2);
					$('#tax_total'+id).text(tax_total);
				
				}
				
				
				var perPerson = (parseInt(tax_total)/2);
				$('#per_person'+id).text(perPerson);
				
				var bfD = document.getElementById("bf_d"+id).value;		
				//var bfT = document.getElementById("bf_t"+id).value;
				var portage = document.getElementById("portage"+id).value;
				
				if(portage !='' || portage !=0){
					var driverTotal =  (parseInt(tax_total) + parseInt(bfD) + parseInt(portage));
					$('#driver_total'+id).text(driverTotal);
				}
				else{
					var driverTotal =  (parseInt(tax_total) + parseInt(bfD));
					$('#driver_total'+id).text(driverTotal);
				}
				
				
				var vendorName = document.getElementById("vendor"+id).value;
				
				var tourId = document.getElementById("tour_id"+id).value;
				
				
			
			}
			
		</script>
    
 <?php 
 
 	$i++;
 
 } ?>

</table>
<button type="submit" name="smt_enter" value="Save">Save</button>
<button type="submit" name="smt_enter_nxt" value="Save & Next">Save & Next</button>
 </form>
</div>

</body>

</html>
