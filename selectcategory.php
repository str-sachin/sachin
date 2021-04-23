<?php
$con = mysqli_connect("localhost","root","redhat","Sachin");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $sql = mysqli_query($con," SELECT * FROM catagories");

while($row=mysqli_fetch_array($sql))
{
	// $id = $_POST['id'];
 echo '<option value="'.$row['id'].'">'.$row['category_name'].'</option>';
  
} 
?>