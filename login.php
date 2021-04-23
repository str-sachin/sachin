 <?php
include('header.php');
?> 
   <div calss = "container"><br><br><br><br><br><br><br><br>
   
   <h2 style="text-align:center;">Login Form</h2> 
   <form method = "POST" action="function.php" style="max-width:500px;margin:auto">
   <div class="input-container">
   <input class="form-control" type="text" placeholder="Email" name="email">
   </div>
  
    <div class="input-container">
    <input class="form-control" type="password" placeholder="Password" name="password">
    </div>

    <button type="submit" name="login"  class="btn">Login</button>
</form>
</div>
<div class=" card-body text-center ">Dosen't Have Any Account? <a href="registration.php">Sign Up</a>
</div>
</div>
<footer>
<?php
include('footer.php');
?>
</footer>