<div id="colorlib-subscribe" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/hotels-beach-tarkarli.jpg);" data-stellar-background-ratio="0.5" alt="hotels beach resorts tarkarli">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
        <h2>Sign Up for a Newsletter</h2>
        <p>Sign up for our mailing list to get latest updates and offers.</p>
        <form class="form-inline qbstp-header-subscribe">
          <div class="row">
            <div class="col-md-12 col-md-offset-0">
              <div class="form-group">
                <input type="text" class="form-control" id="email" placeholder="Enter your email">
                <button type="submit" class="btn btn-primary">Subscribe</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<style type="text/css">
  /******Send message animation css******/
  .ico-wrap {
    width: 60px;
    height: 40px;
    /*margin: 100px auto;*/
    background: black;
    position: fixed;
    z-index: 999;
    top: 50%;
    right: 47%;
  }

  .ico-wrap .top {
    position: absolute;
    transform-origin: top center;
    transform: scale(1, 1);
    animation: topFlip 3s infinite 0.8s;
  }

  .ico-wrap .top1 {
    width: 0;
    height: 0;
    display: block;
    border-top: 18px solid #fd0;
    border-left: 30px solid rgba(0, 0, 0, 0);
    border-right: 30px solid rgba(0, 0, 0, 0);
    border-bottom: 20px solid rgba(0, 0, 0, 0);
    z-index: 10;
  }

  .ico-wrap .top2 {
    width: 0;
    height: 0;
    display: block;
    border-top: 24px solid #000;
    border-left: 30px solid rgba(0, 0, 0, 0);
    border-right: 30px solid rgba(0, 0, 0, 0);
    border-bottom: 16px solid rgba(0, 0, 0, 0);
    position: absolute;
    top: 0;
    z-index: -1;
  }

  .ico-wrap .left {
    position: absolute;
    z-index: -2;
    top: 0;
    width: 0;
    height: 0;
    display: block;
    border-top: 20px solid rgba(0, 0, 0, 0);
    border-left: 30px solid #fd0;
    border-right: 30px solid rgba(0, 0, 0, 0);
    border-bottom: 20px solid rgba(0, 0, 0, 0);
    transform-origin: left center;
    transform: scale(1, 1);
    animation: leftFlip 3s infinite 3.2s;
  }

  .ico-wrap .right {
    position: absolute;
    z-index: -2;
    top: 0;
    width: 0;
    height: 0;
    display: block;
    border-top: 20px solid rgba(0, 0, 0, 0);
    border-left: 30px solid rgba(0, 0, 0, 0);
    border-right: 30px solid #fd0;
    border-bottom: 20px solid rgba(0, 0, 0, 0);
    transform-origin: right center;
    transform: scale(1, 1);
    animation: rightFlip 3s infinite 1.6s;
  }

  .ico-wrap .bottom {
    position: absolute;
    z-index: -2;
    top: 0;
    width: 0;
    height: 0;
    display: block;
    border-top: 20px solid rgba(0, 0, 0, 0);
    border-left: 30px solid rgba(0, 0, 0, 0);
    border-right: 30px solid rgba(0, 0, 0, 0);
    border-bottom: 20px solid #fd0;
    transform-origin: bottom center;
    transform: scale(1, 1);
    animation: bottomFlip 3s infinite 2.4s;
  }

  @keyframes topFlip {
    0% {
      transform: scale(1, 1);
    }

    25% {
      transform: scale(1, -1);
    }

    50% {
      transform: scale(1, 1);
    }
  }

  @keyframes rightFlip {
    0% {
      transform: scale(1, 1);
    }

    25% {
      transform: scale(-1, 1);
    }

    50% {
      transform: scale(1, 1);
    }
  }

  @keyframes bottomFlip {
    0% {
      transform: scale(1, 1);
    }

    25% {
      transform: scale(1, -1);
    }

    50% {
      transform: scale(1, 1);
    }
  }

  @keyframes leftFlip {
    0% {
      transform: scale(1, 1);
    }

    25% {
      transform: scale(-1, 1);
    }

    50% {
      transform: scale(1, 1);
    }
  }

  /************/
</style>

<!--animation for send message-->
<div class="msg-animation" style="display: none;z-index:999; ">
  <div class="text">
    <p>Sending Mail</p>
  </div>
  <div class="ico-wrap">
    <div class="top">
      <div class="top1"></div>
      <div class="top2"></div>
    </div>
    <div class="right"></div>
    <div class="bottom"></div>
    <div class="left"></div>
  </div>
