<?php
include "conn.php";
echo $id =$_GET['delete'];

$quer = "DELETE FROM client WHERE ID='$id'";

if($conn->query($quer)){
	$_SESSION['success'] = "nice budy";
}else{
    $_SESSION['balda']  = "balda badi";
}

header('location:index.php');

?>