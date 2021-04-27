<?php
   include('header.php');
   ?>
<div class="row justify-content-center">
   <div class="col-md-6">
      <div class="card">
         <h4 style="text-align:center;" class="card-title mt-2">Sign up</h4>
         <div class="card-body">
            <form method="POST" action="function.php" enctype="multipart/form-data" autocomplete="off">
               <div class="form-row">
                  <div class="col form-group">
                     <label>First name </label>   
                     <input type="text" name="fname" class="form-control" placeholder="Enter FirstName" required>
                  </div>
                  <div class="col form-group">
                     <label>Last name</label>
                     <input type="text" name="lname" class="form-control" placeholder="Enter LastName " required>
                  </div>
               </div>
               <div class="form-row">
                  <div class="col form-group">
                     <label>Image </label>   
                     <input type="file" name="image" class="form-control" placeholder="" required>
                  </div>
               </div>
               <div class="form-group">
                  <label>Email address:</label>
                  <input type="email" class="form-control" name ="email" autocomplete="false" placeholder="Enter Email" required>
                  <small class="form-text text-muted">We'll never share your email with anyone else.</small>
               </div>
               <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" name="password" autocomplete="false" placeholder="Enter Password" type="password" required>
               </div>
               <div class="form-group">
                  <label>Gender:</label>
                  <label class="form-check form-check-inline">
                  <input class="form-check-input" style="margin-left:20px;" type="radio" name="gender" value="Male">
                  <span class="form-check-label"> Male </span>
                  </label>
                  <label class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" value="Female">
                  <span class="form-check-label"> Female</span>
                  </label>
                  <label class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" value="Other">
                  <span class="form-check-label"> Other</span>
                  </label>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-4">
                     <label>Country:</label>
                     <input type="text" class="form-control" name="country" value="" placeholder="Enter Country">
                  </div>
                  <div class="form-group col-md-4">
                     <label>State :</label>
                     <input type="text" class="form-control" name="state" value="" placeholder="Enter State">
                  </div>
                  <div class="form-group col-md-4">
                     <label>City :</label>
                     <input type="text" class="form-control" name="city" value="" placeholder="Enter City">
                  </div>
               </div>
               <div class="form-group">
                  <label>Address</label>
                  <input class="form-control" placeholder="Enter Address" name="address" type="text" required>
               </div>
               <div class="form-group">
                  <button type="submit" name="signup" class="btn btn-primary btn-block"> Register  </button>
               </div>
               <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                            
            </form>
         </div>
         <div class="border-top card-body text-center ">Have an account? <a href="login.php">Log In</a></div>
      </div>
   </div>
</div>
<footer>
   <?php
      include('footer.php');
      ?>
</footer>