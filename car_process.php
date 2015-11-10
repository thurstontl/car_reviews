<?php

include("global.php");
include("header.php");

$make = mysqli_real_escape_string($connection,$_POST["make"]);
$model = mysqli_real_escape_string($connection,$_POST["model"]);
$year = mysqli_real_escape_string($connection,$_POST["year"]);
$review = mysqli_real_escape_string($connection,$_POST["review"]);
$id = intval($_POST["id"]);

if ($make == "") {
	$errormessage = $errormessage . "Make is a required field. <br />";
}

if ($model == "") {
	$errormessage = $errormessage . "Model is a required field. <br />";
}

if ($year == "" || $year < 1920 or $year > 2015) {
	$errormessage = $errormessage . "Year is invalid. <br />";
}


if ($review == "") {
	$errormessage = $errormessage . "Must write something of substance. <br />";
}

if ($errormessage != "") {
	include ("car_form.php");
	die();
}

if ($id > 0) {
	//change the existing row
	mysqli_query($connection,"update cars set make = '$make', model = '$model', year = '$year', review = '$review' where id = $id");
} else {
	mysqli_query($connection,"insert into cars (make, model, year, review) values ('$make','$model','$year','$review')");
}

?>

<div id="page_container">
	<div class="row">
		<h2>Your review has been added!</h2></br>
		<a href="index.php"><h3>Return to car form to add another or...</h3></a><br><br>
		<a href="car_list.php"><h3>View the entire car list.</h3></a>
	</div>
</div>

