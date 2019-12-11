<?php get_header();?>
<!---Lucky Spinner-->
    <!--<style>
        #txt{
            color:white;
            position: fixed;
            left: 50%;
            top: 50%;
            z-index: 999;
        }


        /*WHEEL*/
        #wheel{
            width:250px;
            height:250px;
            border-radius:50%;
            position:fixed;
            overflow:hidden;
            border:8px solid #fff;
            box-shadow:rgba(0,0,0,0.2) 0px 0px 10px, rgba(0,0,0,0.05) 0px 3px 0px;
            transform: rotate(0deg);
            z-index: 999;
            left: 40%;
            top: 40%;
        }

        #wheel:before{
            content:'';
            position:absolute;
            border:4px solid rgba(0,0,0,0.1);
            width:242px;
            height:242px;
            border-radius:50%;
            z-index:1000;
        }

        #inner-wheel{
            width:100%;
            height:100%;

            -webkit-transition: all 6s cubic-bezier(0,.99,.44,.99);
            -moz-transition:    all 6 cubic-bezier(0,.99,.44,.99);
            -o-transition:      all 6s cubic-bezier(0,.99,.44,.99);
            -ms-transition:     all 6s cubic-bezier(0,.99,.44,.99);
            transition:         all 6s cubic-bezier(0,.99,.44,.99);
        }

        #wheel div.sec{
            position: absolute;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 130px 75px 0;
            border-color: #19c transparent;
            transform-origin: 75px 129px;
            left:50px;
            top:-4px;
            opacity:1;
        }

        #wheel div.sec:nth-child(1){
            transform: rotate(60deg);
            -webkit-transform: rotate(60deg);
            -moz-transform: rotate(60deg);
            -o-transform: rotate(60deg);
            -ms-transform: rotate(60deg);
            border-color: #16a085 transparent;
        }
        #wheel div.sec:nth-child(2){
            transform: rotate(120deg);
            -webkit-transform: rotate(120deg);
            -moz-transform: rotate(120deg);
            -o-transform: rotate(120deg);
            -ms-transform: rotate(120deg);
            border-color: #2980b9 transparent;
        }
        #wheel div.sec:nth-child(3){
            transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            border-color: #34495e transparent;
        }
        #wheel div.sec:nth-child(4){
            transform: rotate(240deg);
            -webkit-transform: rotate(240deg);
            -moz-transform: rotate(240deg);
            -o-transform: rotate(240deg);
            -ms-transform: rotate(240deg);
            border-color: #f39c12 transparent;
        }
        #wheel div.sec:nth-child(5){
            transform: rotate(300deg);
            -webkit-transform: rotate(300deg);
            -moz-transform: rotate(300deg);
            -o-transform: rotate(300deg);
            -ms-transform: rotate(300deg);
            border-color: #d35400 transparent;
        }
        #wheel div.sec:nth-child(6){
            transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            border-color: #c0392b transparent;
        }


        #wheel div.sec .fa{
            margin-top: -100px;
            color: rgba(0,0,0,0.2);
            position: relative;
            z-index: 10000000;
            display: block;
            text-align: center;
            font-size:36px;
            margin-left:-15px;

            text-shadow: rgba(255, 255, 255, 0.1) 0px -1px 0px, rgba(0, 0, 0, 0.2) 0px 1px 0px;
        }




        #spin{
            width:68px;
            height:68px;
            position:absolute;
            top:50%;
            left:50%;
            margin:-34px 0 0 -34px;
            border-radius:50%;
            box-shadow:rgba(0,0,0,0.1) 0px 3px 0px;
            z-index:1000;
            background:#fff;
            cursor:pointer;
            font-family: 'Exo 2', sans-serif;

        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
        }


        #spin:after{
            content:"SPIN";
            text-align:center;
            line-height:68px;
            color:#CCC;
            text-shadow: 0 2px 0 #fff, 0 -2px 0 rgba(0,0,0,0.3) ;
            position: relative;
            z-index: 100000;
            width:68px;
            height:68px;
            display:block;
        }

        #spin:before{
            content:"";
            position:absolute;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 20px 28px 20px;
            border-color: transparent transparent #ffffff transparent;
            top:-12px;
            left:14px;
        }

        #inner-spin{
            width:54px;
            height:54px;
            position:absolute;
            top:50%;
            left:50%;
            margin:-27px 0 0 -27px;
            border-radius:50%;
            background:red;
            z-index:999;
            box-shadow:rgba(255,255,255,1) 0px -2px 0px inset, rgba(255,255,255,1) 0px 2px 0px inset,  rgba(0,0,0,0.4) 0px 0px 5px ;

            background: rgb(255,255,255); /* Old browsers */
            background: -moz-radial-gradient(center, ellipse cover,  rgba(255,255,255,1) 0%, rgba(234,234,234,1) 100%); /* FF3.6+ */
            background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(255,255,255,1)), color-stop(100%,rgba(234,234,234,1))); /* Chrome,Safari4+ */
            background: -webkit-radial-gradient(center, ellipse cover,  rgba(255,255,255,1) 0%,rgba(234,234,234,1) 100%); /* Chrome10+,Safari5.1+ */
            background: -o-radial-gradient(center, ellipse cover,  rgba(255,255,255,1) 0%,rgba(234,234,234,1) 100%); /* Opera 12+ */
            background: -ms-radial-gradient(center, ellipse cover,  rgba(255,255,255,1) 0%,rgba(234,234,234,1) 100%); /* IE10+ */
            background: radial-gradient(ellipse at center,  rgba(255,255,255,1) 0%,rgba(234,234,234,1) 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#eaeaea',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        }

        #spin:active #inner-spin{
            box-shadow:rgba(0,0,0,0.4) 0px 0px 5px inset;
        }

        #spin:active:after{
            font-size:15px;
        }



        #shine{
            width:250px;
            height:250px;
            position:absolute;
            top:0;
            left:0;
            background: -moz-radial-gradient(center, ellipse cover,  rgba(255,255,255,1) 0%, rgba(255,255,255,0.99) 1%, rgba(255,255,255,0.91) 9%, rgba(255,255,255,0) 100%); /* FF3.6+ */
        background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(255,255,255,1)), color-stop(1%,rgba(255,255,255,0.99)), color-stop(9%,rgba(255,255,255,0.91)), color-stop(100%,rgba(255,255,255,0))); /* Chrome,Safari4+ */
        background: -webkit-radial-gradient(center, ellipse cover,  rgba(255,255,255,1) 0%,rgba(255,255,255,0.99) 1%,rgba(255,255,255,0.91) 9%,rgba(255,255,255,0) 100%); /* Chrome10+,Safari5.1+ */
        background: -o-radial-gradient(center, ellipse cover,  rgba(255,255,255,1) 0%,rgba(255,255,255,0.99) 1%,rgba(255,255,255,0.91) 9%,rgba(255,255,255,0) 100%); /* Opera 12+ */
        background: -ms-radial-gradient(center, ellipse cover,  rgba(255,255,255,1) 0%,rgba(255,255,255,0.99) 1%,rgba(255,255,255,0.91) 9%,rgba(255,255,255,0) 100%); /* IE10+ */
        background: radial-gradient(ellipse at center,  rgba(255,255,255,1) 0%,rgba(255,255,255,0.99) 1%,rgba(255,255,255,0.91) 9%,rgba(255,255,255,0) 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#00ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */


        opacity:0.1;

        }



        /*ANIMATION*/
        @-webkit-keyframes hh {
        0%, 100%{
            transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
        }

        50%{
            transform: rotate(7deg);
            -webkit-transform: rotate(7deg);
        }
        }

        @keyframes hh {
        0%, 100%{
            transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
        }

        50%{
            transform: rotate(7deg);
            -webkit-transform: rotate(7deg);
        }
        }

        .spin {
        -webkit-animation: hh 0.1s; /* Chrome, Safari, Opera */
            animation: hh 0.1s;
        }




    </style>

    <div id="wrapper">
    <div id="wheel">
        <div id="inner-wheel">
            <div class="sec"><span class="fa fa-bell-o"></span></div>
            <div class="sec"><span class="fa fa-comment-o"></span></div>
            <div class="sec"><span class="fa fa-smile-o"></span></div>
            <div class="sec"><span class="fa fa-heart-o"></span></div>
            <div class="sec"><span class="fa fa-star-o"></span></div>
            <div class="sec"><span class="fa fa-lightbulb-o"></span></div>
        </div>
        <div id="spin">
            <div id="inner-spin"></div>
        </div>
        <div id="shine"></div>
    </div>
        <div id="txt"></div>
    </div>

    <script>
        //set default degree (360*5)
        var degree = 1800;
        //number of clicks = 0
        var clicks = 0;

        $(document).ready(function(){



        });//DOCUMENT READY


        /*WHEEL SPIN FUNCTION*/
        $('#spin').click(function(){

            //add 1 every click
            clicks ++;

            /*multiply the degree by number of clicks
            generate random number between 1 - 360,
            then add to the new degree*/
            var newDegree = degree*clicks;
            var extraDegree = Math.floor(Math.random() * (360 - 1 + 1)) + 1;
            totalDegree = newDegree+extraDegree;

            /*let's make the spin btn to tilt every
            time the edge of the section hits
            the indicator*/
            $('#wheel .sec').each(function(){
                var t = $(this);
                var noY = 0;

                var c = 0;
                var n = 700;
                var interval = setInterval(function () {
                    c++;
                    if (c === n) {
                        clearInterval(interval);
                    }

                    var aoY = t.offset().top;
                    $("#txt").html(aoY);
                    console.log(aoY);

                    /*23.7 is the minumum offset number that
                    each section can get, in a 30 angle degree.
                    So, if the offset reaches 23.7, then we know
                    that it has a 30 degree angle and therefore,
                    exactly aligned with the spin btn*/
                    if(aoY < 23.89){
                        console.log('<<<<<<<<');
                        $('#spin').addClass('spin');
                        setTimeout(function () {
                            $('#spin').removeClass('spin');


                        }, 100);

                    }
                    var spin_value = $('#spin_txt').val(aoY);

                }, 10);

                $('#inner-wheel').css({
                    'transform' : 'rotate(' + totalDegree + 'deg)'
                });

                noY = t.offset().top;

            });

        });
    </script>

-->



<style type="text/css">
	.validation-border{
		border : 1px solid #ff5303 !important;
	}

</style>

<?php 

    $slider_data = get_field('slider');

?>

