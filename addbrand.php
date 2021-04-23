<?php
 include('header.php');
    if($_SESSION['email'] && $_SESSION['usertype'] == admin) { ?>
<br>

<div class = "container">
	  <form method="POST" action="function.php" enctype="multipart/form-data" autocomplete="off">
 <div class="form-group">
  <div class="row">
   <div class="col">
    <label>Brand Name </label>   
     <input type="text" name="name" class="form-control" placeholder="Enter Brand Name" required>
   </div>
  </div>
<br>

 <div class = "row">
  <div class="col ">
   <label>Brand Image</label>   
    <input type="File" name="image" class="form-control" placeholder="" required>
  </div>
 </div>
<br>

 <div class = "row">
  <div class = "col">
   <label>Category:</label>
    <select name="category" id="category" class="form-control" required>
     <option>
      Select Category
     </option>
     <?php
      include('selectcategory.php');
     ?>
    </select>
  </div>
 </div>

<br>
  <div>
   <input type="submit"  name = "addbrand" class="btn" Value = "Add Brand">
  </div>
 </div>
</form>
</div>
<?php
 }
  else if($_SESSION['email'] && $_SESSION['usertype']==user) { 
  header("location:login.php");
  
  session_destroy(); ?>
<?php
}
?>
<?php
include('footer.php');
?>
