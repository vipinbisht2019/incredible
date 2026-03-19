<table>
    <thead>
    <tr>
        <td><b>Type</b></td>
        <td><b>Fare</b></td>
        <td><b>Total</b></td>
    </tr>
    </thead>                                              
    <tbody>                                                
        <?php 

          //  echo "<pre>"; print_r($priceinfo); die;
            
        //foreach ($flightValue['pricelist'] as $key => $fareValues) { 

              //  if($flightValue['pricelist'][0]['flightId'] == $fareValues['flightId'] ){  ?> 
        
                <tr style="background: #dfe9ff;">

                    <td style="border: 0px solid #e0e0e0;">Base Price</td>
                    
                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($priceinfo['adultList']['adultBaseFare'],2); ?> * <?php echo $priceinfo['adultList']['countadultPax']; ?> </td>

                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $basefares_Adult = $priceinfo['adultList']['adultBaseFare'] * $priceinfo['adultList']['countadultPax'] ; 
                    echo number_format($basefares_Adult,2);
                    
                    ?> </td>

                </tr>

                <tr style="background: #dfe9ff;">

                    <td style="border: 0px solid #e0e0e0;">Taxes & Fee </td>

                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Adult = number_format($priceinfo['adultList']['adultTaxFare'],2);?>  * <?php echo $priceinfo['adultList']['countadultPax']; ?></td>

                    <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo $taxes_Adult = number_format($priceinfo['adultList']['adultTaxFare'],2) * $priceinfo['adultList']['countadultPax']; ?></td>

                </tr>
        
                <?php 
                
                   if(@$priceinfo['childList']['countchildPax'] != 0) { ?>

                        <tr style="background: #dfe9ff;">

                            <td style="border: 0px solid #e0e0e0;">Base Price</td>

                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($priceinfo['childList']['childBaseFare'],2); ?>  * <?php echo  $priceinfo['childList']['countchildPax'] ; ?> </td>

                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $basefares_Child = $priceinfo['childList']['childBaseFare'] * $priceinfo['childList']['countchildPax'] ; echo number_format($basefares_Child,2);?> </td>

                        </tr>
                        <tr>
                            <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo  number_format($priceinfo['childList']['childTaxFare'],2); ?> * <?php echo $priceinfo['childList']['countchildPax']; ?></td>

                            <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $taxes_Child =  $priceinfo['childList']['childTaxFare'] * $priceinfo['childList']['countchildPax']; echo number_format($taxes_Child,2); ?></td>

                        </tr> 

                    <?php } ?>

                    <?php if($priceinfo['infantList']['countinfantPax'] != 0) { ?>
                    
                    <tr>

                        <td style="border: 0px solid #e0e0e0;"> Infant Fare </td>

                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($priceinfo['infantList']['infantBaseFare'],2);?> * <?php echo $priceinfo['infantList']['countinfantPax']; ?> </td>

                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php $basefares_infant =  $priceinfo['infantList']['infantBaseFare'] * $priceinfo['infantList']['countinfantPax']; echo number_format($basefares_infant,2); ?> </td>

                    </tr>
                    <tr>

                        <td style="border: 0px solid #e0e0e0;">Taxes & Fee</td>

                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php echo number_format($priceinfo['infantList']['infantTaxFare'],2); ?> * <?php echo $priceinfo['infantList']['countinfantPax']; ?></td>

                        <td style="border: 0px solid #e0e0e0;"><i class="fa fa-inr"></i> <?php  $taxes_Infant = $priceinfo['infantList']['infantTaxFare'] * $priceinfo['infantList']['countinfantPax']; 
                        
                        echo number_format($taxes_Infant,2);
                        
                        ?></td>

                    </tr>

                    <?php } ?>
    
                    <tr style="border-top: 1px solid #cbcbcb;background: #dfe9ff;">

                    <td style="border: 0px solid #e0e0e0;">
                        <b>Total Fare</b>
                    </td>
                    <td></td>
                    <td style="border: 0px solid #e0e0e0;">
                        <b><i class="fa fa-inr"></i> <?php echo number_format($priceinfo['adultList']['adultTotalFare'],2); ?></b>
                    </td>

                    </tr> 

                <?php //} 
            //} ?>
    </tbody>                                             
</table>