</div>
<!---->


<style type="text/css">
  /***failure modal style****/
  #myModalfailure {
    top: 70px;
  }

  #myModalfailure .modal-confirm {
    color: #636363;
    width: 325px;
  }

  #myModalfailure .modal-confirm .modal-content {
    padding: 20px;
    border-radius: 5px;
    border: none;
  }

  #myModalfailure .modal-confirm .modal-header {
    border-bottom: none;
    position: relative;
  }

  #myModalfailure .modal-confirm h4 {
    text-align: center;
    font-size: 26px;
    margin: 30px 0 -15px;
  }

  #myModalfailure .modal-confirm .form-control,
  .modal-confirm .btn {
    min-height: 40px;
    border-radius: 3px;
  }

  #myModalfailure .modal-confirm .close {
    position: absolute;
    top: -5px;
    right: -5px;
  }

  #myModalfailure .modal-confirm .modal-footer {
    border: none;
    text-align: center;
    border-radius: 5px;
    font-size: 13px;
  }

  #myModalfailure .modal-confirm .icon-box {
    color: #fff;
    position: absolute;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: -70px;
    width: 95px;
    height: 95px;
    border-radius: 50%;
    z-index: 9;
    background: #ef513a;
    padding: 15px;
    text-align: center;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  }

  #myModalfailure .modal-confirm .icon-box i {
    font-size: 56px;
    position: relative;
    top: 4px;
  }

  #myModalfailure .modal-confirm.modal-dialog {
    margin-top: 80px;
  }

  #myModalfailure .modal-confirm .btn {
    color: #fff;
    border-radius: 4px;
    background: #ef513a;
    text-decoration: none;
    transition: all 0.4s;
    line-height: normal;
    border: none;
  }

  #myModalfailure .modal-confirm .btn:hover,
  .modal-confirm .btn:focus {
    background: #da2c12;
    outline: none;
  }

  #myModalfailure .trigger-btn {
    display: inline-block;
    margin: 100px auto;
  }

  /***********/

  /******sucess modal style*******/
  #myModalsuccess {
    top: 70px;
  }

  .modal-confirm {
    color: #636363;
    width: 325px;
  }

  .modal-confirm .modal-content {
    padding: 20px;
    border-radius: 5px;
    border: none;
  }

  .modal-confirm .modal-header {
    border-bottom: none;
    position: relative;
  }

  .modal-confirm h4 {
    text-align: center;
    font-size: 26px;
    margin: 30px 0 -15px;
  }

  .modal-confirm .form-control,
  .modal-confirm .btn {
    min-height: 40px;
    border-radius: 3px;
  }

  .modal-confirm .close {
    position: absolute;
    top: -5px;
    right: -5px;
  }

  .modal-confirm .modal-footer {
    border: none;
    text-align: center;
    border-radius: 5px;
    font-size: 13px;
  }

  .modal-confirm .icon-box {
    color: #fff;
    position: absolute;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: -70px;
    width: 95px;
    height: 95px;
    border-radius: 50%;
    z-index: 9;
    background: #82ce34;
    padding: 15px;
    text-align: center;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  }

  .modal-confirm .icon-box i {
    font-size: 58px;
    position: relative;
    top: 3px;
  }

  .modal-confirm.modal-dialog {
    margin-top: 80px;
  }

  .modal-confirm .btn {
    color: #fff;
    border-radius: 4px;
    background: #82ce34;
    text-decoration: none;
    transition: all 0.4s;
    line-height: normal;
    border: none;
  }

  .modal-confirm .btn:hover,
  .modal-confirm .btn:focus {
    background: #6fb32b;
    outline: none;
  }

  .trigger-btn {
    display: inline-block;
    margin: 100px auto;
  }

  /*********/
</style>

<!-- SucessModal -->
<div id="myModalsuccess" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="material-icons">&#xE876;</i>
        </div>
        <h4 class="modal-title">Thanks for Reaching Out!</h4>
      </div>
      <div class="modal-body">
        <p class="text-center">We’re thrilled to hear from you. Our inbox can’t wait to get your messages, so talk to us any time you like.<br>Cheers!</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
<!---->

