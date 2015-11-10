<?php
include("header.php");
include("global.php");
?>

<div id="page_container">

	<div class="row">
		<div class="large-12-centered columns">
			<h1 id="headline">Car Review Form</h1>
		</div>
	</div>

	<div class="row">
		<div class="large-12-centered columns">
			<form action="car_process.php" method="POST">

				<input type="hidden" name="id" value="<?php echo $id;?>">
				Make:
				<input type="text" name="make" value="<?php echo htmlspecialchars($make,ENT_QUOTES); ?>"><br />
				Model:
				<input type="text" name="model" value="<?php echo htmlspecialchars($model,ENT_QUOTES); ?>"><br />
				Year:
				<input type="text" name="year" value="<?php echo htmlspecialchars($year,ENT_QUOTES); ?>"><br />
				Review:
				<textarea type="text" name="review" value="<?php echo htmlspecialchars($review,ENT_QUOTES); ?>"></textarea>
				
				<input type="submit" class="button" value="Save">
			</form>

		</div>
	</div></br>

	<div class="row">
		<div class="large-12-centered columns">
			<a href="car_list.php"><h3>View the entire car list.</h3></a>
		</div>
	</div>

</div>

</body>

</html>