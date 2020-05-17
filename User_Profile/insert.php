<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $product = $_POST['product'];
     $units = $_POST['units'];
     $price = $_POST['price'];

 
     $sql = "INSERT INTO input (product ,units, price)
     VALUES ('$product','$units','$price')";
 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>