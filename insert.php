<?php
include "config.php";
if(isset($_POST['submit']))
{
    $name=$_POST['nm'];
    $email=$_POST['em'];
    $pass=$_POST['psw'];
    $call=$_POST['phone'];
    $address=$_POST['add'];
    $sql="INSERT INTO register (name,email,password,phone,address) VALUES ('$name','$email','$pass','$call','$address')";
    $result=mysqli_query($neha,$sql);
    if($result == TRUE)
    {
        header('location:index.php');
    }
    else
    {
        echo "not inserted";
    }
}
?>