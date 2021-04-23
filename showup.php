<?php
include('header.php');	
$conn = mysqli_connect("localhost","root","redhat","Sachin");

// $id = $_GET['id'];
$query ="SELECT * FROM product";

$result = mysqli_query($conn,$query) or die("error".mysqli_query_error($conn));
$data = mysqli_fetch_assoc($result);
?>