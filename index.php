<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Foundation</title>
    <link rel="stylesheet" href="css/signs.css"/>
    <script src="bower_components/modernizr/modernizr.js"></script>
    <script language="javascript" type="text/javascript">
		// 3600000); //  1 hour
		// 60000);   //  1 minute
		// 20000);   // 20 seconds
        var timeout = setInterval(one, 20000); // 20 seconds
        function one() {
            $('#one-p').load('slider.php');
            $('#one-l').load('slider.php');
            $('#two-p-twitter').load('twitter.php');
            $('#two-l-twitter').load('twitter.php');
        }
        var timeout = setInterval(two, 3600000); // 1 hour
        function two() {
            $('#two-p').load('events.php');
            $('#two-l').load('events.php');
        }
        var timeout = setInterval(three, 60000); // 1 minute
        function three() {
            $('#two-p-weather').load('weather.php');
            $('#two-l-weather').load('weather.php');
        }
    </script>
</head>
<body>
<div class="row show-for-landscape">
    <div class="columns small-11 small-centered">
        <div class="row collapse">
            <div class="columns small-6 sign-box one">
                <div id="one-l"><h1>This page will be polled in just a bit.</h1>

                    <h2>Anything can be dropped here as a placeholder until the timer expires for the first polling.</h2>

                    <h2>All of the placeholder content will be replaced by the polled page's content.</h2>
                    <img src="/admissions/img/uthsc.jpg"/></div>
            </div>
            <div class="columns small-6 sign-box two">
                <h2 class="text-center">Events</h2>

                <div class="events" id="two-l"><?php readfile("http://events.uthsc.edu/widgets/template_all-info-bulleted.php?category=27&return_limit=10"); ?></div>
                <div class="weather" id="two-l-weather">
                    <iframe class="weather-iframe" id="forecast_embed" type="text/html" frameborder="0" height="245" width="100%" src="http://forecast.io/embed/#lat=35.0406&lon=-85.3096&name=Chattonoogan Hotel"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="columns small-centered text-center">
        <div class="time" id="two-p-time">
            <iframe src="http://free.timeanddate.com/clock/i4k131o5/n409/fn2/fs32/tct/pct/ftb/tt0/ts1/tb2" frameborder="0" width="746" height="47" allowTransparency="true"></iframe>
        </div>
    </div>
</div>
<div class="row show-for-portrait collapse">
    <div class="columns sign-box one small-centered">
        <div id="one-p"><h1>This page will be polled in just a bit.</h1>

            <h2>Anything can be dropped here as a placeholder until the timer expires for the first polling.</h2>

            <h2>All of the placeholder content will be replaced by the polled page's content.</h2>
            <img src="/admissions/img/uthsc.jpg"/></div>
    </div>
    <div class="columns sign-box two small-centered">
        <h2 class="text-center">Events</h2>

        <div class="events" id="two-p"><?php readfile("http://events.uthsc.edu/widgets/template_all-info-bulleted.php?category=27&return_limit=10"); ?></div>
        <div class="weather" id="two-p-weather">
            <iframe id="forecast_embed" type="text/html" style="position: relative; top: -35px;" frameborder="0" height="245" width="100%" src="http://forecast.io/embed/#lat=35.139864&lon=-90.0351278&name=Memphis, TN"></iframe>
        </div>
    </div>
</div>
<div id="image-load"></div>
<script type="text/javascript">(function () {
        var ticker = document.createElement('script');
        ticker.type = 'text/javascript';
        ticker.async = true;
        ticker.src = '//twitcker.com/ticker/nic_winn.js?container=footer&speed=1';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ticker);
    })();</script>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/foundation/js/foundation.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
