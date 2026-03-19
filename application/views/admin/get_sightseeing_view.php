<select name="sightseeing" id="sightseeing" onchange="getSightSeeingDesp();">
                                                                	
<option value="">Select Sightseeing</option>
 <?php foreach($sightSeeingList as $sightseeing){ ?>
                                        
    <option value="<?php echo $sightseeing['sid']?>"><?php echo $sightseeing['title']?></option>

<?php }?>


</select>
