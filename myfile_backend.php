<?php
$host = 'localhost:3307';
$user = 'root';
$pass = '';
$db = 'ecommerce_db';

$conn = mysqli_connect($host, $user, $pass, $db);
$query = "select * from images";
$result = mysqli_query($conn, $query);
?>