<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Foundation</title>
    <link rel="stylesheet" type="text/css" href="css/style3.css" />
    <link rel="stylesheet" type="text/css" href="Calendario/css/calendar.css" />
    <link rel="stylesheet" type="text/css" href="Calendario/css/custom_1.css" />
    <link rel="stylesheet" href="css/signs.css"/>


    <script type="text/javascript">

        var num;
        var temp=0;
        var speed=10000; /* this is set for 5 seconds, edit value to suit requirements */
        var preloads=[];

        /* add any number of images here */

        preload(
            'images/1.jpg',
            'images/steam-1.jpg',
            'images/2.jpg',
            'images/steam-2.jpg',
            'images/3.jpg',
            'images/its-3.jpg',
            'images/steam-3.jpg',
            'images/4.jpg',
            'images/its-4.jpg',
            'images/steam-4.jpg',
            'images/5.jpg',
            'images/its-5.jpg',
            'images/steam-5.jpg',
            'images/6.jpg',
            'images/its-6.jpg',
            'images/steam-6.jpg',
            'images/7.jpg',
            'images/its-7.jpg',
            'images/steam-7.jpg',
            'images/8.jpg',
            'images/its-8.jpg',
            'images/steam-8.jpg',
            'images/9.jpg',
            'images/its-9.jpg',
            'images/steam-9.jpg',
            'images/10.jpg',
            'images/its-10.jpg',
            'images/steam-10.jpg',
            'images/steam-11.jpg',
            'images/steam-12.jpg'
        );

        function preload(){

            for(var c=0;c<arguments.length;c++) {
                preloads[preloads.length]=new Image();
                preloads[preloads.length-1].src=arguments[c];
            }
        }

        function rotateImages() {
            num=Math.floor(Math.random()*preloads.length);
            if(num==temp){
                rotateImages();
            }
            else{
                document.body.style.backgroundImage='url('+preloads[num].src+')';
                temp=num;

                setTimeout(function(){rotateImages()},speed);
            }
        }

        if(window.addEventListener){
            window.addEventListener('load',function(){setTimeout(function(){rotateImages()},speed)},false);
        }
        else {
            if(window.attachEvent){
                window.attachEvent('onload',function(){setTimeout(function(){rotateImages()},speed)});
            }
        }
    </script>

    <script src="bower_components/modernizr/modernizr.js"></script>
    <script language="javascript" type="text/javascript">
		// 86400000); //  1 day
		// 3600000); //  1 hour
		// 60000);   //  1 minute
        // 20000);   // 20 seconds
        // 5000);   // 5 seconds
        var timeout = setInterval(calendar, 86400000); //  1 day
        function calendar() {
            $('#calendar').load('calendar.php');
        }
        var timeout = setInterval(news, 3600000); //  1 hour
        function news() {
            $('#news').load('news.php');
        }
        var timeout = setInterval(weather, 60000);   //  1 minute
        function weather() {
            $('#weather').load('weather.php');
        }
    </script>
</head>
<body id="page">
<ul class="cb-slideshow">
    <li><span>Image 01</span></li>
    <li><span>Image 02</span></li>
    <li><span>Image 03</span></li>
    <li><span>Image 04</span></li>
    <li><span>Image 05</span></li>
    <li><span>Image 06</span></li>
</ul>
<div class="container">
    <div class="row">
        <div class="columns small-2">
            <div id="calendar-box">
                <div id="calendar" class="container<?php $date = date(d);
                if(date('d') > 14) {
                    echo ' add-class-for-second-half';
                } else {
                    echo '';
                } ?>">
                    <div class="custom-calendar-wrap custom-calendar-full">
                    </div>
                </div>
            </div>
        </div>
        <div class="columns small-10">
            <div class="row">
                <div class="columns small-7"></div>
                <div class="columns small-5">

                    <div class="row sign-box two">
                        <div class="columns">
                            <img class="uthsc-its-logo" src="images/uthsc-campus-logo-stacked-black-text.png" />
                            <div class="news" id="news">
                                <?php readfile("http://news.uthsc.edu/news-html/redesign-news-three-stories.php"); ?>
                                <p>From news.uthsc.edu <img class="qr-code" src="images/news.png" /> </p>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="weather" id="weather">
                                <iframe class="weather-iframe" id="forecast_embed" type="text/html" frameborder="0" height="245" width="100%" src="http://forecast.io/embed/#lat=35.139864&lon=-90.0351278&name=Memphis, TN"> </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div>
    </div>
</div>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/foundation/js/foundation.min.js"></script>
<script src="js/app.js"></script>
<script src="bower_components/moment/moment.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="Calendario/js/jquery.calendario.js"></script>
<script type="text/javascript" src="Calendario/js/data.js"></script>
<script>
    function update() {
        $('#clock').html(moment().format('dddd, MMMM DD, YYYY h:mm a'));
        moment.locale('en', {
        });
    }

    setInterval(update, 1000);
</script>
<script type="text/javascript">
    $(function() {

        var cal = $( '#calendar' ).calendario( {
                onDayClick : function( $el, $contentEl, dateProperties ) {

                    for( var key in dateProperties ) {
                        console.log( key + ' = ' + dateProperties[ key ] );
                    }

                },
                caldata : codropsEvents
            } ),
            $month = $( '#custom-month' ).html( cal.getMonthName() ),
            $year = $( '#custom-year' ).html( cal.getYear() );

        $( '#custom-next' ).on( 'click', function() {
            cal.gotoNextMonth( updateMonthYear );
        } );
        $( '#custom-prev' ).on( 'click', function() {
            cal.gotoPreviousMonth( updateMonthYear );
        } );
        $( '#custom-current' ).on( 'click', function() {
            cal.gotoNow( updateMonthYear );
        } );

        function updateMonthYear() {
            $month.html( cal.getMonthName() );
            $year.html( cal.getYear() );
        }

        // you can also add more data later on. As an example:
        /*
         someElement.on( 'click', function() {

         cal.setData( {
         '03-01-2013' : '<a href="#">testing</a>',
         '03-10-2013' : '<a href="#">testing</a>',
         '03-12-2013' : '<a href="#">testing</a>'
         } );
         // goes to a specific month/year
         cal.goto( 3, 2013, updateMonthYear );

         } );
         */

    });
</script>
</body>
</html>
