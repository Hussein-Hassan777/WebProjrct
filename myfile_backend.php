<?php
$host = 'localhost:3307';
$user = 'root';
$pass = '';
$db = 'test';

$conn = mysqli_connect($host, $user, $pass, $db);
$query = "select * from emp";
$result = mysqli_query($conn, $query);
?>