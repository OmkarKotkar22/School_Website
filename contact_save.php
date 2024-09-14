<?php
include "contact_connection.php";
if(isset($_POST['sname'])){
    // echo'<pre>';
    // print_r($_POST);

    $query="INSERT INTO `contactform`(`name`, `mobile`, `email`, `opinion`, `message`) VALUES ('".$_POST['sname']."','".$_POST['smobile']."','".$_POST['semail']."','".$_POST['sopinion']."','".$_POST['smessage']."')";
    $row=mysqli_query($conn, $query);
    if($row){
        header ("location:contact.php");
    }else{
        echo "error";
    }
}
?>