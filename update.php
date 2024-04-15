<?php
    include 'config.php';
    if(isset($_POST['submit']))
    {
        $uid = $_POST['uid'];
        $fn = $_POST['nm'];
        $em = $_POST['em'];
        $ps = $_POST['psw'];
        $ph = $_POST['phone'];
        $ad = $_POST['add'];

        $sql = "UPDATE register SET name='$fn', email='$em', password='$ps', phone='$ph', address= '$ad' WHERE id='$uid'";
        $result = mysqli_query($neha, $sql);
        if($result == TRUE)
        { ?>
            <script>
                alert("Your Record Updated Successfully");
                window.location.href='view.php';
            </script>
        <?php }
    }
    if(isset($_GET['id']))
    {
        $uid = $_GET['id'];
        $sql = "SELECT * FROM register WHERE id='$uid'";
        $result = mysqli_query($neha, $sql);
        if(mysqli_num_rows($result))
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $kananisid = $row['id'];
                $kananisname = $row['name'];
                $kananisemail = $row['email'];
                $kananispsw = $row['password'];
                $kananisphone = $row['phone'];
                $kananisadd = $row['address'];
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Form</h1>
    <form method="POST">
    <input type="hidden" name="uid" value="<?php echo $kananisid; ?>">
    Name: <input type="text" name="nm" value="<?php echo $kananisname; ?>"><br><br>
    Email: <input type="email" name="em" value="<?php echo $kananisemail; ?>"><br><br>
    Password: <input type="password" name="psw" value="<?php echo $kananispsw ?>"><br><br>
    Phone No: <input type="text" name="phone" value="<?php echo $kananisphone ?>"><br><br>
    Address: <input type="text" name="add" value="<?php echo $kananisadd ?>"><br><br>
    <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>