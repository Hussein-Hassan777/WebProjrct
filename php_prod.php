<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "ecommerce_db", 3307);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['action'])) { 

    $id       = $_POST["id_prod"];       
    $name     = $_POST["name_prod"];     
    $price    = $_POST["price"];         
    $descr    = $_POST["desc"];          
    $brand    = $_POST["brand"];         
    $category = $_POST["category"]; 
    $action   = $_POST["action"];

    
    if ($action == "add") {

        $check = "SELECT * FROM products WHERE id_P = '$id'";
        $result_check = mysqli_query($conn, $check);

        if (mysqli_num_rows($result_check) > 0) {

            echo "<script>alert('This product already exists'); 
            window.location.href='admin_html.php';</script>";

        } else {

            
            $add = "INSERT INTO products (id_P, name, describtion, price, brand, category)
                    VALUES ('$id','$name','$descr','$price','$brand','$category')";
            mysqli_query($conn, $add);

           
            $folder = "uploads/$id/";
            if (!is_dir($folder)) {
                mkdir($folder, 0777, true);
            }

            $img1 = $_FILES["image1"]["name"];
            $img2 = $_FILES["image2"]["name"];
            $img3 = $_FILES["image3"]["name"];

            if (!empty($img1))
                move_uploaded_file($_FILES["image1"]["tmp_name"], $folder . $img1);

            if (!empty($img2))
                move_uploaded_file($_FILES["image2"]["tmp_name"], $folder . $img2);

            if (!empty($img3))
                move_uploaded_file($_FILES["image3"]["tmp_name"], $folder . $img3);

            $addImg = "INSERT INTO images (id_P, image_1, image_2, image_3)
                    VALUES ('$id', '$img1', '$img2', '$img3')";
            mysqli_query($conn, $addImg);

            header("Location: admin_html.php");
            exit();
        }
    }

    if ($action == "update") {
        $update = "UPDATE products SET 
            name='$name',
            describtion='$descr',
            price='$price',
            brand='$brand',
            category='$category'
            WHERE id_P='$id'";
        mysqli_query($conn, $update);
        
        $folder = "uploads/$id/";
        if (!is_dir($folder)) {
            mkdir($folder, 0777, true);
        }
        $old = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM images WHERE id_P='$id'"));
        $img1 = $old['image_1'];
        $img2 = $old['image_2'];
        $img3 = $old['image_3'];
        if (!empty($_FILES["image1"]["name"])) {
            $img1 = $_FILES["image1"]["name"];
            move_uploaded_file($_FILES["image1"]["tmp_name"], $folder . $img1);
        }
        if (!empty($_FILES["image2"]["name"])) {
            $img2 = $_FILES["image2"]["name"];
            move_uploaded_file($_FILES["image2"]["tmp_name"], $folder . $img2);
        }
        if (!empty($_FILES["image3"]["name"])) {
            $img3 = $_FILES["image3"]["name"];
            move_uploaded_file($_FILES["image3"]["tmp_name"], $folder . $img3);
        }
        $updateImg = "UPDATE images SET 
            image_1='$img1',
            image_2='$img2',
            image_3='$img3'
            WHERE id_P='$id'";
        mysqli_query($conn, $updateImg);
        header("Location: admin_html.php");
        exit();
    }

    if ($action == "delete") {
        $id = $_POST['id_prod'];

        $delImg = mysqli_query($conn, "DELETE FROM images WHERE id_P='$id'");
        $del = mysqli_query($conn, "DELETE FROM products WHERE id_P='$id'");

        $folder = "uploads/$id/";
        if (is_dir($folder)) {
            array_map('unlink', glob("$folder/*.*"));
            rmdir($folder);
        }

        header("Location: dashbord_html.php");
        exit();
    }

   
}

mysqli_close($conn);
?>