<!-- FailureModal -->
<!-- Modal HTML -->
<div id="myModalfailure" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="material-icons">&#xE5CD;</i>
        </div>
        <h4 class="modal-title">Sorry!</h4>
      </div>
      <div class="modal-body">
        <p class="text-center">Sorry something went wrong. Please go back and try again.</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger btn-block" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>


<footer id="colorlib-footer" role="contentinfo">
  <div class="container">
    <div class="row row-pb-md">
      <div class="col-md-3 colorlib-widget">
        <h4>Incredible Tarkarli</h4>
        <p>Best in class tourism in Tarkarli which values their customers instead of focusing on marketing and profits.</p>
        <p>
          <ul class="colorlib-social-icons">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="https://www.facebook.com/Incredibletarkarli/" target="_blank"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-linkedin"></i></a></li>
            <li><a href="#"><i class="icon-dribbble"></i></a></li>
          </ul>
        </p>
      </div>
      <div class="col-md-3 colorlib-widget">
        <h4>Book Now</h4>
        <p>
          <ul class="colorlib-footer-links">
            <li><a href="#">Hotels in Tarkarli</a></li>
            <li><a href="#">Car Rent in Tarkarli</a></li>
            <li><a href="#">Bike rent in Tarkarli</a></li>
            <li><a href="#">Tarkarli Beach Resorts</a></li>
            <li><a href="#">Water Sports in Tarkarli</a></li>
          </ul>
        </p>
      </div>
      <div class="col-md-2 colorlib-widget">
        <h4>Quick Links</h4>
        <p>
          <ul class="colorlib-footer-links">
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li><a href="<?php echo home_url(); ?>/about-tarkarli">Tarkarli</a></li>
            <li><a href="<?php echo home_url(); ?>">Hotels</a></li>
            <li><a href="<?php echo home_url(); ?>/services/">Services</a></li>
            <li><a href="<?php echo home_url(); ?>/about-us/">About us</a></li>
            <li><a href="<?php echo home_url(); ?>/contact-us/">Contact</a></li>
          </ul>
        </p>
      </div>

      <div class="col-md-3 col-md-push-1">
        <h4>Contact Information</h4>
        <ul class="colorlib-footer-links">
          <li>Post Wairy Bhutnath, <br>
            Taluka, Malvan, Maharashtra 416606</li>
          <li><a href="tel://1234567920">+ 919821517842</a></li>
          <li><a href="mailto:info@yoursite.com">info@incredibletarkarli.com</a></li>
          <li><a href="#">incredibletarkarli.com</a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> All rights reserved <a href="https://colorlib.com" target="_blank">Incredible Tarkarli </a>| Visit <a href="https://colorlib.com" target="_blank">Colorlib</a>
        </p>
        <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
      </div>
    </div>
  </div>
</footer>
</div>

<div class="gototop js-top">
  <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<!-- Load Facebook SDK for JavaScript -->
<style>
    .fb_dialog.fb_dialog_advanced {
      right: 18pt;
      margin-right: -10px;
      margin-bottom: 60px;
  }
  iframe.fb_customer_chat_bounce_in_v2 {
      right: 9pt;
      margin-right: -10px;
      margin-bottom: 60px;
  }
  iframe.fb_customer_chat_bounce_out_v2 {
      right: 9pt;
      margin-right: -10px;
      margin-bottom: 60px;
  }
</style>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v5.0'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="602687096824361"
theme_color="#ffdd00"
logged_in_greeting="Hi! You can enquire right now!!"
logged_out_greeting="Hi! You can enquire right now!!">
</div>

<!-- jQuery -->

<?php wp_footer(); ?>

<script>
  // [].slice.call( document.querySelectorAll( '.photostack' ) ).forEach( function( el ) { new Photostack( el ); } );

  new Photostack(document.getElementById('photostack-1'), {
    callback: function(item) {
      //console.log(item)
    }
  });
</script>

<script>
  //add backgroud to navigation menu when scrolled down
  $(window).scroll(function() {
    if ($(window).scrollTop() >= ($(document).height() - $(window).height()) * 0.01) {
      $('.colorlib-nav').css('background', '#2c2e3e');
      $('.colorlib-nav').css('top', '-30px');
      $('.colorlib-nav .top-menu').css('padding', '22px 35px');
      $('.menu-1').css('margin-top', '15px');
      $('#colorlib-logo').css('margin-top', '15px');
    } else {
      $('.colorlib-nav').css('background', '');
    }
  });
</script>


</body>

</html>