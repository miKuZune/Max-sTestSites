<html>

<head>
	
	<title> Max's Fake Shop </title>

	<link rel="stylesheet" type="text/css" href="styles.css" media="screen" />

	<link rel="stylesheet" type="text/css" href="/ExternalCSS/bootsrap-gird.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="/ExternalCSS/bootstrap.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="/ExternalCSS/bootstrap-reboot.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="styles.css" media="screen" />



</head>

<body>

	<?php include "Consistents/header.php"; ?>

	<div class="ExampleImgs">
		<?php include "Consistents/imageCarousel.php"; ?>
		<div class="ExampleImgsTextOverlay">
			<h1> Max's Fake Keyboard shop! </h1>
			<p> Selling Fake keyboards and keyboard accessories because I don't own any even though I wish I did, to all the fake customer's we have!</p>
		</div>
	</div>


	<div class="container">
		<?php
			for($x = 0; $x < 10; $x++)
			{?>
				<div class="row">
				<?php
				for($y=0; $y < 3; $y++)
				{
					?>
						<div class="col-sm-6">
							
							<div class="product">
							<a class="productLink" href="">
								<p class="productTitle"> Product Title </p>
								<img src="Imgs/ProductImages/ProductImage1.jpg" />
								<p class="productDesc"> Product Desc: The quick brown fox jumped over the lazy dog. Or mechanical keyboard. That'd be a weird story though. </p>
							</a>
							</div>
							
							
						</div>
				<?php
				}
				?> </div> <?php
			}
		?>

	</div>

</body>


</html>