<select name="TourId" id="folder_name" class="form-control">
 <option value="">Select Leads Tour Package</option>
 <?php foreach($leads_tours as $ltvars) { ?> 
   <option value="<?php echo $ltvars['TourId'] ?>"><?php echo $ltvars['TourName'] ?></option>
 <?php } ?>  
</select>