<!doctype html>
<html>

<head>
	<meta charset=utf-8 />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>

<body>

	
	<div>
		<h2>External loading</p>

		<h3>Include with php</h3>
		<div height="0" style="position:absolute;margin-left: -100%;" width="0">
			<?php echo file_get_contents("wheatField.svg"); ?>
		</div>
		(a)
		<svg class="icon is-x4" viewBox="0 0 453.7 767.2">
			<use xlink:href="#wheatField"></use>
		</svg>
	</div>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="functions.js"></script>

</body>

</html>
