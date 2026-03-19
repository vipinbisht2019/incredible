<select name="scityid" id="scityid">
                                                                	
<option value="">Select City</option>
 <?php foreach($scity_list as $city){ ?>
                                        
    <option value="<?php echo $city['cityid']?>"><?php echo $city['city_name']?></option>

<?php }?>


</select>
