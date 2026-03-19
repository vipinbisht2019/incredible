<?php if(count($city_list)> 0){?>
<select name="cityid" id="cityid">
                                                                	
<option value="">Select City</option>
 <?php foreach($city_list as $city){ ?>
                                        
    <option value="<?php echo $city['cityid']?>"><?php echo $city['city_name']?></option>

<?php }?>


</select>
<?php } 


if(count($scity_list)> 0){?>
<select name="scityid" id="scityid">
                                                                	
<option value="">Select City</option>
 <?php foreach($scity_list as $city){ ?>
                                        
    <option value="<?php echo $city['cityid']?>"><?php echo $city['city_name']?></option>

<?php }?>


</select>
<?php }?>