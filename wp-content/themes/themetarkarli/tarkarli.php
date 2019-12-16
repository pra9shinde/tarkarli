<?php
/**
 * Template Name: Tarkarli
 */
get_header();
?>

<aside id="colorlib-hero">
  <div class="flexslider">
    <ul class="slides">
      <li style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/Banner/tarkarli-beach-hotels-history-malvan.jpg);" alt="tarkarli beach hotels history malvan" title="tarkarli beach hotels history malvan">
        <div class="overlay"></div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
              <div class="slider-text-inner text-center">
                <h2 style="color:#fd0">Know more about your destination</h2>
                <h1 style="color:#fd0">Tarkarli</h1>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</aside>

<!--Timeline-->
<style type="text/css">
  /* --------------------------------

    Modules - reusable parts of our design

    -------------------------------- */
  .cd-container {
    /* this class is used to give a max-width to the element it is applied to, and center it horizontally when it reaches that max-width */
    width: 90%;
    max-width: 1170px;
    margin: 0 auto;
  }

  .cd-container::after {
    /* clearfix */
    content: '';
    display: table;
    clear: both;
  }



  #cd-timeline {
    position: relative;
    padding: 2em 0;
    margin-top: 2em;
    margin-bottom: 2em;
  }

  #cd-timeline::before {
    /* this is the vertical line */
    content: '';
    position: absolute;
    top: 0;
    left: 18px;
    height: 100%;
    width: 4px;
    background: #d7e4ed;
  }

  @media only screen and (min-width: 1170px) {
    #cd-timeline {
      margin-top: 3em;
      margin-bottom: 3em;
    }

    #cd-timeline::before {
      left: 50%;
      margin-left: -2px;
    }
  }

  .cd-timeline-block {
    position: relative;
    margin: 2em 0;
  }

  .cd-timeline-block::after {
    clear: both;
    content: "";
    display: table;
  }

  .cd-timeline-block:first-child {
    margin-top: 0;
  }

  .cd-timeline-block:last-child {
    margin-bottom: 0;
  }

  @media only screen and (min-width: 1170px) {
    .cd-timeline-block {
      margin: 4em 0;
    }

    .cd-timeline-block:first-child {
      margin-top: 0;
    }

    .cd-timeline-block:last-child {
      margin-bottom: 0;
    }
  }

  .cd-timeline-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    box-shadow: 0 0 0 4px #ffffff, inset 0 2px 0 rgba(0, 0, 0, 0.08), 0 3px 0 4px rgba(0, 0, 0, 0.05);
  }

  .cd-timeline-img img {
    display: block;
    width: 24px;
    height: 24px;
    position: relative;
    left: 50%;
    top: 50%;
    margin-left: -12px;
    margin-top: -12px;
  }

  .cd-timeline-img.cd-picture {
    background: #75ce66;
  }

  .cd-timeline-img.cd-movie {
    background: #c03b44;
  }

  .cd-timeline-img.cd-location {
    background: #f0ca45;
  }

  @media only screen and (min-width: 1170px) {
    .cd-timeline-img {
      width: 60px;
      height: 60px;
      left: 50%;
      margin-left: -30px;
      /* Force Hardware Acceleration in WebKit */
      -webkit-transform: translateZ(0);
      -webkit-backface-visibility: hidden;
    }

    .cssanimations .cd-timeline-img.is-hidden {
      visibility: hidden;
    }

    .cssanimations .cd-timeline-img.bounce-in {
      visibility: visible;
      -webkit-animation: cd-bounce-1 0.6s;
      -moz-animation: cd-bounce-1 0.6s;
      animation: cd-bounce-1 0.6s;
    }
  }

  @-webkit-keyframes cd-bounce-1 {
    0% {
      opacity: 0;
      -webkit-transform: scale(0.5);
    }

    60% {
      opacity: 1;
      -webkit-transform: scale(1.2);
    }

    100% {
      -webkit-transform: scale(1);
    }
  }

  @-moz-keyframes cd-bounce-1 {
    0% {
      opacity: 0;
      -moz-transform: scale(0.5);
    }

    60% {
      opacity: 1;
      -moz-transform: scale(1.2);
    }

    100% {
      -moz-transform: scale(1);
    }
  }

  @keyframes cd-bounce-1 {
    0% {
      opacity: 0;
      -webkit-transform: scale(0.5);
      -moz-transform: scale(0.5);
      -ms-transform: scale(0.5);
      -o-transform: scale(0.5);
      transform: scale(0.5);
    }

    60% {
      opacity: 1;
      -webkit-transform: scale(1.2);
      -moz-transform: scale(1.2);
      -ms-transform: scale(1.2);
      -o-transform: scale(1.2);
      transform: scale(1.2);
    }

    100% {
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -ms-transform: scale(1);
      -o-transform: scale(1);
      transform: scale(1);
    }
  }

  .cd-timeline-content {
    position: relative;
    margin-left: 60px;
    background: #ffffff;
    border-radius: 0.25em;
    padding: 1em;
    box-shadow: 0 3px 0 #d7e4ed;
  }

  .cd-timeline-content::after {
    clear: both;
    content: "";
    display: table;
  }

  .cd-timeline-content h2 {
    color: #303e49;
  }

  .cd-timeline-content p,
  .cd-timeline-content .cd-read-more,
  .cd-timeline-content .cd-date {
    font-size: 15px !important;
    font-size: 0.8125rem !important;
  }

  .cd-timeline-content .cd-read-more,
  .cd-timeline-content .cd-date {
    display: inline-block;
  }

  .cd-timeline-content p {
    margin: 1em 0 !important;
    line-height: 1.6;
  }

  .cd-timeline-content .cd-read-more {
    float: right;
    padding: .8em 1em;
    background: #acb7c0;
    color: #ffffff;
    border-radius: 0.25em;
  }

  .no-touch .cd-timeline-content .cd-read-more:hover {
    background-color: #bac4cb;
  }

  .cd-timeline-content .cd-date {
    float: left;
    padding: .8em 0;
    opacity: .7;
  }

  .cd-timeline-content::before {
    content: '';
    position: absolute;
    top: 16px;
    right: 100%;
    height: 0;
    width: 0;
    border: 7px solid transparent;
    border-right: 7px solid #ffffff;
  }

  @media only screen and (min-width: 768px) {
    .cd-timeline-content h2 {
      font-size: 20px !important;
      font-size: 1.25rem !important;
    }

    .cd-timeline-content p {
      font-size: 16px !important;
      font-size: 1rem !important;
    }

    .cd-timeline-content .cd-read-more,
    .cd-timeline-content .cd-date {
      font-size: 14px !important;
      font-size: 0.875rem !important;
    }
  }

  @media only screen and (min-width: 1170px) {
    .cd-timeline-content {
      margin-left: 0;
      padding: 1.6em;
      width: 45%;
    }

    .cd-timeline-content::before {
      top: 24px;
      left: 100%;
      border-color: transparent;
      border-left-color: #ffffff;
    }

    .cd-timeline-content .cd-read-more {
      float: left;
    }

    .cd-timeline-content .cd-date {
      position: absolute;
      width: 100%;
      left: 122%;
      top: 6px;
      font-size: 16px !important;
    }

    .cd-timeline-block:nth-child(even) .cd-timeline-content {
      float: right;
    }

    .cd-timeline-block:nth-child(even) .cd-timeline-content::before {
      top: 24px;
      left: auto;
      right: 100%;
      border-color: transparent;
      border-right-color: #ffffff;
    }

    .cd-timeline-block:nth-child(even) .cd-timeline-content .cd-read-more {
      float: right;
    }

    .cd-timeline-block:nth-child(even) .cd-timeline-content .cd-date {
      left: auto;
      right: 122%;
      text-align: right;
    }

    .cssanimations .cd-timeline-content.is-hidden {
      visibility: hidden;
    }

    .cssanimations .cd-timeline-content.bounce-in {
      visibility: visible;
      -webkit-animation: cd-bounce-2 0.6s;
      -moz-animation: cd-bounce-2 0.6s;
      animation: cd-bounce-2 0.6s;
    }
  }

  @media only screen and (min-width: 1170px) {

    /* inverse bounce effect on even content blocks */
    .cssanimations .cd-timeline-block:nth-child(even) .cd-timeline-content.bounce-in {
      -webkit-animation: cd-bounce-2-inverse 0.6s;
      -moz-animation: cd-bounce-2-inverse 0.6s;
      animation: cd-bounce-2-inverse 0.6s;
    }
  }

  @-webkit-keyframes cd-bounce-2 {
    0% {
      opacity: 0;
      -webkit-transform: translateX(-100px);
    }

    60% {
      opacity: 1;
      -webkit-transform: translateX(20px);
    }

    100% {
      -webkit-transform: translateX(0);
    }
  }

  @-moz-keyframes cd-bounce-2 {
    0% {
      opacity: 0;
      -moz-transform: translateX(-100px);
    }

    60% {
      opacity: 1;
      -moz-transform: translateX(20px);
    }

    100% {
      -moz-transform: translateX(0);
    }
  }

  @keyframes cd-bounce-2 {
    0% {
      opacity: 0;
      -webkit-transform: translateX(-100px);
      -moz-transform: translateX(-100px);
      -ms-transform: translateX(-100px);
      -o-transform: translateX(-100px);
      transform: translateX(-100px);
    }

    60% {
      opacity: 1;
      -webkit-transform: translateX(20px);
      -moz-transform: translateX(20px);
      -ms-transform: translateX(20px);
      -o-transform: translateX(20px);
      transform: translateX(20px);
    }

    100% {
      -webkit-transform: translateX(0);
      -moz-transform: translateX(0);
      -ms-transform: translateX(0);
      -o-transform: translateX(0);
      transform: translateX(0);
    }
  }

  @-webkit-keyframes cd-bounce-2-inverse {
    0% {
      opacity: 0;
      -webkit-transform: translateX(100px);
    }

    60% {
      opacity: 1;
      -webkit-transform: translateX(-20px);
    }

    100% {
      -webkit-transform: translateX(0);
    }
  }

  @-moz-keyframes cd-bounce-2-inverse {
    0% {
      opacity: 0;
      -moz-transform: translateX(100px);
    }

    60% {
      opacity: 1;
      -moz-transform: translateX(-20px);
    }

    100% {
      -moz-transform: translateX(0);
    }
  }

  @keyframes cd-bounce-2-inverse {
    0% {
      opacity: 0;
      -webkit-transform: translateX(100px);
      -moz-transform: translateX(100px);
      -ms-transform: translateX(100px);
      -o-transform: translateX(100px);
      transform: translateX(100px);
    }

    60% {
      opacity: 1;
      -webkit-transform: translateX(-20px);
      -moz-transform: translateX(-20px);
      -ms-transform: translateX(-20px);
      -o-transform: translateX(-20px);
      transform: translateX(-20px);
    }

    100% {
      -webkit-transform: translateX(0);
      -moz-transform: translateX(0);
      -ms-transform: translateX(0);
      -o-transform: translateX(0);
      transform: translateX(0);
    }
  }
