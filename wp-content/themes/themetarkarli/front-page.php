<?php get_header(); ?>
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
	.validation-border {
		border: 1px solid #ff5303 !important;
	}

	
</style>

<?php

$slider_data = get_field('slider');

?>


<input type="hidden" id="base_url" value="<?php bloginfo('template_directory'); ?>">
<aside id="colorlib-hero">
	<div class="flexslider">
		<ul class="slides">
			<!--<li style="background-image: url(assets/images/home/Tarkarli Tourism Hotels in Tarkarli Resorts in Tarkarli.jpg);" title = "Tarkarli Tourism Hotels in Tarkarli Resorts in Tarkarli" title="Tarkarli Tourism Hotels in Tarkarli Resorts in Tarkarli">-->
			<li style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/home/best-and-cheap-hotels-in-tarkarli-malvan.jpg);" title="Best and cheap Hotels in Tarkarli and Resorts in Tarkarli" alt="Best and cheap Hotels in Tarkarli and Resorts in Tarkarli">
				<div class="overlay"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
							<div class="slider-text-inner text-center">
								<h2 class="slider-headers" style="color: #ffdd00;">
									<?php echo $slider_data['small_text_slide_1']; ?>
								</h2>
								<h1 class="slider-headers" style="color: #ffdd00;"> <?php echo $slider_data['big_text_slide_1']; ?></h1>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/home/best-beaches-and-resorts-in-tarkarli.jpg);" title="Best beaches and resorts in tarkarli malvan" alt="Best beaches and resorts in tarkarli malvan">
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
			<li style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/home/best-hotels-and-rooms-offer-in-tarkarli.jpg);" title="best hotels and rooms in tarkarli" alt="best hotels and rooms in tarkarli">
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



