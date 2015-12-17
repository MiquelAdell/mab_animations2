<!doctype html>
<html>
<head>
	<meta charset=utf-8 />
	<link rel="stylesheet" type="text/css" href="style/style.css" media="all" />
	<style>
	.is-blured {
	  filter: url(#gaussianBlur);
	}
	</style>
</head>

<body>

	<div height="0" style="position:absolute;margin-left: -100%;" width="0">
		<?php echo file_get_contents("svg/filters.svg"); ?>
	</div>
	<div height="0" style="position:absolute;margin-left: -100%;" width="0">
		<?php echo file_get_contents("svg/heart.svg"); ?>
	</div>

	<div>
		<h2>External loading</h2>

		<h3>Include with php</h3>


		<ol>
			<li>
				Basic loading<br>
				<svg class="icon is-x4" viewBox="0 0 32 32">
					<use xlink:href="#heart"></use>
				</svg>
			</li>

			<li>
				Altering fill property via CSS property<br>
				<svg class="icon is-x4 is-check" viewBox="0 0 32 32">
					<use xlink:href="#heart"></use>
				</svg>
			</li>


			<li>
				Inset shadow from SVG filters applied via group<br>
				<svg class="icon is-x4 " viewBox="0 0 32 32">
					<g filter="url(#inset-shadow)">
						<use xlink:href="#heart"></use>
					<g>
				</svg>
			</li>

			<li>
				Gaussian blur applied via filter: url(#gaussianBlur); in the css<br>
				<svg class="icon is-x4 is-blured" viewBox="0 0 32 32">
					<use xlink:href="#heart"></use>
				</svg>
			</li>
		</ol>
	</div>
</body>
</html>
