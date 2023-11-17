<?php
    include("connect.php");


    
    $unm = $_POST['unm'];
    $a1 = $_POST['a1'];
    $a2 = $_POST['a2'];
    $a3 = $_POST['a3'];
    $a4 = $_POST['a4'];
    $a5 = $_POST['a5'];
    $a6 = $_POST['a6'];
    $a7 = $_POST['a7'];
    $a8 = $_POST['a8'];
    $a9 = $_POST['a9'];
    $a10 = $_POST['a10'];
    $a11 = $_POST['a11'];
    $a12 = $_POST['a12'];
    $a13= $_POST['a13'];
    $a14 = $_POST['a14'];
    $a15 = $_POST['a15'];


    $q=mysqli_query($cn,"insert into response values('','$unm','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15')");

    echo "<script>window.location='index.php'</script>";		
?>