<?php

include 'conn.php';

if(isset($_POST['submit'])){
	$id =$_POST['ID'];
	$fname = $_POST['FNAME'];
	$mi = $_POST['MI'];
	$lname = $_POST['LNAME'];

	$sql = "UPDATE client SET FNAME='$fname', MI='$mi', LNAME ='$lname' WHERE ID='$id'";

	if($conn->query($sql)){
		$_SESSION['success'] ="record updated";
	}else{
		$_SESSION['failed'] ="FAILEd";
	}
}

header('location:index.php')
?>