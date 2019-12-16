<?php
/**
 * Template Name: Email Template
 */
?>
<!DOCTYPE html>
<html>

<head>

    <style type="text/css">
        
        @import url(https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700);
        
        div,
        p,
        a,
        li,
        td {
            -webkit-text-size-adjust: none;
        }

        body {
            margin: 0;
            padding: 0;
            
        }

        .container{
            margin: 1% 20% 5% 20%;
            border: 10px solid #00b99d;
            width: 600px;
        }


        @media screen and (max-width: 480px) {
            table[class="tmp--container"] {
                width: 360px !important;
            }

            table[class="tmp--container-padding"] {
                width: 360px !important;
                padding: 20px !important;
            }

            table[class="tmp--container-padding-top"] {
                width: 360px !important;
                padding: 20px 0 0 0 !important;
            }

            table[class="tmp--container-padding-bottom"] {
                width: 360px !important;
                padding: 0 0 20px 0 !important;
            }

            table[class="hero"] {
                width: 100% !important;
            }

            table[class="tmp--full-width"] {
                width: 100% !important;
                float: left !important;
                padding: 0 !important;
            }

            td[class="tmp--full-width"] {
                width: 100% !important;
                float: left !important;
                padding: 0 !important;
            }

            td[class="tmp--full-width-padding-bottom"] {
                width: 100% !important;
                float: left !important;
                padding: 0 0 25px 0 !important;
            }

            td[class="tmp--full-width-center"] {
                width: 100% !important;
                float: left !important;
                padding: 10px 0 10px 0 !important;
                text-align: center !important;
            }

            table[class="wrapper-padding"] {
                padding: 20px !important;
            }

            tr[class="wrapper-padding"] {
                padding: 20px !important;
            }

            td[class="wrapper-padding"] {
                padding: 20px !important;
            }

            td[class="col-padding-bottom"] {
                padding: 0 0 25px 0 !important;
            }

            img[class="photo"] {
                width: 100% !important;
                height: auto !important;
            }

            td[class="row"] {
                width: 100% !important;
            }

            td[class="tmp--hide"] {
                display: none !important;
            }
        }

       

        body {
            font-family: "Quicksand", Arial, sans-serif;
            color: #FFF;
            background: #322f30;
            -webkit-font-smoothing: antialiased;
        }

        a {
            text-decoration: none;
            color: #fff;
        }

        p>a:hover {
            color: #d9d9d9;
            text-decoration: underline;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 1% 0 1% 0;
        }

        ._12 {
            font-size: 1.2em;
        }

        ._14 {
            font-size: 1.4em;
        }

        ul {
            padding: 0;
            list-style: none;
        }

        .footer-social-icons {
            width: 350px;
            display: block;
            margin: 0 auto;
        }

        .social-icon {
            color: #fff;
        }

        ul.social-icons {
            margin-top: 10px;
        }

        .social-icons li {
            vertical-align: top;
            display: inline;
            height: 100px;
        }

        .social-icons a {
            color: #fff;
            text-decoration: none;
        }

        .fa-facebook {
            padding: 10px 14px;
            -o-transition: .5s;
            -ms-transition: .5s;
            -moz-transition: .5s;
            -webkit-transition: .5s;
            transition: .5s;
            background-color: #322f30;
        }

        .fa-facebook:hover {
            background-color: #3d5b99;
        }

        .fa-twitter {
            padding: 10px 12px;
            -o-transition: .5s;
            -ms-transition: .5s;
            -moz-transition: .5s;
            -webkit-transition: .5s;
            transition: .5s;
            background-color: #322f30;
        }

        .fa-twitter:hover {
            background-color: #00aced;
        }

        .fa-rss {
            padding: 10px 14px;
            -o-transition: .5s;
            -ms-transition: .5s;
            -moz-transition: .5s;
            -webkit-transition: .5s;
            transition: .5s;
            background-color: #322f30;
        }

        .fa-rss:hover {
            background-color: #eb8231;
        }

        .fa-youtube {
            padding: 10px 14px;
            -o-transition: .5s;
            -ms-transition: .5s;
            -moz-transition: .5s;
            -webkit-transition: .5s;
            transition: .5s;
            background-color: #322f30;
        }

        .fa-youtube:hover {
            background-color: #e64a41;
        }

        .fa-linkedin {
            padding: 10px 14px;
            -o-transition: .5s;
            -ms-transition: .5s;
            -moz-transition: .5s;
            -webkit-transition: .5s;
            transition: .5s;
            background-color: #322f30;
        }

        .fa-linkedin:hover {
            background-color: #0073a4;
        }

        .fa-google-plus {
            padding: 10px 9px;
            -o-transition: .5s;
            -ms-transition: .5s;
            -moz-transition: .5s;
            -webkit-transition: .5s;
            transition: .5s;
            background-color: #322f30;
        }

        .fa-google-plus:hover {
            background-color: #e25714;
        }
    </style>
    <title></title>
