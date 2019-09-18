<html>

<head>
	
	<title> Max's Fake Shop </title>

	<link rel="stylesheet" type="text/css" href="styles.css" media="screen" />

</head>

<body>

	<?php include "Consistents/header.php"; ?>

	<div class="ExampleImgs">
		<?php include "Consistents/imageCarousel.php"; ?>
		<div class="ExampleImgsTextOverlay">
			<h1> Max's Fake Keyboard shop! </h1>
			<p> Selling Fake keyboards and keyboard accessories because I don't own any even though I wish I did to all the fake customer's we have!</p>
		</div>
	</div>

	<p> The quick brown fox jumped over the lazy dog. </p>

	<?php
		for($x = 0; $x < 10; $x++)
		{?>
			<h1> Product Name </h1>
			<p> A description </p>
			<?php
		}
	?>

</body>


</html>