<?php
error_reporting(0);
include('header.php');
$conn = mysqli_connect("localhost","root","redhat","Sachin");
$product_id = $_GET['id'];
$sql = "SELECT * FROM product WHERE id =".$product_id;
$result = mysqli_query($conn,$sql);
$datas = array(0);
if(mysqli_num_rows($result) == TRUE)
 {
while($row = mysqli_fetch_array($result))
  {   
   $id = $row[0];                   
   $datas[0] = $row;
   foreach($datas as $data):           
?>

<?php if($_SESSION['email'] && $_SESSION['usertype'] == admin){ ?>

<div class="container">
	<form method = "POST" action = "function.php" enctype="multipart/form-data">

		<input type="hidden" name="id" value="<?php echo $data['id']; ?>">

		<input type="text" name="name" value="<?php echo $data['product_name']; ?>" placeholder="Enter Product Name" ><br><br>

		<input type="text" name="category" value="<?php echo $data['category_id']; ?>" placeholder="Enter category" ><br><br>

		<input type="text" name="brand" value="<?php echo $data['bid']; ?>" placeholder="Enter Brand" ><br><br>

        <?php echo "<img src='image/$data[image]' width='150px' height='150px'>"?>
        <div class="overlay">
        <input type="file" name="image" style="margin-left:15px;" value="<?php echo $data['image']; ?>" placeholder="Enter Last Name" ><br><br>
        </div>
 		

		<input type="text" name="sku" value="<?php echo $data['sku'];?>" Placeholder="" required ><br><br>

		<input type="text" name="description" value="<?php echo $data['description']; ?>" placeholder="Enter Email" ><br><br>

		<button name="update" value="submit">update</button> 

		<button name="exit" value="submit" style="margin-left:70px;">Exit</button>
		
	<?php } else if($_SESSION['email'] && $_SESSION['usertype'] == user)
	{ 
	header("Location:login.php"); 
	session_destroy();
	?>
 </form>
 </div>
<?php
}
?>

<?php endforeach;
 }
  }
?>

<?php
include('footer.php');
?>