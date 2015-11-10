<?php

include("global.php");

$id = intval($_GET["id"]);
mysqli_query($connection,"delete from cars where id = $id");

header("Location: car_list.php");

?>