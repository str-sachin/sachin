<?php
//include('header.php');
session_start(); 
include('helper.php');
$obj = new database();
      
      
    //signup action
	if(isset($_POST['signup']))
	{
      
	$res = $obj->insertdata($_POST, $_FILES);
	if($res['status'] == 1)
	{
	echo $res['msg'];
	header('location:admindashboard.php');
	}
	else
	{
	echo $res['msg'];
	}
	}
    
    // login action
   if (isset($_POST['login']))
    {   
 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $obj->selectdata($email,$password);
    }
    
     //product insert action
    if(isset($_POST['insert']))
	{
	$obj->insertproduct($_POST, $_FILES);
	}
    
    //product update function         
    if (isset($_POST['update']))
    {  	
    $obj->updateproduct($_POST,$_FILES);
    }

    // exit from update function
    if (isset($_POST['exit']))
    {   
    header("location:sprod.php");
    }
 
    //Add Brand Function
    if (isset($_POST['addbrand']))
    {
    $obj->insertbrand($_POST,$_FILES);
    }

?>