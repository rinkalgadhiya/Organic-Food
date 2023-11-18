<?php
    include("connect.php");
    include("header.php");
?>

<?php

$unm =$_SESSION['user'];
$q1 = mysqli_query($cn,"select * from cart where unm='$unm' and stat='panding'");
$s = mysqli_query($cn,"select sum(amt) as tot from cart where unm='$unm' and stat='panding'");
$t = mysqli_fetch_array($s);
$tot = $t['tot'];
$upd=mysqli_query($cn,"update cart set stat='confirm' where unm='$unm'");
?>


<script>
alert('Thank you...');
window.location='cart.php';
</script>