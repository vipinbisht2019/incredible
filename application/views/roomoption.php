
<?php //echo '<pre>'; print_r($hotelDetail); die;?>
<div class="col-sm-4">
    <div class="blog_content">                          
    <h3 class="hch"><?php echo $hotelDetail['hotelName']; ?></h3>                            
    </div>
    <div class="clearfix"></div>
    <p class="address"><?php echo $hotelDetail['address']; ?></p>
    <span class="star-rating" style="margin-top:0px;">
        <?php if($hotelDetail['rating'] == 1){ ?>
        <img src="<?php echo base_url('assets/images/star1.png')?>">
        <?php }elseif($hotelDetail['rating'] == 2){ ?>
        <img src="<?php echo base_url('assets/images/star1.png')?>">
        <img src="<?php echo base_url('assets/images/star1.png')?>">
        <?php }elseif($hotelDetail['rating'] == 3){ ?>
        <img src="<?php echo base_url('assets/images/star1.png')?>">
        <img src="<?php echo base_url('assets/images/star1.png')?>">
        <img src="<?php echo base_url('assets/images/star1.png')?>">
        <?php }elseif($hotelDetail['rating'] == 4){ ?>
        <img src="<?php echo base_url('assets/images/star1.png')?>">
        <img src="<?php echo base_url('assets/images/star1.png')?>">
        <img src="<?php echo base_url('assets/images/star1.png')?>">
        <img src="<?php echo base_url('assets/images/star1.png')?>">
        <?php }elseif($hotelDetail['rating'] == 5){ ?>
        <img src="<?php echo base_url('assets/images/star1.png')?>">
        <img src="<?php echo base_url('assets/images/star1.png')?>">
        <img src="<?php echo base_url('assets/images/star1.png')?>">
        <img src="<?php echo base_url('assets/images/star1.png')?>">
        <img src="<?php echo base_url('assets/images/star1.png')?>">
        <?php } ?>
    </span>
    <div class="row">
        <div class="summarybox">
        <h2 class="summarybox__price">₹ <?php echo $hotelDetail['totalPrice']; ?> </h2>
        <h4 class="summarybox__roomtype">
            <?php echo $hotelDetail['roomName']; ?> 
            <span class="summarybox__roomtype--text"></span>
        </h4>
        <div class="summarybox__type">
            <div class="summarybox__type--content">
            <p class="summarybox__type--inclusion">
                <?php echo $hotelDetail['roomType']; ?>
            </p>
            </div>
            <ul class="hidden summarybox__facilities">
            <li class="summarybox__facilities--list">
                <span class="summarybox__facilities--icon"><use xlink:href="icons.svg#air-conditioner"></use></span>
            </li>
            </ul>
            <p class="hidden summarybox__facilities--counter ">23+</p>
        </div>
        <p class="summarybox__select">
            <a href="#select-other-room" style="color:#e41d37">Select Other Room</a>
            <span class="summarybox__select--icon">
            <svg class="svg-inline--fa fa-angle-down fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
            <path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path>
            </svg>
            </span>
        </p>
        </div>
    </div>

    <a href="<?php echo base_url('hotels/booking?hId='.$hotelDetail['hotelId'].'&oid='.$hotelDetail['optionId'].'&ad='.$hotelDetail['adults'].'&ch='.$hotelDetail['childs'].'&ro='.$hotelDetail['rooms'].'&gi='.$hotelDetail['guestinfo'])?>">

        <button data-id="" type="button" class="hoteldetails__rightbox--bookbtn">Book this room<span class="sublabel-content"></span>
        </button>
    </a>                           
    </div>  
</div>