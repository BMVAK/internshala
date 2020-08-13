<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$fname 		   = $_POST['fname'];
	$email 		   = $_POST['email'];
	$phonenumber   = $_POST['phonenumber'];
	$dob	       = $_POST['dob'];
	$pincode 	   = $_POST['pincode'];

		$sql = "INSERT INTO users (fname, email, phonenumber, dob, pincode) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$fname, $email, $phonenumber, $dob, $pincode]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}