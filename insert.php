<?php

require_once "conn.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$FNAME =$_GET['f_name'];
	$MI =$_GET['mi'];
	$LNAME =$_GET['l_name'];

	// $sql = "INSERT INTO client(FNAME,MI,LNAME)VALUES('$FNAME','$MI','$LNAME')";
	// $res = mysqli_query($conn,$sql);


	if($FNAME == "" || empty ($FNAME) || $LNAME == ""||empty ($LNAME) || $MI == "" || empty ($MI)){
		header('location:index.php?message=PLEASE FILL OUT THE FORM');
	}
	else {
	$sql = "INSERT INTO client(FNAME,MI,LNAME)VALUES('$FNAME','$MI','$LNAME')";
	$res = mysqli_query($conn,$sql);

	header('location:index.php?message=sucessfully added');


}

}





// 	$FNAME = $_POST["FNAME"];
// 	$MI = $_POST["MI"];
// 	$LNAME = $_POST["LNAME"];

// 	$sql = "INSERT INTO client(FNAME,MI,LNAME)VALUES('$FNAME','$MI','$LNAME')";

// 	If($conn->query($sql)){
// 		$_SESSION['success'] ="Successfully Added";
// 	}else{
// 		$_SESSION['failed'] ="FAilure";
// 	}
// }
// 	header("location:index.php");