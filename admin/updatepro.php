<?php

        include('connect.php');

        $id = $_POST['id'];
      
        $img = $_FILES['img']['name'];
        $pnm = $_POST['pnm'];
        $price = $_POST['price'];
   
      
       
	move_uploaded_file($_FILES['img']['tmp_name'],"images/".$_FILES['img']['name']);
      
    
        $q = mysqli_query($cn,"update product SET img='$img',pnm='$pnm',price='$price' WHERE id='$id'");
        echo "<script>alert('Product Update Successfully...')</script>";
        echo "<script>window.location='product.php'</script>";
    
    
    ?>