</style>

<div class="row" style="">
  <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box fadeInUp animated-fast" style="margin-bottom: 0px;margin-top:60px;">
    <h2>History of Malvan Tarkarli</h2>
    <p>Malvan (also written as Malwan) About this soundpronunciation (help·info) is a town and taluka in Sindhudurg District, the southernmost district of Maharashtra State, India, well known for the historically important Sindhudurg Fort. Malvan taluka consists of villages such as Aangnechi Wadi (Village: Masure), Achra, Khalchi Devli, Jamdul, Juva, Pankhol, Talasheel and Sarjekot. The main occupation here is fishing with the staple diet of the local people fish curry and rice. The town produces Alphonso mangoes and is also known for sweets such as Malvani Khaja made from gram-besan flour and coated jaggery as well as Malvani Ladoos. Other sweets that attract tourists are Konkani meva, Aambawadi, Fanaspoli, Dryfriuts, Kajuwadi, Naralachya Wadya, Malvani Masale. Malvani Dashavtar, a drama-play based on mythological stories, is an important cultural element of the area.</p>

    <p>Several apocryphal and some more credible stories related to the name Malvan exist. Salt producers use term Mahalavan to describe a region rich in salt, a compound word from "Maha" meaning great, and "lavan" meaning plantation (or salt). Another possibility is a phonetic derivative of the compound of "Mad" and "Ban", Malvani for coconut trees and garden respectively, relating to the large number of coconut trees in the region.</p>

    <h2>Going Back to the history</h2>
  </div>
