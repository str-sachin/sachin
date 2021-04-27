<?php
session_start();

include('helper.php');
?>
<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- <script src="js/jquery.min.js"></script> -->
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
      <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
      <!-- <script src="jquery.min.js"></script> -->
      <!-- <link rel="stylesheet" href="css/bootstrap.css"/> -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" 
      crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" 
      crossorigin="anonymous"></script>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
       <!-- <link href="css/style.css" rel="stylesheet"> -->
      <link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/>
      <link rel="stylesheet" href="style.css"/>
      <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- <link rel="stylesheet" hr<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>ef="https://www.w3schools.com/w3css/4/w3.css"> -->
   </head>
   </head>
   <body>
      <?php
         if($_SESSION['email'] && $_SESSION['usertype'] == admin){ ?>
      <nav class="main_nav">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="main_nav_content d-flex flex-row">
                     <div class="main_nav_menu">
                        <ul class="standard_dropdown main_nav_dropdown">
                          <li><a href="admindashboard.php">Home<i class="fas fa-chevron-down"></i></a></li>
                           <li class="hassubs">
                             <a href="">Category<i class="fas fa-chevron-down"></i></a>
                           <ul>
                           <li>
                            <?php
                            $connect = mysqli_connect("localhost", "root", "redhat", "Sachin");
                            $id = $_GET['id'];
                            $query = "SELECT * FROM categories WHERE id = 1 ";
                            $result = mysqli_query($connect, $query);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) { ?> 
                                <a href="showbrand.php?id=<?php echo $row['id']; ?>">Mobile<i class="fas fa-chevron-down"></i></a>
                            <?php }
                            }
                            ?>                           
                            </li>
                            
                            <li>
                            <?php
                            $connect = mysqli_connect("localhost", "root", "redhat", "Sachin");
                            $id = $_GET['id'];
                            $query = "SELECT * FROM categories WHERE id = 2 ";
                            $result = mysqli_query($connect, $query);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) { ?> 
                                <a href="showbrand.php?id=<?php echo $row['id']; ?>">laptops<i class="fas fa-chevron-down"></i></a>
                            <?php }
                            }
                            ?>                           
                            </li>                 
                                 
                            <li>
                            <?php
                            $connect = mysqli_connect("localhost", "root", "redhat", "Sachin");
                            $id = $_GET['id'];
                            $query = "SELECT * FROM categories WHERE id = 3 ";
                            $result = mysqli_query($connect, $query);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) { ?> 
                                <a href="showbrand.php?id=<?php echo $row['id']; ?>">Fashion<i class="fas fa-chevron-down"></i></a>
                            <?php }
                            }
                            ?>                           
                            </li>
                           
                           </ul>
                           
                           <li>
                              <a href = "addbrand.php">Add Brand<i class = "fas fa-chevron-down"></i></a>
                           </li>

                           <li>
                              <a href = "insertproduct.php">Add Product<i class = "fas fa-chevron-down"></i></a>
                           </li>
                           <li>
                              <a href = "sprod.php">Show Product<i class = "fas fa-chevron-down"></i></a>
                           </li>
                           <li>
                            <a href ="" style="margin-left: 405px;"> <?php echo $_SESSION['email']; ?><i class = "fas fa-chevron-down">
                           </i></a>
                           </li>
                           
                           <a href ="logout.php">Logout</a>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </nav>
      <?php } else if($_SESSION['email'] && $_SESSION['usertype'] == user){ ?>
      <nav class="main_nav">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="main_nav_content d-flex flex-row">
                     <div class="main_nav_menu">
                        <ul class="standard_dropdown main_nav_dropdown">
                           <li><a href="userdashboard.php">Home<i class="fas fa-chevron-down"></i></a></li>
                           <li class="hassubs">
                              <a href="">Category<i class="fas fa-chevron-down"></i></a>
                              <ul>
                            <li>
                            <?php
                            $connect = mysqli_connect("localhost", "root", "redhat", "Sachin");
                            $id = $_GET['id'];
                            $query = "SELECT * FROM categories where id = 1 ";
                            $result = mysqli_query($connect, $query);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) { ?> 
                                <a href="showbrand.php?id=<?php echo $row['id']; ?>">Mobile<i class="fas fa-chevron-down"></i></a>
                            <?php }
                            }
                            ?>                           
                            </li>
                            
                            <li>
                            <?php
                            $connect = mysqli_connect("localhost", "root", "redhat", "Sachin");
                            $id = $_GET['id'];
                            $query = "SELECT * FROM categories where id = 2 ";
                            $result = mysqli_query($connect, $query);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) { ?> 
                                <a href="showbrand.php?id=<?php echo $row['id']; ?>">laptops<i class="fas fa-chevron-down"></i></a>
                            <?php }
                            }
                            ?>                           
                            </li>                 
                                 
                            <li>
                            <?php
                            $connect = mysqli_connect("localhost", "root", "redhat", "Sachin");
                            $id = $_GET['id'];
                            $query = "SELECT * FROM categories where id = 3 ";
                            $result = mysqli_query($connect, $query);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) { ?> 
                                <a href="showbrand.php?id=<?php echo $row['id']; ?>">Fashion<i class="fas fa-chevron-down"></i></a>
                            <?php }
                            }
                            ?>                           
                            </li>
                              </ul>
                           </li>
                           
                           <li>
                              <a href = "sprod.php">Show Product<i class = "fas fa-chevron-down"></i></a>
                           </li>
                         <li>
                              <a href ="#">Cart<i class="fa fa-chevron-down"></i><i style="font-size:20px"> Cart</i></i>
                         </li>
                           <li>
                              <a href ="" style="margin-left: 500px;"> <?php echo $_SESSION['email']; ?><i class = "fas fa-chevron-down"> </i></a>
                              
                              <li>
                                <a href="logout.php">Logout</a>
                           </li>
                           </li>
                           
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </nav>
      <?php } else if(!$_SESSION['email']){ ?>
      <nav class="main_nav">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="main_nav_content d-flex flex-row">
                     <div class="main_nav_menu">
                        <ul class="standard_dropdown main_nav_dropdown">
                           <li>
                              <a href="login.php">Login<i class="fas fa-chevron-down"></i></a>
                           </li>
                           <li>
                              <a href="signup.php">Register<i class="fas fa-chevron-down"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </nav>
      <?php }
         ?>