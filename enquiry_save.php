<?php
include "contact_connection.php";
if(isset($_POST['sfullname'])){
    
    echo $query="INSERT INTO `enquiryform`(`Full_Name`, `Father_Name`, `Mother_Name`, `Date_of_Birth`, `Aadhar_Number`, `Email`, `Mobile_Number`, `Gender`, `City`, `Stream`, `Previous_Class`, `Hobbies`, `Account_Number`, `Religion`, `Category`) VALUES ('".$_POST['sfullname']."','".$_POST['sfathername']."','".$_POST['smothername']."','".$_POST['sdateofbirth']."','".$_POST['saadharnumber']."','".$_POST['semail']."','".$_POST['smobile']."','".$_POST['sgender']."','".$_POST['scity']."','".$_POST['sstream']."','".$_POST['spreviousclass']."','".$_POST['shobbies']."','".$_POST['saccountnumber']."','".$_POST['sreligion']."','".$_POST['scategory']."')";
    $row=mysqli_query($conn, $query);
    if($row){
        header ("location:admission.php");
    }
    else{
        echo "error";
    }
}
?>