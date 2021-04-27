<?php
session_start();
$connect = mysqli_connect("localhost","root","redhat","Sachin");
include('header.php');
?>
	<br>
	<div class = "container" style="width:700px;">
		<h3 align="center"> Shopping Cart</h3><br>
		<?php
		$qry = "SELECT * FROM product ORDER BY id ASC";
		$result = mysqli_query($connect, $qry);
		if(mysqli_num_rows($result) > 0)
		{
		 while($row = mysqli_fetch_array($result))
		 {
?>
<div class="col-md-4">
	<form method="POST" action="index.php?action=add&id=<?php echo $row['id']; ?>" >
		<div class="box">
	 <!-- div style ="border:1px solid black; background-color:white; border-radius:5px; padding:1px;"> -->
		<img height="300px;" src="image/<?php echo $row["image"];?>" class="img-responsive" ><br>
		<h4 class="text-info"> Name:-<?php echo $row['product_name']; ?></h4>
		<h4 class="text-info"><?php echo $row['category_id']; ?></h4>
		<h4 class="text-info"><?php echo $row['bid']; ?></h4>
		<h4 class="text-info"><?php echo $row['sku']; ?></h4>
		<h4 class="text-info"><?php echo $row['description']; ?></h4>
		<h4 class="text-info"><?php echo $row['price']; ?></h4>
		<input type="text" name="quantity" class="forn-control" value="1">
		<input type="hidden" name="hidden_name" value="<?php echo $row['product_name'];?>">
		<input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>">
		<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="add to Cart">
      </div>		
</form>
</div>
</div>
<?php
}
}
?>

<?php 
include('footer.php');
?>