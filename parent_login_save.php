<?php
include "contact_connection.php";
if(isset($_POST['semail'])){
    
    $query="INSERT INTO `loginform`(`email`, `password`) VALUES ('".$_POST['semail']."','".$_POST['spassword']."')";
    $row=mysqli_query($conn, $query);
    if($row){
        header ("location:index.php");
    }
    else{
        echo "error";
    }
}
?>