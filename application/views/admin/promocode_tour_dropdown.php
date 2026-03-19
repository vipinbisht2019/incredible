<select name="TypeId" class="form-control margin_bottom">
  <option value="0">.::Please Select Bus::.</option>
    
<?php
    foreach($TourBuses as $val)
       {
         ?>
             <option value="<?php echo $val['TypeId'] ?>" ><?php echo $val['CategoryName']." ".$val['TypeTitle'] ?></option>
        <?php
      } 
?>

</select>  