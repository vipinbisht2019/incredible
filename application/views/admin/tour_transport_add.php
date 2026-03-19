<!doctype html>
	<html lang="en">
    <head>
        <title>Tour Transport Add</title>
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
                                        	<i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Tour Transport Add</b></h3>
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
                                         <a href="<?php echo base_url('admin/tour_transport/edit?TourId='.$TourId); ?>"><button type="button" class="btn btn-primary btn-circle" disabled="disabled">5</button></a>
                                                <p>Transport</p>
                                            </div>	
                                            <div class="stepwizard-step col-md-1">
                                                <a href="<?php echo base_url('admin/tour_driverhotel/edit?TourId='.$TourId); ?>"><button type="button"  class="btn btn-default btn-circle">6</button></a>
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

           				
 <html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 12">
<link rel=File-List
href="Foram%20SIV-5556G-2020%20TVL%202021%2051%20PAX_files/filelist.xml">
<style id="Foram SIV-5556G-2020 TVL 2021 51 PAX_22285_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl6422285
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
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl6522285
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
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#FAC090;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl6622285
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
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#FFC000;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl6722285
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
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:yellow;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl6822285
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
	text-align:left;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:#D8D8D8;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl6922285
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
	background:#D8D8D8;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7022285
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
	border:.5pt solid windowtext;
	background:#D8D8D8;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7122285
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
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#D8D8D8;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7222285
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
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#D8D8D8;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7322285
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
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7422285
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
	border:.5pt solid windowtext;
	background:#C5D9F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7522285
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
	border:.5pt solid windowtext;
	background:#DBE5F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl7622285
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
	border:.5pt solid windowtext;
	background:#DBE5F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7722285
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
	border:.5pt solid windowtext;
	background:#DBEEF3;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7822285
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
	border:.5pt solid windowtext;
	background:#C5D9F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl7922285
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
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8022285
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
	mso-protection:unlocked visible;
	white-space:normal;}
.xl8122285
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
	background:#DBEEF3;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl8222285
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
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DBE5F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8322285
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
	mso-number-format:Standard;
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#C5D9F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8422285
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
	text-align:general;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#C5D9F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8522285
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
	text-align:left;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8622285
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
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8722285
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
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8822285
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
	background:yellow;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8922285
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
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9022285
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
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9122285
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
	mso-number-format:Standard;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9222285
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
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9322285
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
	border:.5pt solid windowtext;
	background:#CCC0DA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9422285
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
	border:.5pt solid windowtext;
	background:#EAF1DD;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9522285
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
	background:#EAF1DD;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9622285
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
	border:.5pt solid windowtext;
	background:#FDE9D9;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9722285
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
	background:#FDE9D9;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9822285
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
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#DBEEF3;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9922285
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
	mso-protection:unlocked visible;
	white-space:normal;}
.xl10022285
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
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10122285
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
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#C5D9F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10222285
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
	background:#C5D9F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10322285
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
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAF1DD;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10422285
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
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EAF1DD;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10522285
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
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#FDE9D9;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10622285
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
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#FDE9D9;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10722285
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
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#DBE5F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10822285
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
	background:#DBE5F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl10922285
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
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#FCD5B4;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11022285
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
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#FCD5B4;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
-->
</style>
</head>

