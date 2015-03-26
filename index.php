<!DOCTYPE html>
<html>

<head>
	<title>Our Solution for your Occasion | Event Advisor</title>
	<meta charset="utf-8">
	<link href="/css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--webfonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
	<!--//webfonts-->
</head>
<body>
	<?php echo file_get_contents("header.php"); ?>
	<div stlye="height:100%;">
		<div class="custom_search">
			<form>
				<select id="themes_home" class="themes_home">
					<option>theme 1</option>
					<option>theme 2</option>
					<option>theme 3</option>
					<option>theme 4</option>
				</select>
				<select id="category_home" class="category_home">
					<option>category 1</option>
					<option>category 2</option>
					<option>category 3</option>
					<option>category 4</option>
				</select>
				<select id="type_home" class="type_home">
					<option>type 1</option>
					<option>type 2</option>
					<option>type 3</option>
					<option>type 4</option>
				</select>
				<input type="submit" value="Search">
			</form>
		</div>
	</div>
	<?php echo file_get_contents("footer.php"); ?>
</body>
</html>