<?php
    session_start();

    $unm =$_POST['unm'];
    $pass=$_POST['pass'];

    include("connect.php");

    $q=mysqli_query($cn,"select * from signup where unm='$unm'");
    $r=mysqli_fetch_array($q);

    if($r[1]==$unm && $r[2]==$pass && $r[5]=='user')
    {
        $_SESSION['user']=$_POST['unm'];
        echo "<script>document.location='user/index.php'</script>";
    }
    elseif($r[1]==$unm && $r[2]==$pass && $r[5]=='admin')
    {
        $_SESSION['admin']=$_POST['unm'];
        echo "<script>document.location='admin/index.php'</script>";
    }
    else
    {
        echo"<script>alert('Sorry User Not Exist...')</script>";
        echo"<script>document.location='index.php'</script>";
    }
?>