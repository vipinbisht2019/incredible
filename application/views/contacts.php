<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $contact_us[0]['meta_description']; ?>">
    <meta name="keywords" content="<?php echo $contact_us[0]['meta_keyword']; ?>">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <?php include('includes/css.php'); ?>
  </head>
  <body class="not-front page-contacts">

    <div id="main">
      <?php include('includes/header.php'); ?>
      <div class="breadcrumbs1_wrapper">
        <div class="container">
          <div class="breadcrumbs1"><a href="https://demo.gridgum.com/templates/Travel-agency/index.html">Home</a><span>/</span>Contacts</div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <h3>CONTACT INFO</h3>
              <p>
                Don't hesitate to give us a call before, during, or after your trip. We're happy to assist you!
              </p>

              <br>

              <h4>ADDRESS</h4>
              <p>
                795 Fake Ave, Door 6<br>
                Wonderland, CA 94107, USA<br>
                <a href="#">info@yourdomain.com</a>
              </p>

              <h4>PHONE</h4>

              <p>
                +440 875369208<br>
                +440 353363114
              </p>

              <div class="social3_wrapper">
                <ul class="social3 clearfix">
                  <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6">
              <h3>CONTACT FORM</h3>
              <div id="note"></div>
              <div id="fields">
                <form id="ajax-contact-form" class="form-horizontal" action="javascript:alert('success!');">
                  <div class="form-group">
                      <label for="inputName">Your Name</label>
                      <input type="text" class="form-control" id="inputName" name="name" value="Full Name" onBlur="if(this.value=='') this.value='Full Name'" onFocus="if(this.value =='Full Name' ) this.value=''">
                  </div>
                  <div class="form-group">
                      <label for="inputEmail">Email</label>
                      <input type="text" class="form-control" id="inputEmail" name="email" value="E-mail address" onBlur="if(this.value=='') this.value='E-mail address'" onFocus="if(this.value =='E-mail address' ) this.value=''">
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                          <label for="inputMessage">Your Message</label>
                          <textarea class="form-control" rows="7" id="inputMessage" name="content" onBlur="if(this.value=='') this.value='Message'"
                                      onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn-default btn-cf-submit">send message</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="google_map_wrapper"><div id="google_map"></div></div>

      <?php include('includes/footer.php'); ?>
      <?php include('includes/js.php'); ?>
    </div>
  </body>
</html>