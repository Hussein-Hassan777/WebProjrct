<?php
include("myfile_backend.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $mying = mysqli_fetch_array($result)[1];
    echo '<img src="' . $mying . '">';
    ?>
    <img src="<?php echo $mying ?>" alt="">
</body>

</html>