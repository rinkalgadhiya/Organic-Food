<?php include("header.php"); ?>
<html>
    <head>
        <title>CART</title>
    </head>
    <body>
        <style type="text/css">
            .tbl
            {
                padding: 30px 100px 30px 100px;
                display: grid;
                background-color: cornsilk;
            }

            .name
            {
                padding-left: 50px;
                padding-right: 50px;
            }

            .price
            {
                padding-left: 50px;
                padding-right: 50px;
            }

            .a
            {
                text-decoration: none;
                color: steelblue;
                padding: 10px 80px 10px 80px;
                background-color:none;
                border: 1px solid coral;
                margin-left: 150px;
                margin-right: 50px;
                border-radius: 5px;

            }
             .btn2
            {
                text-decoration: none;
                padding: 10px 80px 10px 80px;
                background-color:none;
                border: 1px solid coral;
                border-radius: 5px;
            }
        </style>
    </body>
</html><br><br><br>

<?php
    include("connect.php");

    $unm = $_SESSION['user'];

    if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
     
        $p=mysqli_query($cn,"select * from product where id='$id'");

        while($rec=mysqli_fetch_array($p))
        {
            $q = mysqli_query($cn,"insert into cart(unm,img,pnm,price,stat)values('$unm','$rec[1]','$rec[2]','$rec[3]','pending')");
        }
    }
    $q3 = mysqli_query($cn,"select * from cart where unm='$unm'");

    
    while($r=mysqli_fetch_array($q3))
    {
        echo "<table class='tbl'>";
		
        echo "<tr><th><tr>";
        
        echo "<br><tr><th><img src='../images/".$r[2]."' height=100 width=100></th>";

        echo "<th class='name'>".$r[3]."</th>";
        echo "<th class='price'>".$r[4]."</th>
      
       
        <th><a href='cdel.php?id=".$r[0]."' class='a'>DELETE</a></th>
        <th><a href='checkout.php' class='btn2'>CONFIRM</a></th>
        
        </tr>";
           
    }
?>