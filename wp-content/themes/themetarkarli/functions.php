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

    wp_deregister_script('jquery');//WP ships with Jquery hence deregister it and load our

    //Jquery
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js',array(),1,1,1);
    wp_enqueue_script('jquery'); 

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

    //classie
    wp_register_script('classie', get_template_directory_uri() . '/assets/js/image_gallery/classie.js', array('jquery'), 1,1,1);
    wp_enqueue_script('classie');

    //photostack
    wp_register_script('photostack', get_template_directory_uri() . '/assets/js/image_gallery/photostack.js', array('jquery'), 1,1,1);
    wp_enqueue_script('photostack');

    //custom
    wp_register_script('customjs', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'));
    wp_enqueue_script( 'customjs' );

    //Required for AJAX calls in wordpress
    wp_localize_script('customjs', 'ajax_obj', array('ajaxurl' =>admin_url('admin-ajax.php')));

} 
add_action( 'wp_enqueue_scripts', 'loadjs' );


//adding a menu in appearance tab of wordpress
add_theme_support('menus');
//Register Menu
register_nav_menus(
    array(
        'top-menu' => __('Main Menu','theme'),
    )
);


//Ajax PHP function insert hotel enquiry
function insert_hotel(){
    $form_data = $_POST['form_data'];
    $name = $form_data['hotel_name'];
    $email = $form_data['hotel_email'];
    $phone = $form_data['hotel_contact'];
    $from_date = $form_data['hotel_from_date'];
    $to_date = $form_data['hotel_to_date'];
    $persons = $form_data['hotel_people'];

    global $wpdb;//WP Database name
    //Get Enquiry Type ID
    $result = $wpdb->get_results("SELECT enq_type_id FROM wp_enquiry_type WHERE enquiry_name = 'hotel'");
    $enq_type_id = $result[0]->enq_type_id; 

    //Insert into hotel enquiry table
    $table_name = $wpdb->prefix . "hotel_enquiry";
    $wpdb->insert( $table_name, array(
        'name' => $name,
        'email' => $email,
        'contact' => $phone,
        'check_in' => date("Y-m-d", strtotime($from_date)),
        'check_out' => date("Y-m-d", strtotime($to_date)),
        'guest' => (int)$persons
        )
    );
    $hotel_enq_id = $wpdb->insert_id;
    //Insert into enquiries table
    $table_name = $wpdb->prefix . "enquiries";
    $wpdb->insert( $table_name, array(
        'type_id' => $enq_type_id,
        'ref_id' => $hotel_enq_id
        )
    );
    //For Debugging Errors
    $wpdb->last_error;$wpdb->print_error;$wpdb->last_query;

    //Send Email to Customer
    $to = $email;
    $subject = 'Incredible Tarkarli Hotel Enquiry Response';
    $body = file_get_contents(get_template_directory_uri(). 'my_email_template.php');
    $headers = array('Content-Type: text/html; charset=UTF-8','From: Incredible Tarkarli Toursim <info@incredibletarkarli.com>');
    $mail_sent = false;
    $first_email = wp_mail( $to, $subject, $body, $headers );

    if($first_email){
        $mail_sent = true;
        //Send Email to IncredibleTarkarli Admin
        $to = "info@incredibletarkarli.com";
        $subject = 'Incredible Tarkarli Hotel Enquiry -' + $hotel_enq_id;
        $body = "Name : ".$name."<br />".
                "Email : ".$email."<br />".
                "Phone : ".$phone."<br />".
                "From Date : ".$from_date."<br />".
                "Till Date : ".$to_date."<br />".
                "No.of Persons : ".$persons;
        $headers = array('Content-Type: text/html; charset=UTF-8','From: Incredible Tarkarli Toursim <info@incredibletarkarli.com>');
        $second_email = wp_mail( $to, $subject, $body, $headers );
        $second_email ? $mail_sent = true : $mail_sent = false;

    }

    echo json_encode(array("response_result"=> $mail_sent));
    die();
}

function insert_car(){
    $form_data = $_POST['form_data'];
    $name = $form_data['car_name'];
    $email = $form_data['car_email'];
    $phone = $form_data['car_contact'];
    $from_date = $form_data['car_from_date'];
    $to_date = $form_data['car_to_date'];

    global $wpdb;//WP Database name
    //Get Enquiry Type ID
    $result = $wpdb->get_results("SELECT enq_type_id FROM wp_enquiry_type WHERE enquiry_name = 'car'");
    $enq_type_id = $result[0]->enq_type_id; 

    //Insert into hotel enquiry table
    $table_name = $wpdb->prefix . "car_enquiry";
    $wpdb->insert( $table_name, array(
        'name' => $name,
        'email' => $email,
        'contact' => $phone,
        'start_date' => date("Y-m-d", strtotime($from_date)),
        'return_date' => date("Y-m-d", strtotime($to_date))
        )
    );
    $car_enq_id = $wpdb->insert_id;
    //Insert into enquiries table
    $table_name = $wpdb->prefix . "enquiries";
    $wpdb->insert( $table_name, array(
        'type_id' => $enq_type_id,
        'ref_id' => $car_enq_id
        )
    );
    //For Debugging Errors
    $wpdb->last_error;$wpdb->print_error;$wpdb->last_query;

    //Send Email to Customer
    $to = $email;
    $subject = 'Incredible Tarkarli Car/Bike Rent Enquiry Response';
    $body = file_get_contents(get_template_directory_uri(). 'my_email_template.php');
    $headers = array('Content-Type: text/html; charset=UTF-8','From: Incredible Tarkarli Toursim <info@incredibletarkarli.com>');
    $mail_sent = false;
    $first_email = wp_mail( $to, $subject, $body, $headers );

    if($first_email){
        $mail_sent = true;
        //Send Email to IncredibleTarkarli Admin
        $to = "info@incredibletarkarli.com";
        $subject = 'Incredible Tarkarli Car/Bike Rent Enquiry -' + $car_enq_id;
        $body = "Name : ".$name."<br />".
                "Email : ".$email."<br />".
                "Phone : ".$phone."<br />".
                "From Date : ".$from_date."<br />".
                "Till Date : ".$to_date."<br />";
        $headers = array('Content-Type: text/html; charset=UTF-8','From: Incredible Tarkarli Toursim <info@incredibletarkarli.com>');
        $second_email = wp_mail( $to, $subject, $body, $headers );
        $second_email ? $mail_sent = true : $mail_sent = false;

    }

    echo json_encode(array("response_result"=> $mail_sent));
    die();
}