</div>
<section id="cd-timeline" class="cd-container">

  <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box fadeInUp animated-fast">

  </div>
  <div class="cd-timeline-block">

    <div class="cd-timeline-img cd-picture">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-picture.svg" alt="Picture">
    </div> <!-- cd-timeline-img -->

    <div class="cd-timeline-content">
      <h2 style="font-size: 26px !important;">Name : Malvan</h2>
      <p style="font-size: 16px !important;">In many old books & articles some reference occurs as follows Largely planted coconut trees (Mad) formed a grove(wan), so it named as madwan & after some years it became Malwan.</p>
      <!--<a href="#0" class="cd-read-more">Read more</a>
      <span class="cd-date">Jan 14</span>-->
    </div> <!-- cd-timeline-content -->
  </div> <!-- cd-timeline-block -->

  <div class="cd-timeline-block">

    <div class="cd-timeline-img cd-movie">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-movie.svg" alt="Movie">
    </div> <!-- cd-timeline-img -->

    <div class="cd-timeline-content">
      <h2 style="font-size: 26px !important;">Before Shivaji Maharaj</h2>
      <p style="font-size: 16px !important;">Available historical records reveal that Chalukyas held sway over the region between sixth & eighth century. They were followed by the rulers of Devgiri (10th century) & Vijaynagar (14th century ). Adilshahi control came in 15th century followed my Maratha rule of Shivaji in 16th century & British rule in 17th century.</p>
    </div> <!-- cd-timeline-content -->
  </div> <!-- cd-timeline-block -->

  <div class="cd-timeline-block">
    <div class="cd-timeline-img cd-picture">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-picture.svg" alt="Picture">
    </div> <!-- cd-timeline-img -->

    <div class="cd-timeline-content">
      <h2 style="font-size: 26px !important;">Reign of Shivaji Maharaj</h2>
      <p style="font-size: 16px !important;">Before Shivaji, Destruction of temples and their conversion into mosques was a common practice in Konkan region. Forced conversion to Islam was a routine affair for the poor sections of Hindu society. The worst state of affairs was the acceptance of slavery and service under the sultans by the Hindu rulers.
        At such time, Shivaji, a noble soul sent down on earth by God in answer to the austerities practiced by many a saint in the middle ages. The Maratha king thereafter took steps to protect the west coast. Shivaji was the first Indian king to conduct amphibious operations, i.e., joint attack using cavalry, army and navy. After visiting places like Vengurle, Dabhol , Anjanvel, Vijaydurga, Devgad, Ratnagiri, Palgad, Janjeera with these in view.</p>
    </div> <!-- cd-timeline-content -->
  </div> <!-- cd-timeline-block -->

  <div class="cd-timeline-block">
    <div class="cd-timeline-img cd-location">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-location.svg" alt="Location">
    </div> <!-- cd-timeline-img -->

    <div class="cd-timeline-content">
      <h2 style="font-size: 26px !important;">Sindhudurg Fort</h2>
      <p style="font-size: 16px !important;">Due to sindhudurga fort, wind blowing from south direction calmed down & force of lapping waves on sea shore is reduced. Finaly, A long stretched band of silver sand created in east-west direction. People of Gabit & Bhandari community came here & settled by constructing their houses. Two parallel roads were constructed to join Medha & Dewoolwada. Southern road is near to Malvan port so it always became crowded. People staying across the road started to sell vegetables, groceries & other home made items. After some years a big market is established on the same road. Now days, That place is known as Malvan city.

      </p>

    </div> <!-- cd-timeline-content -->
  </div> <!-- cd-timeline-block -->

  <div class="cd-timeline-block">
    <div class="cd-timeline-img cd-location">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-location.svg" alt="Location">
    </div> <!-- cd-timeline-img -->

    <div class="cd-timeline-content">
      <h2 style="font-size: 26px !important;">After Shivaji Maharaj</h2>
      <p style="font-size: 16px !important;">After Shivaji’s death in 1680, his son Sambhaji succeeded the throne. That marked the beginning of the time when Mughals tries to secure foothold in Konkan. After Sambhaji , Rajaram comes on a throne for a while. His wife Tarabai who succeeded him could not get along with his step brother Shahu. Rani Tarabai entrusted to defence of Konkan coast to the upcoming Kanhoji Angre. But Angre struck a deal with Shahu entrusting the coastal defense to him. Even though, Malvan-Panhala Belt have remained with Tarabai. In 1731, by a treaty between Shahu & Sambhaji raje Bhosale, Malvan –Panhala belt came under Bhosale and Malvan became the headquarters of the most active and destructive of the coast pirates.</p>
    </div> <!-- cd-timeline-content -->
  </div> <!-- cd-timeline-block -->

  <div class="cd-timeline-block">
    <div class="cd-timeline-img cd-movie">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-movie.svg" alt="Movie">
    </div> <!-- cd-timeline-img -->

    <div class="cd-timeline-content">
      <h2 style="font-size: 26px !important;">British History</h2>
      <p style="font-size: 16px !important;">British, as per their policy , tried to play Peshave against Angre. After the latter’s defeat, with the help of Peshave’s , British tried to gain the strength in the coastal region. Their ships started to travel in konkan region. They, however, had to face opposition from local Sardar. The Company then order British force under the major Gorden & Watson to capture fort. In 1766, Rani Jijabai Karveerkar from Kolhapur entered into treaty with British & got back the fort Sindhudurga.
      Malvan port became functional in 1850. Ships with spars & Canoe were used for transport goods. These ships were to be anchored near the present Chiwala beach. Bombay Steam Navigation (BSN) launched steam passenger service in 1875-76. This was followed by India Co-operative Navigation & Trading, Ratnagiri Steam navigation Company, Sindhia company, Shipping Corporation of India, Choughule company. After an accident to ’Rohini’ Boat in Rajkot Rocks, Shipping service ended for ever, It was 1973.
      </p>
    </div> <!-- cd-timeline-content -->
  </div> <!-- cd-timeline-block -->
</section> <!-- cd-timeline -->

<script type="text/javascript">
  jQuery(document).ready(function($) {
    var $timeline_block = $('.cd-timeline-block');

    //hide timeline blocks which are outside the viewport
    $timeline_block.each(function() {
      if ($(this).offset().top > $(window).scrollTop() + $(window).height() * 0.75) {
        $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
      }
    });

    //on scolling, show/animate timeline blocks when enter the viewport
    $(window).on('scroll', function() {
      $timeline_block.each(function() {
        if ($(this).offset().top <= $(window).scrollTop() + $(window).height() * 0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden')) {
          $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
        }
      });
    });
  });
</script>
<!--Timeline-->


<?php get_footer(); ?>