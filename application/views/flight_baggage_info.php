<?php //echo '<pre>'; print_r($baggageInfo); die;?>
<table style="border: 1px solid #ddd;">
    <tbody>
    
    <tr style="background: #f7f9ff;height: 40px;">
        <td style="border: 0px solid #e0e0e0;text-transform:uppercase;font-size: 14px;font-weight: 600;">Sector</td>
        <td style="border: 0px solid #e0e0e0;text-transform:uppercase;font-size: 14px;font-weight: 600;">Check-In</td>
        <td style="border: 0px solid #e0e0e0;text-transform:uppercase;font-size: 14px;font-weight: 600;">Cabin</td>
    </tr>
    <?php //foreach ($flightValue['pricelist'] as $key => $baggageInfo) {  
        
        //if($flightValue['pricelist'][0]['flightId'] == $baggageInfo['flightId'] ){   
    ?>
        
    <tr style="background:#dfe9ff;height:40px;">

        <td style="border: 0px solid #e0e0e0;"><?php echo $baggageInfo['departureCode']  ?>  - <?php echo $baggageInfo['airportCode']  ?></td>

        <td style="border: 0px solid #e0e0e0;">Adult: <?php echo @$baggageInfo['adultCheckinBaggage']; ?><?php if(@$baggageInfo['childCheckinBaggage']!=''){?> , Child :   <?php echo @$baggageInfo['childCheckinBaggage']; }?> <?php //if(@$baggageInfo['infantCheckInBaggage']!=''){ ?><!--, Infant : -->  <?php //echo @$baggageInfo['infantCheckInBaggage']; }?></td>

        <td style="border: 0px solid #e0e0e0;">Adult :  <?php echo @$baggageInfo['adultCabinBaggage']; ?> <?php if($baggageInfo['childCabinBaggage'] != ''){ ?>, Child :  <?php echo @$baggageInfo['childCabinBaggage']; } ?> <?php if($baggageInfo['infantCabinBaggage'] != ''){ ?>, Infant :  <?php echo @$baggageInfo['infantCabinBaggage']; } ?></td>

    </tr>
    <?php //} } ?>
</tbody>
</table>  