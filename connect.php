<?php

$fname = $_POST['fname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$remark = $_POST['remark'];

//Database connection

$conn = new mysqli("localhost","id13238356_kapil","e8wBEY{LA(xKd=j2","id13238356_userinfo");
if($conn->connect_error)
{
	die('Connection failed :'.$conn->connect_error);
}
else
{
	$stmt = $conn->prepare("INSERT INTO userinfo(`Fullname`, `Email`, `Password`, `Remarks`) VALUES (?,?,?,?)");
	$stmt->bind_param("ssss",$fname, $email, $pass, $remark);
	$stmt->execute();
	echo "Sign-Up Successful. Please close tab to avoid resubmission.";
	$stmt->close();
	$conn->close();
}

?>