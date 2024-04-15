<?php
include 'config.php';
$nehas=$_POST['em'];
$tanvis=$_POST['psw'];
$sql="SELECT * FROM register WHERE email='$nehas' AND password='$tanvis'";
$result=mysqli_query($neha,$sql);
$count=mysqli_num_rows($result);
if($count == 1)
{
    header('location:view.php');
}
else
{
?>
    <script>
        alert(wrong email or password);
        window.location.href="index.php";
    </script>
<?php   
}
?>