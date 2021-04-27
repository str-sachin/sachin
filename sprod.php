<?php 
include('header.php');

$database = new database();
$conn = mysqli_connect("localhost","root","redhat","Sachin");
$sql = "SELECT * FROM product";
$result = mysqli_query($conn,$sql);
?>

<?php if($_SESSION['email'] && $_SESSION['usertype'] == admin){ ?>
<br>
<div class="container">
  <div class="table-responsive">
  <table id ="example" class="table table-bordered">
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
$datas = array(0);

if(mysqli_num_rows($result) == TRUE)
{
	while($row = mysqli_fetch_array($result))
	{               
      $id = $row[0];                   
	    $datas[0] = $row;
      foreach($datas as $data):           
      ?>
<tr>
	<td><?php echo "<img src='image/$data[image]' width='150px' height='150px'>"?>	</td>
	<td><?php echo $data['product_name'];?></td>
	<td><?php echo $data['sku'];?></td>
	<td><?php echo $data['description'];?></td>
  <td><?php echo $database->GetCategoryById($data['category_id']);?></td>
  <td><?php echo $database->GetBrandById($data['bid']);?></td>
  <td><a href ="insertproduct.php">Add/<a href="updateproduct.php?id=<?php echo $data['id'];?>" >Update</a></a></td>
</tr>

   <?php endforeach;
      }
    }
    ?>
</table>
</div>
</div>
  <?php } else if($_SESSION['email'] && $_SESSION['usertype'] == user){ ?>
<div class="container">
  <div class="table-responsive">
  <table id ="example" class="table table-bordered">
<tr>
<th>image</th>
<th>Product Name</th>
<th>SKU</th>
<th>Description</th>
<th>Catagory</th>
<th>Brand</th> 
<th>Buy</th>
<th>Add To Cart</th>

</tr>

<?php
$datas = array(0);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_array($result))
    {
                      
      $id = $row[0];                   
      $datas[0] = $row;
      foreach($datas as $data):    
        ?>
    <tr>
        <td><?php echo "<img src='image/$data[image]' width='150px' height='150px'>"?>   </td>
        <td><?php echo $data['product_name'];?></td>
        <td><?php echo $data['sku'];?></td>
        <td><?php echo $data['description'];?></td>  
        <td><?php echo $database->GetCategoryById($data['category_id']);?></td>
        <td><?php echo $database->GetBrandById($data['bid']);?></td>
        <td><a href =""><input type="hidden"  style="float:center;">Buy</a></td>
        <td><a href="demo.php?id=<?php echo $data['id'];?>"><input type="hidden"  style="float:center;">Cart</a></td>
    </tr>
    <?php endforeach;
     }
    }
    ?>
    <?php } ?>
</table>
</div>
</div>
<?php
include("footer.php");
?>

