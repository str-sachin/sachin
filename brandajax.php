<?php
$con = mysqli_connect("localhost","root","redhat","Sachin");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if($_POST['id']){
	$id=$_POST['id'];
	if($id==0){
	 echo "<option>Select Brand</option>";
	}else{
	 $sql = mysqli_query($con,"SELECT * FROM brand WHERE category_id='$id'");
	 while($row = mysqli_fetch_array($sql)){
	 // echo '<option value="'.$row['id'].'">'.$row['brand_name'].'</option>';
	 echo '<option value="'.$row['id'].'">'.$row['brand_name'].'</option>';
	 }
	 }
}
?>