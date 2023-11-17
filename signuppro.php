<?php
    include("connect.php");
    if(isset($_POST['submit']))
    {
        $unm=$_POST['unm'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
        $cno=$_POST['cno'];

        $q = mysqli_query($cn,"select * from signup where unm='$unm' and pass='$pass'");

        if(mysqli_num_rows($q)!=0)
        {
            echo "<script>alert('User Already Exist..')</script>";
            echo "<script>window.location='signup.php'</script>";
        }
        else
        {
            $q=mysqli_query($cn,"INSERT INTO `signup` (`id`, `unm`, `pass`, `email`, `cno`, `utype`) VALUES ('', '$unm', '$pass', '$email', '$cno', 'user');");
            echo "<script>alert('Register Succesfully..')</script>";
            echo "<script>window.location='user/home.php'</script>";
        }
    }
    else
    {
        echo " ";
    }
    
?>