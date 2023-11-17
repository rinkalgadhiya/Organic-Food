<?php
    include("connect.php");

    $email=$_POST['email'];
    $cno =$_POST['cno'];

    $q = mysqli_query($cn,"select * from signup where email='$email' and cno='$cno'");
    $r = mysqli_fetch_array($q);
    
    if($r[3]==$email && $r[4]==$cno)
    {
        echo "<script>alert('Password is ::$r[2]')</script>";
        echo "<script>window.location='login.php'</script>";
    }
    else
    {
        echo "<script>alert('Enter Valid Information')</script>";
        echo "<script>window.location='forget.php'</script>";
    }
?>