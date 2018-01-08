<?php
include '../config.php';

$remail=$_POST['remail'];
$rcompany_name=$_POST['rcompany_name'];
$raddress=$_POST['raddress'];
$rphone=$_POST['rphone'];
$rcompany_profile=$_POST['rcompany_profile'];
$restablished=$_POST['restablished'];
$rpassword=$_POST['rpass'];
$r_cpassword=$_POST['rcpass'];

//$f_languages = mysqli_real_escape_string($conn, $_POST['flanguages_known']);
$sql2 = "INSERT INTO recruiter (remail,rcompany_name,rphone,rpassword,raddress,restablished,rcompany_profile)
VALUES ('$remail' , '$rcompany_name' , '$rphone' , '$rpassword' , '$raddress' , '$restablished' , '$rcompany_profile' )";

if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
 header('Location:../index.html ');
?>