function insert_watersports(){
    $form_data = $_POST['form_data'];
    $name = $form_data['water_name'];
    $email = $form_data['water_email'];
    $phone = $form_data['water_contact'];
    $water_date = $form_data['water_date'];
    $people = $form_data['water_people'];

    global $wpdb;//WP Database name
    //Get Enquiry Type ID
    $result = $wpdb->get_results("SELECT enq_type_id FROM wp_enquiry_type WHERE enquiry_name = 'water sports'");
    $enq_type_id = $result[0]->enq_type_id; 


    //Insert into hotel enquiry table
    $table_name = $wpdb->prefix . "water_enquiry";

    $wpdb->insert( $table_name, array(
        'enquiry_name' => $name,
        'email' => $email,
        'contact' => $phone,
        'date' => date("Y-m-d", strtotime($water_date)),
        'peoples' => (int)$people
        )
    );
    $water_enq_id = $wpdb->insert_id;
    //Insert into enquiries table
    $table_name = $wpdb->prefix . "enquiries";
    $wpdb->insert( $table_name, array(
        'type_id' => $enq_type_id,
        'ref_id' => $water_enq_id
        )
    );
    //For Debugging Errors
    echo $wpdb->last_error;$wpdb->print_error;$wpdb->last_query;

    //Send Email to Customer
    $to = $email;
    $subject = 'Incredible Tarkarli Water Sports Enquiry Response';
    $body = file_get_contents(get_template_directory_uri(). 'my_email_template.php');
    $headers = array('Content-Type: text/html; charset=UTF-8','From: Incredible Tarkarli Toursim <info@incredibletarkarli.com>');
    $mail_sent = false;
    $first_email = wp_mail( $to, $subject, $body, $headers );

    if($first_email){
        $mail_sent = true;
        //Send Email to IncredibleTarkarli Admin
        $to = "info@incredibletarkarli.com";
        $subject = 'Incredible Tarkarli Water Sports Enquiry -' + $water_enq_id;
        $body = "Name : ".$name."<br />".
                "Email : ".$email."<br />".
                "Phone : ".$phone."<br />".
                "On Date : ".$water_date."<br />".
                "People : ".$people."<br />";
        $headers = array('Content-Type: text/html; charset=UTF-8','From: Incredible Tarkarli Toursim <info@incredibletarkarli.com>');
        $second_email = wp_mail( $to, $subject, $body, $headers );
        $second_email ? $mail_sent = true : $mail_sent = false;

    }


    echo json_encode(array("response_result"=> $mail_sent));
    die();
}

function contact_mail(){
    $form_data = $_POST['form_data'];
    $name = $form_data['contactus_name'];
    $lname = $form_data['contactus_lname_name'];
    $email = $form_data['contactus_email'];
    $subject = $form_data['contactus_subject'];
    $message = $form_data['contactus_message'];

    //Send Email to Customer
    $to = $email;
    $subject = 'Incredible Tarkarli Enquiry Response';
    $body = file_get_contents(get_template_directory_uri(). 'my_email_template.php');
    $headers = array('Content-Type: text/html; charset=UTF-8','From: Incredible Tarkarli Toursim <info@incredibletarkarli.com>');
    $mail_sent = false;
    $first_email = wp_mail( $to, $subject, $body, $headers );

    if($first_email){
        $mail_sent = true;
        //Send Email to IncredibleTarkarli Admin
        $to = "info@incredibletarkarli.com";
        $subject = 'Incredible Tarkarli Contact Us Enquiry ';
        $body = "Name : ".$name." ".$lname ."<br />".
                "Email : ".$email."<br />".
                "subject : ".$subject."<br />".
                "Message : ".$message."<br />";
        $headers = array('Content-Type: text/html; charset=UTF-8','From: Incredible Tarkarli Toursim <info@incredibletarkarli.com>',);
        $second_email = wp_mail( $to, $subject, $body, $headers );
        $second_email ? $mail_sent = true : $mail_sent = false;

    }

    echo json_encode(array("response_result"=> $mail_sent));
    die();
}

//Hooking AJAX Functions
add_action('wp_ajax_insert_hotel', 'insert_hotel');//hotel enquiry
add_action('wp_ajax_nopriv_insert_hotel', 'insert_hotel');//hotel enquiry
add_action('wp_ajax_insert_car', 'insert_car');//car enquiry
add_action('wp_ajax_nopriv_insert_car', 'insert_car');//car enquiry
add_action('wp_ajax_insert_watersports', 'insert_watersports');//Water enquiry
add_action('wp_ajax_nopriv_insert_watersports', 'insert_watersports');//Water enquiry
add_action('wp_ajax_contact_mail', 'contact_mail');//Contact Us enquiry
add_action('wp_ajax_nopriv_contact_mail', 'contact_mail');//Contact Us enquiry


?>

