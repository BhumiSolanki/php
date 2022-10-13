<?php
	$con = mysqli_connect("localhost","root","","clg");
	$id = $_GET['id'];
	$sql = "DELETE FROM `studtable` WHERE id='$id'";
	mysqli_query($con,$sql);
	header("location:index.php");
?>