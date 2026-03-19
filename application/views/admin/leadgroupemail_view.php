<!doctype html>
<html lang="en">
 <head>
	<title>Contact Group Email</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
     <?php include('top.inc.php') ?>
     <script language="JavaScript">
// Function to Select / DeSelect all the CheckBoxes........
// Function to Select / DeSelect all the CheckBoxes........
function checkall(objForm){
	len = objForm.elements.length;
	var i=0;
	for( i=0 ; i<len ; i++) {
		if (objForm.elements[i].type=='checkbox') {
			objForm.elements[i].checked=objForm.check_all.checked;
		}
	}
}
</script>



<script type="text/javascript" src="<?php echo base_url('assets/tinymce/tinymce.min.js') ?>"></script>
<script type="text/javascript">
tinymce.init({
    selector: "#content",
	
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
			  'width'	: 1000,
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



function open_popup(url)
  {
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
							<h3 class="panel-title title_h3"><strong> <i class="lnr lnr-arrow-right-circle" aria-hidden="true"></i> Send  Email To Group</strong></h3>
						</div>
						 <div class="col-md-6 padding_opx">
                          <a href="<?php echo base_url('admin/leads/opration?id='.$lid) ?>" class="btn btn-primary btn-primary1 pull-right margin_bottom"> << Back </a>
                        </div>
					</div>
				</div>


			<div class="panel">
		
                  
				<div class="panel-body">
                
                      <div class="col-md-12 col-xs-12 margin_top">  <?php
                                    if($error = $this->session->flashdata('email')){  ?>
                                    
                                      <div class="alert alert-danger alert-dismissable">
                                          <?=$error ?>
                                      </div>
                                    
                                    <?php        
                                      }
                ?>
                                     

<!-- **************************** Preview Code Start **************************************** -->
 <!-- **************************** Preview Code Start **************************************** -->
   <?php
	     // ------------------------------ Login Id form open ---------------------------------
                            
					 $attributes = array('class' => '', 'name'=>'form1', 'id' => 'form1');
					 echo form_open_multipart(base_url('admin/leadgroupemail/send'), $attributes); 
					    ?>    
                          <div class="row">

                          <div class="col-md-12 padding_opx">
		                	   	<label class="col-md-2 text-left padding_opx">
		                			<span><strong> To Email </strong></span></label>
                                        
		                			   <div class="col-md-6 form-group padding_opx">
		                			   	 <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('GroupId'); ?></span>
                            <?php
                          
                                      unset($options);                  
                                      $options['']='Select Group';
                                      foreach($groups as $val)
                                     {
                                       $options[$val['GroupId']] = $val['GroupName'];
                                       }    
                                      $selected=set_value('GroupId');  
                  echo form_dropdown('GroupId', $options,'','class="form-control margin_bottom"');
                                 ?>
                                      </div>
                                      <div class="col-md-4 form-group padding_opx">
                                  </div>
                             </div>



                        	<div class="col-md-12 padding_opx">
		                	   	<label class="col-md-2 text-left padding_opx">
		                			<span><strong> Subject </strong></span></label>
                                        
		                			   <div class="col-md-8 form-group padding_opx">
		                			   	 <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('Subject'); ?></span>
                                        <?php
					 // ------------------------------ Login Id form open ---------------------------------
                  $data = array('name'  => 'Subject', 'id'=>'Subject',  'value' =>set_value('Subject'),  'placeholder' => 'Subject', 'class'=>"form-control margin_bottom");
                                            echo form_input($data);
                                        ?>
                                      </div>
                             </div>  

                                 
                               


                  

                   <div class="col-md-12 padding_opx">
                   		<label class="col-md-2 text-left padding_opx">
		                			<span><strong> Email Content </strong></span></label>
                   
                   	  <div class="col-md-8 form-group padding_opx">
                   	  		 <span style="text-align:left; color:#FF0000; font-size:12px;";><?php echo form_error('MailContent'); ?></span>

		               <?php
					      // ------------------------------ Login Id form open ---------------------------------
	                        $data = array('name'  => 'MailContent',  'id' => 'content', 'value' =>set_value('MailContent'),  'placeholder' => 'Mail Content', 'class'=>"form-control margin_bottom");
	                        echo form_textarea($data);
	                    ?>
	                </div>
                      
                   </div> 

                      <div class="col-md-12 padding_opx">
                          <div class="text-center">
                             <button type="submit" name="smt_enter" class="btn bg-blue">Send</button>
                           </div>
                      </div> 	


             </div>
                    <?php 
                              // 

                                         echo  form_hidden('flag', 'yes');
                                         echo form_hidden('SendDate', date('Y-m-d'));


                                         	

                                          
							           // ------------------------------ admin form open ---------------------------------
							               echo form_close(); 
							       ?>
             <!-- **************************** Preview Code Start **************************************** -->
             <!-- **************************** Preview Code Start **************************************** -->
 
				</div>
			</div>
			<!-- END BASIC TABLE  -->
        </div>
					<!-- END OVERVIEW -->



				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		
        
		<div class="clearfix"></div>
		
         <?php // include('footer.inc.php') ?>	
	</div>
	

</body>
</html>