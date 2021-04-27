<?php
include('header.php');
if($_SESSION['email'] && $_SESSION['usertype'] == admin){ 
?>
<div class="w3-sidebar w3-light-white w3-bar-block" style="width:10%"><i style="margin-left:10px;"><br>
  <h3  style="margin-left:10px;" class="w3-bar-item">Menu</h3><br>
  <a href="admindashboard.php" class="w3-bar-item w3-button"><i class="fa fa-dashboard"  style="margin-left:10px;"> Dashboard</i></a><br><br>
  <a href="sprod.php" class="w3-bar-item w3-button"><i class="fa fa-gg" style="margin-left:10px;">Products</i>
  </a>
  </div>

<p><h1 style="margin-left:500px;" > Hello Admin</h1></p>
 <?php } else if($_SESSION['email'] && $_SESSION['usertype'] == user){ header("location:login.php"); session_destroy();	 ?>
 <?php
 }
?>

  <?php
include('footer.php');
?>