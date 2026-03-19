<!doctype html>
<html lang="en">
<head>
<title>Buses Seat Map Modyfy</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php include('top.inc.php') ?>
<script type="text/javascript" src="<?php echo base_url('assets/tinymce/tinymce.min.js') ?>"></script>
<script type="text/javascript">
tinymce.init({
	selector: "#Description",
	formats: {
	alignleft: {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'left'},
	aligncenter: {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'center'},
	alignright: {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'right'},
	alignjustify: {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'full'},
	bold: {inline : 'span', 'classes' : 'bold'},
	italic: {inline : 'span', 'classes' : 'italic'},
	underline: {inline : 'span', 'classes' : 'underline', exact : true},
	strikethrough: {inline : 'del'},
	forecolor: {inline : 'span', classes : 'forecolor', styles : {color : '%value'}},
	hilitecolor: {inline : 'span', classes : 'hilitecolor', styles : {backgroundColor : '%value'}},
	custom_format: {block : 'h1', attributes : {title : 'Header'}, styles : {color : 'red'}}
  },

	
    theme: "modern",
    width: 680,
    height: 300,
    link_list: [
        {title: 'My page 1', value: 'http://www.tinymce.com'},
        {title: 'My page 2', value: 'http://www.tecrail.com'}
    ],
	
	
    plugins: [
         "code advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking spellchecker",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager "
   ],
   
    relative_urls: false,
	convert_urls: false,
	remove_script_host : false,
    browser_spellcheck : true ,
    filemanager_title:"Responsive Filemanager",
    external_filemanager_path:"<?php echo base_url('assets/filemanager/'); ?>",
    external_plugins: { "filemanager" : "<?php echo base_url('assets/filemanager/plugin.min.js') ?>"},
    codemirror: {
    indentOnInit: true, // Whether or not to indent code on init.   codemirror qrcode flickr picasa easyColorPicker
    path: '<?php echo base_url()  ?>assets/tinymce'
  },
  
   image_advtab: false,
   toolbar1: "code | undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | image | media | link unlink anchor | print preview code  | youtube | qrcode | flickr | picasa | forecolor backcolor | easyColorPicker"
 });





jQuery(document).ready(function ($) {
      $('.iframe-btn').fancybox({
			  'width'	: 880,
			  'height'	: 570,
			  'type'	: 'iframe',
			  'autoScale'   : false
      });
      
 
			//
			// Handles message from ResponsiveFilemanager
			//
			function OnMessage(e){
			  var event = e.originalEvent;
			   // Make sure the sender of the event is trusted
			   if(event.data.sender === 'responsivefilemanager'){
			      if(event.data.field_id){
			      	var fieldID=event.data.field_id;
			      	var url=event.data.url;
							$('#'+fieldID).val(url).trigger('change');
							$.fancybox.close();

							// Delete handler of the message from ResponsiveFilemanager
							$(window).off('message', OnMessage);
			      }
			   }
			}

		  // Handler for a message from ResponsiveFilemanager
			$('.iframe-btn').on('click',function(){
			  $(window).on('message', OnMessage);
			});


      
      $('#download-button').on('click', function() {
	    ga('send', 'event', 'button', 'click', 'download-buttons');      
      });
      $('.toggle').click(function(){
	    var _this=$(this);
	    $('#'+_this.data('ref')).toggle(200);
	    var i=_this.find('i');
	    if (i.hasClass('icon-plus')) {
		  i.removeClass('icon-plus');
		  i.addClass('icon-minus');
	    }else{
		  i.removeClass('icon-minus');
		  i.addClass('icon-plus');
	    }
      });
});



function open_popup(url){
        alert(url);
        var w = 880;
        var h = 570;
        var l = Math.floor((screen.width-w)/2);
        var t = Math.floor((screen.height-h)/2);
        var win = window.open(url, 'ResponsiveFilemanager', "scrollbars=1,width=" + w + ",height=" + h + ",top=" + t + ",left=" + l);
}

</script>
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
							<h3 class="panel-title title_h3"><b> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i>Buses Seat Map Modyfy</b></h3>
						</div>

						     <div class="col-md-6 padding_opx">
								  <a href="<?php echo base_url('admin/busesseatmap/view'); ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom">Return Back</a>
						</div>
					</div>
				</div>

			<div class="panel">
		
				<div class="panel-body">

