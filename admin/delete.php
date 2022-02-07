<?php

include "../connection.php"; 
session_start();
if(count($_SESSION) == 0){
    header("location:login.php");	
}


if(isset($_GET) AND count($_GET)>0)
{
    $id = $_GET['id'];
    $sql = "DELETE FROM table_products WHERE product_id=$id";
    if(mysqli_query($conn,$sql)){
        header("location:products.php");
    }
    else
    {
        header("location:products.php");
    }
}
?>