<input type="hidden" id="base_url" value="http://localhost:8080/tarkarli/">
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<!--<li style="background-image: url(assets/images/home/Tarkarli Tourism Hotels in Tarkarli Resorts in Tarkarli.jpg);" title = "Tarkarli Tourism Hotels in Tarkarli Resorts in Tarkarli" title="Tarkarli Tourism Hotels in Tarkarli Resorts in Tarkarli">-->
						<li style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/home/Tarkarli_Tourism_Hotels_in_Tarkarli_Resorts_in_Tarkarli.jpg);" title = "Tarkarli Tourism Hotels in Tarkarli Resorts in Tarkarli" title="Tarkarli Tourism Hotels in Tarkarli Resorts in Tarkarli">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h2 class="slider-headers" style="color: #ffdd00;">
                                            <?php echo $slider_data['small_text_slide_1'];?>
                                        </h2>
										<h1 class="slider-headers" style="color: #ffdd00;"> <?php echo $slider_data['big_text_slide_1'];?></h1>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/home/Rock_Garden_Tarkarli_Beaches_in_tarkarli_Hotels_in_tarkarli_resorts_in_tarkali.jpg);" title = "Tarkarli Tourism Hotels in Tarkarli Resorts in Tarkarli">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h2 class="slider-headers" style="color: #ffdd00;">Best Packages in Malvan</h2>
										<h1 class="slider-headers" style="color: #ffdd00;">From Hotels to Water Sports</h1>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/home/Beach_Resort_in_Tarkarli_Beaches_in_Malvan_Hotels_in_Malvan_Resorts_in_Tarkarli.jpg);" title = "Beach Resort in Tarkarli Beaches in Malvan Hotels in Malvan Resorts in Tarkarli">
						<div class="overlay"></div>
						<div class="container-fluids">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h2 class="slider-headers" style="color: #ffdd00;">Explore best tavel agency in Tarkarli</h2>
										<h1 class="slider-headers" style="color: #ffdd00;">Incredible Tarkarli Tourism</h1>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>
		<div id="colorlib-reservation">
			<!-- <div class="container"> -->
			<div class="row">
				<div class="search-wrap">
					<div class="container">
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i> Hotel</a></li>
							<li><a data-toggle="tab" href="#car"><i class="flaticon-car"></i> Car Rent</a></li>
							<li><a data-toggle="tab" href="#flight">
								<img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBoZWlnaHQ9IjE2cHgiIHZpZXdCb3g9Ii0zMiAtMjEgNjgxIDY4MS4zMzIwOSIgd2lkdGg9IjE2cHgiPjxwYXRoIGQ9Im0yMTMuNTgyMDMxIDMxNC4wNTA3ODFjMy45OTYwOTQtMTAuNTExNzE5IDE0LjA3MDMxMy0xNy40NjA5MzcgMjUuMzE2NDA3LTE3LjQ2MDkzNyAxMS4yNDIxODcgMCAyMS4zMTY0MDYgNi45NDkyMTggMjUuMzEyNSAxNy40NjA5MzcgMTMuNDk2MDkzIDQzLjk2ODc1IDU0LjE2Nzk2OCA3My45Mzc1IDEwMC4xNjc5NjggNzMuODAwNzgxIDUwLjk3NjU2My0uMDg1OTM3IDk1LjcyNjU2My0zMy45MjE4NzQgMTA5LjcxMDkzOC04Mi45NDE0MDYgMi45Mzc1LTEwLjExMzI4MSA0LjQxMDE1Ni0yMC41OTc2NTYgNC4zNjcxODctMzEuMTI4OTA2di03OS44NTE1NjJjMC0xOC45MDIzNDQtMTUuMzI0MjE5LTM0LjIyNjU2My0zNC4yMjY1NjItMzQuMjI2NTYzaC00MTAuNjY3OTY5Yy0xOC44OTg0MzggMC0zNC4yMjI2NTYgMTUuMzI0MjE5LTM0LjIyMjY1NiAzNC4yMjY1NjN2NzkuODUxNTYyYy0uMDQ2ODc1IDEwLjQ4NDM3NSAxLjQxMDE1NiAyMC45MjE4NzUgNC4zMjQyMTggMzAuOTkyMTg4IDEzLjk1MzEyNiA0OS4wNzgxMjQgNTguNzMwNDY5IDgyLjk3NjU2MiAxMDkuNzUzOTA3IDgzLjA3ODEyNCA0NS45OTYwOTMuMTM2NzE5IDg2LjY2Nzk2OS0yOS44MzIwMzEgMTAwLjE2NDA2Mi03My44MDA3ODF6bS0xMDAuMTY0MDYyIDUwLjk4ODI4MWMtNDAuNzY1NjI1LS4wNjI1LTc2LjU1ODU5NC0yNy4xMTMyODEtODcuNzUtNjYuMzA4NTkzLTIuMzc1LTguMTA1NDY5LTMuNTU4NTk0LTE2LjUwNzgxMy0zLjUxMTcxOS0yNC45NDkyMTl2LTc5Ljg1MTU2MmMwLTYuMzAwNzgyIDUuMTA1NDY5LTExLjQxMDE1NyAxMS40MDYyNS0xMS40MTAxNTdoNDEwLjY2Nzk2OWM2LjMwMDc4MSAwIDExLjQxMDE1NiA1LjEwOTM3NSAxMS40MTAxNTYgMTEuNDEwMTU3djc5Ljg1MTU2MmMuMDM5MDYzIDguMzA0Njg4LTEuMTA5Mzc1IDE2LjU3MDMxMi0zLjQyMTg3NSAyNC41NTA3ODEtMTEuMTQ0NTMxIDM5LjMyMDMxMy00Ni45Njg3NSA2Ni41MjczNDQtODcuODM5ODQ0IDY2LjcwNzAzMS01My41MjM0MzcgMC03My43Njk1MzEtNDQuOTIxODc0LTc4LjcxMDkzNy01OC42OTkyMTgtNy4yNjE3MTktMTkuNTUwNzgyLTI1LjkxNDA2My0zMi41MTU2MjUtNDYuNzY5NTMxLTMyLjUxNTYyNS0yMC44NTE1NjMgMC0zOS41MDc4MTMgMTIuOTY0ODQzLTQ2Ljc2OTUzMiAzMi41MTU2MjUtMTAuNTM5MDYyIDM0LjY5OTIxOC00Mi40NDUzMTIgNTguNS03OC43MTA5MzcgNTguNjk5MjE4em0wIDAiIGZpbGw9IiMwMDAwMDAiLz48cGF0aCBkPSJtMzA3LjE2MDE1NiAyOTguNjQ4NDM4YzcuMjUzOTA2IDI1LjY0MDYyNCAzMC41NzQyMTkgNDMuNDAyMzQzIDU3LjIxODc1IDQzLjU3NDIxOCAzMC43MTQ4NDQtLjE0ODQzNyA1Ny42MTMyODItMjAuNjI1IDY1LjkzNzUtNTAuMTg3NSAxLjcxODc1LTUuOTMzNTk0IDIuNTYyNS0xMi4wODIwMzEgMi41MTE3MTktMTguMjUzOTA2di02OC40NDkyMTloLTM4Ny44NTkzNzV2NjguNDQ5MjE5Yy0uMDM1MTU2IDYuMzAwNzgxLjg0Mzc1IDEyLjU3ODEyNSAyLjYxMzI4MSAxOC42Mjg5MDYgOC4zNjMyODEgMjkuNDM3NSAzNS4yMjY1NjMgNDkuNzY1NjI1IDY1LjgzNTkzOCA0OS44MTI1IDI2LjY0NDUzMS0uMTkxNDA2IDQ5Ljk2NDg0My0xNy45NTcwMzEgNTcuMjI2NTYyLTQzLjU5NzY1NiAxMC41MDM5MDctMjguNjM2NzE5IDM3Ljc1NzgxMy00Ny42NzE4NzUgNjguMjU3ODEzLTQ3LjY3MTg3NXM1Ny43NTc4MTIgMTkuMDM1MTU2IDY4LjI1NzgxMiA0Ny42NzE4NzV6bS0yMjcuOTY4NzUtMjQuODY3MTg4Yy00LjYwOTM3NSAwLTguNzczNDM3LTIuNzgxMjUtMTAuNTM1MTU2LTcuMDQyOTY5LTEuNzY1NjI1LTQuMjY1NjI1LS43ODkwNjItOS4xNjc5NjkgMi40Njg3NS0xMi40MzM1OTNsMjIuODE2NDA2LTIyLjgxMjVjNC40NzY1NjMtNC4zMjQyMTkgMTEuNTkzNzUtNC4yNjE3MTkgMTUuOTkyMTg4LjE0MDYyNCA0LjM5ODQzNyA0LjQwMjM0NCA0LjQ2MDkzNyAxMS41MTE3MTkuMTQwNjI1IDE1Ljk5MjE4OGwtMjIuODE2NDA3IDIyLjgxMjVjLTIuMTM2NzE4IDIuMTQwNjI1LTUuMDM5MDYyIDMuMzQzNzUtOC4wNjY0MDYgMy4zNDM3NXptNzYuNTExNzE5LTMuMzQzNzUtNDUuNjI4OTA2IDQ1LjYyODkwNmMtNC40NzY1NjMgNC4zMjQyMTktMTEuNTg5ODQ0IDQuMjY1NjI1LTE1Ljk5MjE4OC0uMTM2NzE4LTQuNDAyMzQzLTQuNDAyMzQ0LTQuNDY0ODQzLTExLjUxNTYyNi0uMTQwNjI1LTE1Ljk5MjE4OGw0NS42MzI4MTMtNDUuNjMyODEyYzQuNDcyNjU2LTQuMzIwMzEzIDExLjU4OTg0My00LjI1NzgxMyAxNS45OTIxODcuMTQwNjI0IDQuMzk4NDM4IDQuNDAyMzQ0IDQuNDU3MDMyIDExLjUxOTUzMi4xMzY3MTkgMTUuOTkyMTg4em0wIDAiIGZpbGw9IiMwMDAwMDAiLz48cGF0aCBkPSJtNTU4LjMwODU5NCAwaDQ1LjYyODkwNmM2LjMwMDc4MSAwIDExLjQxMDE1NiA1LjEwOTM3NSAxMS40MTAxNTYgMTEuNDEwMTU2djE3MS4xMDkzNzVjMCA2LjMwMDc4MS01LjEwOTM3NSAxMS40MTAxNTctMTEuNDEwMTU2IDExLjQxMDE1N2gtNDUuNjI4OTA2Yy02LjMwNDY4OCAwLTExLjQxMDE1Ni01LjEwOTM3Ni0xMS40MTAxNTYtMTEuNDEwMTU3di0xNzEuMTA5Mzc1YzAtNi4zMDA3ODEgNS4xMDU0NjgtMTEuNDEwMTU2IDExLjQxMDE1Ni0xMS40MTAxNTZ6bTAgMCIgZmlsbD0iIzAwMDAwMCIvPjxwYXRoIGQ9Im0yOTQuMjg1MTU2IDQ1NS41NTg1OTRjMy4xMjEwOTQtMS4zMTY0MDYgNS40ODgyODItMy45NzI2NTYgNi40MzM1OTQtNy4yMzA0NjkuOTg4MjgxLTMuMjY5NTMxLjQ2MDkzOC02LjgxNjQwNi0xLjQ0MTQwNi05LjY1MjM0NC0yLjgyMDMxMy00LjQyOTY4Ny04LjM3MTA5NC02LjI2NTYyNS0xMy4yNzczNDQtNC4zOTA2MjUtMjguMzg2NzE5IDEyLjI3NzM0NC02MC41OTM3NSAxMi4yNzczNDQtODguOTc2NTYyIDAtMS4xODc1LS41MTU2MjUtMi40NjA5MzgtLjc4OTA2Mi0zLjc1MzkwNy0uNzk2ODc1LTMuNjA1NDY5LjA3MDMxMy02Ljk2ODc1IDEuODIwMzEzLTkuMDkzNzUgNC43MjY1NjMtMi4xMzI4MTIgMi45MTAxNTYtMi43ODUxNTYgNi42NDA2MjUtMS43NjU2MjUgMTAuMDk3NjU2LjkzNzUgMy4yNjE3MTkgMy4yOTI5NjkgNS45MjE4NzUgNi40MTc5NjkgNy4yNDYwOTQgMzMuNjk5MjE5IDE0LjMwNDY4NyA3MS43NTc4MTMgMTQuMzA0Njg3IDEwNS40NTcwMzEgMHptMCAwIiBmaWxsPSIjMDAwMDAwIi8+PHBhdGggZD0ibTU1OC4zMDg1OTQgNDUwLjU5NzY1NmMtMS42MDU0NjkgNzIuMzI4MTI1LTU2LjAwMzkwNiAxMzIuNTQyOTY5LTEyNy44MDA3ODIgMTQxLjQ2NDg0NC03MS43OTY4NzQgOC45MTc5NjktMTM5LjI3MzQzNy0zNi4xNTYyNS0xNTguNTI3MzQzLTEwNS44OTg0MzgtMTYuMjE4NzUgMy4zMDQ2ODgtMzIuODY3MTg4IDMuODk0NTMyLTQ5LjI4NTE1NyAxLjc1NzgxMyAyMS4yOTY4NzYgOTUuMDkzNzUgMTEwLjE0MDYyNiAxNTkuMzk0NTMxIDIwNy4xMjUgMTQ5Ljg5ODQzNyA5Ni45ODgyODItOS40OTIxODcgMTcxLjY3NTc4Mi04OS44MDQ2ODcgMTc0LjExNzE4OC0xODcuMjIyNjU2di0yMzMuODU1NDY4aC00NS42Mjg5MDZ6bTAgMCIgZmlsbD0iIzAwMDAwMCIvPjwvc3ZnPgo=" />
								 Water Sports</a></li>
							<li><a data-toggle="tab" href="#cruises"><i class="flaticon-boat"></i> Cruises</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div id="hotel" class="tab-pane fade in active">
							<form method="post" id="hotel_form" class="colorlib-form">
								<div class="row">
									<div class="col-md-2">
										<div class="form-group">
											<label for="name">Name:</label>
											<div class="form-field">
												<input type="text" id="hotel_name" name="hotel_name" onkeypress="validate_form(this.id,1,true,event)" onfocus="validate_form(this.id,1,true,event)" class="form-control error" placeholder="Your Name*">
												<span id="hotel_name-error" style="color:#ff5303;"></span>
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="email">Email:</label>
											<div class="form-field">
												<input type="text" id="hotel_email" name="hotel_email" class="form-control error" placeholder="Your Email*" onkeypress="validate_form(this.id,3,true,event,event)" onfocus="validate_form(this.id,3,true,event,event)">
												<span id="hotel_email-error" style="color:#ff5303;"></span>
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="contact">Contact:</label>
											<div class="form-field">
												<input type="text" id="hotel_contact" name="hotel_contact" class="form-control error" maxlength="10" placeholder="Your Mobile no*" onkeypress="validate_form(this.id,2,true,event)" onfocus="validate_form(this.id,2,true,event)">
												<span id="hotel_contact-error" style="color:#ff5303;"></span>
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="date">Check-in:</label>
											<div class="form-field">
												<i class="icon icon-calendar2"></i>
												<input type="text" id="hotel_from_date" name="hotel_from_date" class="form-control date error" placeholder="Check-in date" onchange="validate_form(this.id,4,true,event)" onfocus="validate_form(this.id,4,true,event)">
												<span id="hotel_from_date-error" style="color:#ff5303;"></span>
											</div>
										</div>
									</div>

									<div class="col-md-2">
										<div class="form-group">
											<label for="date">Check-out:</label>
											<div class="form-field">
												<i class="icon icon-calendar2"></i>
												<input type="text" id="hotel_to_date" name="hotel_to_date" class="form-control date error" placeholder="Check-out date" onchange="validate_form(this.id,4,true,event)" onfocus="validate_form(this.id,4,true,event)">
												<span id="hotel_to_date-error" style="color:#ff5303;"></span>
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="guests">Guest</label>
											<div class="form-field">
												<i class="icon icon-arrow-down3"></i>
												<select id="hotel_people" name="hotel_people" class="form-control error">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5+s">5+</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 xs-hidden"></div>
									<div class="col-md-4 col-xs-12">
										<input type="button" name="hotel_submit" id="hotel_submit" value="Find Best Hotel" class="btn btn-primary btn-block" onclick="hotel_enquiry()">
									</div>
									<div class="col-md-4 xs-hidden"></div>
								</div>
							</form>
						</div>


						<div id="car" class="tab-pane fade">
							<form method="post" class="colorlib-form" id="car_form">
								<div class="row">
									<div class="col-md-2">
										<div class="form-group">
											<label for="name">Name:</label>
											<div class="form-field">
												<input type="text" id="car_name" name="car_name" onkeypress="validate_form(this.id,1,true,event)" onfocus="validate_form(this.id,1,true,event)" class="form-control error" placeholder="Your Name*">
												<span id="car_name-error" style="color:#ff5303;"></span>
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="email">Email:</label>
											<div class="form-field">
												<input type="text" id="car_email" name="car_email" class="form-control error" placeholder="Your Email*" onkeypress="validate_form(this.id,3,true,event,event)" onfocus="validate_form(this.id,3,true,event,event)">
												<span id="car_email-error" style="color:#ff5303;"></span>
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="contact">Contact:</label>
											<div class="form-field">
												<input type="text" id="car_contact" name="car_contact" class="form-control error" maxlength="10" placeholder="Your Mobile no*" onkeypress="validate_form(this.id,2,true,event)" onfocus="validate_form(this.id,2,true,event)">
												<span id="car_contact-error" style="color:#ff5303;"></span>
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="date">Where:</label>
											<div class="form-field">
												<input type="text" id="car_where" name="car_where" onkeypress="validate_form(this.id,1,true,event)" onfocus="validate_form(this.id,1,true,event)" class="form-control error" placeholder="Find Destination">
												<span id="car_where-error" style="color:#ff5303;"></span>
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="date">Start Date:</label>
											<div class="form-field">
												<i class="icon icon-calendar2"></i>
												<input type="text" id="car_from_date" name="car_from_date" class="form-control date error" placeholder="Start date" onchange="validate_form(this.id,4,true,event)" onfocus="validate_form(this.id,4,true,event)">
												<span id="car_from_date-error" style="color:#ff5303;"></span>
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="date">Return Date:</label>
											<div class="form-field">
												<i class="icon icon-calendar2"></i>
												<input type="text" id="car_to_date" name="car_to_date" class="form-control date error" placeholder="Return date" onchange="validate_form(this.id,4,true,event)" onfocus="validate_form(this.id,4,true,event)">
												<span id="car_to_date-error" style="color:#ff5303;"></span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 xs-hidden"></div>
										<div class="col-md-4 col-xs-12">
											<input type="button" name="car_submit" id="car_submit" value="Find Car" class="btn btn-primary btn-block" onclick="car_enquiry()">
										</div>
										<div class="col-md-4 xs-hidden"></div>
									</div>
								</div>
							</form>
						</div>

						<!--Water Sports-->
						<div id="flight" class="tab-pane fade">
							<form method="post" class="colorlib-form" id="water_sports_form">
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label for="name">Name:</label>
											<div class="form-field">
												<input type="text" id="water_name" name="water_name" onkeypress="validate_form(this.id,1,true,event)" onfocus="validate_form(this.id,1,true,event)" class="form-control error" placeholder="Your Name*">
												<span id="water_name-error" style="color:#ff5303;"></span>
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="email">Email:</label>
											<div class="form-field">
												<input type="text" id="water_email" name="water_email" class="form-control error" placeholder="Your Email*" onkeypress="validate_form(this.id,3,true,event,event)" onfocus="validate_form(this.id,3,true,event,event)">
												<span id="water_email-error" style="color:#ff5303;"></span>
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="contact">Contact:</label>
											<div class="form-field">
												<input type="text" id="water_contact" name="water_contact" class="form-control error" maxlength="10" placeholder="Your Mobile no*" onkeypress="validate_form(this.id,2,true,event)" onfocus="validate_form(this.id,2,true,event)">
												<span id="water_contact-error" style="color:#ff5303;"></span>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="guests">Guest</label>
											<div class="form-field">
												<i class="icon icon-arrow-down3"></i>
												<select id="water_people" name="water_people" class="form-control error">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5+s">5+</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<input type="submit" name="submit" id="submit" value="Enquire" class="btn btn-primary btn-block">
									</div>
								</div>
							</form>
						</div>

						<div id="cruises" class="tab-pane fade">
							<form method="post" class="colorlib-form">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="date">Where:</label>
											<div class="form-field">
												<input type="text" id="location" class="form-control" placeholder="Search Location">
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="date">Start Date:</label>
											<div class="form-field">
												<i class="icon icon-calendar2"></i>
												<input type="text" id="date" class="form-control date" placeholder="Check-in date">
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="guests">Categories</label>
											<div class="form-field">
												<i class="icon icon-arrow-down3"></i>
												<select name="category" id="category" class="form-control">
													<option value="#">Suite</option>
													<option value="#">Super Deluxe</option>
													<option value="#">Balcony</option>
													<option value="#">Economy</option>
													<option value="#">Luxury</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<input type="submit" name="submit" id="submit" value="Find Cruises" class="btn btn-primary btn-block">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Why CHoose uS -->
	<style type="text/css">
		/*=========================
		        4) Service Start
		    ===========================*/

		#service {
			padding: 96px 0px;
		}



		#service .block-top {
			text-align: center;
		}

		#service .service-header {
			margin: 0px
		}

		#service .service-header h1 {
			color: #636C6C;
		}

		#service .service-header p {
			color: #AFB8B8;
			line-height: 24px
		}

		#service p {
			color: #848484;
			line-height: 24px;
		}

		/*=========================
		          Service closes
		    ===========================*/

		#service .block-bottom {}

		#service .service-tab {}

		#service .service-tab ul {
			float: left;
			list-style: outside none none;
			padding: 0;
			margin-right: 40px;
		}

		#service .service-tab ul li {
			border-right: 1px solid #DBE2E2;
		}

		#service .service-tab ul li a {
			font-size: 20px;
			color: #9FA9A9;
			padding-top: 25px;
			padding-bottom: 17px;
			display: block;
			padding-right: 60px
		}

		#service .service-tab ul li a i {
			margin-right: 40px;
			position: relative;
			top: 10px;

		}

		#service .service-tab ul li a:hover {
			border-right: 10px solid #FFDD00;
			padding-right: 50px;
			color:#FFDD00;
		}

		#service .service-tab ul li a:hover i {
			color: #FFDD00;
		}

		.edit-tab {
			overflow: hidden;
		}

		.edit-tab h1 {
			color: #636C6C;
			margin: 0px;
			margin: 0px;
			padding-bottom: 30px;
			padding-top: 50px;
		}

		.edit-tab p {
			color: #AFB8B8;
			line-height: 24px;
			margin: 0px;
		}

		.edit-tab-content {
			padding-top: 30px
		}

		.teb-icon-edit {
			/*height: 170px;width: 170px;*/
			margin: 0 auto;
			color: #FFDD00;
		}

		.teb-icon-edit i {
			font-size: 170px
		}

		@media only screen and (min-width: 768px) and (max-width: 991px) {
			#service .service-header p {
				font-size: inherit;
			}

			#service .service-tab ul {
				margin-right: 50px;
			}

			.edit-tab h1 {
				padding-bottom: 10px;
				padding-top: 0px;
				font-size: inherit;
			}

			#service .service-tab ul li a {
				font-size: inherit;
			}

		}

		@media only screen and (max-width: 767px) {
			#service .service-tab ul {
				margin-right: 50px;
			}

			.edit-tab h1 {
				padding-bottom: 10px;
				padding-top: 0px;
				font-size: inherit;
			}

			#service .service-tab ul li a {
				font-size: inherit;
				padding-right: 20px;
			}

			#service .service-tab ul li a i {
				margin-right: 10px
			}

			#service .service-tab ul li a:hover {
				padding-right: 0px
			}

			#service .service-header p {
				font-size: inherit
			}

			#service .service-header h1 {
				font-size: inherit
			}

			#service .service-tab ul {
				float: none
			}

			#service .service-tab ul {
				margin-right: 0;
			}
		}

		@media only screen and (min-width: 480px) and (max-width: 767px) {
			#service .service-tab ul {
				float: left
			}

			#service .service-tab ul {
				margin-right: 50px;
			}

			.edit-tab h1 {
				padding-bottom: 10px;
				padding-top: 0px;
				font-size: inherit;
			}

			#service .service-tab ul li a {
				font-size: inherit;
				padding-right: 20px;
			}

			#service .service-tab ul li a i {
				margin-right: 10px
			}

			#service .service-tab ul li a:hover {
				padding-right: 0px;

			}

			#service .service-header p {
				font-size: inherit
			}

			#service .service-header h1 {
				font-size: inherit
			}
		}



	</style>

	<section id="service">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box fadeInUp animated-fast">
					<h2>Why Choose Us</h2>
				</div>
			</div><!-- row close -->
			<div class="row">
				<div class="col-md-12">
					<div class="block-bottom">
						<div class="service-tab">
							<!-- Nav tabs -->
							<ul class="badhon-tab" role="tablist">
								<li class="active service_href"><a href="#creative" aria-controls="creative" role="tab" data-toggle="tab">
										<i class="fa fa-key"></i>
										<!--fa fa-cogs-->
										Mindblowing Deals
									</a></li>
								<li><a href="#professional" aria-controls="professional" role="tab" data-toggle="tab">
										<i class="fa fa-briefcase"></i>
										Water Sports
									</a></li>
								<li><a href="#experienced" aria-controls="experienced" role="tab" data-toggle="tab">
										<i class="fa fa-code"></i>
										Beaches & Hotels
									</a></li>
								<li><a href="#dedicated" aria-controls="dedicated" role="tab" data-toggle="tab">
										<i class="fa fa-tachometer"></i>
										Dedicated
									</a></li>
								<li><a href="#support" aria-controls="support" role="tab" data-toggle="tab">
										<i class="fa fa-volume-control-phone"></i>
										24/7 Support
									</a></li>
								<li><a href="#enthusiastic" aria-controls="enthusiastic" role="tab" data-toggle="tab">
										<i class="fa fa-bolt"></i>
										Best Food
									</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content edit-tab-content">
								<div class="tab-pane active edit-tab" id="creative">
									<div class="teb-icon-edit col-md-5 col-sm-6 col-xs-12">
										<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/images/best hotels,water sports and deals in tarkarli.png">
									</div>
									<div class="col-md-7">
										<h1>Best Deals in Tarkarli Malvan.</h1>
										<!-- <p>Nunc accumsan hendrerit nunc, ac venenatis magna facilisis quis. Ut sit amet mi ac <br /> neque sodales facilisis. Nullam tempus fermentum lorem nec interdum. Ut id <br /> orci id sapien imperdiet vehicula. Etiam quis dignissim ante. Donec convallis tincidunt <br /> ligula, ac luctus mi interdum a.</p> -->
										<p>We break out of established patterns to make our customers happy.<br /><br />We give crazy discount on hotel bookings, bike rentals, water sports in Tarkarli.<br /> </p>
									</div>
								</div>
								<div class="tab-pane edit-tab" id="professional">
									<div class="teb-icon-edit col-md-5 col-sm-6 col-xs-12">
										<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/images/best water sports ln tarkarli scuba diving parasailing.png">
									</div>
									<div class="col-md-7 col-sm-6 col-xs-12">
										<h1>We Are Competent In Water Sports.</h1>
										<p>We take security very seriously and and provide best security for water sports in Tarkarli.<br><br /> We are committed to the highest standards of professionalism and quality. We give best Scuba Diving,Parasailing,Water bike,Snorkeling deals in Tarkarli. With our certified scuba professionals we give best experience and security to our customers</p>
									</div>
								</div>
								<div class="tab-pane edit-tab" id="experienced">
									<div class="teb-icon-edit col-md-5 col-sm-6 col-xs-12">
										<img class="img-responsive" style="border-radius: 20%;" src="<?php bloginfo('template_directory');?>/assets/images/best beaches private beaches and best sea facing hotels in tarkarli.jpg">
									</div>
									<div class="col-md-7 col-sm-6 col-xs-12">
										<h1>Breathtaking Beaches and Hotels in Tarkarli.</h1>
										<p>Our hotels are located near the heart of the Tarkarli beaches. With our private beaches you have your privacy and enjoyment. With sea facing hotel rooms, you will get best hotel experience in Tarkarli.</p>
									</div>
								</div>
								<div class="tab-pane edit-tab" id="dedicated">
									<div class="teb-icon-edit col-md-5 col-sm-6 col-xs-12">
										<img class="img-responsive" style="max-height:420px" src="<?php bloginfo('template_directory');?>/assets/images/dedicated.png">
									</div>
									<div class="col-md-7 col-sm-6 col-xs-12">
										<h1>Our Dedication Is Exhibited In Our Work.</h1>
										<p>We know that the price of success is hard work.<br><br /> So we stay dedicated to the job at hand and apply the best of ourselves to it.We dont do just business, we are always dedicated to what we do and try to improve and give our customers best experience.</p>
									</div>
								</div>
								<div class="tab-pane edit-tab" id="support">
									<div class="teb-icon-edit col-md-5 col-sm-6 col-xs-12">
										<img class="img-responsive" style="max-height:420px" src="<?php bloginfo('template_directory');?>/assets/images/support.png">
									</div>
									<div class="col-md-7 col-sm-6 col-xs-12">
										<h1>We Are Always Available At Your Service</h1>
										<p>Our Doors are always open.<br><br />
											Our Service: 24 hours a day, 7 days a week. We are always there for you,with our best customer support services which serves you best experience in Tarkarli Malvan.<br>
										</p>
									</div>
								</div>
								<div class="tab-pane edit-tab" id="enthusiastic">
									<div class="teb-icon-edit col-md-5 col-sm-6 col-xs-12">
										<img class="img-responsive" src="<?php bloginfo('template_directory');?>/assets/images/regional food in malvan tarkarli best non veg restaurants in malvan tarkarli.png">
									</div>
									<div class="col-md-7 col-sm-6 col-xs-12">
										<h1>Your mood depends on the Food </h1>
										<p>Your mood will be always best because we cook best regional(Malvani Food) and hygenic food in Tarkarli.Our motto is Eat Fresh, Live Fresh.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- .col-md-12 close -->
			</div><!-- row close -->
		</div><!-- .container close -->
	</section>
	<!-- Why CHoose uS close -->

	<!--how to reach tarkarli-->
	<style type="text/css">
		.page {
			margin: 0 auto;
			width: 920px;
		}

		.content {
			width: 33.33%;
			display: inline-block;
			margin: 0 auto;
			position: relative;
			height: 50vh;
			max-width: 300px;
		}

		.circle_inner__layer {
			width: 600px;
			height: 200px;
			transition: all .4s;
			position: absolute;
			top: 0;
			left: -200px;
		}

		.circle_inner__layer img {
			width: 100%;
			position: absolute;
			bottom: 0;
		}

		.circle {
			position: absolute;
			left: 0;
			right: 0;
			margin: auto;
			top: 50%;
			width: 200px;
			-webkit-transform: translateY(-50%);
			transform: translateY(-50%);
			transition: all .5s;
			cursor: pointer;
		}

		.circle:hover .circle_shine {
			top: 330px;
			left: -200px;
		}

		.circle_shine {
			background: white;
			width: 600px;
			transition: .3s;
			height: 200px;
			opacity: 0.2;
			top: -10px;
			left: -90px;
			-webkit-transform: rotate(45deg);
			transform: rotate(45deg);
			position: absolute;
			z-index: 2;
		}

		.circle:hover h2,
		.circle:hover h3 {
			opacity: 1;
			top: -36px;
		}

		.circle:hover .content_shadow {
			-webkit-transform: scale(1.1);
			transform: scale(1.1);
			top: -22px;
		}

		.circle:hover h3 {
			transition: all .2s .04s;
		}

		.circle:hover h2 {
			transition: all .2s;
		}

		.circle .circle_inner__layer:nth-of-type(1) {
			top: 0px;
			left: 0px;
		}

		.circle .circle_inner__layer:nth-of-type(2) {
			top: 0px;
			left: -210px;
		}

		.circle .circle_inner__layer:nth-of-type(3) {
			top: 0px;
			left: -440px;
		}

		.circle_title {
			text-align: center;
		}

		.circle_title h2,
		.circle_title h3 {
			opacity: 0;
			color: #4A7479;
			margin: 0;
			transition: all .2s .04s;
			position: relative;
			top: -10px;
		}

		.circle_title h3 {
			transition: all .2s;
			color: #B0D5D6;
			font-size: 15px;
		}

		.circle_inner {
			border-radius: 200px;
			background: #B0D5D6;
			overflow: hidden;
			margin: auto;
			width: 200px;
			z-index: 1;
			transition: all .3s;
			height: 200px;
			position: relative;
		}

		.circle_inner:hover {
			-webkit-transform: scale(1.1);
			transform: scale(1.1);
		}

		.circle_inner:hover .circle_inner__layer:nth-of-type(1) {
			left: -80px;
			transition: all 4s linear;
		}

		.circle_inner:hover .circle_inner__layer:nth-of-type(2) {
			left: -400px;
			transition: all 4s linear;
		}

		.circle_inner:hover .circle_inner__layer:nth-of-type(3) {
			left: -140px;
			transition: all 4s linear;
		}

		.content_shadow {
			width: 200px;
			box-shadow: 0px 31px 19px -2px #E0E8F9;
			height: 20px;
			border-radius: 70%;
			position: relative;
			top: -44px;
			transition: all .3s;
			z-index: 0;
		}
	</style>
	<!--how to reach tarkarli-->

		<!--How to reach-->
		<div class="row" style="margin-top:30px;margin-bottom:20px;">
			<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box fadeInUp animated-fast" style="margin-bottom: 0px;">
				<h2>How to reach Tarkarli?</h2>
				<p>Wondering How to reach Malvan Tarkarli? No Problem Just Click on Below Three Transport Vehicles.</p>
			</div>
		</div>
			<div class='page'>
			<div class='content'>
				<div class='circle'>
					<div class='circle_title'>
						<h2 style="font-size:20px">By Train</h2>
						<h3 style="font-size:14px;color:#58587a !important;">Nearest Railway Station is Kudal</h3>
					</div>
					<div class='circle_inner'>
						<div class='circle_inner__layer'>
							<img src='<?php bloginfo('template_directory');?>/assets/images/home/hotels-in-tarkarli.png'>
						</div>
						<div class='circle_inner__layer'>
							<img src='<?php bloginfo('template_directory');?>/assets/images/home/hotels-in-tarkarli-2.png'>
						</div>
						<div class='circle_inner__layer'>
							<img src='<?php bloginfo('template_directory');?>/assets/images/home/hotels-in-tarkarli-3.png'>
						</div>
					</div>
					<div class='content_shadow'></div>
				</div>
			</div>
			<div class='content'>
				<div class='circle'>
					<div class='circle_title'>
						<h2 style="font-size:20px">By Bus</h2>
						<h3 style="font-size:14px;color:#58587a !important;">RedBus,Private Buses,Government Buses all can bring you Malvan </h3>
					</div>
					<div class='circle_inner'>
						<div class='circle_inner__layer'>
							<img src='<?php bloginfo('template_directory');?>/assets/images/home/rooms-in-tarkarli.png'>
						</div>
						<div class='circle_inner__layer'>
							<img src='<?php bloginfo('template_directory');?>/assets/images/home/rooms-in-tarkarli-2.png'>
						</div>
						<div class='circle_inner__layer'>
							<img src='<?php bloginfo('template_directory');?>/assets/images/home/rooms-in-tarkarli-3.png'>
						</div>
					</div>
					<div class='content_shadow'></div>
				</div>
			</div>
			<div class='content'>
				<div class='circle'>
					<div class='circle_title' style="margin-top: 40px;">
						<h2 style="font-size:20px">By Flights</h2>
						<h3 style="font-size:14px;color:#58587a !important;">1 hour away from Chipi airport</h3>
					</div>
					<div class='circle_inner'>
						<div class='circle_inner__layer'>
							<img src='<?php bloginfo('template_directory');?>/assets/images/home/beaches-in-tarkarli.png'>
						</div>
						<div class='circle_inner__layer'>
							<img src='<?php bloginfo('template_directory');?>/assets/images/home/beaches-in-tarkarli-2.png'>
						</div>
						<div class='circle_inner__layer'>
							<img src='<?php bloginfo('template_directory');?>/assets/images/home/beaches-in-tarkarli-3.png'>
						</div>
					</div>
					<div class='content_shadow'></div>
				</div>
			</div>
		</div>
		<!--How to reach-->


	<!--gallery-->
	<section id="photostack-1" class="photostack photostack-start" style="margin-top:80px;margin-bottom:80px;">
		<div>
			<figure>
				<a href="" class="photostack-img"><img src="<?php bloginfo('template_directory');?>/assets/images/home/Water_sports_in_tarkarli_scuba_diving_in_tarkarli_snorrkling_in_tarkarli.jpg" alt="Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli" title="Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Water Sports</h2>
				</figcaption>
			</figure>
			<figure>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory');?>/assets/images/home/Bumper_water_ride_water_sports_in_tarkarli.jpg" alt="Bumper Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli" title="Bumper Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli"  /></a>
				<figcaption>
					<h2 class="photostack-title">Bumper Ride</h2>
				</figcaption>
			</figure>
			<figure>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory');?>/assets/images/home/Banana_ride_water_sports_tarkarli_water_sports_package_tarkarli.jpg" alt="Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli" title="Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Banana Ride</h2>
				</figcaption>
			</figure>
			<figure>

					<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory');?>/assets/images/home/Banana_slide_water_sports_package_hotels_in_tarkarli_room_stay.jpg" alt="Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" title="Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Fall of Banana Ride</h2>
				</figcaption>
			</figure>
			<figure>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory');?>/assets/images/home/Boating_Tarkarli_Malvan_Beaches_in_Tarkarli_Resorts_in_Tarkarli_Best_Hotels_Malvan_Tarkarli_Resorts_in_Tarkarli_water_sports_packages_Tarkarli.jpg" alt="Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" title="Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Boating</h2>
				</figcaption>
			</figure>
			<figure>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory');?>/assets/images/home/Speed_boat_tarkarli_water_sports_tarkarli_best_packages_tararli_malvan.jpg" alt="Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" title="Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Speed Boat</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory');?>/assets/images/home/Triple_Boat_ride_family_boating_water_sports_tarkarli_malvan_scuba_diving_hotels_in_tarkarli_resorts_in_tarkarli.jpg" alt="Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" title="Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Triple Threat Water Boat</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory');?>/assets/images/home/Dolphin_sawari_dophins_in_malvan_tarkarli_dolphin_sight_seeing_tarkarli.jpg" alt="Dolphins in tarkarli Dolphin sawari in tarkarli Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" title="Dolphins in tarkarli Dolphin sawari in tarkarli Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Dolphin Sawari</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory');?>/assets/images/home/Fishing_in_tarkarli_beaches_in_tarkarli_beach_resort_tarkarli_malvan_sunset_point_tarkarli.jpg" alt="Fishing in Malvan Tarkarli Nature Sunset point Malvan Tarkarli Dolphins in tarkarli Dolphin sawari in tarkarli Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" title="Fishing in Malvan Tarkarli Nature Sunset point Malvan Tarkarli Dolphins in tarkarli Dolphin sawari in tarkarli Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Fishing</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory');?>/assets/images/home/Butterfly_tarkarli_Nature_of_Tarkarli_malvan_Beaches_MalvanTarkarli_Greenery_Malvan.jpg" alt="Butterfly Tarkarli Nature Tarkarli Beaches Tarkarli Fishing in Malvan Tarkarli Nature Sunset point Malvan Tarkarli Dolphins in tarkarli Dolphin sawari in tarkarli Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" title="Butterfly Tarkarli Nature Tarkarli Beaches Tarkarli Fishing in Malvan Tarkarli Nature Sunset point Malvan Tarkarli Dolphins in tarkarli Dolphin sawari in tarkarli Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Nature Malvan</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory');?>/assets/images/home/parasailing_Malvan_Tarkarli_water_sports_tarkarli_beaches_tarkarli_hotel_tarkarli.jpg" alt="Parasailing in Tarkarli Water Sports in Tarkarli Best Water Sports Packages Butterfly Tarkarli Nature Tarkarli Beaches Tarkarli Fishing in Malvan Tarkarli Nature Sunset point Malvan Tarkarli Dolphins in tarkarli Dolphin sawari in tarkarli Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" title="Parasailing in Tarkarli Water Sports in Tarkarli Best Water Sports Packages Butterfly Tarkarli Nature Tarkarli Beaches Tarkarli Fishing in Malvan Tarkarli Nature Sunset point Malvan Tarkarli Dolphins in tarkarli Dolphin sawari in tarkarli Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Parasailing</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory');?>/assets/images/home/parasailing_Malvan_Tarkarli_water_sports_tarkarli_beaches_tarkarli_hotel_tarkarli.jpg" alt="light house tarkarli adventure water sports Parasailing in Tarkarli Water Sports in Tarkarli Best Water Sports Packages Butterfly Tarkarli Nature Tarkarli Beaches Tarkarli Fishing in Malvan Tarkarli Nature Sunset point Malvan Tarkarli Dolphins in tarkarli" title="ight house tarkarli adventure water sports Parasailing in Tarkarli Water Sports in Tarkarli Best Water Sports Packages Butterfly Tarkarli Nature Tarkarli Beaches Tarkarli Fishing in Malvan Tarkarli Nature Sunset point Malvan Tarkarli Dolphins in tarkarli Dolphin sawari in tarkarli Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">LightHouse</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory');?>/assets/images/home/Snoorkling_tarkarli_Malvan_Malvan_Fort_Tarkarli_hotels_in_tarkarli_water_sports_malvan_tarkarli.jpg" alt="Snoorkling Water Sports Tarkarli Malvan Best Packages Malvan Tarkarli Tourism light house tarkarli adventure water sports Parasailing in Tarkarli Water Sports in Tarkarli Best Water Sports Packages Butterfly Tarkarli Nature Tarkarli Beaches Tarkarli Fishing in Malvan Tarkarli Nature Sunset point Malvan Tarkarli Dolphins in tarkarli" title="Snoorling in Tarkarli Light house tarkarli adventure water sports Parasailing in Tarkarli Water Sports in Tarkarli Best Water Sports Packages Malvan Tarkarli Dolphins in tarkarli Dolphin sawari in tarkarli Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Snoorkling</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory');?>/assets/images/home/Scuba_diving_tarkarli_Malvan_water_sports_package_malvan_tarkarli.jpg" alt="Scuba Diving Tarkarli Malvan  Water Sports Malvan Tarkarli Snoorkling Water Sports Tarkarli Malvan Best Packages Malvan Tarkarli Tourism light house tarkarli adventure water sports Parasailing in Tarkarli Water Sports in Tarkarli Best Water Sports Packages Butterfly Tarkarli Nature Tarkarli Beaches Tarkarli Fishing in Malvan Tarkarli Nature Sunset point Malvan Tarkarli Dolphins in tarkarli" title="Scuba Diving Snoorling in Tarkarli Light house tarkarli adventure water sports Parasailing in Tarkarli Water Sports in Tarkarli Best Water Sports Packages Malvan Tarkarli Dolphins in tarkarli Dolphin sawari in tarkarli Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Scuba Diving</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory');?>/assets/images/home/Life_at_Tarkarli_candid_Scenery_Tarkarli_Nature.jpg" alt="Beach Candid Pic Scuba Diving Tarkarli Malvan  Water Sports Malvan Tarkarli Snoorkling Water Sports Tarkarli Malvan Best Packages Malvan Tarkarli Tourism light house tarkarli adventure water sports Parasailing in Tarkarli Water Sports in Tarkarli Best Water Sports Packages Butterfly Tarkarli Nature Tarkarli Beaches Tarkarli Fishing in Malvan Tarkarli Nature Sunset point Malvan Tarkarli Dolphins in tarkarli" title="Scuba Diving Snoorling in Tarkarli Light house tarkarli adventure water sports Parasailing in Tarkarli Water Sports in Tarkarli Best Water Sports Packages Malvan Tarkarli Dolphins in tarkarli Dolphin sawari in tarkarli Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Life @ Tarkarli</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory');?>/assets/images/home/Beach_View_Tarkarli_Malvan_Sunset_Beach_Tarkarli_Malvan.jpg" alt="Beach View Tarkarli Beach Hotels in Tarkarli Candid Pic Scuba Diving Tarkarli Malvan  Water Sports Malvan Tarkarli Snoorkling Water Sports Tarkarli Malvan Best Packages Malvan Tarkarli Tourism light house tarkarli adventure water sports Parasailing in Tarkarli Water Sports in Tarkarli Best Water Sports Packages Butterfly Tarkarli Nature Tarkarli Beaches Tarkarli Fishing in Malvan Tarkarli Nature Sunset point Malvan Tarkarli Dolphins in tarkarli" title="Scuba Diving Snoorling in Tarkarli Light house tarkarli adventure water sports Parasailing in Tarkarli Water Sports in Tarkarli Best Water Sports Packages Malvan Tarkarli Dolphins in tarkarli Dolphin sawari in tarkarli Banana Ride Water sports in tarkarli scuba diving in tarkarli snoorkling in tarkarli Water Packages in Tarkarli Water Sports Package Room Stay Restaurant in Tarkarli" /></a>
				<figcaption>
				<figcaption>
					<h2 class="photostack-title">Beach Sunset</h2>
				</figcaption>
			</figure>
		</div>
	</section>
	<!--gallery-->


	<!--Our services-->
	<!--<style type="text/css">
		/*IE8, IE9*/

		.displayNone {
			display: none;
		}


		.wrapperMain table {
			border-collapse: collapse;
			border-spacing: 0;
		}

		.wrapperMain fieldset,
		img {
			border: 0;
		}

		.containerContent {
			margin: 0 auto;
			width: 100%;
			max-width: 1400px;
		}

		.wrapperMain ul {
			list-style: none;
			list-style-position: outside;
		}

		.wrapperMain a {
			outline: none;
		}


		.wrapperMain p {
			line-height: 150%;
		}

		.wrapperMain a:link,
		.wrapperMain a:visited {
			text-decoration: none;
		}

		.clear {
			clear: both;
		}

		.center {
			text-align: center;
		}



		/*****************************************************************************************************************/



		/*GENERAL SECTION SETTINGS*/

		.wrapperMain section {
			width: 100%;
		}

		#services {
			padding: 80px 0px 50px 0px;
			position: relative;
			display: block;
			background: rgba(215, 215, 215, 0.52);
		}



		.set_size_section1 {
			margin-left: auto;
			margin-right: auto;
			width: 100%;
			display: inline-block;
		}



		/*****************************************************************************************************************/


		#services .article_center2 article {
			text-align: center;
			flex: 0 0 25%;
			cursor: pointer;
			box-sizing: border-box;
			text-transform: none;
			margin: 25px;
			z-index: 1;
			-webkit-transition: opacity 0.4s linear, -webkit-transform 0.4s ease-in-out, -webkit-box-shadow 0.4s ease-in-out;
			-moz-transition: opacity 0.4s linear, -moz-transform 0.4s ease-in-out, -moz-box-shadow 0.4s ease-in-out;
			-o-transition: opacity 0.4s linear, -o-transform 0.4s ease-in-out, -o-box-shadow 0.4s ease-in-out;
			-ms-transition: opacity 0.4s linear, -ms-transform 0.4s ease-in-out, -ms-box-shadow 0.4s ease-in-out;
			transition: opacity 0.4s linear, transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
			-webkit-backface-visibility: hidden;
			-moz-backface-visibility: hidden;
			-ms-backface-visibility: hidden;
			-o-backface-visibility: hidden;
			backface-visibility: hidden;
		}

		#services article img,
		#services article h3,
		#services article p {
			-webkit-transition: opacity 0.2s linear, text-shadow 0.5s ease-in-out, color 0.5s ease-in-out;
			-moz-transition: opacity 0.2s linear, text-shadow 0.5s ease-in-out, color 0.5s ease-in-out;
			-o-transition: opacity 0.2s linear, text-shadow 0.5s ease-in-out, color 0.5s ease-in-out;
			-ms-transition: opacity 0.2s linear, text-shadow 0.5s ease-in-out, color 0.5s ease-in-out;
			transition: opacity 0.2s linear, text-shadow 0.5s ease-in-out, color 0.5s ease-in-out;
		}

		#services article.blur {
			-ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=0.9, M12=0, M21=0, M22=0.9, SizingMethod='auto expand')";
			-webkit-transform: scale(0.9);
			-moz-transform: scale(0.9);
			-o-transform: scale(0.9);
			transform: scale(0.9);
			opacity: 0.8;
			/*zoom:0.9;*/
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
			filter: alpha(opacity=80);
		}

		#services article.active {
			-webkit-transform: scale(1.05);
			-moz-transform: scale(1.05);
			-ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=1.08, M12=0, M21=0, M22=1.08, SizingMethod='auto expand')";
			-o-transform: scale(1.05);
			transform: scale(1.05);
			z-index: 100;
			/*zoom:1.08;*/
			opacity: 1;
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
			filter: alpha(opacity=100);
		}

		#services article.active img,
		#services article.active p,
		#services article.active h3 {
			opacity: 1;
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
			filter: alpha(opacity=100);
		}

		#services article.blur img {
			text-shadow: 0px 0px 10px rgba(51, 51, 51, 0.9);
			color: rgba(51, 51, 51, 0);
			opacity: 0.6;
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=60)";
			filter: alpha(opacity=60);
		}

		#services article.blur h3 {
			text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.9);
			color: rgba(100, 100, 100, 0.3);
			opacity: 0.6;
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=60)";
			filter: alpha(opacity=60);
		}

		#services article.blur p {
			text-shadow: 0px 0px 10px rgba(51, 51, 51, 0.9);
			color: rgba(100, 100, 100, 0.3);
			opacity: 0.6;
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=60)";
			filter: alpha(opacity=60);
		}

		.services_h2 {
			font-family: 'MontserratBold', sans-serif;
			font-family: 'Roboto Slab', sans-serif;
			color: black;
			margin-bottom: 5px;
			margin-top: 20px;
			font-size: 30px;
		}

		.services_p {
			font-family: 'Roboto Slab';
			font-style: italic;
			font-size: 15px;
		}

		.section1_article {
			text-align: center;
		}

		.section1_article h3 {
			font-family: 'Cookie', sans-serif;
			color: black;
			margin-bottom: 3%;
			font-size: 25px;
		}

		.section1_article img {
			margin-bottom: 10px;
		}

		.section1_article p {
			font-family: 'RobotoSlab Regular', serif;
			*/ word-spacing: 1px;
			/* font-family: 'Roboto Slab', sans-serif; */
			font-size: 13px;
			/* line-height: 30px; */
			font-family: 'Roboto Slab', sans-serif;
			/* font-family: 'Cookie', sans-serif; */
			/* font-family: 'Open Sans Condensed', sans-serif; */
			/* font-family: 'Sancreek', sans-serif; */
		}

		.article_center2 {
			margin: 0 auto;
			width: 80%;
			/* align-items: flex-start; */
			width: 80%;
			flex-direction: row;
			justify-content: center;
			display: flex;
			margin-top: 50px;
			/* flex-flow: row wrap; */
			/* justify-content: space-between; */
			flex-direction: row;
			flex-wrap: wrap;
		}








		/* SECTION LOADING */

		.is-hidden {
			visibility: hidden;
		}



		.bounce-inInverse {
			-webkit-animation: cd-bounce-2-inverse 1s;
			-moz-animation: cd-bounce-2-inverse 1s;
			-ms-animation: cd-bounce-2-inverse 1s;
			-o-animation: cd-bounce-2-inverse 1s;
			animation: cd-bounce-2-inverse 1s;
		}





		@-webkit-keyframes cd-bounce-2-inverse {
			0% {
				opacity: 0;
				-webkit-transform: translateY(200px);
			}

			60% {
				opacity: 1;
				-webkit-transform: translateY(-20px);
			}

			100% {
				-webkit-transform: translateY(0);
			}
		}

		@-moz-keyframes cd-bounce-2-inverse {
			0% {
				opacity: 0;
				-moz-transform: translateY(200px);
			}

			60% {
				opacity: 1;
				-moz-transform: translateY(-20px);
			}

			100% {
				-moz-transform: translateY(0);
			}
		}

		@-o-keyframes cd-bounce-2-inverse {
			0% {
				opacity: 0;
				-o-transform: translateY(200px);
			}

			60% {
				opacity: 1;
				-o-transform: translateY(-20px);
			}

			100% {
				-o-transform: translateY(0);
			}
		}

		@keyframes cd-bounce-2-inverse {
			0% {
				opacity: 0;
				transform: translateY(200px);
			}

			60% {
				opacity: 1;
				transform: translateY(-20px);
			}

			100% {
				transform: translateY(0);
			}
		}




		@media screen and (max-width: 650px) {
			#services .article_center2 article {
				flex: 0 0 100%;
				margin-bottom: 7%;
			}

		}
	</style>

	<div class="wrapperMain">
		<section id="services" class="bounce-inInverse">
			<div class="containerContent">
				<div class="set_size_section1">
					<h2 class="services_h2 center">SERVICES</h2>
					<p class="services_p center">hello services, hello services, hello services</p>
					<div class="article_center2">
						<article class="section1_article">
							<img alt="Basket" src="http://icons.iconarchive.com/icons/jozef89/services-flat/512/ecommerce-icon.png" width="78" height="77">
							<h3>E-Commerce</h3>
							<p>Metus Vestibulum cursus elit pretium auctor cursus lorem Vestibulum eros sagittis. Netus pede Vestibulum Quisque Nam pretium Donec ut vitae quis parturient.</p>
						</article>
						<article class="section1_article">
							<img alt="Laptop" src="http://icons.iconarchive.com/icons/jozef89/services-flat/512/responsive-web-icon.png" width="78" height="77">
							<h3>Responsive Web</h3>
							<p>Condimentum platea cursus porta tellus eros consectetuer metus Sed aliquet tempus. Laoreet non ac porta urna Vestibulum congue id eu elit dignissim. Sollicitudin vitae ipsum massa enim lacus</p>
						</article>
						<article class="section1_article">
							<img alt="Locked" src="https://cdn0.iconfinder.com/data/icons/web-development-2/512/security_lock_password_protection_secure_locking_system_safe_privacy_private_safety_encryption_flat_design_icon-512.png" width="78" height="77">
							<h3>Web Security</h3>
							<p>Buspendisse in lorem ipsum ut magna pharera aliquet non sodales lorem ipsum belit. Donec sed odio rera magna pharera aliquet. Nulla uitae elit libero, a pharetra augue nulla ligula massa pharera aliquet</p>
						</article>
					</div>
				</div>
			</div>
		</section>
	</div>

	<script type="text/javascript">
		/* BLUR EFFECT */

		var $container = $('.article_center2'),
			$articles = $container.children('article'),
			timeout;

		$articles.on('mouseenter', function(event) {
			var $article = $(this);
			clearTimeout(timeout);
			timeout = setTimeout(function() {
				if ($article.hasClass('active')) return false;
				$articles.not($article).removeClass('active').addClass('blur');
				$article.removeClass('blur').addClass('active');
			}, 75);
		});
		$('.article_center2', '#services ').on('mouseleave', function(event) {
			clearTimeout(timeout);
			$articles.removeClass('active blur');
		});


		$articles.bind('click', function() {
			var title = $(this).find('h3').text();
			alert("Nothing interesting,\nonly the actual title of the article = " + title);
		});

		/* AUTHOR LINK */
		$('.about-me-img').hover(function() {
			$('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
		}, function() {
			$('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
		});
	</script>
	<!--Our services-->

<!--Services-->
	<section class="container-fluid" style="margin-top:80px;margin-bottom:80px;">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box fadeInUp animated-fast" style="margin-bottom: 0px;">
					<h2>Our Services</h2>
					<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				</div>
			</div>
			<div class="row">
					<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
							<hr>
							<div class="media wow fadeInRight">
									<h3>Hotels</h3>
									<div class="media-body media-middle">
											<p>What could be easier? Get started fast with this landing page starter theme.What could be easier? Get started fast with this landing page starter theme.</p>
									</div>
									<div class="media-right">
										<img style="width:100px;" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8Zz4KCTxyZWN0IHk9IjE2Ni40IiBzdHlsZT0iZmlsbDojRThFQUVBOyIgd2lkdGg9IjExMy4wNjciIGhlaWdodD0iMzQ1LjYiLz4KCTxyZWN0IHg9IjM5OC45MzMiIHk9IjE2Ni40IiBzdHlsZT0iZmlsbDojRThFQUVBOyIgd2lkdGg9IjExMy4wNjciIGhlaWdodD0iMzQ1LjYiLz4KPC9nPgo8cGF0aCBzdHlsZT0iZmlsbDojRkY3MDU4OyIgZD0iTTAsMTcyLjhMMCwxNzIuOGg1MTJsMCwwYzAtMTIuOC0xMC42NjctMjMuNDY3LTIzLjQ2Ny0yMy40NjdIMjMuNDY3QzEwLjY2NywxNDkuMzMzLDAsMTYwLDAsMTcyLjh6Ii8+CjxyZWN0IHg9IjExMy4wNjciIHk9IjEwOC44IiBzdHlsZT0iZmlsbDojRjJGMkYyOyIgd2lkdGg9IjI4NS44NjciIGhlaWdodD0iNDAzLjIiLz4KPHBhdGggc3R5bGU9ImZpbGw6I0ZGNzA1ODsiIGQ9Ik00MTQuOTMzLDg1LjMzM0g5Ny4wNjdjLTYuNCwwLTExLjczMyw1LjMzMy0xMS43MzMsMTEuNzMzUzkwLjY2NywxMDguOCw5Ny4wNjcsMTA4LjhoMzE3Ljg2NyAgYzYuNCwwLDExLjczMy01LjMzMywxMS43MzMtMTEuNzMzUzQyMS4zMzMsODUuMzMzLDQxNC45MzMsODUuMzMzeiIvPgo8Zz4KCTxyZWN0IHg9IjMyIiB5PSIxOTguNCIgc3R5bGU9ImZpbGw6IzU0QzBFQjsiIHdpZHRoPSI0OS4wNjciIGhlaWdodD0iNTQuNCIvPgoJPHJlY3QgeD0iMzIiIHk9IjI3NC4xMzMiIHN0eWxlPSJmaWxsOiM1NEMwRUI7IiB3aWR0aD0iNDkuMDY3IiBoZWlnaHQ9IjU0LjQiLz4KCTxyZWN0IHg9IjMyIiB5PSIzNDkuODY3IiBzdHlsZT0iZmlsbDojNTRDMEVCOyIgd2lkdGg9IjQ5LjA2NyIgaGVpZ2h0PSI1NC40Ii8+Cgk8cmVjdCB4PSIzMiIgeT0iNDI1LjYiIHN0eWxlPSJmaWxsOiM1NEMwRUI7IiB3aWR0aD0iNDkuMDY3IiBoZWlnaHQ9IjU0LjQiLz4KCTxyZWN0IHg9IjQzMC45MzMiIHk9IjE5OC40IiBzdHlsZT0iZmlsbDojNTRDMEVCOyIgd2lkdGg9IjQ5LjA2NyIgaGVpZ2h0PSI1NC40Ii8+Cgk8cmVjdCB4PSI0MzAuOTMzIiB5PSIyNzQuMTMzIiBzdHlsZT0iZmlsbDojNTRDMEVCOyIgd2lkdGg9IjQ5LjA2NyIgaGVpZ2h0PSI1NC40Ii8+Cgk8cmVjdCB4PSI0MzAuOTMzIiB5PSIzNDkuODY3IiBzdHlsZT0iZmlsbDojNTRDMEVCOyIgd2lkdGg9IjQ5LjA2NyIgaGVpZ2h0PSI1NC40Ii8+Cgk8cmVjdCB4PSI0MzAuOTMzIiB5PSI0MjUuNiIgc3R5bGU9ImZpbGw6IzU0QzBFQjsiIHdpZHRoPSI0OS4wNjciIGhlaWdodD0iNTQuNCIvPgo8L2c+CjxyZWN0IHg9IjE0NS4wNjciIHk9IjI5My4zMzMiIHN0eWxlPSJmaWxsOiM4NERCRkY7IiB3aWR0aD0iNTMuMzMzIiBoZWlnaHQ9IjU0LjQiLz4KPHJlY3QgeD0iMTk4LjQiIHk9IjM3OC42NjciIHN0eWxlPSJmaWxsOiM0MDU5NkI7IiB3aWR0aD0iMTE0LjEzMyIgaGVpZ2h0PSIxMzMuMzMzIi8+CjxyZWN0IHk9IjQ4OS42IiBzdHlsZT0iZmlsbDojQUNCM0JBOyIgd2lkdGg9IjUxMiIgaGVpZ2h0PSIyMi40Ii8+CjxnPgoJPHJlY3QgeD0iMTQ1LjA2NyIgeT0iMTQxLjg2NyIgc3R5bGU9ImZpbGw6Izg0REJGRjsiIHdpZHRoPSI1My4zMzMiIGhlaWdodD0iNTQuNCIvPgoJPHJlY3QgeD0iMTQ1LjA2NyIgeT0iMjE3LjYiIHN0eWxlPSJmaWxsOiM4NERCRkY7IiB3aWR0aD0iNTMuMzMzIiBoZWlnaHQ9IjU0LjQiLz4KCTxyZWN0IHg9IjIyOS4zMzMiIHk9IjE0MS44NjciIHN0eWxlPSJmaWxsOiM4NERCRkY7IiB3aWR0aD0iNTMuMzMzIiBoZWlnaHQ9IjU0LjQiLz4KCTxyZWN0IHg9IjIyOS4zMzMiIHk9IjIxNy42IiBzdHlsZT0iZmlsbDojODREQkZGOyIgd2lkdGg9IjUzLjMzMyIgaGVpZ2h0PSI1NC40Ii8+Cgk8cmVjdCB4PSIyMjkuMzMzIiB5PSIyOTMuMzMzIiBzdHlsZT0iZmlsbDojODREQkZGOyIgd2lkdGg9IjUzLjMzMyIgaGVpZ2h0PSI1NC40Ii8+Cgk8cmVjdCB4PSIzMTMuNiIgeT0iMTQxLjg2NyIgc3R5bGU9ImZpbGw6Izg0REJGRjsiIHdpZHRoPSI1My4zMzMiIGhlaWdodD0iNTQuNCIvPgoJPHJlY3QgeD0iMzEzLjYiIHk9IjIxNy42IiBzdHlsZT0iZmlsbDojODREQkZGOyIgd2lkdGg9IjUzLjMzMyIgaGVpZ2h0PSI1NC40Ii8+Cgk8cmVjdCB4PSIzMTMuNiIgeT0iMjkzLjMzMyIgc3R5bGU9ImZpbGw6Izg0REJGRjsiIHdpZHRoPSI1My4zMzMiIGhlaWdodD0iNTQuNCIvPgo8L2c+CjxnPgoJPHBhdGggc3R5bGU9ImZpbGw6IzQwNTk2QjsiIGQ9Ik0xNDcuMiwxLjA2N2gxMy44NjdWNjRIMTQ3LjJWMzkuNDY3aC0yNS42VjY0aC0xMy44NjdWMS4wNjdIMTIxLjZ2MjYuNjY3aDI1LjZMMTQ3LjIsMS4wNjcgICBMMTQ3LjIsMS4wNjd6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojNDA1OTZCOyIgZD0iTTIyOS4zMzMsNTUuNDY3Yy02LjQsNi40LTEzLjg2Nyw5LjYtMjMuNDY3LDkuNnMtMTcuMDY3LTMuMi0yMy40NjctOS42ICAgYy02LjQtNi40LTkuNi0xMy44NjctOS42LTIzLjQ2N3MzLjItMTcuMDY3LDkuNi0yMy40NjdDMTg4LjgsMy4yLDE5Ni4yNjcsMCwyMDUuODY3LDBjOS42LDAsMTcuMDY3LDMuMiwyMy40NjcsOS42ICAgYzYuNCw2LjQsOS42LDEzLjg2Nyw5LjYsMjMuNDY3QzIzOC45MzMsNDEuNiwyMzUuNzMzLDUwLjEzMywyMjkuMzMzLDU1LjQ2N3ogTTIyNS4wNjcsMzMuMDY3YzAtNS4zMzMtMi4xMzMtMTAuNjY3LTUuMzMzLTE0LjkzMyAgIGMtMy4yLTQuMjY3LTguNTMzLTYuNC0xMy44NjctNi40cy05LjYsMi4xMzMtMTMuODY3LDYuNGMtMy4yLDQuMjY3LTUuMzMzLDguNTMzLTUuMzMzLDE0LjkzM1MxODguOCw0My43MzMsMTkyLDQ2LjkzMyAgIGM0LjI2Nyw0LjI2Nyw4LjUzMyw2LjQsMTMuODY3LDYuNGM1LjMzMywwLDkuNi0yLjEzMywxMy44NjctNi40UzIyNS4wNjcsMzguNCwyMjUuMDY3LDMzLjA2N3oiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiM0MDU5NkI7IiBkPSJNMjc2LjI2NywxMy44Njd2NTEuMkgyNjIuNHYtNTEuMmgtMTguMTMzdi0xMi44SDI5NC40VjEyLjhoLTE4LjEzM1YxMy44Njd6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojNDA1OTZCOyIgZD0iTTM0OS44NjcsMS4wNjd2MTIuOGgtMzJ2MTIuOGgyOC44VjM4LjRoLTI4Ljh2MTIuOGgzMlY2NGgtNDYuOTMzVjEuMDY3SDM0OS44Njd6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojNDA1OTZCOyIgZD0iTTM2My43MzMsNjUuMDY3di02NEgzNzcuNlY1MS4yaDI2LjY2N1Y2NGgtNDAuNTMzVjY1LjA2N3oiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
										 <!--<i class="fa fa-bolt" aria-hidden="true" style="font-size: 80px;"></i>-->
									</div>
							</div>
							<hr>
							<div class="media wow fadeIn">
									<h3>Private Beaches</h3>
									<div class="media-left">
										<img style="width:100px;" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPHBhdGggc3R5bGU9ImZpbGw6IzkwQTRBRTsiIGQ9Ik0yNTUuMjMsNDE0LjAyOWw4OC42NDEtMjIyLjQwMmMzLjcwOS05LjMwNiwxNC4yNi0xMy44NDQsMjMuNTY2LTEwLjEzNSAgYzkuMzA2LDMuNzA5LDEzLjg0NCwxNC4yNiwxMC4xMzUsMjMuNTY2bC04NC42NTMsMjEyLjM5NkwyNTUuMjMsNDE0LjAyOXoiLz4KPHBhdGggc3R5bGU9ImZpbGw6I0ZGRjlDNTsiIGQ9Ik0yOTAuMTcxLDIyMC40ODJjMC4wMDktMC4wMjEsMC4wMTgtMC4wNDIsMC4wMjctMC4wNjNjLTAuMDA5LDAuMDAxLTAuMDE4LDAuMDAzLTAuMDI2LDAuMDA0ICBMMjkwLjE3MSwyMjAuNDgyeiIvPgo8cGF0aCBzdHlsZT0ib3BhY2l0eTowLjE7ZW5hYmxlLWJhY2tncm91bmQ6bmV3ICAgIDsiIGQ9Ik0zNjcuNDM5LDE4MS40OTJjLTkuMzA2LTMuNzA5LTE5Ljg1NywwLjgyOC0yMy41NjYsMTAuMTM1bC0yMy4yMTEsNTguMjM3ICBjNS45MTQsMC45NDUsMTEuNzk2LDIuNTU5LDE3LjU4Nyw0Ljg2OGM1Ljc5MSwyLjMwOCwxMS4xOTMsNS4xODEsMTYuMTIxLDguNTQ1bDIzLjIwNC01OC4yMTggIEMzODEuMjgyLDE5NS43NTEsMzc2Ljc0NSwxODUuMjAxLDM2Ny40MzksMTgxLjQ5MnoiLz4KPHBhdGggc3R5bGU9ImZpbGw6I0ZGRjlDNTsiIGQ9Ik0zOTkuNTM2LDEwMC45NjFsLTY2Ljg4NCw3LjE4OWwtNDIuNDgxLDQ5LjQ3NWwwLjAwNyw2Mi43ODNsMC4wMy0wLjAxMiAgYy0wLjAwMywwLjAwNy0wLjAwNiwwLjAxNS0wLjAxLDAuMDIyYzE4LjU1Mi0zLjQ0NSwzOS4yMDgtMS42MzgsNTkuMjAyLDYuMzMxYzE5Ljg2Nyw3LjkxOCwzNi4wMTgsMjAuNzA0LDQ3LjEwOSwzNS44MzcgIGwwLjE5NCwwLjM1NGwzNC45NDItMzQuNTk2bDMuODk4LTg2LjMyOEwzOTkuNTM2LDEwMC45NjF6Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiNGRkNBMjg7IiBkPSJNNDYxLjYxMiw0NTMuMTM5Yy0yNC4zNC0zOC45MDctMTA2Ljc3Ni02Ny41MzktMjA0LjcyNi02Ny41MzkgIGMtOTcuOTQ3LDAtMTgwLjM4LDI4LjYzLTIwNC43MjMsNjcuNTM1bDEzLjY3NSwwLjAwNGwyOS42NzcsMTkuMDMybDMxLjIwNSwzLjM5MmwyMS45OTItMTIuNzA2bDM0LjkwOC0xMi43MzJsMTguNzMzLDUuMDg3ICBsMzkuODUzLDIwLjM1MWwyNi4yODYtNC4yNGwzMy45MTctMTIuNjU1bDI0LjU5LTcuNjk1bDMxLjM3Myw3LjY5NWwyNS40MzgsMTYuODk1bDQwLjcwMS01LjA4N0w0NjEuNjEyLDQ1My4xMzl6Ii8+CjxwYXRoIHN0eWxlPSJvcGFjaXR5OjAuMTtlbmFibGUtYmFja2dyb3VuZDpuZXcgICAgOyIgZD0iTTQyNy4zNjgsNDY5LjE0MWwzNC4yNDUtMTYuMDAyICBjLTI0LjM0LTM4LjkwNi0xMDYuNzc2LTY3LjUzOS0yMDQuNzI2LTY3LjUzOWMtMjIuNTIxLDAtNDQuMjE3LDEuNTE3LTY0LjU3OSw0LjMyQzI5My4zNSw0MDEuNTA4LDM3Ny44Niw0MzAuNTY3LDQyNy4zNjgsNDY5LjE0MXoiLz4KPHBhdGggc3R5bGU9ImZpbGw6IzFFQjhFODsiIGQ9Ik01MDguNjk2LDQ1Ny4zMTZjLTI0LjA1My0xNi4zMTMtNTUuMTM4LTE2LjMxMy03OS4xOTEsMGMtMTguOTE4LDEyLjgzLTQzLjM2NSwxMi44My02Mi4yODUsMCAgYy0yNC4wNTMtMTYuMzEzLTU1LjEzOC0xNi4zMTMtNzkuMTkxLDBjLTE4LjkxOCwxMi44My00My4zNjYsMTIuODMtNjIuMjg1LDBjLTI0LjA1My0xNi4zMTMtNTUuMTM4LTE2LjMxMy03OS4xOTEsMCAgYy0xOC45MTksMTIuODMtNDMuMzY2LDEyLjgzLTYyLjI4NSwwYy0yNC4wNTMtMTYuMzEzLTU1LjEzOC0xNi4zMTMtNzkuMTkxLDBjLTMuNDQyLDIuMzM0LTQuMzQsNy4wMTctMi4wMDYsMTAuNDU5ICBjMi4zMzQsMy40NDIsNy4wMTgsNC4zMzksMTAuNDU5LDIuMDA2YzE4LjkxOC0xMi44Myw0My4zNjYtMTIuODMxLDYyLjI4NSwwYzI0LjA1NCwxNi4zMTIsNTUuMTM5LDE2LjMxMiw3OS4xOTEsMCAgYzE4LjkxOC0xMi44Myw0My4zNjYtMTIuODMxLDYyLjI4NSwwYzI0LjA1NCwxNi4zMTIsNTUuMTM5LDE2LjMxMiw3OS4xOTEsMGMxOC45MTgtMTIuODMsNDMuMzY2LTEyLjgzMSw2Mi4yODUsMCAgYzEyLjAyNyw4LjE1NiwyNS44MTIsMTIuMjM0LDM5LjU5NiwxMi4yMzRjMTMuNzg0LDAsMjcuNTY5LTQuMDc4LDM5LjU5NS0xMi4yMzRjMTguOTE4LTEyLjgzLDQzLjM2Ni0xMi44Myw2Mi4yODUsMCAgYzMuNDQzLDIuMzM1LDguMTI1LDEuNDM2LDEwLjQ1OS0yLjAwNkM1MTMuMDM2LDQ2NC4zMzQsNTEyLjEzOCw0NTkuNjUxLDUwOC42OTYsNDU3LjMxNnoiLz4KPGc+Cgk8cGF0aCBzdHlsZT0iZmlsbDojRUY0OTVCOyIgZD0iTTI5MC4xNzgsMjIwLjQwOWMtMTEuMDk4LTE1LjI1OS0yNy4zMzQtMjguMTU2LTQ3LjMyNy0zNi4xMjUgICBjLTIwLjAwMy03Ljk3My00MC42NzEtOS43NzgtNTkuMjI4LTYuMzI3YzAsMCw5MC4wNDYtMTI3LjE2MSwyMTUuOTE0LTc2Ljk5NWMwLDAtNjYuMDA3LDE3LjY1NS0xMDkuMzY1LDExOS41MjFMMjkwLjE3OCwyMjAuNDA5eiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6I0VGNDk1QjsiIGQ9Ik0zOTYuNzQ5LDI2Mi44ODRjMTguNTUyLTMuNDQzLDM5LjIwOC0xLjYzNiw1OS4yMDIsNi4zMzNjMjAuMDAzLDcuOTczLDM2LjI0NywyMC44NzgsNDcuMzQyLDM2LjE0OCAgIGMwLDAsMjIuMTEtMTU0LjIzOC0xMDMuNzU4LTIwNC40MDVjMCwwLDM1Ljc2Nyw1OC4yMTgtMi44MzEsMTYxLjk4TDM5Ni43NDksMjYyLjg4NHoiLz4KPC9nPgo8Y2lyY2xlIHN0eWxlPSJmaWxsOiNGRkNBMjg7IiBjeD0iODUuNjk1IiBjeT0iMTE1LjY4NSIgcj0iNDEuMDI1Ii8+CjxnPgoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGOTgwMDsiIGQ9Ik04NS42OTYsNjAuMTkzYy00LjE1OSwwLTcuNTMtMy4zNzItNy41My03LjUzVjM3LjUxNWMwLTQuMTU5LDMuMzcyLTcuNTMsNy41My03LjUzICAgczcuNTMsMy4zNzIsNy41Myw3LjUzdjE1LjE0OEM5My4yMjYsNTYuODIyLDg5Ljg1NCw2MC4xOTMsODUuNjk2LDYwLjE5M3oiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNGRjk4MDA7IiBkPSJNMTMwLjI1NSw3OC42NTFjLTEuOTI3LDAtMy44NTQtMC43MzUtNS4zMjQtMi4yMDZjLTIuOTQxLTIuOTQxLTIuOTQxLTcuNzA5LDAtMTAuNjVsMTAuNzExLTEwLjcxMSAgIGMyLjk0MS0yLjk0MSw3LjcwOS0yLjk0MSwxMC42NDksMGMyLjk0MSwyLjk0MSwyLjk0MSw3LjcwOSwwLDEwLjY1bC0xMC43MTEsMTAuNzExQzEzNC4xMDksNzcuOTE2LDEzMi4xODIsNzguNjUxLDEzMC4yNTUsNzguNjUxeiAgICIvPgoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGOTgwMDsiIGQ9Ik0xNjMuODYsMTIzLjIxMWgtMTUuMTQ3Yy00LjE1OSwwLTcuNTMtMy4zNzItNy41My03LjUzczMuMzcyLTcuNTMsNy41My03LjUzaDE1LjE0NyAgIGM0LjE1OSwwLDcuNTMsMy4zNzIsNy41Myw3LjUzUzE2OC4wMTksMTIzLjIxMSwxNjMuODYsMTIzLjIxMXoiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNGRjk4MDA7IiBkPSJNMTQwLjk2NiwxNzguNDgyYy0xLjkyNywwLTMuODU1LTAuNzM1LTUuMzI0LTIuMjA2bC0xMC43MTEtMTAuNzExICAgYy0yLjk0MS0yLjk0MS0yLjk0MS03LjcwOSwwLTEwLjY1YzIuOTQxLTIuOTQxLDcuNzA5LTIuOTQxLDEwLjY0OSwwbDEwLjcxMSwxMC43MTFjMi45NDEsMi45NDEsMi45NDEsNy43MDksMCwxMC42NSAgIEMxNDQuODIsMTc3Ljc0NiwxNDIuODk0LDE3OC40ODIsMTQwLjk2NiwxNzguNDgyeiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGOTgwMDsiIGQ9Ik04NS42OTYsMjAxLjM3NWMtNC4xNTksMC03LjUzLTMuMzcyLTcuNTMtNy41M3YtMTUuMTQ4YzAtNC4xNTksMy4zNzItNy41Myw3LjUzLTcuNTMgICBzNy41MywzLjM3Miw3LjUzLDcuNTN2MTUuMTQ4QzkzLjIyNiwxOTguMDA1LDg5Ljg1NCwyMDEuMzc1LDg1LjY5NiwyMDEuMzc1eiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGOTgwMDsiIGQ9Ik0zMC40MjQsMTc4LjQ4MmMtMS45MjcsMC0zLjg1NC0wLjczNS01LjMyNC0yLjIwNmMtMi45NDEtMi45NDEtMi45NDEtNy43MDksMC0xMC42NWwxMC43MS0xMC43MTEgICBjMi45NDEtMi45NDEsNy43MDktMi45NDEsMTAuNjQ5LDBjMi45NDEsMi45NDEsMi45NDEsNy43MDksMCwxMC42NWwtMTAuNzEsMTAuNzExQzM0LjI3OSwxNzcuNzQ2LDMyLjM1MiwxNzguNDgyLDMwLjQyNCwxNzguNDgyeiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGOTgwMDsiIGQ9Ik0yMi42NzgsMTIzLjIxMUg3LjUzYy00LjE1OSwwLTcuNTMtMy4zNzItNy41My03LjUzczMuMzcyLTcuNTMsNy41My03LjUzaDE1LjE0OCAgIGM0LjE1OSwwLDcuNTMsMy4zNzIsNy41Myw3LjUzUzI2LjgzNywxMjMuMjExLDIyLjY3OCwxMjMuMjExeiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGOTgwMDsiIGQ9Ik00MS4xMzUsNzguNjUxYy0xLjkyNywwLTMuODU0LTAuNzM1LTUuMzI0LTIuMjA2TDI1LjEsNjUuNzM1Yy0yLjk0MS0yLjk0MS0yLjk0MS03LjcwOSwwLTEwLjY1ICAgYzIuOTQxLTIuOTQxLDcuNzA5LTIuOTQxLDEwLjY0OSwwbDEwLjcxLDEwLjcxMWMyLjk0MSwyLjk0MSwyLjk0MSw3LjcwOSwwLDEwLjY1QzQ0Ljk5LDc3LjkxNiw0My4wNjIsNzguNjUxLDQxLjEzNSw3OC42NTF6Ii8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
									</div>
									<div class="media-body media-middle">
											<p>Yes, please. Grab it for yourself, and make something awesome with this.What could be easier? Get started fast with this landing page starter theme.</p>
									</div>
							</div>
							<hr>
							<div class="media wow fadeInRight">
									<h3>Bike on Rent</h3>
									<div class="media-body media-middle">
											<p>Because you don't want your Bootstrap site, to look like a Bootstrap site.What could be easier? Get started fast with this landing page starter theme.</p>
									</div>
									<div class="media-right">
										 <img style="width:100px;" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIC02MSA1MTIgNTEyIiB3aWR0aD0iNTEycHgiPjxwYXRoIGQ9Im0xNjkuMjY1NjI1IDIwOC4zNTkzNzUgMzcuNTIzNDM3LTMuMTY0MDYzYzEuMjg1MTU3LTEuNzc3MzQzIDIuMjM4MjgyLTMuNzMwNDY4IDMuNzQyMTg4LTUuMzMyMDMxbDUuOTc2NTYyLTYuMzU1NDY5LTIuNTYyNS04LjMzNTkzN2MtMS45MzM1OTMtNi4yMjY1NjMtMi45NDUzMTItMTMuMjE0ODQ0LTIuOTQ1MzEyLTIwLjE3MTg3NSAwLTE4LjUxNTYyNSA2LjgyNDIxOS0zNi4yNTM5MDYgMTkuMjE4NzUtNDkuOTIxODc1bDIyLjcxODc1LTI1LjA3ODEyNS0xNDcuNzc3MzQ0LjAxNTYyNWMtMy4zNjcxODctLjY0NDUzMS0xMS42NDQ1MzEtMTAuNTQ2ODc1LTE2LjQ5MjE4Ny0yMS4xOTUzMTNsLTQuMDE1NjI1LTguODIwMzEyaC04NC42NTIzNDR2MTVjMCAzNi4zMTI1IDE1LjY3NTc4MSAxMDUgNzUgMTA1bDUuODI4MTI1LS4xNjAxNTZjMTcuMzU5Mzc1LS41ODU5MzggNTMuNDUzMTI1LTIuNDMzNTk0IDg4LjMyNDIxOSAyOC41NjI1em0wIDAiIGZpbGw9IiNmMDM4MDAiLz48cGF0aCBkPSJtNDIyIDM5MGMtNDkuNjI4OTA2IDAtOTAtNDAuMzcxMDk0LTkwLTkwczQwLjM3MTA5NC05MCA5MC05MCA5MCA0MC4zNzEwOTQgOTAgOTAtNDAuMzcxMDk0IDkwLTkwIDkwem0wLTE1MGMtMzMuMDg5ODQ0IDAtNjAgMjYuOTEwMTU2LTYwIDYwczI2LjkxMDE1NiA2MCA2MCA2MCA2MC0yNi45MTAxNTYgNjAtNjAtMjYuOTEwMTU2LTYwLTYwLTYwem0wIDAiIGZpbGw9IiMzZTU5NTkiLz48cGF0aCBkPSJtNDA3LjQ5NjA5NCAzMDMuODI0MjE5LTMzLjEzNjcxOS0xMjIuMTQwNjI1IDI5LjAwMzkwNi03LjY0NDUzMiAzMy4xNDA2MjUgMTIyLjEzNjcxOXptMCAwIiBmaWxsPSIjOWZhY2JhIi8+PHBhdGggZD0ibTkwIDM5MGMtNDkuNjI4OTA2IDAtOTAtNDAuMzcxMDk0LTkwLTkwczQwLjM3MTA5NC05MCA5MC05MGMzMS42NTYyNSAwIDYwLjQxMDE1NiAxNi4xNTYyNSA3Ni45MDIzNDQgNDMuMjI2NTYybC0yNS42MDE1NjMgMTUuNjE3MTg4Yy0xMS4wMTk1MzEtMTguMDYyNS0zMC4xOTE0MDYtMjguODQzNzUtNTEuMzAwNzgxLTI4Ljg0Mzc1LTMzLjA4OTg0NCAwLTYwIDI2LjkxMDE1Ni02MCA2MHMyNi45MTAxNTYgNjAgNjAgNjBjMjguNTM1MTU2IDAgNTMuMjg5MDYyLTIwLjI3MzQzOCA1OC44NTU0NjktNDguMjIyNjU2bDI5LjQxNDA2MiA1Ljg1OTM3NWMtOC4zMzIwMzEgNDEuOTI1NzgxLTQ1LjQ2NDg0MyA3Mi4zNjMyODEtODguMjY5NTMxIDcyLjM2MzI4MXptMCAwIiBmaWxsPSIjNTM3OTgzIi8+PHBhdGggZD0ibTQyMiAzMzBjLTE2LjUzOTA2MiAwLTMwLTEzLjQ2MDkzOC0zMC0zMHMxMy40NjA5MzgtMzAgMzAtMzAgMzAgMTMuNDYwOTM4IDMwIDMwLTEzLjQ2MDkzOCAzMC0zMCAzMHptMCAwIiBmaWxsPSIjOWZhY2JhIi8+PHBhdGggZD0ibTM3MC4zMDA3ODEgMTAyLjMwMDc4MWMtMjAuMTAxNTYyLTI3LTUwLjY5OTIxOS00Mi4zMDA3ODEtODQuMzAwNzgxLTQyLjMwMDc4MS0xMC4xOTkyMTkgMC0yMC4zOTg0MzggMS41LTMwIDQuNS0xOC42MDE1NjIgNS4zOTg0MzgtMzUuMzk4NDM4IDE1Ljg5ODQzOC00OCAzMC4zMDA3ODEtMTcuMzk4NDM4IDE5LjE5OTIxOS0yNyA0NC4wOTc2NTctMjcgNzAuMTk5MjE5IDAgMTAuMTk5MjE5IDEuNSAxOS44MDA3ODEgNC4xOTkyMTkgMjkuMDk3NjU2bDguNjk5MjE5IDI3LjYwMTU2MyAxNy43MDMxMjQtMjMuMTAxNTYzYzYuMjk2ODc2LTguMTAxNTYyIDEzLjc5Njg3Ni0xNS4yOTY4NzUgMjIuODAwNzgyLTIxIDcuMTk5MjE4LTQuNzk2ODc1IDE0LjM5ODQzNy05IDIxLjU5NzY1Ni0xMi41OTc2NTYgMjEuMzAwNzgxLTEwLjUgNDIuMzAwNzgxLTE2LjUgNjEuMTk5MjE5LTIxLjkwMjM0NCAxOS41LTUuNjk5MjE4IDM2LjMwMDc4MS0xMC40OTYwOTQgNDkuNS0xOS40OTYwOTRsMTIuOTAyMzQzLTguNzAzMTI0em0wIDAiIGZpbGw9IiNmZjY0MWEiLz48cGF0aCBkPSJtMTE0LjkwMjM0NCAzMDBoLTkuOTAyMzQ0Yy04LjQwMjM0NCAwLTE1LTYuNjAxNTYyLTE1LTE1aC0zMGMwIDE4Ljg5ODQzOCAxMS42OTkyMTkgMzUuMDk3NjU2IDI4LjE5OTIxOSA0MS42OTkyMTlsMjYuNjk5MjE5LTE0LjM2NzE4OHYtMTIuMzMyMDMxem0wIDAiIGZpbGw9IiNjNWQzZGQiLz48cGF0aCBkPSJtMjM0LjQwMjM0NCAyNTYuNS0zLjMwNDY4OC0xMC41aC04NS4yOTY4NzVsLTM4LjY5OTIxOSA1NC0xOC45MDIzNDMgMjYuNjk5MjE5YzUuMTAxNTYyIDIuMTAxNTYyIDEwLjgwMDc4MSAzLjMwMDc4MSAxNi44MDA3ODEgMy4zMDA3ODFoMTA2bDI4LjM3NS01MC44MjQyMTljLTEuMTI4OTA2LTcuNjY0MDYyLTIuNzUzOTA2LTE1LjIyMjY1Ni00Ljk3MjY1Ni0yMi42NzU3ODF6bTAgMCIgZmlsbD0iI2M1ZDNkZCIvPjxwYXRoIGQ9Im0zNzkuNjAxNTYyIDExNC44OTg0MzgtMTIuOTAyMzQzIDguNzAzMTI0Yy0xMy4xOTkyMTkgOS0zMCAxMy43OTY4NzYtNDkuNSAxOS40OTYwOTQtMTguODk4NDM4IDUuNDAyMzQ0LTM5Ljg5ODQzOCAxMS40MDIzNDQtNjEuMTk5MjE5IDIxLjkwMjM0NHYtMTAwLjVjOS42MDE1NjItMyAxOS44MDA3ODEtNC41IDMwLTQuNSAzMy42MDE1NjIgMCA2NC4xOTkyMTkgMTUuMzAwNzgxIDg0LjMwMDc4MSA0Mi4zMDA3ODF6bTAgMCIgZmlsbD0iI2YwMzgwMCIvPjxwYXRoIGQ9Im00ODEgMTM1djQ1aC0xNWMtMzQuODAwNzgxIDAtNjMgNC4xOTkyMTktODUuODAwNzgxIDEyLjU5NzY1Ni01NyAxOS41MDM5MDYtNzkuMTk5MjE5IDYyLjcwMzEyNS03OS4xOTkyMTkgMTIyLjQwMjM0NHYxNWgtOTB2LTMwYzAtNDAuMTk5MjE5LTE3LjQwMjM0NC02Ni4zMDA3ODEtNDEuNjk5MjE5LTkxLjUgMTMuNS0yMy40MDIzNDQgMjYuMDk3NjU3LTQxLjEwMTU2MiA0OC4zMDA3ODEtNTYuMTAxNTYyIDEyLjg5ODQzOC04LjY5OTIxOSAyNS44MDA3ODItMTUuMjk2ODc2IDM4LjM5ODQzOC0yMC42OTkyMTkgMTkuMTk5MjE5LTguMTAxNTYzIDM3LjE5OTIxOS0xMy4xOTkyMTkgNTIuODAwNzgxLTE3LjY5OTIxOSAyNy03LjUgNTIuMTk5MjE5LTExLjY5OTIxOSA1Mi4xOTkyMTktMzkgMC0zMi4xMDE1NjItOS4zMDA3ODEtNDMuMTk5MjE5LTE1LTQ1bC0xMS4zOTg0MzgtMjEuNjAxNTYyIDExLjM5ODQzOC04LjM5ODQzOGgxLjgwMDc4MWM3My41Ljg5ODQzOCAxMzMuMTk5MjE5IDYxLjUgMTMzLjE5OTIxOSAxMzV6bTAgMCIgZmlsbD0iI2ZmOTEwMCIvPjxwYXRoIGQ9Im00ODEgMTM1djQ1aC0xNWMtMzQuODAwNzgxIDAtNjMgNC4xOTkyMTktODUuODAwNzgxIDEyLjU5NzY1Ni01NyAxOS41MDM5MDYtNzkuMTk5MjE5IDYyLjcwMzEyNS03OS4xOTkyMTkgMTIyLjQwMjM0NHYxNWgtNDV2LTE5OC4zMDA3ODFjMTkuMTk5MjE5LTguMTAxNTYzIDM3LjE5OTIxOS0xMy4xOTkyMTkgNTIuODAwNzgxLTE3LjY5OTIxOSAyNy03LjUgNTIuMTk5MjE5LTExLjY5OTIxOSA1Mi4xOTkyMTktMzkgMC0zMi4xMDE1NjItOS4zMDA3ODEtNDMuMTk5MjE5LTE1LTQ1bC0xMS4zOTg0MzgtMjEuNjAxNTYyIDExLjM5ODQzOC04LjM5ODQzOGgxLjgwMDc4MWM3My41Ljg5ODQzOCAxMzMuMTk5MjE5IDYxLjUgMTMzLjE5OTIxOSAxMzV6bTAgMCIgZmlsbD0iI2ZmNjQxYSIvPjxwYXRoIGQ9Im0yNzEgMGg3NXYzMGgtNzV6bTAgMCIgZmlsbD0iIzU3NWY2NCIvPjwvc3ZnPgo=" />
									</div>
							</div>
							<hr>
							<div class="media wow fadeIn">
									<h3>Water Sports</h3>
									<div class="media-left">
											<img style="width:100px;" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMS45OTggNTExLjk5OCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTExLjk5OCA1MTEuOTk4OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPHBhdGggc3R5bGU9ImZpbGw6IzQ4NDY1NTsiIGQ9Ik0zMzkuNzAzLDM2OC45MTdjLTguMzQtNS4zMjQtMTcuNDM2LTkuMDY2LTI3LjAxMS0xMS4xMThjLTUuNzAxLTEuMjQyLTExLjYwNS0xLjg3Mi0xNy41NDgtMS44NzIgIEgxODkuMjc2Yy01Ljk0MywwLTExLjg0NywwLjYzLTE3LjUyMiwxLjg2NmMtOS42MDEsMi4wNTgtMTguNjk3LDUuNzk5LTI3LjA0LDExLjEyNmMtMjMuOTg1LDE1LjMyOS0zOC4zMDQsNDEuNDU0LTM4LjMwNCw2OS44ODUgIHY2NS42OTNjMCw0LjE0MywzLjM1OCw3LjUwMSw3LjUwMSw3LjUwMWgyNTYuNTk4YzQuMTQyLDAsNy41MDEtMy4zNTcsNy41MDEtNy41MDF2LTY1LjY5MyAgQzM3OC4wMDksNDEwLjM3MywzNjMuNjkxLDM4NC4yNDksMzM5LjcwMywzNjguOTE3eiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojMTkzMDNGOyIgZD0iTTI0OS43MSw1MTEuOTk4VjM5My40OWMwLTQuMTQzLTMuMzU4LTcuNTAxLTcuNTAxLTcuNTAxcy03LjUwMSwzLjM1Ny03LjUwMSw3LjUwMXYxMTguNTA4SDI0OS43MXoiLz4KPGc+Cgk8cGF0aCBzdHlsZT0iZmlsbDojMzUzNDNGOyIgZD0iTTMzOS43MDMsMzY4LjkxN2MtOC4zNC01LjMyNC0xNy40MzYtOS4wNjYtMjcuMDExLTExLjExOGMtNS43MDEtMS4yNDItMTEuNjA1LTEuODcyLTE3LjU0OC0xLjg3MiAgIGgtMjguNTAyYzUuOTQzLDAsMTEuODQ3LDAuNjMsMTcuNTQ4LDEuODcyYzkuNTc1LDIuMDUyLDE4LjY3MSw1Ljc5MywyNy4wMTEsMTEuMTE4YzIzLjk4OCwxNS4zMzEsMzguMzA3LDQxLjQ1NiwzOC4zMDcsNjkuODg3ICAgdjY1LjY5M2MwLDQuMTQzLTMuMzU4LDcuNTAxLTcuNTAxLDcuNTAxaDI4LjUwMmM0LjE0MiwwLDcuNTAxLTMuMzU3LDcuNTAxLTcuNTAxdi02NS42OTMgICBDMzc4LjAwOSw0MTAuMzczLDM2My42OTEsMzg0LjI0OSwzMzkuNzAzLDM2OC45MTd6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojMzUzNDNGOyIgZD0iTTI4NC4zMTMsMjY3LjcxMnY5Mi45NzNjMCwxLjU0NS0wLjUxMywzLjA0Ni0xLjQ1OCw0LjI2OGwtMTkuOTc5LDI1LjgyOSAgIGMtMS4zMjEsMS43MDgtMy4zNTksMi43MDgtNS41MTgsMi43MDhoLTMwLjI5NWMtMi4xNTksMC00LjE5Ny0xLTUuNTE4LTIuNzA4bC0xOS45NzktMjUuODI5Yy0wLjk0NS0xLjIyMi0xLjQ1OC0yLjcyMy0xLjQ1OC00LjI2OCAgIHYtOTIuOTczSDI4NC4zMTN6Ii8+CjwvZz4KPHBhdGggc3R5bGU9ImZpbGw6IzQ4NDY1NTsiIGQ9Ik0zNzQuNjc5LDE5MS4wNDdMMzc0LjY3OSwxOTEuMDQ3Yy0zLjEyNC0zLjEtNC44ODEtNy4zMi00Ljg4MS0xMS43MjF2LTEwLjEwNiAgYzAtNzAuNDY1LTU3LjEyMy0xMjcuNTg4LTEyNy41ODgtMTI3LjU4OGwwLDBjLTcwLjQ2NSwwLTEyNy41ODgsNTcuMTIzLTEyNy41ODgsMTI3LjU4OHYxMC4xMDZjMCw0LjQwMS0xLjc1Nyw4LjYyMS00Ljg4MSwxMS43MjEgIGwwLDBjLTMuNzQ2LDMuNzE3LTUuNDg5LDkuMDAzLTQuNjkxLDE0LjIxOWw2LjA1OCwzOS41OWMyLjE4MSwxNC4yNTQsOS45MDYsMjcuMDcsMjEuNDksMzUuNjU1bDAsMCAgYzIyLjI3MSwzNy4yODksNjMuMDIxLDYyLjI2NCwxMDkuNjEsNjIuMjY0bDAsMGM0Ni41ODksMCw4Ny4zNC0yNC45NzYsMTA5LjYxLTYyLjI2NGwwLDBjMTEuNTg1LTguNTg3LDE5LjMwOS0yMS40MDEsMjEuNDktMzUuNjU2ICBsNi4wNTgtMzkuNTlDMzgwLjE2OCwyMDAuMDQ5LDM3OC40MjUsMTk0Ljc2NSwzNzQuNjc5LDE5MS4wNDd6Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiNGRkI1NkI7IiBkPSJNMjA4LjYzNiwxNDYuNjI2Yy0zNy45NjYsMC02OC43NDMsMzAuNzc3LTY4Ljc0Myw2OC43NDN2MTEuNTQgIGMwLDYzLjk4NCw0NS44MDYsMTE1Ljg2NywxMDIuMzE4LDExNS44NjdzMTAyLjMxNy01MS44ODMsMTAyLjMxNy0xMTUuODY3di0xMS41NGMwLTM3Ljk2Ni0zMC43NzctNjguNzQzLTY4Ljc0My02OC43NDMgIEwyMDguNjM2LDE0Ni42MjZMMjA4LjYzNiwxNDYuNjI2eiIvPgo8Zz4KCTxwYXRoIHN0eWxlPSJmaWxsOiMxOTMwM0Y7IiBkPSJNMjk4LjM1NCwyMjkuMDE4Yy00LjE0MiwwLTcuNS0zLjM1Ny03LjUtNy41MDF2LTIuMDY2YzAtNC4xNDMsMy4zNTgtNy41MDEsNy41LTcuNTAxICAgYzQuMTQyLDAsNy41MDEsMy4zNTcsNy41MDEsNy41MDF2Mi4wNjZDMzA1Ljg1NCwyMjUuNjYsMzAyLjQ5NywyMjkuMDE4LDI5OC4zNTQsMjI5LjAxOHoiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiMxOTMwM0Y7IiBkPSJNMTg2LjA2NiwyMjkuMDE4Yy00LjE0MiwwLTcuNTAxLTMuMzU3LTcuNTAxLTcuNTAxdi0yLjA2NmMwLTQuMTQzLDMuMzU4LTcuNTAxLDcuNTAxLTcuNTAxICAgYzQuMTQyLDAsNy41MDEsMy4zNTcsNy41MDEsNy41MDF2Mi4wNjZDMTkzLjU2NywyMjUuNjYsMTkwLjIwOCwyMjkuMDE4LDE4Ni4wNjYsMjI5LjAxOHoiLz4KPC9nPgo8cGF0aCBzdHlsZT0iZmlsbDojNUNEQkYxOyIgZD0iTTMzMy4yMTEsMTQuOTM4Yy02MC42NjctOS45NjYtMTIxLjMzNC05Ljk2Ni0xODIuMDAxLDBjLTIyLjM1OSwzLjY3My0zOC41NjcsMjAuMTM3LTM4LjU2NywzOS4zOTMgIHY1LjQ4OWMwLDM1LjE4OCwzMC40Nyw2NS4xOTEsNzEuNjY2LDcwLjIzMWMwLjQwMSwwLjA0OSwwLjgwMSwwLjA5NywxLjIwMiwwLjE0NWMxMi41OSwxLjUwOCwyNS4wODMtMy4yNjcsMzIuMjMxLTEyLjE1NyAgbDAuMzgzLTAuNDc2YzQuMDMzLTUuMDE1LDEwLjc0My04LjAxOCwxNy45MTYtOC4wMThoMTIuMzM4YzcuMTc0LDAsMTMuODgzLDMuMDAyLDE3LjkxNiw4LjAxOGwwLjM4MywwLjQ3NiAgYzcuMTQ4LDguODksMTkuNjQxLDEzLjY2NiwzMi4yMzEsMTIuMTU3YzAuNDAxLTAuMDQ4LDAuODAxLTAuMDk2LDEuMjAyLTAuMTQ1YzQxLjE5Ni01LjA0LDcxLjY2Ni0zNS4wNDMsNzEuNjY2LTcwLjIzMXYtNS40ODkgIEMzNzEuNzc4LDM1LjA3NiwzNTUuNTcsMTguNjEyLDMzMy4yMTEsMTQuOTM4eiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojNTg4MEEyOyIgZD0iTTI5NC4yMjIsMTM3Ljk3OGMtMTMuMTgyLDAtMjUuNjIxLTUuNTc5LTMzLjM4Ny0xNS4yMzdsLTAuMzg2LTAuNDc5ICBjLTIuNTg2LTMuMjE2LTcuMjExLTUuMjE1LTEyLjA2OS01LjIxNWgtMTIuMzM4Yy00Ljg1NywwLTkuNDgzLDEuOTk5LTEyLjA3Miw1LjIxOGwtMC4zOCwwLjQ3NCAgYy04Ljg1OCwxMS4wMTUtMjMuNzg4LDE2LjcyMS0zOC45NzEsMTQuOTA3bC0xLjE1Mi0wLjE0Yy0yMS42MDMtMi42NDMtNDEuMzU4LTExLjg0My01NS42OTMtMjUuOTExICBjLTE0LjU5NC0xNC4zMjItMjIuNjMyLTMyLjcwOS0yMi42MzItNTEuNzc0di01LjQ4OGMwLTIyLjg0NiwxOC44NjMtNDIuNTI1LDQ0Ljg1Mi00Ni43OTRjNjEuMTkxLTEwLjA1MiwxMjMuMjQxLTEwLjA1MiwxODQuNDMzLDAgIGwwLDBjMjUuOTg5LDQuMjY5LDQ0Ljg1MiwyMy45NDksNDQuODUyLDQ2Ljc5NHY1LjQ4OGMwLDE5LjA2NC04LjAzOCwzNy40NTItMjIuNjMyLDUxLjc3NCAgYy0xNC4zMzUsMTQuMDY4LTM0LjA4OSwyMy4yNjgtNTUuNjI1LDI1LjkwMmwtMS4yMjQsMC4xNDhDMjk3LjkzMywxMzcuODY4LDI5Ni4wNjksMTM3Ljk3OCwyOTQuMjIyLDEzNy45Nzh6IE0yMzYuMDQyLDEwMi4wNDQgIGgxMi4zMzhjOS40MzEsMCwxOC4zMTIsNC4wNDQsMjMuNzYxLDEwLjgxOGwwLjM4NiwwLjQ3OWM1LjU1MSw2LjkwMiwxNS41NiwxMC41OTUsMjUuNDkyLDkuNDA4bDEuMTIyLTAuMTM2ICBjMzcuMTYxLTQuNTQ3LDY1LjEzNy0zMS41MzksNjUuMTM3LTYyLjc5NFY1NC4zM2MwLTE1LjQ2NS0xMy41NzctMjguOTE5LTMyLjI4Mi0zMS45OTJjLTU5LjU3Ni05Ljc4Ni0xMTkuOTkyLTkuNzg2LTE3OS41NjksMCAgYy0xOC43MDYsMy4wNzMtMzIuMjgyLDE2LjUyNy0zMi4yODIsMzEuOTkydjUuNDg4YzAsMzEuMjU1LDI3Ljk3Nyw1OC4yNDcsNjUuMDc2LDYyLjc4NmwxLjE4MSwwLjE0MyAgYzkuOTM1LDEuMTkzLDE5Ljk0My0yLjUwNCwyNS40OTctOS40MWwwLjM4LTAuNDc0QzIxNy43MjgsMTA2LjA4OCwyMjYuNjExLDEwMi4wNDQsMjM2LjA0MiwxMDIuMDQ0eiIvPgo8Y2lyY2xlIHN0eWxlPSJmaWxsOiM0ODQ2NTU7IiBjeD0iMjQyLjIwNiIgY3k9IjI3OS40NzciIHI9IjQxLjAwMyIvPgo8cGF0aCBzdHlsZT0iZmlsbDojMTkzMDNGOyIgZD0iTTQwMi4yOCwyOTguNzZjLTguMDQtMTYuNTE3LTI0LjQ0Ni0yNi43NzgtNDIuODE2LTI2Ljc3OEgyNTkuMjExYy00LjE0MiwwLTcuNTAxLDMuMzU3LTcuNTAxLDcuNTAxICBjMCw0LjE0MywzLjM1OCw3LjUsNy41MDEsNy41aDEwMC4yNTNjMTIuNzc0LDAsMjMuNzM4LDYuODU2LDI5LjMyOCwxOC4zNDNjNS41OSwxMS40ODUsNC4yMjMsMjQuMzQ2LTMuNjU4LDM0LjM5OWwtMzEuNTc1LDQwLjI3NyAgYzMuNjYsMy42MjUsNi45NTEsNy41NjIsOS44NDYsMTEuNzU1bDMzLjUzNS00Mi43NzdDNDA4LjI3NCwzMzQuNTIxLDQxMC4zMiwzMTUuMjc5LDQwMi4yOCwyOTguNzZ6Ii8+CjxjaXJjbGUgc3R5bGU9ImZpbGw6IzQ5QjZGMjsiIGN4PSIyNDIuMjA2IiBjeT0iMjc5LjQ3NyIgcj0iMTcuMDAxIi8+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
									</div>
									<div class="media-body media-middle">
											<p>There's good reason why Bootstrap is the most used frontend framework in the world.What could be easier? Get started fast with this landing page starter theme.</p>
									</div>
							</div>
							<hr>
							<div class="media wow fadeInRight">
									<h3>Sight Seeing</h3>
									<div class="media-body media-middle">
											<p>We know each corner of Malvan and Tarkarli. We make sure our customers don't miss any place to visit. We offer Sight seeing like Sindhudurg Fort,Rock Garden, Devbagh, Lighthouse etc.</p>
									</div>
									<div class="media-right">
										<img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjEyOHB4IiBoZWlnaHQ9IjEyOHB4Ij4KPGNpcmNsZSBzdHlsZT0iZmlsbDojRkY4RTMxOyIgY3g9IjI1NiIgY3k9IjI1NiIgcj0iMjU2Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiNFRDc0MjU7IiBkPSJNMzk1LjQxLDIzOS43NjJsLTMuMzY0LTMuMzY0Yy01LjM1OC00LjkyOC0xMS42ODYtOC44Ni0xOC43MDYtMTEuNjEybC0wLjE2NC0wLjE2MWwtMTYuMzEtMTYuMzUxICBsLTUuMzQtNi4zMjhjLTIuNjczLTMuMTgyLTUuODE0LTUuOTk4LTkuNC04LjM3MWwtOS42OTItOS43MzFjLTEuNDk1LTEuODY2LTMuMjE4LTMuNTUxLTUuMDg0LTUuMDgyICBjLTUuODE0LTQuNjg1LTEzLjE5NC03LjUwMS0yMS4yODEtNy41MDFjLTE3LjAwNiwwLTMxLjEyNCwxMi41ODItMzMuNSwyOC45NjZjLTEuMjQyLDAuODc4LTIuNTI0LDEuNjgyLTMuOTg2LDIuMjY2ICBjLTIuNzg1LDEuMTcyLTcuMTY4LDEuNjg3LTkuOTg0LDEuNjg3aC01LjE1OGMtMC4yMDcsMC0wLjQ2OC0wLjAyNi0wLjY4Ni0wLjAyOGwtMC4wMS0wLjAxbC0yMS42OTktMjEuNjk5ICBjLTAuODQyLTAuOTI3LTEuNzItMS44MjUtMi42NTUtMi42NTVsLTAuMTg3LTAuMTg3Yy00LjQ3LTMuODk0LTkuOTcxLTYuNjQxLTE2LjAzMy03Ljc2NGMtMi4wMjgtMC4zNzktNC4xMDYtMC41NzYtNi4yNDEtMC41NzYgIGMtMTMuNDU1LDAtMjUuMDUyLDcuODMxLTMwLjUsMTkuMTY3Yy01LjkyNCwyLjgxNi0xMC45NzUsNi43NjQtMTQuOTU4LDExLjUxN2wtMTcuOTg5LDIxLjM5MWMtMS43NTksMC41NTgtMy40NjksMS4yMDEtNS4xNCwxLjkwNSAgYy0wLjQxNSwwLjE3Mi0wLjgwNCwwLjM3OS0xLjIxNiwwLjU2MWMtMS4yMzksMC41NTYtMi40NjgsMS4xMjQtMy42NTgsMS43NTZjLTAuNDkyLDAuMjYxLTAuOTYsMC41NTYtMS40NDEsMC44MjkgIGMtMS4wNjgsMC42MDQtMi4xMjcsMS4yMjEtMy4xNDYsMS44ODljLTAuNTA5LDAuMzMtMC45OTEsMC42ODYtMS40OSwxLjAyOWMtMC45NTUsMC42NjgtMS45LDEuMzQ0LTIuODEzLDIuMDYxICBjLTAuNDg5LDAuMzg3LTAuOTYsMC43ODgtMS40MzYsMS4xODhjLTAuODc2LDAuNzMtMS43MzYsMS40ODItMi41NjMsMi4yNmMtMC40NDgsMC40MjItMC44ODYsMC44NTItMS4zMjEsMS4yODUgIGMtMC44MjIsMC44MjItMS42MjMsMS42NjktMi4zOTYsMi41MzdjLTAuMzc2LDAuNDIyLTAuNzQ4LDAuODQyLTEuMTExLDEuMjc3Yy0wLjgxNCwwLjk2NS0xLjU5NSwxLjk1Ni0yLjM0NSwyLjk3MiAgYy0wLjI2MSwwLjM1MS0wLjUyNywwLjcwMS0wLjc4MSwxLjA2NWMtMC4yODIsMC4zOTQtMC41ODksMC43NjMtMC44NTUsMS4xNjJjMCwwLDAsMCwwLDAuMDM2bDAuMDQxLDAuMDQ2ICBjLTguNjM3LDEyLjg5Mi0xMi4zNTcsMjkuMDcxLTkuMDA0LDQ1LjQ5MWMwLjMyMywxLjU4MiwwLjcxNywzLjEyNiwxLjE1Miw0LjY1MmMwLjEyNSwwLjQyOCwwLjI3NCwwLjg0MiwwLjQwNywxLjI2NSAgYzIuNzY3LDguODc2LDcuNDQyLDE2LjczNSwxMy41MDksMjMuMTk0YzAuODQsMC44NzgsMS43MiwxLjc1NCwyLjU5NiwyLjU5NmwxODMuMjc2LDE4My4yNzYgIGM5MC41MzItMTYuNzE0LDE2NC4zNDctODEuMDExLDE5NC41MjctMTY2LjAzMUwzOTUuNDEsMjM5Ljc2MnoiLz4KPGc+Cgk8cGF0aCBzdHlsZT0iZmlsbDojMzQ0OTVFOyIgZD0iTTMzOS45NjMsMjA1LjE1NmMwLDE4LjcxNi0xNS4xNzEsMzMuODg5LTMzLjg4OSwzMy44ODljLTE4LjcwOCwwLTMzLjg4NC0xNS4xNzMtMzMuODg0LTMzLjg4OSAgIGMwLTE4LjcxMSwxNS4xNzgtMzMuODg3LDMzLjg4NC0zMy44ODdDMzI0Ljc5MiwxNzEuMjY5LDMzOS45NjMsMTg2LjQ0NywzMzkuOTYzLDIwNS4xNTZ6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojMzQ0OTVFOyIgZD0iTTIzOS44MjMsMjA1LjE1NmMwLDE4LjcxNi0xNS4xNzMsMzMuODg5LTMzLjg5NCwzMy44ODljLTE4LjcwNiwwLTMzLjg4NC0xNS4xNzMtMzMuODg0LTMzLjg4OSAgIGMwLTE4LjcxMSwxNS4xNzgtMzMuODg3LDMzLjg4NC0zMy44ODdDMjI0LjY0OCwxNzEuMjY5LDIzOS44MjMsMTg2LjQ0NywyMzkuODIzLDIwNS4xNTZ6Ii8+CjwvZz4KPHBhdGggc3R5bGU9ImZpbGw6IzVENkQ3RTsiIGQ9Ik0zNTEuNTE2LDIwMS45NjFjLTQuMDg4LTQuODU5LTkuMjY1LTguOTQtMTUuNDExLTExLjc5NGMtNi4xMzEtMi44NjItMTQuOTQ1LTQuMTk2LTIzLjYxOS00LjE5NiAgaC0zLjc5OWMtMTYuNDcxLDAtMjUuODk3LDYuNDgyLTMyLjg0NywxMS43MzVjLTIuMjczLDEuNzItNC40NiwzLjY1MS03LjI0NSw0LjgwM2MtMi43OTgsMS4xNTItNy4xNzgsMS42ODQtMTAuMDE3LDEuNjg0ICBjLTAuNjA0LDAtNC41NTIsMC01LjE0OCwwYy0yLjg0OSwwLTcuMjE5LTAuNTMyLTEwLjAxNS0xLjY4NGMtMi43OTYtMS4xNTItNC45ODQtMy4wODUtNy4yNTUtNC44MDMgIGMtNi45NS01LjI1My0xNi4zNzktMTEuNzM1LTMyLjg0Ny0xMS43MzVoLTMuNzk5Yy04LjY3NiwwLTE3LjQ3NywxLjMzNC0yMy42MTksNC4xOTZjLTYuMTM2LDIuODU0LTExLjMxMyw2LjkzNS0xNS40MDksMTEuNzk0ICBsLTU2LjM2MSw2Ny4wMjZoMTUxLjg4aDE1MS44NzJMMzUxLjUxNiwyMDEuOTYxeiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojMjgzQTREOyIgZD0iTTMwMi4zOCwyMzcuNTI3Yy0xLjk5NCwwLTQuMDAxLDAuMDkyLTYuMDE5LDAuMjc5Yy0yLjAyOCwwLjE4Mi00LjAwOSwwLjQ2My01Ljk2NywwLjgzMiAgbC0yMC4wMzIsMy43NDhjLTQuNjQ5LDAuODc4LTkuNDQ2LDEuMzQxLTE0LjM1OSwxLjM0MWMtNC45MDgsMC05LjcxLTAuNDYzLTE0LjM2Ny0xLjM0MWwtMjAuMDE3LTMuNzQ4ICBjLTEuOTU4LTAuMzYxLTMuOTUtMC42NS01Ljk2Mi0wLjgzMmMtMi4wMjgtMC4xODktNC4wMzctMC4yNzktNi4wMjYtMC4yNzloLTEwLjAyOHY1Ni40MDJoMTYuNDI1YzIuNzQ3LDAsNS41MTQtMC41ODksOC4xNDEtMS44NTMgIGMyLjYzNC0xLjI2NSw0LjgyOC0zLjA2Miw2LjUzMS01LjE5N2w5LjY5Mi0xMi4wOTZjMy42NjgtNC41NzUsOS4yOTgtNy41MDEsMTUuNjA4LTcuNTAxYzYuMzAzLDAsMTEuOTMyLDIuOTI2LDE1LjU4OCw3LjUwMSAgbDkuNzA1LDEyLjA5NmMxLjcyLDIuMTM1LDMuODk2LDMuOTMyLDYuNTQzLDUuMTk3YzIuNjE0LDEuMjYyLDUuMzk2LDEuODUzLDguMTI4LDEuODUzaDE2LjQzM3YtNTYuNDAySDMwMi4zOHoiLz4KPHBhdGggc3R5bGU9ImZpbGw6IzVENkQ3RTsiIGQ9Ik0yNzMuMzU3LDI2Ny4xOTJjMCw5LjU3Mi03Ljc1OSwxNy4zNTItMTcuMzU0LDE3LjM1MmMtOS41ODUsMC0xNy4zNTQtNy43OC0xNy4zNTQtMTcuMzUyICBjMC05LjYsNy43Ny0xNy4zNjIsMTcuMzU0LTE3LjM2MkMyNjUuNTk3LDI0OS44MywyNzMuMzU3LDI1Ny41OTUsMjczLjM1NywyNjcuMTkyeiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojMjgzQTREOyIgZD0iTTI2MS42NywyNjcuMTkyYzAsMy4xMjYtMi41MzcsNS42Ni01LjY2NSw1LjY2Yy0zLjEzNiwwLTUuNjYtMi41MzQtNS42Ni01LjY2ICBjMC0zLjEzMywyLjUyNC01LjY3Niw1LjY2LTUuNjc2QzI1OS4xMzMsMjYxLjUxNywyNjEuNjcsMjY0LjA1OSwyNjEuNjcsMjY3LjE5MnoiLz4KPGc+Cgk8cGF0aCBzdHlsZT0iZmlsbDojMzQ0OTVFOyIgZD0iTTE3Mi43MjEsMzM5LjUwMmMtMzIuNTA5LDYuNjUxLTY0LjI2Ni0xNC4zMTgtNzAuOTE3LTQ2LjgzNSAgIGMtNi42NTYtMzIuNTIsMTQuMzE2LTY0LjI3OSw0Ni44NDgtNzAuOTNjMzIuNTA5LTYuNjUxLDY0LjI3NiwxNC4zMjEsNzAuOTI3LDQ2Ljg0QzIyNi4yMywzMDEuMSwyMDUuMjUxLDMzMi44NTYsMTcyLjcyMSwzMzkuNTAyeiAgICIvPgoJPHBhdGggc3R5bGU9ImZpbGw6IzM0NDk1RTsiIGQ9Ik0zMzkuMjc5LDMzOS41MDJjMzIuNTE3LDYuNjUxLDY0LjI2Ni0xNC4zMTgsNzAuOTE3LTQ2LjgzNWM2LjY1My0zMi41Mi0xNC4zMTgtNjQuMjc5LTQ2Ljg0My03MC45MyAgIGMtMzIuNTE3LTYuNjUxLTY0LjI3NCwxNC4zMjEtNzAuOTI1LDQ2Ljg0QzI4NS43NzgsMzAxLjEsMzA2Ljc1NSwzMzIuODU2LDMzOS4yNzksMzM5LjUwMnoiLz4KPC9nPgo8cGF0aCBzdHlsZT0iZmlsbDojQjhEMUU2OyIgZD0iTTE2MC42ODksMzI2LjE3N2MtMjUuMTI5LDAtNDUuNTQ4LTIwLjQyOS00NS41NDgtNDUuNTU4YzAtMjUuMTE5LDIwLjQxOS00NS41Niw0NS41NDgtNDUuNTYgIGMyNS4xMjYsMCw0NS41NTMsMjAuNDQyLDQ1LjU1Myw0NS41NkMyMDYuMjQxLDMwNS43NDgsMTg1LjgxNSwzMjYuMTc3LDE2MC42ODksMzI2LjE3N3oiLz4KPHBhdGggc3R5bGU9ImZpbGw6I0UxRUZGQTsiIGQ9Ik0xNjAuNjg5LDMxOS42NzJjLTIxLjU0LDAtMzkuMDQtMTcuNTEzLTM5LjA0LTM5LjA1M2MwLTIxLjUzMiwxNy41LTM5LjA0OCwzOS4wNC0zOS4wNDggIGMyMS41MzUsMCwzOS4wNDgsMTcuNTE2LDM5LjA0OCwzOS4wNDhDMTk5LjczNiwzMDIuMTU5LDE4Mi4yMjMsMzE5LjY3MiwxNjAuNjg5LDMxOS42NzJ6Ii8+CjxwYXRoIHN0eWxlPSJmaWxsOiNCOEQxRTY7IiBkPSJNMzUxLjMxNiwzMjYuMTc3Yy0yNS4xMzIsMC00NS41NTMtMjAuNDI5LTQ1LjU1My00NS41NThjMC0yNS4xMTksMjAuNDIxLTQ1LjU2LDQ1LjU1My00NS41NiAgYzI1LjEyMSwwLDQ1LjU1LDIwLjQ0Miw0NS41NSw0NS41NkMzOTYuODY3LDMwNS43NDgsMzc2LjQ0LDMyNi4xNzcsMzUxLjMxNiwzMjYuMTc3eiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojRTFFRkZBOyIgZD0iTTM1MS4zMTYsMzE5LjY3MmMtMjEuNTQsMC0zOS4wNC0xNy41MTMtMzkuMDQtMzkuMDUzYzAtMjEuNTMyLDE3LjUtMzkuMDQ4LDM5LjA0LTM5LjA0OCAgYzIxLjU0LDAsMzkuMDQzLDE3LjUxNiwzOS4wNDMsMzkuMDQ4QzM5MC4zNTksMzAyLjE1OSwzNzIuODU2LDMxOS42NzIsMzUxLjMxNiwzMTkuNjcyeiIvPgo8Zz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNGRkZGRkY7IiBkPSJNMTU2LjM5LDI0OS43MDVjNi4yMjMsNi4yMzEsNS4yNzQsMTcuMjc3LTIuMTIyLDI0LjY3MWMtNy40MTEsNy40MDQtMTguNDUsOC4zNTMtMjQuNjc2LDIuMTI1ICAgYy02LjIxOC02LjIxOC01LjI3MS0xNy4yNiwyLjEzLTI0LjY2OEMxMzkuMTI4LDI0NC40MzYsMTUwLjE3LDI0My40ODIsMTU2LjM5LDI0OS43MDV6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojRkZGRkZGOyIgZD0iTTE5MC45ODEsMzAxLjA2NmMyLjMzMiwyLjMyNywxLjk3Niw2LjQ2MS0wLjc5NCw5LjIzNGMtMi43NzIsMi43Ni02LjkwNywzLjEyNi05LjIzNCwwLjc5OSAgIGMtMi4zMjItMi4zMy0xLjk2Ni02LjQ2NCwwLjc5NC05LjIzNkMxODQuNTIsMjk5LjA5LDE4OC42NDksMjk4LjczNCwxOTAuOTgxLDMwMS4wNjZ6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojRkZGRkZGOyIgZD0iTTM0Ny40MDIsMjQ5LjcwNWM2LjIyMSw2LjIzMSw1LjI3MSwxNy4yNzctMi4xMzUsMjQuNjc4Yy03LjQwMSw3LjM5Ni0xOC40MzUsOC4zNDYtMjQuNjYzLDIuMTI3ICAgYy02LjIyMy02LjIyOC01LjI3NC0xNy4yNywyLjEyMi0yNC42NzFDMzMwLjEzNSwyNDQuNDM2LDM0MS4xNzYsMjQzLjQ4OSwzNDcuNDAyLDI0OS43MDV6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojRkZGRkZGOyIgZD0iTTM4MS45OCwzMDEuMDY2YzIuMzMyLDIuMzI3LDEuOTgxLDYuNDYxLTAuNzk0LDkuMjM0Yy0yLjc3NSwyLjc2LTYuODk3LDMuMTE4LTkuMjI2LDAuNzkxICAgYy0yLjMzMi0yLjMyMi0xLjk3NC02LjQ1NiwwLjc4Ni05LjIyOUMzNzUuNTI2LDI5OS4wOSwzNzkuNjYxLDI5OC43MzQsMzgxLjk4LDMwMS4wNjZ6Ii8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
									</div>
							</div>
					</div>
			</div>
	</section>
<!--Services-->



	<!--zig zag section-->
	<style type="text/css">
		*,
		*:after,
		*::before {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}

		/* General styles and layout */
		.container2 {
			background: white;
			/* teal;*/
			color: #fff;
			padding: 0px;
			margin: 0px;
		}

		.container2 {
			overflow: hidden;
			width: 100%;
			margin: 0px;
			/* we don't want the pseudo-elements sticking out */
		}

		.container2 svg {
			display: block;
		}

		.animated-bg-new {
			position: relative;
			padding: 10em;
			/*background: teal;*/
			color: #fff;
			text-align: center;
		}

		.animated-bg-new h2 {
			margin: 0;
			padding: 0;
			font-size: 2.8em;
			font-weight: 400;
		}

		.animated-bg-new p {
			color: #27272E;
			font-size: 1.3em;
			line-height: 1.5;
		}

		.text:first-child {
			text-align: right;
		}

		.text:nth-child(2) {
			text-align: left;
		}

		.col-2 .column {
			width: 49%;
		}

		.col-3 .column {
			padding: 0 1%;
			width: 33%;
			text-align: center;
		}

		.col-3 .column p {
			padding: 1.4em;
		}

		.column {
			display: inline-block;
			vertical-align: top;
		}

		.color {
			background: #96d2c5;
			/*#005c5c;*/
		}

		/*** Individual section styles and separators ***/
		/* Common style for pseudo-elements */
		.animated-bg-new::before,
		.animated-bg-new::after {
			position: absolute;
			content: '';
			pointer-events: none;
		}

		/* Triangles */
		.ss-style-triangles::before,
		.ss-style-triangles::after {
			left: 50%;
			width: 100px;
			height: 100px;
			-webkit-transform: translateX(-50%) rotate(45deg);
			transform: translateX(-50%) rotate(45deg);
		}

		.ss-style-triangles::before {
			top: -50px;
			background: teal;
		}

		.ss-style-triangles::after {
			bottom: -50px;
			z-index: 10;
			background: inherit;
		}


		/* Big Triangle */
		svg#bigTriangleColor {
			pointer-events: none;
		}

		#bigTriangleColor path {
			fill: #005c5c;
			stroke: #005c5c;
			stroke-width: 2;
		}

		/* Curves */
		#curveUpColor path,
		#curveDownColor path {
			fill: #005c5c;
			stroke: #005c5c;
		}

		/* Multiple Triangles */
		.ss-style-multitriangles::before,
		.ss-style-multitriangles::after {
			left: 50%;
			width: 50px;
			height: 50px;
			-webkit-transform: translateX(-50%) rotate(45deg);
			transform: translateX(-50%) rotate(45deg);
		}

		.ss-style-multitriangles::before {
			top: -25px;
			background: inherit;
			/*box-shadow: -50px 50px 0 #005c5c, 50px -50px 0 #005c5c;*/
			box-shadow: -50px 50px 0 #ffffff, 50px -50px 0 #ffffff;
		}

		.ss-style-multitriangles::after {
			bottom: -25px;
			z-index: 10;
			background: inherit;
			/*box-shadow: -50px 50px 0 #005c5c, 50px -50px 0 #005c5c;*/
			box-shadow: -50px 50px 0 #ffffff, 50px -50px 0 #ffffff;
		}







		/* Media Queries for the layout */
		@media screen and (max-width: 68em) {
			section {
				font-size: 80%;
			}
		}

		@media screen and (max-width: 54em) {
			.column {
				display: block;
				width: 100% !important;
			}

			.text:first-child,
			.text:nth-child(2) {
				text-align: center;
			}

			.icon {
				margin: 0 auto;
			}

			.col-2 .column:first-child .icon {
				margin: 0 auto 50px;
			}

			.col-2 .column:nth-child(2) .icon {
				margin: 50px auto 0;
			}
		}
	</style>
	<div class="container2">
		<section class="col-2 animated-bg-new" style="padding: 0em;">

		</section>

		<section class="col-2 color ss-style-multitriangles animated-bg-new">

			<!--about us-->
			<style type="text/css">
				.about-us-typo p {
					margin-bottom: 1em;
				}


				.about-us-header {
					width: 100%;
					margin: auto;
					text-align: center;
				}

				.about-us-typo {
					max-width: 34em;
					margin: auto;
					padding: 0 1em;
				}

				.about-us-typo h1,
				h2 {
					font-family: 'Raleway', Helvetica, sans-serif;
					color: #27272E;
					font-weight: 100;
					-moz-font-feature-settings: "liga=1, dlig=1";
					-ms-font-feature-settings: "liga", "dlig";
					-webkit-font-feature-settings: "liga", "dlig";
					-o-font-feature-settings: "liga", "dlig";
					font-feature-settings: "liga", "dlig";
				}

				.about-us-typo h1 span {
					font-family: 'Merriweather', Georgia, serif;
					font-style: italic;
				}

				.about-us-typo h1 {
					font-size: 2.747em;
					margin: 0;
					line-height: 1.2;

				}

				.about-us-typo h1 span:nth-of-type(1) {
					font-size: 0.65em;
					display: block;
					margin: 1em auto 0 auto;
					text-transform: none;
				}

				/* Enable real small caps */
				.about-us-typo h2 {
					border-top: 1px solid #999;
					font-size: .974em;
					text-align: center;
					line-height: 1;
					margin-top: 2em;
					color: #000;
					-moz-font-feature-settings: "smcp"1;
					-moz-font-feature-settings: "smcp=1";
					-ms-font-feature-settings: "smcp"1;
					-o-font-feature-settings: "smcp"1;
					-webkit-font-feature-settings: "smcp"1;
					font-feature-settings: "smcp"1;
				}

				/* Add borders to the heading */
				.about-us-typo h2 span {
					background: #FFFAFD;
					position: relative;
					top: -.50em;
					padding: 0 5%;
					margin-top: -1em;
				}

				/* Fancy pseudo elements heading */
				.about-us-typo h3 {
					text-align: center;
					font-size: 2em;
					line-height: 1.2;
					font-weight: 100;
					font-family: 'raleway';
					position: relative;
					-moz-font-feature-settings: "liga=1, dlig=1";
					-ms-font-feature-settings: "liga", "dlig";
					-webkit-font-feature-settings: "liga", "dlig";
					-o-font-feature-settings: "liga", "dlig";
					font-feature-settings: "liga", "dlig";
				}

				.about-us-typo h3::before {
					position: absolute;
					content: '';
					pointer-events: none;
					width: 300px;
					height: 1px;
					background-color: #666;
					top: 100px;
					margin-left: auto;
					margin-right: auto;
					left: 0;
					right: 0;
				}

				.about-us-typo h3::after {
					content: '';
					position: absolute;
					pointer-events: none;
					display: block;
					width: 20px;
					height: 20px;
					background-color: #F5F5F5;
					border: 1px solid #666;
					top: 90px;
					margin-left: auto;
					margin-right: auto;
					left: 0;
					right: 0;
					transform: rotate(45deg);
				}

				/* Non-kerning paragraph */
				.about-us-typo p:nth-of-type(2) {
					margin-top: 7em;
					font-family: 'raleway';
					font-weight: 100;
				}

				.about-us-typo p:nth-of-type(2):first-line {
					font-size: 1.3em;
				}

				/* Enable kerning on paragraph/for some reason kerning is not working in Chrome, but it does in Firefox. */
				.about-us-typo p:nth-of-type(3) {
					margin-top: 2em;
					-moz-font-feature-settings: "kern"1;
					-moz-font-feature-settings: "kern=1";
					-ms-font-feature-settings: "kern"1;
					-o-font-feature-settings: "kern"1;
					-webkit-font-feature-settings: "kern"1;
					font-feature-settings: "kern"1;
					font-family: 'raleway';
					font-weight: 100;
				}

				.about-us-typo p:nth-of-type(3):first-line {
					font-size: 1.3em;
				}
			</style>

			<section class="about-us-typo">
				<div class="about-us-header">
					<h1><span>The beauty of Tarkarli</span> Heart of the Malvan </h1>
					<h2><span>Nature at it's best</span></h2>

				</div>

				<p>

					Tarkarli is a village in the western Indian state of Maharashtra. On the shores of the Arabian Sea, it’s known for the white sands and clear waters of Tarkarli Beach, a popular spot for water sports. Sindhudurg Fort, on an island just off the coast, was built in the 17th century by the Maratha rulers. To the south, the peaceful backwaters of the Karli River are lined with palm trees and inhabited by dolphins.

				</p>

				<h3>
					Be My Guest
				</h3>
				<p>
					In our Indian mythology we treat our guest as GOD. We believe in this and always provide best experience to our customes. We ensure that our customers are always happy and not disappointed on us. We believe in quality experience instead of marketing. Our mission is to a company like OnePlus, like them we also want to focus on quality. Because if you provide quality, then you don't need promotions or marketings.
				</p>

				<p>
					We always take care of our client's budget. We provide best deals for hotels, water sports, bike rents, car rents in Tarkarli Malvan. We also provide loyalty bonus offers or coupons to our oldest customers. We care for you because without our customers we are nothing. Provide best quality hotels, water sports packages, vehicle rents in Tarkarli within your budget is our motto.
				</p>
			</section>
			<!--about us-->

		</section>
		<section class="col-2 animated-bg-new" style="padding:2em;"></section>
	</div>
	<!--zig zag section--->








	<div class="colorlib-tour colorlib-light-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
					<h2>Popular Destination in Malvan</h2>
					<p>Explore the best destinations in Malvan, which will make you go crazy. Experience the beauty of the nature in Malvan. Witness the history of Malvan.</p>
				</div>
			</div>
		</div>
		<div class="tour-wrap">
			<a href="#" class="tour-entry animate-box">
				<div class="tour-img" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/home/sindhudurg_fort_Beaches_in_tarkarli_resorts_in_tarkarli_hotels_in_tarkarli.jpg);">
				</div>
				<span class="desc">
					<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 100+ Reviews</p>
					<h2>Sindhudurg</h2>
					<span class="city">Fort built on the water</span>
					<span class="price">Malvan,Maharashtra</span>
				</span>
			</a>
			<a href="#" class="tour-entry animate-box">
				<div class="tour-img" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/home/Tarkarli_beach_Beach_resort_in_tarkarli_beaches_in_tarkarli.jpg);">
				</div>
				<span class="desc">
					<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 500+ Reviews</p>
					<h2>Tarkarli</h2>
					<span class="city">Best Private Beaches in Malvan</span>
					<span class="price">Malvan,Maharashtra</span>
				</span>
			</a>
			<a href="#" class="tour-entry animate-box">
				<div class="tour-img" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/home/Rock_garden_Tarkarli_Tarkarli_tourism_beaches_in_tarkarli.jpeg);">
				</div>
				<span class="desc">
					<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 177+ Reviews</p>
					<h2>Rock Garden</h2>
					<span class="city">Rocks which are always Rocking</span>
					<span class="price">Malvan Tarkarli</span>
				</span>
			</a>
			<a href="#" class="tour-entry animate-box">
				<div class="tour-img" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/home/Chivala_Beach_Malvan_Tarkarli_Hotels_in_Tarkarli.jpg);">
				</div>
				<span class="desc">
					<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 50+ Reviews</p>
					<h2>Chivla Beach </h2>
					<span class="city">Longest Beach in Tarkarli</span>
					<span class="price">Malvan,Maharashtra</span>
				</span>
			</a>
			<a href="#" class="tour-entry animate-box">
				<div class="tour-img" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/home/kunkeshwar_temple_Tarkarli_malvan_Beaches_in_tarkarli_hotels_in_tarkarli.jpg);">
				</div>
				<span class="desc">
					<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 240+ Reviews</p>
					<h2>Kunkeshwar Temple</h2>
					<span class="city">Lord Shiva Temple</span>
					<span class="price">Kunkeshwar, Maharashtra</span>
				</span>
			</a>
			<a href="#" class="tour-entry animate-box">
				<div class="tour-img" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/home/rameshwar-temple_malvan_tarkarli_achara.jpg);">
				</div>
				<span class="desc">
					<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 180+ Reviews</p>
					<h2>Rameshwar Temple</h2>
					<span class="city">Lord Rameshwar Temple</span>
					<span class="price">Kandalgoan, Maharashtra</span>
				</span>
			</a>
			<a href="#" class="tour-entry animate-box">
				<div class="tour-img" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/home/devbaug_beach_devbaugh_beach_devbagh_beach_devbaug_beach_tarkarli_beach_resort_devbaug.jpg);">
				</div>
				<span class="desc">
					<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 200+ Reviews</p>
					<h2>Devbaug Beach</h2>
					<span class="city">Cleanest Beach in Maharashtra</span>
					<span class="price">Devbaug, Maharashtra</span>
				</span>
			</a>
			<a href="#" class="tour-entry animate-box">
				<div class="tour-img" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/home/Lighthouse_malvan_Tarkarli_light_housr_tarkarli_vengurla_devbagh.jpg);">
				</div>
				<span class="desc">
					<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 100+ Reviews</p>
					<h2>LightHouse</h2>
					<span class="city">Indicator for ships</span>
					<span class="price">Sindhudurg, Maharashtra</span>
				</span>
			</a>
		</div>
	</div>


	<!--<div id="colorlib-blog">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
					<h2>Recent Blog</h2>
					<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				</div>
			</div>
			<div class="blog-flex">
				<div class="f-entry-img" style="background-image: url(assets/images/blog-3.jpg);">
				</div>
				<div class="blog-entry aside-stretch-right">
					<div class="row">
						<div class="col-md-12 animate-box">
							<a href="blog.html" class="blog-post">
								<span class="img" style="background-image: url(assets/images/blog-1.jpg);"></span>
								<div class="desc">
									<span class="date">Feb 22, 2018</span>
									<h3>A Definitive Guide to the Best Dining</h3>
									<span class="cat">Activities</span>
								</div>
							</a>
						</div>
						<div class="col-md-12 animate-box">
							<a href="blog.html" class="blog-post">
								<span class="img" style="background-image: url(assets/images/blog-2.jpg);"></span>
								<div class="desc">
									<span class="date">Feb 22, 2018</span>
									<h3>How These 5 People Found The Path to Their Dream Trip</h3>
									<span class="cat">Activities</span>
								</div>
							</a>
						</div>
						<div class="col-md-12 animate-box">
							<a href="blog.html" class="blog-post">
								<span class="img" style="background-image: url(assets/images/blog-4.jpg);"></span>
								<div class="desc">
									<span class="date">Feb 22, 2018</span>
									<h3>Our Secret Island Boat Tour Is just for You</h3>
									<span class="cat">Activities</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
