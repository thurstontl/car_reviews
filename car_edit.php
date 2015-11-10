<?php

include("global.php");
include("header.php");

$id = intval($_GET["id"]);

$res = mysqli_query($connection,"select * from cars where id = $id");

$row = mysqli_fetch_assoc($res);

$make=  $row["make"];
$model = $row["model"];
$year = $row["year"];
$review = $row["review"];
$id = $row["id"];

include("index.php");

?>