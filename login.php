<?php

// include_once 'autoloader.php';
include('header.php'); 
// loggedInRedirect();

?> 
<form method = "POST" style="max-width:500px;margin:auto">
   <div class="input-container">
   <input class="form-control" type="text" placeholder="Email" name="email">
   </div>
  
    <div class="input-container">
    <input class="form-control" type="password" placeholder="Password" name="password">
    </div>
    <div>
    <button type="submit" name="login"  class="btn-a">Login</button>
    </div><br>
    <div class="input-container">
    <p style="margin-left: 230px;"> OR
    </div>
    <div>
    <button type="submit" name="fb"  class="btn"><a href="fbapi.php">Login With Fb</a></button>
    </div><br>
</form>
<div class="card-body text-center ">Dosen't Have Any Account? <a href="">Sign Up</a>
</div>
</html>	