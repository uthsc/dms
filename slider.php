<!DOCTYPE HTML>
<?php
$directory = "/var/www/html/test/nic/signs/images/";
$filecount = 0;
$files = glob($directory . "*.jpg");
if ($files){
    $filecount = count($files);
}

?>
<html>
<head>
    <!-- directorySlider Javascript file -->
    <script src="js/directorySlider.js"></script>
</head>
<body>

<div class="directorySlider"></div>
<script>
    $(document).ready(function(){
        $('.directorySlider').directorySlider({
            animation: 'fade',
            filebase: '',
            directory: 'images/',
            extension: 'jpg',
            numslides: <?php echo $filecount; ?>,
            speed: 1000,
            timeout: 4000,
            height: 250,
            width: 250
        });
    });
</script>

</body>
</html>