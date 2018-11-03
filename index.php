<?php 
require './lang/init.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<ul>
    <li><a href="?lang=eng">English</a></li>
    <li><a href="?lang=fr">French</a></li>
    <li><a href="?lang=ar">Arabic</a></li>
</ul>

<h2 class="texto"><?php echo $__T_['Hello'];?></h2>
<h2 class="texto"><?php echo $__T_['Goodbye'];?></h2>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

function addattr() {
    $('.texto').prop('dir', 'rtl'); 
}

function removeattr() {
    $('.texto').prop('dir'); 
}


$(document).ready(function(){
    $lng = "<?php echo $_SESSION['lang'] ?>";

    if ($lng == 'ar') {
        addattr();
    } else {
        removeattr();
    }

});


</script>

</body>
</html>