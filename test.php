<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.1.0/moment.min.js"></script>
<h1>Test</h1>
<script>
    function update() {
        $('#clock').html(moment().format('D. MMMM YYYY H:mm:ss'));
    }

    setInterval(update, 1000);
</script>
<div id="clock">loading ...</div>