<!---->
<div id="colorlib-reservation">
	<!-- <div class="container"> -->
	<div class="row">
		<div class="search-wrap">
			<div class="container">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i> Hotel</a></li>
					<li><a data-toggle="tab" href="#car"><i class="flaticon-car"></i> Car/Bike Rent</a></li>
					<li><a data-toggle="tab" href="#flight">
							<img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBoZWlnaHQ9IjE2cHgiIHZpZXdCb3g9Ii0zMiAtMjEgNjgxIDY4MS4zMzIwOSIgd2lkdGg9IjE2cHgiPjxwYXRoIGQ9Im0yMTMuNTgyMDMxIDMxNC4wNTA3ODFjMy45OTYwOTQtMTAuNTExNzE5IDE0LjA3MDMxMy0xNy40NjA5MzcgMjUuMzE2NDA3LTE3LjQ2MDkzNyAxMS4yNDIxODcgMCAyMS4zMTY0MDYgNi45NDkyMTggMjUuMzEyNSAxNy40NjA5MzcgMTMuNDk2MDkzIDQzLjk2ODc1IDU0LjE2Nzk2OCA3My45Mzc1IDEwMC4xNjc5NjggNzMuODAwNzgxIDUwLjk3NjU2My0uMDg1OTM3IDk1LjcyNjU2My0zMy45MjE4NzQgMTA5LjcxMDkzOC04Mi45NDE0MDYgMi45Mzc1LTEwLjExMzI4MSA0LjQxMDE1Ni0yMC41OTc2NTYgNC4zNjcxODctMzEuMTI4OTA2di03OS44NTE1NjJjMC0xOC45MDIzNDQtMTUuMzI0MjE5LTM0LjIyNjU2My0zNC4yMjY1NjItMzQuMjI2NTYzaC00MTAuNjY3OTY5Yy0xOC44OTg0MzggMC0zNC4yMjI2NTYgMTUuMzI0MjE5LTM0LjIyMjY1NiAzNC4yMjY1NjN2NzkuODUxNTYyYy0uMDQ2ODc1IDEwLjQ4NDM3NSAxLjQxMDE1NiAyMC45MjE4NzUgNC4zMjQyMTggMzAuOTkyMTg4IDEzLjk1MzEyNiA0OS4wNzgxMjQgNTguNzMwNDY5IDgyLjk3NjU2MiAxMDkuNzUzOTA3IDgzLjA3ODEyNCA0NS45OTYwOTMuMTM2NzE5IDg2LjY2Nzk2OS0yOS44MzIwMzEgMTAwLjE2NDA2Mi03My44MDA3ODF6bS0xMDAuMTY0MDYyIDUwLjk4ODI4MWMtNDAuNzY1NjI1LS4wNjI1LTc2LjU1ODU5NC0yNy4xMTMyODEtODcuNzUtNjYuMzA4NTkzLTIuMzc1LTguMTA1NDY5LTMuNTU4NTk0LTE2LjUwNzgxMy0zLjUxMTcxOS0yNC45NDkyMTl2LTc5Ljg1MTU2MmMwLTYuMzAwNzgyIDUuMTA1NDY5LTExLjQxMDE1NyAxMS40MDYyNS0xMS40MTAxNTdoNDEwLjY2Nzk2OWM2LjMwMDc4MSAwIDExLjQxMDE1NiA1LjEwOTM3NSAxMS40MTAxNTYgMTEuNDEwMTU3djc5Ljg1MTU2MmMuMDM5MDYzIDguMzA0Njg4LTEuMTA5Mzc1IDE2LjU3MDMxMi0zLjQyMTg3NSAyNC41NTA3ODEtMTEuMTQ0NTMxIDM5LjMyMDMxMy00Ni45Njg3NSA2Ni41MjczNDQtODcuODM5ODQ0IDY2LjcwNzAzMS01My41MjM0MzcgMC03My43Njk1MzEtNDQuOTIxODc0LTc4LjcxMDkzNy01OC42OTkyMTgtNy4yNjE3MTktMTkuNTUwNzgyLTI1LjkxNDA2My0zMi41MTU2MjUtNDYuNzY5NTMxLTMyLjUxNTYyNS0yMC44NTE1NjMgMC0zOS41MDc4MTMgMTIuOTY0ODQzLTQ2Ljc2OTUzMiAzMi41MTU2MjUtMTAuNTM5MDYyIDM0LjY5OTIxOC00Mi40NDUzMTIgNTguNS03OC43MTA5MzcgNTguNjk5MjE4em0wIDAiIGZpbGw9IiMwMDAwMDAiLz48cGF0aCBkPSJtMzA3LjE2MDE1NiAyOTguNjQ4NDM4YzcuMjUzOTA2IDI1LjY0MDYyNCAzMC41NzQyMTkgNDMuNDAyMzQzIDU3LjIxODc1IDQzLjU3NDIxOCAzMC43MTQ4NDQtLjE0ODQzNyA1Ny42MTMyODItMjAuNjI1IDY1LjkzNzUtNTAuMTg3NSAxLjcxODc1LTUuOTMzNTk0IDIuNTYyNS0xMi4wODIwMzEgMi41MTE3MTktMTguMjUzOTA2di02OC40NDkyMTloLTM4Ny44NTkzNzV2NjguNDQ5MjE5Yy0uMDM1MTU2IDYuMzAwNzgxLjg0Mzc1IDEyLjU3ODEyNSAyLjYxMzI4MSAxOC42Mjg5MDYgOC4zNjMyODEgMjkuNDM3NSAzNS4yMjY1NjMgNDkuNzY1NjI1IDY1LjgzNTkzOCA0OS44MTI1IDI2LjY0NDUzMS0uMTkxNDA2IDQ5Ljk2NDg0My0xNy45NTcwMzEgNTcuMjI2NTYyLTQzLjU5NzY1NiAxMC41MDM5MDctMjguNjM2NzE5IDM3Ljc1NzgxMy00Ny42NzE4NzUgNjguMjU3ODEzLTQ3LjY3MTg3NXM1Ny43NTc4MTIgMTkuMDM1MTU2IDY4LjI1NzgxMiA0Ny42NzE4NzV6bS0yMjcuOTY4NzUtMjQuODY3MTg4Yy00LjYwOTM3NSAwLTguNzczNDM3LTIuNzgxMjUtMTAuNTM1MTU2LTcuMDQyOTY5LTEuNzY1NjI1LTQuMjY1NjI1LS43ODkwNjItOS4xNjc5NjkgMi40Njg3NS0xMi40MzM1OTNsMjIuODE2NDA2LTIyLjgxMjVjNC40NzY1NjMtNC4zMjQyMTkgMTEuNTkzNzUtNC4yNjE3MTkgMTUuOTkyMTg4LjE0MDYyNCA0LjM5ODQzNyA0LjQwMjM0NCA0LjQ2MDkzNyAxMS41MTE3MTkuMTQwNjI1IDE1Ljk5MjE4OGwtMjIuODE2NDA3IDIyLjgxMjVjLTIuMTM2NzE4IDIuMTQwNjI1LTUuMDM5MDYyIDMuMzQzNzUtOC4wNjY0MDYgMy4zNDM3NXptNzYuNTExNzE5LTMuMzQzNzUtNDUuNjI4OTA2IDQ1LjYyODkwNmMtNC40NzY1NjMgNC4zMjQyMTktMTEuNTg5ODQ0IDQuMjY1NjI1LTE1Ljk5MjE4OC0uMTM2NzE4LTQuNDAyMzQzLTQuNDAyMzQ0LTQuNDY0ODQzLTExLjUxNTYyNi0uMTQwNjI1LTE1Ljk5MjE4OGw0NS42MzI4MTMtNDUuNjMyODEyYzQuNDcyNjU2LTQuMzIwMzEzIDExLjU4OTg0My00LjI1NzgxMyAxNS45OTIxODcuMTQwNjI0IDQuMzk4NDM4IDQuNDAyMzQ0IDQuNDU3MDMyIDExLjUxOTUzMi4xMzY3MTkgMTUuOTkyMTg4em0wIDAiIGZpbGw9IiMwMDAwMDAiLz48cGF0aCBkPSJtNTU4LjMwODU5NCAwaDQ1LjYyODkwNmM2LjMwMDc4MSAwIDExLjQxMDE1NiA1LjEwOTM3NSAxMS40MTAxNTYgMTEuNDEwMTU2djE3MS4xMDkzNzVjMCA2LjMwMDc4MS01LjEwOTM3NSAxMS40MTAxNTctMTEuNDEwMTU2IDExLjQxMDE1N2gtNDUuNjI4OTA2Yy02LjMwNDY4OCAwLTExLjQxMDE1Ni01LjEwOTM3Ni0xMS40MTAxNTYtMTEuNDEwMTU3di0xNzEuMTA5Mzc1YzAtNi4zMDA3ODEgNS4xMDU0NjgtMTEuNDEwMTU2IDExLjQxMDE1Ni0xMS40MTAxNTZ6bTAgMCIgZmlsbD0iIzAwMDAwMCIvPjxwYXRoIGQ9Im0yOTQuMjg1MTU2IDQ1NS41NTg1OTRjMy4xMjEwOTQtMS4zMTY0MDYgNS40ODgyODItMy45NzI2NTYgNi40MzM1OTQtNy4yMzA0NjkuOTg4MjgxLTMuMjY5NTMxLjQ2MDkzOC02LjgxNjQwNi0xLjQ0MTQwNi05LjY1MjM0NC0yLjgyMDMxMy00LjQyOTY4Ny04LjM3MTA5NC02LjI2NTYyNS0xMy4yNzczNDQtNC4zOTA2MjUtMjguMzg2NzE5IDEyLjI3NzM0NC02MC41OTM3NSAxMi4yNzczNDQtODguOTc2NTYyIDAtMS4xODc1LS41MTU2MjUtMi40NjA5MzgtLjc4OTA2Mi0zLjc1MzkwNy0uNzk2ODc1LTMuNjA1NDY5LjA3MDMxMy02Ljk2ODc1IDEuODIwMzEzLTkuMDkzNzUgNC43MjY1NjMtMi4xMzI4MTIgMi45MTAxNTYtMi43ODUxNTYgNi42NDA2MjUtMS43NjU2MjUgMTAuMDk3NjU2LjkzNzUgMy4yNjE3MTkgMy4yOTI5NjkgNS45MjE4NzUgNi40MTc5NjkgNy4yNDYwOTQgMzMuNjk5MjE5IDE0LjMwNDY4NyA3MS43NTc4MTMgMTQuMzA0Njg3IDEwNS40NTcwMzEgMHptMCAwIiBmaWxsPSIjMDAwMDAwIi8+PHBhdGggZD0ibTU1OC4zMDg1OTQgNDUwLjU5NzY1NmMtMS42MDU0NjkgNzIuMzI4MTI1LTU2LjAwMzkwNiAxMzIuNTQyOTY5LTEyNy44MDA3ODIgMTQxLjQ2NDg0NC03MS43OTY4NzQgOC45MTc5NjktMTM5LjI3MzQzNy0zNi4xNTYyNS0xNTguNTI3MzQzLTEwNS44OTg0MzgtMTYuMjE4NzUgMy4zMDQ2ODgtMzIuODY3MTg4IDMuODk0NTMyLTQ5LjI4NTE1NyAxLjc1NzgxMyAyMS4yOTY4NzYgOTUuMDkzNzUgMTEwLjE0MDYyNiAxNTkuMzk0NTMxIDIwNy4xMjUgMTQ5Ljg5ODQzNyA5Ni45ODgyODItOS40OTIxODcgMTcxLjY3NTc4Mi04OS44MDQ2ODcgMTc0LjExNzE4OC0xODcuMjIyNjU2di0yMzMuODU1NDY4aC00NS42Mjg5MDZ6bTAgMCIgZmlsbD0iIzAwMDAwMCIvPjwvc3ZnPgo=" />
							Water Sports</a></li>
					<!-- <li><a data-toggle="tab" href="#cruises"><i class="flaticon-boat"></i> Cruises</a></li> -->
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
							<div class="col-md-2">
								<input type="button" name="car_submit" id="car_submit" value="Find Car/Bike" class="btn btn-primary btn-block" onclick="car_enquiry()">
							</div>
							
						</div>
					</form>
				</div>

				<!--Water Sports-->
				<div id="flight" class="tab-pane fade">
					<form method="post" class="colorlib-form" id="water_sports_form">
						<div class="row">
							<div class="col-md-2">
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
							<div class="col-md-2">
								<div class="form-group">
									<label for="date">On Date:</label>
									<div class="form-field">
										<i class="icon icon-calendar2"></i>
										<input type="text" id="water_date" name="water_date" class="form-control date error" placeholder="Date" onchange="validate_form(this.id,4,true,event)" onfocus="validate_form(this.id,4,true,event)">
										<span id="water_date-error" style="color:#ff5303;"></span>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="guests">No.of Peoples</label>
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
								<input type="button" name="water_submit" id="water_submit" value="Enquire" class="btn btn-primary btn-block" onclick="water_enquiry()">
							</div>
						</div>
					</form>
				</div>

				<!-- <div id="cruises" class="tab-pane fade">
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
				</div> -->
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
		color: #FFDD00;
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
									<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/images/home/best-beach-hotels-water-sports-and-deals-in-tarkarli.png" alt="best beach hotels water sports and deals in tarkarli" title="best beach hotels water sports and deals in tarkarli">
								</div>
								<div class="col-md-7">
									<h1>Best Deals in Tarkarli Malvan.</h1>
									<!-- <p>Nunc accumsan hendrerit nunc, ac venenatis magna facilisis quis. Ut sit amet mi ac <br /> neque sodales facilisis. Nullam tempus fermentum lorem nec interdum. Ut id <br /> orci id sapien imperdiet vehicula. Etiam quis dignissim ante. Donec convallis tincidunt <br /> ligula, ac luctus mi interdum a.</p> -->
									<p>We break out of established patterns to make our customers happy.<br /><br />We give crazy discount on hotel bookings, bike rentals, water sports in Tarkarli.<br /> </p>
								</div>
							</div>
							<div class="tab-pane edit-tab" id="professional">
								<div class="teb-icon-edit col-md-5 col-sm-6 col-xs-12">
									<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/images/home/best-water-sports-tarkarli-scuba-diving-parasailing.png" alt="best water sports tarkarli scuba diving parasailing" title="best water sports tarkarli scuba diving parasailing">
								</div>
								<div class="col-md-7 col-sm-6 col-xs-12">
									<h1>We Are Competent In Water Sports.</h1>
									<p>We take security very seriously and and provide best security for water sports in Tarkarli.<br><br /> We are committed to the highest standards of professionalism and quality. We give best Scuba Diving,Parasailing,Water bike,Snorkeling deals in Tarkarli. With our certified scuba professionals we give best experience and security to our customers</p>
								</div>
							</div>
							<div class="tab-pane edit-tab" id="experienced">
								<div class="teb-icon-edit col-md-5 col-sm-6 col-xs-12">
									<img class="img-responsive" style="border-radius: 20%;" src="<?php bloginfo('template_directory'); ?>/assets/images/home/best-beaches-sea-facing-hotels-tarkarli.jpg" alt="best beaches sea facing hotels tarkarli" title="best beaches sea facing hotels tarkarli">
								</div>
								<div class="col-md-7 col-sm-6 col-xs-12">
									<h1>Breathtaking Beaches and Hotels in Tarkarli.</h1>
									<p>Our hotels are located near the heart of the Tarkarli beaches. With our private beaches you have your privacy and enjoyment. With sea facing hotel rooms, you will get best hotel experience in Tarkarli.</p>
								</div>
							</div>
							<div class="tab-pane edit-tab" id="dedicated">
								<div class="teb-icon-edit col-md-5 col-sm-6 col-xs-12">
									<img class="img-responsive" style="max-height:420px" src="<?php bloginfo('template_directory'); ?>/assets/images/home/best-hotel-service-tarkarli.png" alt="best hotel service tarkarli" title="best hotel service tarkarli">
								</div>
								<div class="col-md-7 col-sm-6 col-xs-12">
									<h1>Our Dedication Is Exhibited In Our Work.</h1>
									<p>We know that the price of success is hard work.<br><br /> So we stay dedicated to the job at hand and apply the best of ourselves to it.We dont do just business, we are always dedicated to what we do and try to improve and give our customers best experience.</p>
								</div>
							</div>
							<div class="tab-pane edit-tab" id="support">
								<div class="teb-icon-edit col-md-5 col-sm-6 col-xs-12">
									<img class="img-responsive" style="max-height:420px" src="<?php bloginfo('template_directory'); ?>/assets/images/home/hotels-tarkarli-malvan.png" alt="hotels tarkarli malvan" title="hotels tarkarli malvan">
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
									<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/images/home/tarkarli-beach-resorts.png" alt="tarkarli beach resort" title="tarkarli beach resort">
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
						<img src='<?php bloginfo('template_directory'); ?>/assets/images/home/hotels-in-tarkarli.png' alt="best and affordable hotels in tarkarli malvan">
					</div>
					<div class='circle_inner__layer'>
						<img src='<?php bloginfo('template_directory'); ?>/assets/images/home/hotels-in-tarkarli-2.png' alt="luxury and affordable hotels in tarkarli malvan">
					</div>
					<div class='circle_inner__layer'>
						<img src='<?php bloginfo('template_directory'); ?>/assets/images/home/hotels-in-tarkarli-3.png' alt="beach resort in tarkarli malvan">
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
						<img src='<?php bloginfo('template_directory'); ?>/assets/images/home/rooms-in-tarkarli.png' alt="best rooms in tarkarli and malvan">
					</div>
					<div class='circle_inner__layer'>
						<img src='<?php bloginfo('template_directory'); ?>/assets/images/home/rooms-in-tarkarli-2.png' alt="tarkarli beach and tarkarli hotels">
					</div>
					<div class='circle_inner__layer'>
						<img src='<?php bloginfo('template_directory'); ?>/assets/images/home/rooms-in-tarkarli-3.png' alt="tarkarli beach resorts">
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
						<img src='<?php bloginfo('template_directory'); ?>/assets/images/home/beaches-in-tarkarli.png' alt="tarkarli hotels tarkarli beach">
					</div>
					<div class='circle_inner__layer'>
						<img src='<?php bloginfo('template_directory'); ?>/assets/images/home/beaches-in-tarkarli-2.png' alt="tarkarli beach and tarkarli beach resort">
					</div>
					<div class='circle_inner__layer'>
						<img src='<?php bloginfo('template_directory'); ?>/assets/images/home/beaches-in-tarkarli-3.png' alt="mtdc tarkarli">
					</div>
				</div>
				<div class='content_shadow'></div>
			</div>
		</div>
	</div>