<!-- Html ##################################################### -->

                   <div class="col-md-12 col-xs-12 margin_top">
                   
                                  <?php
                                    if($error = $this->session->flashdata('busesseatmap')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?= $error ?>
                                      </div>
                                    
                                    <?php        
                                      }
                          
							// ------------------------------ admin form open ---------------------------------
										$attributes = array('class' => 'form-auth-small form-inline', 'name'=>'form1', 'id' => 'form1');
										echo form_open_multipart('admin/busesseatmap/edit', $attributes);
							     ?>
                                 
                                 
                           
                           <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Title </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
									<?php
    $data = array('name'  => 'SeatingTitle', 'id' => 'SeatingTitle', 'value'=>$edit_busesseatmap[0]['SeatingTitle'], 'placeholder' => 'Title', 'class'=>"form-control margin_bottom");
                                     echo form_input($data);
                                    ?>
                                      </div>
		                		  </div>      

		                

		                		 <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Total Seats * </span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('TotalSeats'); ?></span>
                                       <?php
									      // ------------------------------ Login Id form open ---------------------------------
                 $data = array('name'  => 'TotalSeats', 'id' => 'TotalSeats', 'value'=>$edit_busesseatmap[0]['TotalSeats'], 'placeholder' => 'Total Seats', 'class'=>"form-control margin_bottom");
                 echo form_input($data);
                                        ?>
                                      </div>
		                		  </div>
                                  
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Seating Type *</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('TotalSeats'); ?></span>
											  <?php
                                                    unset($options);									
                                                 //  $options['']='Select Seating Type';
                                                    foreach($buses_seating as $val)
                                                       {
                                                           $options[$val['SeatTypeId']] = $val['SeatTypeTitle'];
                                                       }		
                                                     $selected=$edit_busesseatmap[0]['SeatTypeId'];	
                                                     echo form_dropdown('SeatTypeId', $options,$selected,'class="form-control margin_bottom"');
                                               ?>
                                      </div>
		                		  </div>
                                  
                                  
                                  
                                  
                                  
                                <div class="col-md-12 padding_opx">
                                  <label class="col-md-1 text-left padding_opx"></label>
                                    <label class="col-md-2 text-left padding_opx">
		                				<span>Lower Deck </span></label>
		                	          <hr> 
		                		  </div>  
                                  
                                  
                                  
                                                                  
                                   <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span> Seat and Sleeper</span></label>
		                			   <div class="col-md-5 form-group padding_opx">
                                        <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('TotalSeats'); ?></span>
											 <?php
                                                 // ------------------------------ adm_status form  ---------------------------------
                                                        $options = array
                                                          (
														 
                                                            'N'  => 'No',
                                                            'Y'  => 'Yes',
                                                        
                                                          );
                                                         
                                                         $selected=$edit_busesseatmap[0]['SeatSleeper'];  
                                                                                    
                                                        echo form_dropdown('SeatSleeper', $options, $selected,'class="form-control margin_bottom"');
                                                ?>
                                                [<i style="color:#FF0000">Select yes if lower deck have sleeper and seat both </i>]
                                                <p>&nbsp;</p>
                                      </div>
		                		  </div>
                                  
                                  
                                  
                                  
                                  <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Seating Map *</span></label>

<div class="col-md-1 form-group padding_opx">

  <p> <img src="<?php echo base_url('assets/img/seat-d.png'); ?>">  </p>

  <p style="margin: 76px 0px 0px 0px;  padding: 10px;"> <img src="<?php echo base_url('assets/img/seat-c.png'); ?>"> </p>

</div>	

		                			   <div class="col-md-9 form-group padding_opx">
<style type="text/css">
	
	tr td  {
		padding: 0px 15px 25px 0px;
	}

