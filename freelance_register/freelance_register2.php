<?php
include 'config.php';

$f_name=$_POST['ffirst_name'];
$l_name=$_POST['flast_name'];
$f_phone=$_POST['f_phone'];
$email=$_POST['femail'];
$password=$_POST['fpass'];
$c_password=$_POST['fcpass'];
$f_state=$_POST['fcurrent_state'];
$f_city=$_POST['fcurrent_city'];
$f_age=$_POST['fage'];
$f_firm=$_POST['fcurrent_firm'];
$f_profile=$_POST['fwork_profile'];
$f_languages = mysqli_real_escape_string($conn, $_POST['flanguages_know']);



$sql = "INSERT INTO freelance (f_fname,f_lname,f_phone,f_email,f_password,f_state,f_city,f_dob,f_firm,f_work_profile,f_languages)
VALUES ('$f_name' , '$l_name' , '$f_phone' , '$email' , '$password' , '$f_state' , '$f_city' , '$f_dob' , '$f_firm' , '$f_profile' , '$f_languages' )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 header('Location:../index.html ');
?>