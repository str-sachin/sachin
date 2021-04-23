<!DOCTYPE html>
<html>
	<head>		
		<script src="jquery.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" 
		crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" 
        crossorigin="anonymous"></script>
	</head>
	<?php 
	include('header.php');
	?>
	
	<body>
		
		<br/>
		<div class="container">
		
		<h3 align="center">Brands </h3><br/>
		<br/><br/>
		<?php
			
		$connect = mysqli_connect("localhost", "root", "redhat", "Sachin");
	     

		$query = "SELECT * FROM brand ORDER BY id ";
		$result = mysqli_query($connect, $query);
		if(mysqli_num_rows($result) > 0)
		{
		while($row = mysqli_fetch_array($result))
		 {
		?>
         <div class="row float-left">

         <input type="hidden" name="category_id">
		    <div style="border:1px solid black; margin-left:70px; margin-bottom:30px;  float:left; background-color:gradient; border-radius:1px; margin-top:10px; padding:16px;" >
         <a href="showproduct.php?id=<?php echo $row['brand_id'];?>"><img src="images/<?php echo $row["image"]; ?>" class="responsive-image" height="150px" width="210px"></a>
  

</div>
		      </form>
		    </div>
			<?php
		}
	}
		?>
            </body>              
            </html>