<!--How to reach-->


<!--gallery-->
	<section id="photostack-1" class="photostack photostack-start" style="margin-top:80px;   margin-bottom:80px;">
		<div>
			<figure>
				<a href="" class="photostack-img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/home/tarkarli-beach-resorts-tarkarli-hotels.jpg" alt="Best beach resorts in tarkarli" title="best beach resort in tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Water Sports</h2>
				</figcaption>
			</figure>
			<figure>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/home/mtdc-tarkarli-hotels.jpg" alt="mtdc tarkarli hotels govt approved" title="mtdc tarkarli hotels govt approved" /></a>
				<figcaption>
					<h2 class="photostack-title">Bumper Ride</h2>
				</figcaption>
			</figure>
			<figure>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/home/tarkarli-resorts-and-beaches.jpg" alt="Best resorts and beaches in tarkarli" title="best beaches and resorts in tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Banana Ride</h2>
				</figcaption>
			</figure>
			<figure>

				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/home/water-sports-banana-ride-tarkarli.jpg" alt="water sports and banana ride in tarkarli" title="water sports and banana ride in tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Fall of Banana Ride</h2>
				</figcaption>
			</figure>
			<figure>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/home/water-sports-boating-tarkarli-hotels.jpg" alt="best water sports in tarkarli" title="best water sports in tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Boating</h2>
				</figcaption>
			</figure>
			<figure>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/home/banana-ride-water-sports-tarkarli.jpg" alt="Banana Ride Water sports in tarkarli scuba diving in tarkarli" title="Banana Ride Water sports in tarkarli scuba diving in tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Speed Boat</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/home/scuba-diving-water-sports-tarkarli.jpg" alt="scuba diving water sports tarkarli" title="scuba diving water sports tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Triple Threat Water Boat</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/home/underwater-diving-water-sports-tarkarli.jpg" alt="underwater diving water sports tarkarli" title="underwater diving water sports tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Dolphin Sawari</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/home/mtdc-tarkarli-hotels-beaches.jpg" alt="mtdc tarkarli hotels and beaches" title="mtdc tarkarli hotels and beaches" /></a>
				<figcaption>
					<h2 class="photostack-title">Fishing</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/home/mtdc-hotels-in-tarkarli.jpg" alt="mtdc hotels in tarkarli" title="mtdc hotels in tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">Nature Malvan</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/home/beaches-in-devbaug-tarkarli.jpg" alt="best beaches in devbaug and tarkarli malvan" title="best beaches in devbaug and tarkarli malvan" /></a>
				<figcaption>
					<h2 class="photostack-title">Parasailing</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/home/beaches-in-devbaug-tarkarli.jpg" alt="best beaches in devbaug tarkarli" title="best beaches in devbaug tarkarli" /></a>
				<figcaption>
					<h2 class="photostack-title">LightHouse</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/home/water-sports-snoorkling-in-tarkarli.jpg" alt="water sports, scuba diving and snoorkling packages tarkarli" title="" /></a>
				<figcaption>
					<h2 class="photostack-title">Snoorkling</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/home/tarkarli-beach-resorts-and-hotels.jpg" alt="tarkarli beach resorts and hotels" title="tarkarli beach resorts and hotels" /></a>
				<figcaption>
					<h2 class="photostack-title">Scuba Diving</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/home/mtdc-tarkarli-beach-hotel.jpg" alt="mtdc tarkarli beach hotel resort" title="mtdc tarkarli beach hotel resort" /></a>
				<figcaption>
					<h2 class="photostack-title">Life @ Tarkarli</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="#" class="photostack-img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/home/beach-hotels-tarkarli.jpg" alt="beach hotels tarkarli" title="beach hotels tarkarli" /></a>
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
					<img style="width:100px;" src="<?php bloginfo('template_directory'); ?>/assets/images/home/hotels-tarkarli.svg" alt="hotels tarkarli" title="hotels tarkarli"/>
					<!--<i class="fa fa-bolt" aria-hidden="true" style="font-size: 80px;"></i>-->
				</div>
			</div>
			<hr>
			<div class="media wow fadeIn">
				<h3>Private Beaches</h3>
				<div class="media-left">
					<img style="width:100px;" src="<?php bloginfo('template_directory'); ?>/assets/images/home/tarkarli-beach.svg" alt="tarkarli beach" title="tarkarli beach"/>
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
					<img style="width:100px;" src="<?php bloginfo('template_directory'); ?>/assets/images/home/bike-rent-tarkarli-beach.svg" alt="bike rent tarkarli beach" title="bike rent tarkarli beach"/>
				</div>
			</div>
			<hr>
			<div class="media wow fadeIn">
				<h3>Water Sports</h3>
				<div class="media-left">
					<img style="width:100px;" src="<?php bloginfo('template_directory'); ?>/assets/images/home/water-sports-banana-ride-tarkarli.svg" alt="water sports banana ride tarkarli" title="water sports banana ride tarkarli"/>
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
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/home/tarkarli-beaches-hotels.svg" alt="tarkarli beaches and hotels" title="tarkarli beaches and hotels"/>
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

			<h3 style="font-weight: normal;">
				Be My Guest
			</h3>
			<p>
				In our Indian mythology we treat our guest as GOD. We believe in this and always provide best experience to our customes. We ensure that our customers are always happy and not disappointed on us. We believe in quality experience instead of marketing. Our mission is to a company like OnePlus, like them we also want to focus on quality. We provide best hotels and beach resorts in tarkarli.
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
			<div class="tour-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/home/beach-resorts-in-tarkarli-malvan.jpg);" alt="beach resorts in tarkarli malvan" title="beach resorts in tarkarli malvan">
			</div>
			<span class="desc">
				<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 100+ Reviews</p>
				<h2>Sindhudurg</h2>
				<span class="city">Fort built on the water</span>
				<span class="price">Malvan,Maharashtra</span>
			</span>
		</a>
		<a href="#" class="tour-entry animate-box">
			<div class="tour-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/home/tarkarli-beaches-and-hotels.jpg);" alt="tarkarli beaches and hotels" title="tarkarli beaches and hotels">
			</div>
			<span class="desc">
				<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 500+ Reviews</p>
				<h2>Tarkarli</h2>
				<span class="city">Best Private Beaches in Malvan</span>
				<span class="price">Malvan,Maharashtra</span>
			</span>
		</a>
		<a href="#" class="tour-entry animate-box">
			<div class="tour-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/home/water-sports-tarkarli-1.jpeg);" alt="water sports in tarkarli" title="water sports in tarkarli">
			</div>
			<span class="desc">
				<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 177+ Reviews</p>
				<h2>Rock Garden</h2>
				<span class="city">Rocks which are always Rocking</span>
				<span class="price">Malvan Tarkarli</span>
			</span>
		</a>
		<a href="#" class="tour-entry animate-box">
			<div class="tour-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/home/best-beach-tarkarli.jpg);" alt="best beach tarkarli" title="best beach tarkarli">
			</div>
			<span class="desc">
				<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 50+ Reviews</p>
				<h2>Chivla Beach </h2>
				<span class="city">Longest Beach in Tarkarli</span>
				<span class="price">Malvan,Maharashtra</span>
			</span>
		</a>
		<a href="#" class="tour-entry animate-box">
			<div class="tour-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/home/best-beaches-tarkarli.jpg);" alt="best beaches tarkarli" title="best beaches tarkarli">
			</div>
			<span class="desc">
				<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 240+ Reviews</p>
				<h2>Kunkeshwar Temple</h2>
				<span class="city">Lord Shiva Temple</span>
				<span class="price">Kunkeshwar, Maharashtra</span>
			</span>
		</a>
		<a href="#" class="tour-entry animate-box">
			<div class="tour-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/home/mtdc-tarkarli.jpg);" alt="mtdc tarkarli" title="mtdc tarkarli">
			</div>
			<span class="desc">
				<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 180+ Reviews</p>
				<h2>Rameshwar Temple</h2>
				<span class="city">Lord Rameshwar Temple</span>
				<span class="price">Kandalgoan, Maharashtra</span>
			</span>
		</a>
		<a href="#" class="tour-entry animate-box">
			<div class="tour-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/home/best-beach-in-tarkarli.jpg);">
			</div>
			<span class="desc">
				<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 200+ Reviews</p>
				<h2>Devbaug Beach</h2>
				<span class="city">Cleanest Beach in Tarkarli</span>
				<span class="price">Devbaug, Maharashtra</span>
			</span>
		</a>
		<a href="#" class="tour-entry animate-box">
			<div class="tour-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/home/best-hotel-in-tarkarli.jpg);">
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

<div id="colorlib-intro" class="intro-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/cover-img-1.jpg);" data-stellar-background-ratio="0.5">
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
					<div class="video colorlib-video" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/home/beach-tarkarli.jpg);" alt="tarkarli beach" title="tarkarli beach">
						<a href="https://www.youtube.com/watch?v=RNVeWHPXQ0U" class="popup-vimeo"><i class="icon-video"></i></a>
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
							<a href="hotels.html" class="hotel-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/hotel-1.jpg);">
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
							<a href="hotels.html" class="hotel-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/hotel-2.jpg);">
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
							<a href="hotels.html" class="hotel-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/hotel-3.jpg);">
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
							<a href="hotels.html" class="hotel-img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/hotel-4.jpg);">
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

<?php get_footer(); ?>