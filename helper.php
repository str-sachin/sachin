<?php
class database
{
    var $servername = "localhost";
    var $username = "root";
    var $pass = "redhat";
    var $dbname = "Sachin";

    // connectivity
    function connection()
    {
        $con = mysqli_connect(
         $this->servername,
         $this->username,
         $this->pass,
         $this->dbname
        );
        return $con;
    }

    // sign up function
    function insertdata($post_data, $file_data)
    {
        $conn = $this->connection();
        $fname = $post_data['fname'];
        $lname = $post_data['lname'];

        $orgname = $file_data['image']['name'];
        $tempname = $file_data['image']['tmp_name'];
        $path = "image/" . $orgname;
        move_uploaded_file($tempname, $path);

        $email = $post_data['email'];
        $password = $post_data['password'];
        $gender = $post_data['gender'];
        $country = $post_data['country'];
        $state = $post_data['state'];
        $city = $post_data['city'];
        $address = $post_data['address'];

        $qry = "INSERT INTO task VALUES('$fname','$lname','$orgname','$email','$password','$gender','$country','$state','$city','$address','user')";
        $return = mysqli_query($conn, $qry);
        if ($return == 1) {
            return ['status' => 1, 'msg' => "Welcome"];
        } else {
            return ['status' => 0, 'msg' => "already registered email address"];
        }
    }
   
     // login function
    function selectdata($email, $password)
    {
        $conn = $this->connection();
        // $email = $_POST['email'];
        // $password = $_POST['password'];

        $qry = "SELECT * FROM task WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $qry);
        $count = mysqli_affected_rows($conn);
        $data = mysqli_fetch_array($result);
        $usertype = $data[10];
        mysqli_close($conn);

        if ($count == 1)
         {
         $_SESSION['email'] = $email;
         $_SESSION['usertype'] = $usertype;
         if ($usertype == admin)
          {
           echo "Welcome Admin";
           header('location:admindashboard.php');
          } 
         else if($usertype == user)
          {
           echo "Welcome";
           header('location:userdashboard.php');

          }
          }
         else
          {
            echo '<script>alert("invalid email or password")</script>';
          }
    }

     //insert product function
    function insertproduct($post_data, $file_data)
    {
        $conn = $this->connection();

        $name = $post_data['name'];
        $sku = $post_data['sku'];
        $category = $post_data['category'];
        $brand = $post_data['brand'];

        $orgname = $file_data['image']['name'];
        $tempname = $file_data['image']['tmp_name'];
        $path = "image/" . $orgname;
        move_uploaded_file($tempname, $path);

        $description = $post_data['description'];

        $qry = "INSERT INTO product(product_name,category,brand,image,sku,description) VALUES('$name','$category','$brand','$orgname','$sku','$description')";
        mysqli_query($conn, $qry);
        $count = mysqli_affected_rows($conn);
        mysqli_close($conn);

        if ($count == 1) {
             echo '<script>alert("Product Added Successfully")</script>';
            include("showproduct.php");
        } else {
            echo '<script>alert("error")</script>';
            include('showproduct.php');
        }
    }

     // update product
    function updateproduct($post_data, $file_data)
    {
        $conn = $this->connection();

        $product_id = $post_data['product_id'];
        $name = $post_data['name'];
        $category = $post_data['category'];
        $brand = $post_data['brand'];

        $orgname = $file_data['image']['name'];
        $tempname = $file_data['image']['tmp_name'];
        $path = "image/" . $orgname;
        move_uploaded_file($tempname, $path);

        $sku = $post_data['sku'];
        $description = $post_data['description'];

        $qry = "UPDATE product SET product_name = '$name', category_id = '$category', brand_id = '$brand',  image='$orgname', sku = '$sku', description = '$description' where id='$product_id'";
    
        $ress = mysqli_query($conn, $qry) or die("error" . mysqli_query_error($conn));     
        $row = mysqli_fetch_assoc($ress);      
        $count = mysqli_affected_rows($conn);
        mysqli_close($conn);

        if ($count == 1)
         {
           echo '<script>alert("Updated Successfully")</script>';
           include('showproduct.php');
         } 
        else if($row == $data)
         { 
           echo '<script>alert("data remains same")</script>';
           include('updateproduct.php');     
         }
        else
         {
           echo '<script>alert("Problem Occurs")</script>';
           include('showproduct.php');
         }
    }
   
     //insert brand
    function insertbrand($post_data, $file_data)
    {
        $conn = $this->connection();
        $name = $post_data['name'];
        
        $orgname = $file_data['image']['name'];
        $tempname = $file_data['image']['tmp_name'];
        $path = "image/" . $orgname;
        move_uploaded_file($tempname, $path);

        $category = $post_data['category'];      

        $qry = "INSERT INTO brand(brand_name,image,category_id) VALUES('$name','$orgname','$category')";
        mysqli_query($conn, $qry);
        $count = mysqli_affected_rows($conn);
        mysqli_close($conn);

        if ($count == 1) {
            echo "data added successfully";
            header("location:showbrand.php");
        } else {
            echo "error";
        }
    }
     
    // get category by id
    // function GetCategoryById()
    // {
    //   $conn = $this->connection();
    //   $id = $_POST['id']; 
    //   $sql = mysqli_query($con," SELECT * FROM catagories");
    //   while($row=mysqli_fetch_array($sql)) 
    //   echo '<i value="'.$row['id'].'">'.$row['category_name'].'</i>';
    //    } 
    // }
    //    
}
?>