<body>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Office Excel's Publish
as Web Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="Foram SIV-5556G-2020 TVL 2021 51 PAX_22285" align=center
x:publishsource="Excel">
<form name="transport" id="transport" method="POST" action="<?php base_url();?>submitTransport">
<table border=0 cellpadding=0 cellspacing=0 width=1473 class=xl7322285
 style='border-collapse:collapse;table-layout:fixed;width:1106pt'>
 <col class=xl7322285 width=214 style='mso-width-source:userset;mso-width-alt:
 7826;width:161pt'>
 <col class=xl9022285 width=31 style='mso-width-source:userset;mso-width-alt:
 1133;width:23pt'>
 <col class=xl7322285 width=59 style='mso-width-source:userset;mso-width-alt:
 2157;width:100pt'>
 <col class=xl9022285 width=39 style='mso-width-source:userset;mso-width-alt:
 1426;width:55pt'>
 <col class=xl7322285 width=45 style='mso-width-source:userset;mso-width-alt:
 1645;width:36pt'>
 <col class=xl7322285 width=0 span=2 style='display:none;mso-width-source:userset;
 mso-width-alt:1170'>
 <col class=xl7322285 width=0 style='display:none;mso-width-source:userset;
 mso-width-alt:1280'>
 <col class=xl7322285 width=424 style='mso-width-source:userset;mso-width-alt:
 15506;width:295pt'>
 <col class=xl7322285 width=63 style='mso-width-source:userset;mso-width-alt:
 2304;width:36pt'>
 <col class=xl7322285 width=60 style='mso-width-source:userset;mso-width-alt:
 2194;width:36pt'>
 <col class=xl7322285 width=59 style='mso-width-source:userset;mso-width-alt:
 2157;width:36pt'>
 <col class=xl7322285 width=46 style='mso-width-source:userset;mso-width-alt:
 1682;width:36pt'>
 <col class=xl7322285 width=59 style='mso-width-source:userset;mso-width-alt:
 2157;width:36pt'>
 <col class=xl7322285 width=53 span=2 style='mso-width-source:userset;
 mso-width-alt:1938;width:36pt'>
 <col class=xl7322285 width=46 span=2 style='mso-width-source:userset;
 mso-width-alt:1682;width:36pt'>
 <col class=xl7322285 width=176 style='mso-width-source:userset;mso-width-alt:
 6436;width:93pt'>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6422285 width=214 style='height:15.0pt;width:161pt'><a
  name="RANGE!A1"><?php echo $getTourGeneralInfo['FileNo']; ?></a></td>
  <td colspan=2 class=xl10922285 width=90 style='border-right:.5pt solid black;
  border-left:none;width:67pt'></td>
  <td class=xl6522285 width=39 style='width:29pt'>Total PAX : </td>
  <td class=xl6622285 width=45 style='width:34pt'><input type="text" name="minimum_pax" id="minimum_pax" value = "<?php echo $getTourGeneralInfo['PayingPax']; ?>" disabled></td>
  <td class=xl6722285 width=0>&nbsp;</td>
  <td class=xl6822285 width=0 style='border-left:none'>&nbsp;</td>
  <td class=xl6822285 width=0 style='border-left:none'>&nbsp;</td>
  <td class=xl9322285 width=424 style='border-left:none;width:318pt'><?php echo $getTourGeneralInfo['ItineraryTitle']; ?></td>
  <td class=xl6922285 width=63 style='border-left:none;width:47pt'>&nbsp;</td>
  <td class=xl7022285 width=60 style='border-left:none;width:45pt'>&nbsp;</td>
  <td class=xl7122285 width=59 style='width:44pt'>&nbsp;</td>
  <td class=xl7122285 width=46 style='width:35pt'>&nbsp;</td>
  <td class=xl7122285 width=59 style='width:44pt'>&nbsp;</td>
  <td class=xl7122285 width=53 style='width:40pt'>&nbsp;</td>
  <td class=xl7122285 width=53 style='width:40pt'>&nbsp;</td>
  <td class=xl7122285 width=46 style='width:35pt'>&nbsp;</td>
  <td class=xl7122285 width=46 style='width:35pt'>&nbsp;</td>
  <td class=xl7222285 width=176 style='width:132pt'>&nbsp;</td>
 </tr>
 <tr class=xl7922285 height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl7722285 style='height:30.0pt;border-top:none'>City</td>
  <td class=xl7422285 style='border-top:none;border-left:none'>Day</td>
  <td class=xl9422285 style='border-top:none;border-left:none'>Date</td>
  <td class=xl9622285 style='border-top:none;border-left:none'>DOW</td>
  <td class=xl7522285 width=45 style='border-top:none;border-left:none;
  width:34pt'>Coach Size</td>
  <td class=xl9822285 style='border-top:none;border-left:none'><a
  href="#'Total Cost'!A1"><span style='color:blue;font-weight:400;text-decoration:
  underline;text-underline-style:single'>Transport &amp; Guide Services</span></a></td>
  <td class=xl7522285 width=63 style='border-top:none;border-left:none;
  width:47pt'>Cost / Pax SIC</td>
  <td class=xl7822285 width=60 style='border-top:none;border-left:none;
  width:45pt'>PVT TRANSP</td>
  <td class=xl7522285 width=59 style='border-top:none;border-left:none;
  width:44pt'>Cost / Pax</td>
  <td class=xl7422285 style='border-top:none;border-left:none'>Gd Hrs</td>
  <td class=xl7522285 width=59 style='border-top:none;border-left:none;
  width:44pt'>Gd Rate /Hr</td>
  <td class=xl7822285 width=53 style='border-top:none;border-left:none;
  width:40pt'>Gd Rate /Sr</td>
  <td class=xl7522285 width=53 style='border-top:none;border-left:none;
  width:40pt'>Guide Cost</td>
  <td class=xl7822285 width=46 style='border-top:none;border-left:none;
  width:35pt'>G Cost /Pax</td>
  <td class=xl7622285 style='border-top:none;border-left:none'>Total</td>
  <td class=xl7722285 style='border-top:none;border-left:none'>Vendor</td>
 </tr>
 <?php 
 	//print_r($transport_detail);
 	$i=0;
 	foreach($getItineraryCities as $key => $cityValue){ 
		//foreach($transport_detail as $key1 => $transportValue){
?>

 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl8022285 width=214 style='height:20.1pt;border-top:none;
  width:161pt'>
    	
        <input name="city_name[]" id="city_name<?php echo $i;?>" value = "<?php echo $cityValue['city_name'];?>" disabled>
  </td>
  <td class=xl7422285 style='border-top:none;border-left:none;background: #f9f9f9;'> 
  
		 <input name="itenary_day[]" id="itenary_day<?php echo $i;?>" value = "<?php echo $cityValue['ItenaryDay'];?>" disabled>
  </td>
  <td class=xl9522285 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="date" name="dateofday[]" id="dateofday<?php echo $i;?>" value = "<?php echo $cityValue['ItenaryDate']?>" style="width: 128px;font-family: inherit;" disabled></td>
  <td class=xl9722285 style='border-top:none;border-left:none;background: #f9f9f9;'><input name="checkinday[]" id="checkinday<?php echo $i;?>" value = "<?php echo substr($cityValue['ItenaryDow'], 0, 3);?>" disabled></td>
  <td class=xl7622285 style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="coach_size[]" id="coach_size<?php echo $i;?>"  value="<?php echo $transport_detail[$i]['coach_size'];?>"  style="width: 45px;"></td>
 
  <td class=xl9922285 width=424 style='border-top:none;border-left:none;
  width:318pt;background: #f9f9f9;'><input type="text" name="transport_guide[]" id="transport_guide<?php echo $i;?>" value="<?php echo $transport_detail[$i]['transport_guide'];?>" style="width: 390px;"></td>
  <td class=xl8222285 align=right style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="cost_per_pax[]" id="cost_per_pax<?php echo $i;?>" value="<?php echo $transport_detail[$i]['cost_pax'];?>" onChange="getCostPax(<?php echo $i; ?>)" style="width: 45px;"></td>
  <td class=xl8322285 align=right style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="pvt_transport[]" id="pvt_transport<?php echo $i;?>" value="<?php echo $transport_detail[$i]['pvt_transport'];?>" onChange="getTransportTotal(<?php echo $i; ?>)" style="width: 45px;"></td>
  <td class=xl8222285 align=right style='border-top:none;border-left:none;background: #f9f9f9;'><span name="cost_pax" id="cost_pax<?php echo $i;?>" ><?php echo $transport_detail[$i]['total_cost_pax'];?></span></td>
  <td class=xl8422285 align=right style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="guide_hours[]" id="guide_hours<?php echo $i;?>" value="<?php echo $transport_detail[$i]['guide_hours'];?>" style="width: 45px;"></td>
  <td class=xl8222285 align=right style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="guide_rate_per_hr[]" id="guide_rate_per_hr<?php echo $i;?>" value="<?php echo $transport_detail[$i]['guide_rate_per_hr'];?>"  onChange="getTransportTotal(<?php echo $i; ?>)" style="width: 45px;"></td>
  <td class=xl8422285 align=right style='border-top:none;border-left:none;background: #f9f9f9;'><input type="text" name="guide_rate[]" id="guide_rate<?php echo $i;?>" value="<?php echo $transport_detail[$i]['guide_rate'];?>" onChange="getTransportTotal(<?php echo $i; ?>)" style="width: 45px;"></td>
  <td class=xl8222285 align=right style='border-top:none;border-left:none;background: #f9f9f9;'><span name="guide_cost" id="guide_cost<?php echo $i;?>" ><?php echo $transport_detail[$i]['total_guide_cost'];?></span></td>
  <td class=xl8422285 align=right style='border-top:none;border-left:none;background: #f9f9f9;'><span name="guide_cost_pax" id="guide_cost_pax<?php echo $i;?>" ><?php echo $transport_detail[$i]['guide_cost_per_pax'];?></span></td>
  <td class=xl8222285 align=right style='border-top:none;border-left:none;background: #f9f9f9;'><span name="total_trans_guid" id="total_trans_guid<?php echo $i;?>" ><?php echo $transport_detail[$i]['tota_trans_guide'];?></span></td>
  <td class=xl8022285 width=176 style='border-top:none;border-left:none;
  width:132pt;background: #f9f9f9;'>
  	<select style="width: 120px;font-family: inherit;" name="vendor[]" id="vendor<?php echo $i;?>" onChange="getTransportTotal(<?php echo $i;?>);" >
    	<option>Select Vendor</option>
        <option value="tourism" <?php if($transport_detail[$i]['vendor_name'] == 'tourism'){echo "selected" ;}?>>Tourism Group</option>
    </select>
    <input type="hidden" name="tour_id[]" id="tour_id<?php echo $i;?>" value="<?php echo $TourId; ?>">
    <input type="hidden" name="city_name[]" id="city_name<?php echo $i;?>" value="<?php echo $cityValue['city_name']; ?>">
    <input type="hidden" name="dateofday[]" id="dateofday<?php echo $i;?>" value="<?php echo $cityValue['StartDate']?>">
    <input type="hidden" name="checkinday[]" id="checkinday<?php echo $i;?>" value="<?php echo $cityValue['daycheckin'];?>">
    <input type="hidden" name="itenary_day[]" id="itenary_day<?php echo $i;?>" value="<?php echo $cityValue['ItenaryDay'];?>">
    <input type="hidden" name="minimum_pax[]" id="minimum_pax<?php echo $i;?>" value="<?php echo $getTourGeneralInfo['PayingPax']; ?>">
    
   
    </td>
 </tr>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script>
	
	function getCostPax(id){

		var costPerPax = document.getElementById("cost_per_pax"+id).value;

		if(costPerPax!='' || costPerPax!=0){

			document.getElementById("pvt_transport"+id).disabled = true;
			document.getElementById("guide_hours"+id).disabled = true;
			document.getElementById("guide_rate_per_hr"+id).disabled = true;
			document.getElementById("guide_rate"+id).disabled = true;

		}else{
		document.getElementById("pvt_transport"+id).disabled = false;
			document.getElementById("guide_hours"+id).disabled = false;
			document.getElementById("guide_rate_per_hr"+id).disabled = false;
			document.getElementById("guide_rate"+id).disabled = false;
		}

		
	}
	

	function getTransportTotal(id){
	
		var pvtTransport = document.getElementById("pvt_transport"+id).value;
		if(pvtTransport!='' || pvt_transport!=0){
		
			document.getElementById("cost_per_pax"+id).disabled = true;
		}else{
			document.getElementById("cost_per_pax"+id).disabled = false;
		}

		var minimumPax = '';
		var costTotalPax = '';
		
		var dateofDay = document.getElementById("dateofday"+id).value;
	
		var days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
		var dayName = days[new Date(dateofDay).getDay()];		
		$('#day_name'+id).text(dayName);
		
		var coachSize = document.getElementById("coach_size"+id).value;
		var transportGuide = document.getElementById("transport_guide"+id).value;
		var costPerPax = document.getElementById("cost_per_pax"+id).value;
		
		


		
		
		var guideHours = document.getElementById("guide_hours"+id).value;
		var guideRatePerHr = document.getElementById("guide_rate_per_hr"+id).value;		
		var guideRate = document.getElementById("guide_rate"+id).value;
		
		var vendorName = document.getElementById("vendor"+id).value;
		var cityName = document.getElementById("city_name"+id).value;
		
		minimumPax = document.getElementById("minimum_pax").value;
		
		var tourId = document.getElementById("tour_id"+id).value;
		var itenaryDay = document.getElementById("itenary_day"+id).value;
		
		
			var costPax = (parseInt(pvtTransport)/parseInt(minimumPax));
			costTotalPax = parseFloat(costPax).toFixed(2);
			$('#cost_pax'+id).text(costTotalPax);
		
		if(guideRate !='' || guideRate != 0 ){
		
			var guideCost = ((parseInt(guideHours) * parseInt(guideRatePerHr)) + parseInt(guideRate));
			$('#guide_cost'+id).text(guideCost);
			
		}else{
		
			var guideCost = (parseInt(guideHours) * parseInt(guideRatePerHr));
			$('#guide_cost'+id).text(guideCost);
		}
		
		
			var guideCostPax =  (parseInt(guideCost)/parseInt(minimumPax));
			var guideTotalCostPax =  parseFloat(guideCostPax).toFixed(2);
			$('#guide_cost_pax'+id).text(guideTotalCostPax);
			
		
		if(costPerPax !='' || costPerPax != 0){
		
			//var totalTransGuide =  parseFloat(costPerPax);
			var totalTransGuideVal =   parseFloat(costPerPax).toFixed(2);
			$('#total_trans_guid'+id).text(totalTransGuideVal);
			
		}else{
		
			var totalTransGuide =  (parseFloat(guideCostPax) + parseFloat(costTotalPax)); 
			var totalTransGuideVal =   parseFloat(totalTransGuide).toFixed(2);
			$('#total_trans_guid'+id).text(totalTransGuideVal);
			
		}

	
		
	}
	
</script>
 
 
<?php 

	$i++;
	
	//}	
} 

?>
</table>
<button type="submit" name="smt_enter" value="Save">Save</button>
<button type="submit" name="smt_enter_nxt" value="Save">Save & Next</button>
</form>

</div>

        
		<?php include('footer.inc.php') ?>	
	
	

</body>
</html>