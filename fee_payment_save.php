<?php
include "contact_connection.php";
if(isset($_POST['semail'])){
    
    $query="INSERT INTO `feeform`(`Email`, `Password`, `Fee`) VALUES ('".$_POST['semail']."','".$_POST['spassword']."','".$_POST['sfee']."')";
    $row=mysqli_query($conn, $query);
    if($row){
        header ("location:index.php");
    }
    else{
        echo "error";
    }
}
?>