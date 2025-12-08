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
        $imageName = "";

        if (!empty($_FILES['image']['name'])) {
            $imageName = time() . "_" . $_FILES['image']['name'];
            $uploadDir = "uploads/";
            move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $imageName);
        }

        //ADD 
        if ($action == "add") {
            $check = "SELECT * FROM products WHERE id_p = '$id'";
            $result_check = mysqli_query($conn, $check);

            if (mysqli_num_rows($result_check) > 0) {
                echo "<script>alert('This product already exists'); window.location.href='admin_html.php';</script>";
            } else {
                $add = "INSERT INTO products (id_p, name, description, price, brand, category, image)
                VALUES ('$id','$name','$descr','$price','$brand','$category','$imageName')";
                mysqli_query($conn, $add);
                header("Location: admin_html.php");
                exit();
            }
        }

        //  UPDATE 
        if ($action == "update") {
            $updateImage = "";
            if (!empty($imageName)) {
                $updateImage = ", image='$imageName'";
            }

            $update = "UPDATE products SET
                name='$name',
                description='$descr',
                price='$price',
                brand='$brand',
                category='$category'
                $updateImage
                where id_p='$id'";

            mysqli_query($conn, $update);
            header("Location: admin_html.php");
            exit();
        }

        if ($action == "delete") {
            $del = "DELETE FROM products WHERE id_p='$id'";
            mysqli_query($conn, $del);
            header("Location: dashbord_html.php");
            exit();
        }
        
    }

    mysqli_close($conn);
?>