</head>

<!-- background color -->

<body bgcolor="#F3F3F4">
    <div class="container">
            <!-- background color -->
    <table bgcolor="#F3F3F4" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td>
                <!-- header -->
                <table align='center' border='0' cellpadding='0' cellspacing='0' class='tmp--container' style='background-color:#ffffff;' width='600'>
                    <tr>
                        <td style='padding:10px 20px 10px 20px;' width='20%'>

                            <a href="<?php echo home_url(); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/Incredible tarkarli Logo Final Edit.png" style="width:200px;"></a>

                        </td>
                        <td class='full-width-center' style='color:#00b99a;background-color:#ffffff;font-family:"Quicksand", Arial, sans-serif;font-size:20px;font-style:normal;font-weight:normal;padding:10px 20px 10px 20px;' width='100%'>
                            <h2>Incredible Tarkarli Enquiry Response</h2>
                        </td>
                    </tr>
                </table>
                <!-- header -->
            </td>
        </tr>
        <tr>
            <td>
                <!-- content area: hero image -->
                <table align='center' border='0' cellpadding='0' cellspacing='0' class='tmp--container' style='background-color:#ffffff;' width='600'>
                    <tr>
                        <td align='left' class='full-width' width='100%'>
                            <!--<img class='photo' src=
                        'https://s3-us-west-2.amazonaws.com/rd-parcel/placeholder-hero-fullWidth.png'
                        style='display:block;'>-->
                            <img class='photo' src="<?php bloginfo('template_directory'); ?>/assets/images/logo/thank_you2.png" style='display:block;'>
                        </td>
                    </tr>
                </table>
                <!-- end content area: hero image -->

                <!-- content area: primary headline and text -->
                <table align='center' border='0' cellpadding='0' cellspacing='0' class='tmp--container' style='background-color:#ffffff;' width='600'>
                    <tr>
                        <td align='left' style='color:#4f4f4f;font-family:Arial,sans-serif;font-size:16px;font-style:normal;font-weight:normal;line-height:20px;padding:20px;text-align:center;vertical-align:top;' width='100%'>
                            <span style='color:#00b99a;display:inline-block;font-family:Arial, sans-serif;font-size:20px;font-style:normal;font-weight:bold;padding:5px 0 10px 0;'>
                                Thank you for your message.</span><br>
                            We appreciate your interest. We will get back to you in 48 hours.

                        </td>
                    </tr>
                    <tr>

                        <td align="center">
                            <div class="footer-social-icons">
                                <h2 style="color:#00b99a;">Follow us on</h2>
                                <ul class="social-icons">
                                    <li><a href="#" target="_blank" class="social-icon"> <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo/in.png" style="height: 36px;padding-right: 15px;"></a></li>
                                    <li><a href="#" target="_blank" class="social-icon"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo/google.png" style="height: 36px;padding-right: 15px;"></a></li>
                                    <li><a href="https://www.facebook.com/Incredibletarkarli/" target="_blank" class="social-icon"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo/facebook.png" style="height: 36px;padding-right: 15px;"></a></li>
                                    <li><a href="#" target="_blank" class="social-icon"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo/twitter.png" style="height: 36px;"></a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </table>

            </td>
            <!-- end content area: right column -->
        </tr>
    </table>


    </div>



</body>

</html>

