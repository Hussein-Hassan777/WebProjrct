<?php
include("mycart_backend.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <img src="<?php echo $rows2[0]['image_1'] ?>" alt="">
    <p><?php echo $rows2[0]['name'] ?></p>
    <p><?php echo $rows2[0]['price'] ?></p>
</body>

</html>