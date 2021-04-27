<?php
include('header.php');
if($_SESSION['email'] && $_SESSION['usertype'] == user){ 
?>

<p>
<p><h1 style="margin-left:500px; margin-top:200px;" > Hello User</h1></p>
</p>
 <?php } else if($_SESSION['email'] && $_SESSION['usertype'] == admin){ header("location:login.php"); session_destroy();	 ?>
 <?php
 }
?>
<?php
include('footer.php');
?>