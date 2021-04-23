<head>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
</head>

<?php
include('header.php');
$conn = mysqli_connect("localhost","root","redhat","Sachin");
$sql = "SELECT * FROM product";
$result = mysqli_query($conn,$sql);
?>
<body>
     <?php if($_SESSION['email'] && $_SESSION['usertype'] == admin){ ?>
<br>
<div class="container">
<table id ="example">
<tr>
<th>image</th>
<th>Product Name</th>
<th>SKU</th>
<th>Description</th>
<th>Catagory</th>
<th>Brand</th> 
<th>Insert/Update Product</th>


 </tr>

<?php
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_array($result))
	{
		?>
	<tr>
		<td><?php echo "<img src='image/$row[image]' width='200px' height='150px'>"?>	</td>
		<td><?php echo $row['product_name'];?></td>
		<td><?php echo $row['sku'];?></td>
		<td><?php echo $row['description'];?></td>
        <td><?php echo $row['category_id'];?></td>
        <td><?php echo $row['brand_id'];?></td>
        <td><a href ="insertproduct.php">Add/<a href ="updateproduct.php">Update</a></a></td>
        
    </tr>
    <?php
      }
    }
    ?>
</table>
</div>
  <?php } else if($_SESSION['email'] && $_SESSION['usertype'] == user){ ?>
<div class="container">
<table id ="example">
<tr>
<th>image</th>
<th>Product Name</th>
<th>SKU</th>
<th>Description</th>
<th>Catagory</th>
<th>Brand</th> 
<th>Buy</th>
<th>Cart</th> 
 </tr>

<?php
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_array($result))
    {
        ?>
    <tr>
        <td><?php echo "<img src='image/$row[image]' width='200px' height='150px'>"?>   </td>
        <td><?php echo $row['product_name'];?></td>
        <td><?php echo $row['sku'];?></td>
        <td><?php echo $row['description'];?></td>  
        <td><?php echo $row['category_id'];?></td>
        <td><?php echo $row['brand_id'];?></td>
       <td><a href =""><input type="hidden"  style="float:center;">Buy</a></td>
        <td><a href =""><input type="hidden">Cart</a></td>
        </tr>
    <?php
     }
    }
    ?>
    <?php } ?>
</table>
</div>
<?php
include("footer.php");
?>
</body>

