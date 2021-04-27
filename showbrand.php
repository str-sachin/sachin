<?php 
 include('header.php');
?>
<br>
  <h3 align="center">Brands </h3><br/>
  <br><br>

<?php
 error_reporting(0);
 $connect = mysqli_connect("localhost", "root", "redhat", "Sachin"); 
 $category_id = $_GET['id'];
 $query = "SELECT * FROM brand where category_id=".$category_id;
 $result = mysqli_query($connect, $query);
 $datas = array(0);
 if(mysqli_num_rows($result) > 0)
  { 
 while($row = mysqli_fetch_array($result))
  {
    $id = $row[0];                   
    $datas[0] = $row;
    foreach($datas as $data):           
?>
<div class="container">
<div class="row float-left">
  <div style="border:2px solid black; margin-left:70px; margin-bottom:30px;  float:left; background-color:gradient; border-radius:1px; margin-top:10px; padding:16px;" >
  <a href="showproduct.php?bid=<?php echo $data['bid'];?>"><img src="images/<?php echo $row["image"]; ?>" class="responsive-image" height="150px" width="210px"></a>
  <h4 style="text-align:center; color:black "><br><?php echo $row['brand_name'];?></h4>
</div>
 </div>
</div>
<?php endforeach;
 }
  }
?>

<?php 
include('footer.php');
?>