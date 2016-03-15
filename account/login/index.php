<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="canonical" href="/account/login/">
	<title>Freedom Robotics Login</title>
<?php
	include($_SERVER['DOCUMENT_ROOT']."/includes/jsincludes.php");
	includeJS("core:1.12.0", "", "", "", "", "", "1.6.16");
	?>
	<link href="./content/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="nav" class="disableHighlight"> <!--The top navigation coolio stuff-->
		<div id="nav_home" style="height: 30px; width: 30px;">
			<img src="./img/homebutton.svg" style="z-index: 100; height: 30px; width: 30px;" alt="">
			<img id="homeSVG" src="./img/homebuttonhover.svg" style="z-index: 101; opacity: 0; height: 30px; width: 30px;" alt="">
		</div>
		<div id="nav_back" style="height: 60px; width: 60px; top: 30px; left: 30px;">
			<img src="./img/backarrow.svg" style="z-index: 100; height: 60px; width: 60px;" alt="">
			<img id="backSVG" src="./img/backarrowhover.svg" style="z-index: 101; height: 60px; width: 60px; opacity: 0;" alt="">
		</div>
	</div>
	<script type="text/javascript">
	$("#nav_home").hover(function() {
		$("#nav_home").animate({"height": "60px", "width": "60px"}, 200).children().animate({"height": "60px", "width": "60px"}, 200);
		$("#nav_back").animate({"height": "30px", "width": "30px", "top": "60px", "left": "60px"}, 200).children().animate({"height": "30px", "width": "30px"}, 200);
		$("#homeSVG").css("opacity", 1);
	},function() {
		$("#nav_home").animate({"height": "30px", "width": "30px"}, 200).children().animate({"height": "30px", "width": "30px"}, 200);
		$("#nav_back").animate({"height": "60px", "width": "60px", "top": "30px", "left": "30px"}, 200).children().animate({"height": "60px", "width": "60px"}, 200);
		$("#homeSVG").css("opacity", 0);
	});
	$("#nav_back").hover(function() {
		$("#backSVG").css("opacity", 1);
	},function() {
		$("#backSVG").css("opacity", 0);
	});
	$("#nav_home").click(function() {
		window.location = "http://trhcreations.tk/";
	});
	$("#nav_back").click(function() {
		history.back(-1);
	});
	</script>
	<div id="content">
		
	</div>
</body>