</style>

                                  <?php
								       
									  // echo"<pre>";
									     //print_r($edit_upper_deck);
								       //echo"</pre>";
								   
                                        $data = array('DeckType1'  => 'L');
                                        echo form_hidden($data);
										
										
                                   ?>

                                 
		                			   	  <table>
		                			   	  	<tbody>
		                			   	  	 <tr>
		                			   	  	 	<td> <input type="checkbox"   name="SeatLocationID[]" <?php   if(in_array(1,$edit_lower_deck)) echo"checked"; ?>  value="1"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(2,$edit_lower_deck)) echo"checked"; ?>  value="2"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(3,$edit_lower_deck)) echo"checked"; ?>  value="3"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(4,$edit_lower_deck)) echo"checked"; ?>  value="4"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(5,$edit_lower_deck)) echo"checked"; ?>  value="5"></td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(6,$edit_lower_deck)) echo"checked"; ?>  value="6"></td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(7,$edit_lower_deck)) echo"checked"; ?>  value="7"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(8,$edit_lower_deck)) echo"checked"; ?>  value="8"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(9,$edit_lower_deck)) echo"checked"; ?>  value="9"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(10,$edit_lower_deck)) echo"checked"; ?>  value="10"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(11,$edit_lower_deck)) echo"checked"; ?>  value="11"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(12,$edit_lower_deck)) echo"checked"; ?>  value="12"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(13,$edit_lower_deck)) echo"checked"; ?>  value="13"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(14,$edit_lower_deck)) echo"checked"; ?>  value="14"> </td>
		                			   	  	 </tr>

		                			   	  	 <tr>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(15,$edit_lower_deck)) echo"checked"; ?>  value="15"></td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(16,$edit_lower_deck)) echo"checked"; ?>  value="16"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(17,$edit_lower_deck)) echo"checked"; ?>  value="17"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(18,$edit_lower_deck)) echo"checked"; ?>  value="18"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(19,$edit_lower_deck)) echo"checked"; ?>  value="19"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(20,$edit_lower_deck)) echo"checked"; ?>  value="20"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(21,$edit_lower_deck)) echo"checked"; ?>  value="21"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(22,$edit_lower_deck)) echo"checked"; ?>  value="22"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(23,$edit_lower_deck)) echo"checked"; ?>  value="23"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(24,$edit_lower_deck)) echo"checked"; ?>  value="24"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(25,$edit_lower_deck)) echo"checked"; ?>  value="25"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(26,$edit_lower_deck)) echo"checked"; ?>  value="26"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(27,$edit_lower_deck)) echo"checked"; ?>  value="27"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(28,$edit_lower_deck)) echo"checked"; ?>  value="28"> </td>
		                			   	  	 </tr>


		                			   	  	 <tr>
		                			   	  	 	<td>&nbsp;  </td>
		                			   	  	 	<td>&nbsp;  </td>
		                			   	  	 	<td>&nbsp;  </td>
		                			   	  	 	<td>&nbsp;  </td>
		                			   	  	 	<td>&nbsp;  </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(65,$edit_lower_deck)) echo"checked"; ?>  value="65"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(64,$edit_lower_deck)) echo"checked"; ?>  value="64"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(63,$edit_lower_deck)) echo"checked"; ?>  value="63"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(62,$edit_lower_deck)) echo"checked"; ?>  value="62"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(61,$edit_lower_deck)) echo"checked"; ?>  value="61"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(60,$edit_lower_deck)) echo"checked"; ?>  value="60"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(59,$edit_lower_deck)) echo"checked"; ?>  value="59"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(58,$edit_lower_deck)) echo"checked"; ?>  value="58"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(57,$edit_lower_deck)) echo"checked"; ?>  value="57"> </td>
		                			   	  	 </tr>


		                			   	  	<tr>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(29,$edit_lower_deck)) echo"checked"; ?>  value="29"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(30,$edit_lower_deck)) echo"checked"; ?>  value="30"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(31,$edit_lower_deck)) echo"checked"; ?>  value="31"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(32,$edit_lower_deck)) echo"checked"; ?>  value="32"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(33,$edit_lower_deck)) echo"checked"; ?>  value="33"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(34,$edit_lower_deck)) echo"checked"; ?>  value="34"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(35,$edit_lower_deck)) echo"checked"; ?>  value="35"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(36,$edit_lower_deck)) echo"checked"; ?>  value="36"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(37,$edit_lower_deck)) echo"checked"; ?>  value="37"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(38,$edit_lower_deck)) echo"checked"; ?>  value="38"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(39,$edit_lower_deck)) echo"checked"; ?>  value="39"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(40,$edit_lower_deck)) echo"checked"; ?>  value="40"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(41,$edit_lower_deck)) echo"checked"; ?>  value="41"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(42,$edit_lower_deck)) echo"checked"; ?>  value="42"> </td>
		                			   	  	 </tr>

		                			   	  	<tr>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(43,$edit_lower_deck)) echo"checked"; ?>  value="43"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(44,$edit_lower_deck)) echo"checked"; ?>  value="44"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(45,$edit_lower_deck)) echo"checked"; ?>  value="45"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(46,$edit_lower_deck)) echo"checked"; ?>  value="46"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(47,$edit_lower_deck)) echo"checked"; ?>  value="47"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(48,$edit_lower_deck)) echo"checked"; ?>  value="48"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(49,$edit_lower_deck)) echo"checked"; ?>  value="49"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(50,$edit_lower_deck)) echo"checked"; ?>  value="50"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(51,$edit_lower_deck)) echo"checked"; ?>  value="51"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(52,$edit_lower_deck)) echo"checked"; ?>  value="52"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(53,$edit_lower_deck)) echo"checked"; ?>  value="53"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(54,$edit_lower_deck)) echo"checked"; ?>  value="54"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(55,$edit_lower_deck)) echo"checked"; ?>  value="55"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationID[]" <?php   if(in_array(56,$edit_lower_deck)) echo"checked"; ?>  value="56"> </td>
		                			   	  	 </tr>

		                			   	  	 </tbody>
		                			   	  </table>

                                           <p>Please select  seat according number of seats</p>
                                      
                                      </div>
		                		  </div>  
                                  
                                  
                                  
                           
                              <div class="col-md-12 padding_opx">
                                  <label class="col-md-1 text-left padding_opx"></label>
                                     <label class="col-md-2 text-left padding_opx">
		                				<span>Upper Deck (Sleeper) </span></label>
		                	          <hr> 
		                		  </div>  
                                
                           
                                  
                         <div class="col-md-12 padding_opx">
		                			<label class="col-md-2 text-left padding_opx">
		                				<span>Upper Seat Map </span></label>

