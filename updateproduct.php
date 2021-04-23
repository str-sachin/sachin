<?php
include('showup.php');
if($_SESSION['email'] && $_SESSION['usertype'] == admin){ 
?>

<div class="container">
	<form method = "POST" action = "function.php" enctype="multipart/form-data">

		<input type="hidden" name="product_id" value="<?php echo $data['id']; ?>">

		<input type="text" name="name" value="<?php echo $data['product_name']; ?>" placeholder="Enter Product Name" ><br><br>

		<input type="text" name="category" value="<?php echo $data['category_id']; ?>" placeholder="Enter category" ><br><br>

		<input type="text" name="brand" value="<?php echo $data['brand_id']; ?>" placeholder="Enter Brand" ><br><br>


		<input type="file" name="image" value="<?php echo $data['image']; ?>" placeholder="Enter Last Name" ><br><br>


		<input type="text" name="sku" value="<?php echo $data['sku'];?>" Placeholder="" required ><br><br>

		<input type="text" name="description" value="<?php echo $data['description']; ?>" placeholder="Enter Email" ><br><br>

		<button name="update" value="submit">update</button> 

		<button name="exit" value="submit" style="margin-left:70px;">Exit</button>

		<?php } else if($_SESSION['email'] && $_SESSION['usertype'] == user)
		{ 
		header("Location:login.php"); 
		session_destroy();
		?>
		  <?php
		 }
		?>
	</form>
</div>
<?php
include('footer.php');
?>