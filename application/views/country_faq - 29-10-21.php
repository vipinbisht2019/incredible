<!DOCTYPE html>
<html lang="en">
  <head>
  <title>VISA-Detail</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

  <?php include('includes/css.php'); ?>
  <?php include('includes/js.php'); ?>
    <style>
      input[type="radio"]{ opacity: 0; }
      input {
      position: absolute;
      opacity: 0;
      z-index: -1;
  }
    </style>
  </head>
  <body class="not-front page-about">
    <div id="main">
      <?php include('includes/header.php'); ?>
      <div class="breadcrumbs1_wrapper">
        <div class="container">
          <div class="breadcrumbs1"><a href="https://demo.gridgum.com/templates/Travel-agency/index.html">Home</a><span>/</span>VISA</div>
        </div>
      </div>
      <div id="what1">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="tabs">
                <div class="tab">
                  <input type="radio" id="rd1" name="rd">
                  <label class="tab-label" for="rd1">What is a Schengen Visa?</label>
                  <div class="tab-content">
                    <b>A Schengen visa is a short-stay visa that allows a person to travel to any members of the Schengen Area, per stays up to 90 days for tourism or business purposes.</b><br>
                    The Schengen visa is the most common visa for Europe. It enables its holder to enter, freely travel within, and leave the Schengen zone from any of the Schengen member countries. There are no border controls within the Schengen Zone.
                  </div>
                </div>
                <div class="tab">
                  <input type="radio" id="rd2" name="rd">
                  <label class="tab-label" for="rd2">Who Needs a Visa to Enter Europe?</label>
                  <div class="tab-content">
                    All nationals of third countries, which have yet not reached a visa-liberalization agreement with the Schengen member states, need to obtain a visa prior of their arrival in Europe.
                  </div>
                </div>
                <div class="tab">
                  <input type="radio" id="rd3" name="rd">
                  <label class="tab-label" for="rd3">Travel Documents and Entry Requirements for non-EU Nationals</label>
                  <div class="tab-content">
                    You will have to present several documents at the Schengen port of entry, in order to be permitted to enter, if you are a non-EU/Schengen country national, regardless if you are a visa-exempt or not.The documents you need to provide when entering the Schengen Area are as follows:
                    <ul>
                      <li><b>Valid Passport.</b>Issued within the previous 10 years and valid for at least 3 months after the date you intend to leave the EU.</li>
                      <li><b>Schengen Visa. </b>If you are a national of one of the third countries in need of a visa.</li>
                    </ul>
                    EU/Schengen border officials may also ask for other information and documents such as sufficient funds,  proof of accommodation, how long you intend to stay, round-trip airline ticket, the purpose of your entry, travel insurance, invitation letter, etc.<br>
                    Please, make sure that the border officer gives you an entry stamp in your passport when you enter the Schengen area. Without a stamp, you could be fined or detained.
                  </div>
                </div>
                <div class="tab">
                  <input type="radio" id="rd4" name="rd">
                  <label class="tab-label" for="rd4">Which Europe Countries issue Schengen Visas?</label>
                  <div class="tab-content">
                    The Schengen zone includes the 26 countries that have signed the Schengen agreement, which allows citizens of member countries to travel within the zone freely, without passing through passport and border control.<br>
                    Each member country of the Schengen zone can issue Schengen visas.
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <?php include('includes/footer.php'); ?>
      
      <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
      <script>
        var popup = document.getElementById('popup-wrapper');
      var btn = document.getElementById("popup-btn");
      var span = document.getElementById("close");
      btn.onclick = function() {
          popup.classList.add('show');
      }
      span.onclick = function() {
          popup.classList.remove('show');
      }

      window.onclick = function(event) {
          if (event.target == popup) {
              popup.classList.remove('show');
          }
      }
      </script>
    </div>
  </body>
</html>