<?php //echo '<pre>'; print_r($fareRule); die;?>
<div id="divMsg" style="background-color: rgb(234 240 253); color: rgb(255, 255, 255); height: auto; width: 93%; text-align: center; display: block; border-radius: 4px;">
    <button class="ars-activelist fare-rules-tabs" style="display: block;margin-right: auto;width: 11%;"><?php echo $departureCity; ?>-<?php echo $arrivalCity; ?></button>
    <div class="farerules__contain--data">
        <div class="star-text">Mentioned fees are Per Pax Per Sector</div>
        <div class="star-text">Apart from airline charges, GST + RAF + applicable charges if any, will be charged.</div>
        <div class="farerule__innercontent">
            <h5 class="mb-20">Type</h5>
            <p class="apt-paradult">ALL</p>
        </div>
        <div class="farerule__innercontent">
            <h5 class="mb-20">Cancellation Fee</h5>
            <p class="apt-paradult">
                <span>
                    <span><?php $fareCanPo = @$fareRule['DEL-BLR']['fr']['CANCELLATION']['DEFAULT']['policyInfo'];
                                $farePo1 = str_replace('__nls__',' ',$fareCanPo);
                                $farePo2 = str_replace('_nls__',' ',$farePo1); ?>

                        <span>₹<?php echo @$fareRule['DEL-BLR']['fr']['CANCELLATION']['DEFAULT']['amount']; ?>&nbsp;</span>+<span><span>₹<?php echo @$fareRule['DEL-BLR']['fr']['CANCELLATION']['DEFAULT']['additionalFee']; ?>&nbsp;</span></span>
                    </span>
                    <span>
                        <br><?php echo @$farePo2; ?>
                    </span>
                </span>
            </p>
        </div>
            <div class="farerule__innercontent">
                <h5 class="mb-20">Date Changes Fee</h5>
                <p class="apt-paradult">
                    <span>
                        <span><?php $fareDatePo = @$fareRule['DEL-BLR']['fr']['CANCELLATION']['DEFAULT']['policyInfo'];
                                $fareDa1 = str_replace('__nls__',' ',$fareDatePo);
                                $fareDa2 = str_replace('_nls__',' ',$fareDa1); ?>
                            <span>₹<?php echo @$fareRule['DEL-BLR']['fr']['DATECHANGE']['DEFAULT']['amount']; ?>&nbsp;</span>+<span><span>₹<?php echo @$fareRule['DEL-BLR']['fr']['DATECHANGE']['DEFAULT']['additionalFee']; ?>&nbsp;</span></span>
                        </span>
                        <span>
                            <br><?php echo @$fareDa2; ?>
                        </span>
                    </span>
                </p>
            </div>
            <div class="farerule__innercontent">
                <h5 class="mb-20">No Show</h5>
                <p class="apt-paradult">
                    <span><?php echo @$fareRule['DEL-BLR']['fr']['NO_SHOW']['DEFAULT']['policyInfo']; ?></span>
                </p>
            </div>
            <div class="farerule__innercontent">
                <h5 class="mb-20">Seat Chargeable</h5>
                <p class="apt-paradult">
                    <span><?php  echo @$fareRule['DEL-BLR']['fr']['SEAT_CHARGEABLE']['DEFAULT']['policyInfo']; ?></span>
                </p>
            </div>
    </div>
</div>