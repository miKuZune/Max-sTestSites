<html>

<head>


<style>
	.mySlides {display:none;}
</style>

</head>

<body>

	<div class="">
		<img class="myImgs" src="Imgs/HomePageImg1.jpg">
		<img class="myImgs" src="Imgs/HomePageImg2.jpg">
		<img class="myImgs" src="Imgs/HomePageImg3.JPG">
	</div>

	<script>
		var myIndex = 0;
		carousel();

		function carousel()
		{

			var i;
			var x = document.getElementsByClassName("myImgs");
			for(i = 0; i < x.length; i++)
			{
				x[i].style.display = "none";
			}
			myIndex++;
			if(myIndex > x.length){myIndex=1;}
			x[myIndex-1].style.display = "block";
			carousel();
		}
	</script>

</body>

</html>