<?php if(count($state_list)> 0){?>
<select name="stateid" id="stateid" onChange="getCity()";>
                                                                	
    <option value="">Select State</option>
    <?php foreach($state_list as $state){ ?>
    
        <option value="<?php echo $state['StatesID']?>"><?php echo $state['StatesName']?></option>
    
    <?php }?>
    
    
</select>
<?php }if(count($sstate_list)> 0){?>

 <select name="sstateid" id="sstateid" onChange="getCity()";>
                                                                	
    <option value="">Select State</option>
    <?php foreach($sstate_list as $state){ ?>
    
        <option value="<?php echo $state['StatesID']?>"><?php echo $state['StatesName']?></option>
    
    <?php }?>
    
    
</select>
<?php } ?>
