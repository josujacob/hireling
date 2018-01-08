<?php
session_start();
require_once('../config.php');
	$f_email = $_POST['femail'];
	$f_password = $_POST['fpass'];

	$sql = "SELECT * FROM `freelance` WHERE f_email='$f_email' AND f_password='$f_password'";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);
	
	if($count == 1){

		$_SESSION['username'] = $username;
		header('location: ../freelance_account/index.html');
        
    }
    
    else{
        include 'freelance_login.html';
        $msg = "Invalid Username/Password";

?>
<div class="col-md-12 col-sm-6 alert-danger alert-dismissable" style="height:30px; text-align:center;padding-top:5px;"> <?php echo $msg; ?> </div>
<?php		

}
if(isset($_SESSION['username'])){
	$smsg = "User already logged in";
}

?>