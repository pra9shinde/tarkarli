<?php

//Function to load Stylesheets 
function load_stylesheets(){
    //Animate.css
    wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.css',array(),1,'all');
    wp_enqueue_style('animate');

    //Icomoon Icon Fonts
    wp_register_style('icomoon', get_template_directory_uri() . '/assets/css/icomoon.css',array(),1,'all');
    wp_enqueue_style('icomoon');

    //Bootstrap CSS
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css',array(),1,'all');
    wp_enqueue_style('bootstrap');

    //Magnific Popup 
    wp_register_style('magnificpopup', get_template_directory_uri() . '/assets/css/magnific-popup.css',array(),1,'all');
    wp_enqueue_style('magnificpopup');

    //Flexslider
    wp_register_style('flexslider', get_template_directory_uri() . '/assets/css/flexslider.css',array(),1,'all');
    wp_enqueue_style('flexslider');


    //Owl Carousel
    wp_register_style('owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css',array(),1,'all');
    wp_enqueue_style('owl');

    //Owl Default
    wp_register_style('owldefault', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css',array(),1,'all');
    wp_enqueue_style('owldefault');

    //Date Picker
    wp_register_style('datepicker', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.css',array(),1,'all');
    wp_enqueue_style('datepicker');

    //Flaticons
    wp_register_style('flaticons', get_template_directory_uri() . '/assets/fonts/flaticon/font/flaticon.css',array(),1,'all');
    wp_enqueue_style('flaticons');

    //Theme Style
    wp_register_style('themestyle', get_template_directory_uri() . '/assets/css/style.css',array(),1,'all');
    wp_enqueue_style('themestyle');

    //Normalize
    wp_register_style('normalize', get_template_directory_uri() . '/assets/css/image_gallery/normalize.css',array(),1,'all');
    wp_enqueue_style('normalize');

    //Demo Css
    wp_register_style('democss', get_template_directory_uri() . '/assets/css/image_gallery/demo.css',array(),1,'all');
    wp_enqueue_style('democss');

    //Components css
    wp_register_style('component', get_template_directory_uri() . '/assets/css/image_gallery/component.css',array(),1,'all');
    wp_enqueue_style('component');

    //Custom css
    wp_register_style('custom', get_template_directory_uri() . '/assets/css/custom.css',array(),1,'all');
    wp_enqueue_style('custom');
}
//Adding stylesheet function to wp
add_action('wp_enqueue_scripts', 'load_stylesheets');


function loadjs(){
    //Jquery
    // wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js',array(),1,1,1);
    // wp_enqueue_script('jquery'); 

    //Modernizr JS
    wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js',array('jquery'),1,1,1);
    wp_enqueue_script('modernizr'); 


    //Easing
    wp_register_script('easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js',array('jquery'),1,1,1);
    wp_enqueue_script('easing'); 

    //Bootstrap
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array('jquery'),1,1,1);
    wp_enqueue_script('bootstrap'); 

    //Classie
    wp_register_script('waypoint', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js',array('jquery'),1,1,1);
    wp_enqueue_script('waypoint'); 

    //FlexSlider
    wp_register_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js',array('jquery'),1,1,1);
    wp_enqueue_script('flexslider'); 

    //Owl
    wp_register_script('owljs', get_template_directory_uri() . '/assets/js/owl.carousel.min.js',array('jquery'),1,1,1);
    wp_enqueue_script('owljs'); 

    //Magnific
    wp_register_script('magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js',array('jquery'),1,1,1);
    wp_enqueue_script('magnific');

    //Magnific options
    wp_register_script('magnificoptions', get_template_directory_uri() . '/assets/js/magnific-popup-options.js',array('jquery'),1,1,1);
    wp_enqueue_script('magnificoptions');

    //Datepicker
    wp_register_script('datepickerjs', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js',array('jquery'),1,1,1);
    wp_enqueue_script('datepickerjs');

    //Stellar
    wp_register_script('stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js',array('jquery'),1,1,1);
    wp_enqueue_script('stellar');

    //Wow
    wp_register_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), 1,1,1);
    wp_enqueue_script('wow');

    //main
    wp_register_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 1,1,1);
    wp_enqueue_script('mainjs');

    //custom
    wp_register_script('customjs', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), 1,1,1);
    wp_enqueue_script('customjs');

    //classie
    wp_register_script('classie', get_template_directory_uri() . '/assets/js/image_gallery/classie.js', array('jquery'), 1,1,1);
    wp_enqueue_script('classie');

    //photostack
    wp_register_script('photostack', get_template_directory_uri() . '/assets/js/image_gallery/photostack.js', array('jquery'), 1,1,1);
    wp_enqueue_script('photostack');
}
add_action( 'wp_enqueue_scripts', 'loadjs' );


?>

