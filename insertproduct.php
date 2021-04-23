<?php
   include('header.php');
    if($_SESSION['email'] && $_SESSION['usertype'] == admin) { ?>
<div class="row justify-content-center">
   <div class="col-md-6">
      <div class="card">
         <div class="card-body">
            <form method="POST" action="function.php" enctype="multipart/form-data" autocomplete="off">
               <input type="hidden" name="id">
               
               <div class="form-row">
                  <div class="col form-group">
                     <label>Product Name </label>   
                     <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                  </div>
               
                  <div class="col form-group">
                     <label>SKU</label>
                     <input type="text" name="sku" class="form-control" placeholder="Enter Sku " required>
                  </div>
               </div>
               
               <div class="form-row">
                  <div class="col form-group">
                     <label>Category:</label>
                     <select name="category" id="category" class="form-control" required>
                        <option>Select Category</option>
                        <?php
                           include('selectcategory.php');
                           ?>
                     </select> 
                     <br>
                  </div>
                 
                  <div class="col form-group">
                     <label>Brand:</label>
                     <select name="brand" id="brand" class="form-control" required>
                        <option>Select Brand</option>
                     </select>
                  </div>
               </div>
               
               <div class="form-row">
                  <div class="col form-group">
                     <label>Image </label>   
                     <input type="file" name="image" class="form-control" placeholder="" required>
                  </div>
               </div>
               
               <div class="form-group">
                  <label>Description</label>
                  <input type="text" class="form-control" name ="description"  placeholder="Enter Description" required>
               </div>
               
               <div class="form-group">
                  <button type="insert" name="insert" class="btn btn-primary btn-block" >Insert</button> <!-- ONCLICK="alert('Data Inserted Successfully!')" -->
               </div>
            </form>
         </div>
      </div>
   </div>
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
   include ('footer.php');
?>