-->
	<div id="colorlib-intro" class="intro-img" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/cover-img-1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="intro-desc">
						<div class="text-salebox">
							<div class="text-lefts">
								<div class="sale-box">
									<div class="sale-box-top">
										<h2 class="number">20</h2>
										<span class="sup-1">%</span>
										<span class="sup-2">Off</span>
									</div>
									<h2 class="text-sale">Offer</h2>
								</div>
							</div>
							<div class="text-rights">
								<h3 class="title">Just hurry up limited offer!</h3>
								<p>Only first 10 customers will avail this wonderfull Discount offer, don't miss the best deal in Tarkarli</p>
								<p><a href="#" class="btn btn-primary">Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="video-wrap">
						<div class="video colorlib-video" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/img_bg_2.jpg);">
							<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video"></i></a>
							<div class="video-overlay"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="colorlib-hotel">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
					<h2>Our Recommended Hotels</h2>
					<p>We always recommend best to our customers. There are thousands of hotels available in Malvan Tarkarli but we will always recommend best to our customers with all the facilities.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 animate-box">
					<div class="owl-carousel">
						<div class="item">
							<div class="hotel-entry">
								<a href="hotels.html" class="hotel-img" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/hotel-1.jpg);">
									<p class="price"><span>$120</span><small> /night</small></p>
								</a>
								<div class="desc">
									<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
									<h3><a href="#">Hotel Edison</a></h3>
									<span class="place">New York, USA</span>
									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="hotel-entry">
								<a href="hotels.html" class="hotel-img" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/hotel-2.jpg);">
									<p class="price"><span>$120</span><small> /night</small></p>
								</a>
								<div class="desc">
									<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
									<h3><a href="#">Hotel Edison</a></h3>
									<span class="place">New York, USA</span>
									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="hotel-entry">
								<a href="hotels.html" class="hotel-img" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/hotel-3.jpg);">
									<p class="price"><span>$120</span><small> /night</small></p>
								</a>
								<div class="desc">
									<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
									<h3><a href="#">Hotel Edison</a></h3>
									<span class="place">New York, USA</span>
									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="hotel-entry">
								<a href="hotels.html" class="hotel-img" style="background-image: url(<?php bloginfo('template_directory');?>/assets/images/hotel-4.jpg);">
									<p class="price"><span>$120</span><small> /night</small></p>
								</a>
								<div class="desc">
									<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
									<h3><a href="#">Hotel Edison</a></h3>
									<span class="place">New York, USA</span>
									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer();?>