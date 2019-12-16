<?php

/**
 * Template Name: Contact Us
 */
get_header();
?>

<aside id="colorlib-hero">
    <div class="flexslider" title="Contact Incredible Tarkarli Best Hotels in Tarkarli Best Beach Resorts in Tarkarli">
        <ul class="slides">
            <li style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/contact/hotels-beaches-beach-resorts-tarkarli.JPG);" alt="hotels, beaches, beach resorts in Tarkarli" title="hotels, beaches, beach resorts in Tarkarli">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2 style="color:#fd0">Have questions or any feedback?</h2>
                                <h1 style="color:#fd0">Contact us</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<div id="colorlib-contact" style="padding-bottom:0px">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 animate-box">
                <h3>Get In Touch</h3>
                <form method="post" id="contact_form">
                    <div class="row form-group">
                        <div class="col-md-6 padding-bottom">
                            <label for="fname">First Name</label>
                            <input type="text" id="contactus_name" name="contactus_name" onkeypress="validate_form(this.id,1,true,event)" onfocus="validate_form(this.id,1,true,event)" class="form-control error" placeholder="Your First Name*">
                            <span id="contactus_name-error" style="color:#ff5303;"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="lname">Last Name</label>
                            <input type="text" id="contactus_lname_name" name="contactus_lname_name" onkeypress="validate_form(this.id,1,true,event)" onfocus="validate_form(this.id,1,true,event)" class="form-control error" placeholder="Your Second Name*">
                            <span id="contactus_lname_name-error" style="color:#ff5303;"></span>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="email">Email</label>
                            <input type="text" id="contactus_email" name="contactus_email" class="form-control error" placeholder="Your Email Address*" onkeypress="validate_form(this.id,3,true,event,event)" onfocus="validate_form(this.id,3,true,event,event)">
                            <span id="contactus_email-error" style="color:#ff5303;"></span>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="subject">Subject</label>
                            <input type="text" id="contactus_subject" name="contactus_subject" class="form-control" placeholder="Your subject of this message">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="message">Message</label>
                            <textarea name="contactus_message" id="contactus_message" cols="30" rows="10" class="form-control" onkeypress="validate_form(this.id,1,true,event)" onfocus="validate_form(this.id,1,true,event)" placeholder="Say something about us"></textarea>
                            <span id="contactus_message-error" style="color:#ff5303;"></span>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <input type="button" name="contact_submit" id="contact_submit" value="Send Message" class="btn btn-primary btn-block" onclick="contact_us()">
                    </div>

                </form>
            </div>
            <div class="col-md-10 col-md-offset-1 animate-box">
                <h3>Contact Information</h3>
                <div class="row contact-info-wrap">
                    <div class="col-md-3">
                        <p><span><i class="icon-location"></i></span> Post Wairy Bhutnath,
                            <br> Taluka, Malvan, Maharashtra, 416606</p>
                    </div>
                    <div class="col-md-3">
                        <p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 919821517842</a></p>
                    </div>
                    <div class="col-md-3">
                        <p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@incredibletarkarli.com</a></p>
                    </div>
                    <div class="col-md-3">
                        <p><span><i class="icon-globe"></i></span> <a href="#">incredibletarkarli.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gmapt">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6739.713027758184!2d73.48384606391744!3d16.032165342680564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x76ff876ab6f39963!2sWairy%20Ubhatwadi%20Beach!5e0!3m2!1sen!2sin!4v1576338025169!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="">
    </iframe>
</div>


<?php get_footer();?>