<div class="col-md-1 form-group padding_opx">

 <?php /*?> <p> <img src="<?php echo base_url('assets/img/seat-d.png'); ?>">  </p>

  <p style="margin: 76px 0px 0px 0px;  padding: 10px;"> <img src="<?php echo base_url('assets/img/seat-c.png'); ?>"> </p><?php */?>

</div>	

		              <div class="col-md-9 form-group padding_opx">
							<style type="text/css">
                            
									tr td  {
										padding: 0px 15px 25px 0px;
									}
                            
                            </style>

                                  <?php
                                        $data = array('DeckType2'  => 'U');
                                        echo form_hidden($data);
                                   ?>


		                			   	  <table>
		                			   	  	<tbody>
		                			   	  	 <tr>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(66,$edit_upper_deck)) echo"checked"; ?>  value="66"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(67,$edit_upper_deck)) echo"checked"; ?>  value="67"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(68,$edit_upper_deck)) echo"checked"; ?>  value="68"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(69,$edit_upper_deck)) echo"checked"; ?>  value="69"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(70,$edit_upper_deck)) echo"checked"; ?>  value="70"></td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(71,$edit_upper_deck)) echo"checked"; ?>  value="71"></td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(72,$edit_upper_deck)) echo"checked"; ?>  value="72"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(73,$edit_upper_deck)) echo"checked"; ?>  value="73"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(74,$edit_upper_deck)) echo"checked"; ?>  value="74"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(75,$edit_upper_deck)) echo"checked"; ?>  value="75"> </td>
		                			   	  	
		                			   	  	 </tr>

		                			   	  	 <tr>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(76,$edit_upper_deck)) echo"checked"; ?>  value="76"></td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(77,$edit_upper_deck)) echo"checked"; ?>  value="77"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(78,$edit_upper_deck)) echo"checked"; ?>  value="78"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(79,$edit_upper_deck)) echo"checked"; ?>  value="79"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(80,$edit_upper_deck)) echo"checked"; ?>  value="80"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(81,$edit_upper_deck)) echo"checked"; ?>  value="81"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(82,$edit_upper_deck)) echo"checked"; ?>  value="82"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(83,$edit_upper_deck)) echo"checked"; ?>  value="83"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(84,$edit_upper_deck)) echo"checked"; ?>  value="84"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(85,$edit_upper_deck)) echo"checked"; ?>  value="85"> </td>
		                			  
		                			   	  	 </tr>


		                			   	  	 <tr>
		                			   	  	 	<td>&nbsp;  </td>
		                			   	  	 	<td>&nbsp;  </td>
		                			   	  	 	<td>&nbsp;  </td>
		                			   	  	 	<td>&nbsp;  </td>
		                			   	  	 	<td>&nbsp;  </td>
		                			   	  	 	<td>&nbsp;  </td>
		                			   	  	 	<td>&nbsp;  </td>
		                			   	  	 	<td>&nbsp;  </td>
		                			   	  	 	<td>&nbsp;  </td>
		                			   	  	 	<td>&nbsp;  </td>
		                			   	
		                			   	  	 </tr>


		                			   	  	<tr>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(86,$edit_upper_deck)) echo"checked"; ?>  value="86"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(87,$edit_upper_deck)) echo"checked"; ?>  value="87"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(88,$edit_upper_deck)) echo"checked"; ?>  value="88"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(89,$edit_upper_deck)) echo"checked"; ?>  value="89"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(90,$edit_upper_deck)) echo"checked"; ?>  value="90"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(91,$edit_upper_deck)) echo"checked"; ?>  value="91"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(92,$edit_upper_deck)) echo"checked"; ?>  value="92"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(93,$edit_upper_deck)) echo"checked"; ?>  value="93"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(94,$edit_upper_deck)) echo"checked"; ?>  value="94"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(95,$edit_upper_deck)) echo"checked"; ?>  value="95"> </td>
		                			   	  	
		                			   	  	 </tr>

		                			   	  	<tr>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(96,$edit_upper_deck)) echo"checked"; ?>  value="96"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(97,$edit_upper_deck)) echo"checked"; ?>  value="97"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(98,$edit_upper_deck)) echo"checked"; ?>  value="98"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(99,$edit_upper_deck)) echo"checked"; ?>  value="99"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(100,$edit_upper_deck)) echo"checked"; ?>  value="100"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(101,$edit_upper_deck)) echo"checked"; ?>  value="101"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(102,$edit_upper_deck)) echo"checked"; ?>  value="102"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(103,$edit_upper_deck)) echo"checked"; ?>  value="103"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(104,$edit_upper_deck)) echo"checked"; ?>  value="104"> </td>
		                			   	  	 	<td> <input type="checkbox" name="SeatLocationSLID[]" <?php   if(in_array(105,$edit_upper_deck)) echo"checked"; ?>  value="105"> </td>
		                			
		                			   	  	 </tr>

		                			   	  	 </tbody>
		                			   	  </table>

                                           <p>Please select if upper deck is required</p>
                                      
                                      </div>
		                		  </div>
                                  
                                  
                           
                                  
                                 
                                     
                                     
                               
                               
                            
                             
                                  
                                  
                          <div class="col-md-12 padding_opx">
		                		<label class="col-md-2 text-left padding_opx"> Status </label>
		                			<div class="col-md-2 form-group padding_opx">
                                   <?php
								     // ------------------------------ adm_status form  ---------------------------------
											$options = array
											  (
										    	'Y'  => 'Active',
											    'N'  => 'Inactive',
											
											  );
											 
											 $selected=set_value('Status'); 
																		
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
										
										  $data = array('id'  => $edit_busesseatmap[0]['MapId']);
                                        echo form_hidden($data);
                                        //-------------------------------------------------------------------------------------------------------------------			
                                        $data = array('name'  => 'smt_enter', 'value' => 'Submit',   'class'=>"btn btn-primary");
                                        echo form_submit($data);
                                    ?>
                                    
                            </div>
                            </div>
                                
						       <?php 
							           // ------------------------------ admin form open ---------------------------------
							               echo form_close(); 
							       ?>
						</div>

<!--Html ##################################################  -->
				</div>
			</div>
		</div>
	</div>
  </div>
</div>
     
     
		
        
		<div class="clearfix"></div>
		<?php include('footer.inc.php') ?>	
	</div>
	

</body>
</html>