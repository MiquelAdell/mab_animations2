<!doctype html>
<html>

<head>
	<meta charset=utf-8 />
	<link rel="stylesheet" type="text/css" href="style/style.css" media="all" />
</head>

<body>

	<svg height="0" style="position:absolute;margin-left: -100%;" width="0">
	<filter id='inset-shadow'>
		<!-- Shadow offset -->
		<feoffset dx='0' dy='0'></feoffset><!-- Shadow blur -->
		<fegaussianblur result='offset-blur' stddeviation='1'></fegaussianblur><!-- Invert drop shadow to make an inset shadow-->
		<fecomposite in='SourceGraphic' in2='offset-blur' operator='out' result='inverse'></fecomposite><!-- Cut colour inside shadow -->
		<feflood flood-color='black' flood-opacity='.95' result='color'></feflood>
		<fecomposite in='color' in2='inverse' operator='in' result='shadow'></fecomposite><!-- Placing shadow over element -->
		<fecomposite in='shadow' in2='SourceGraphic' operator='over'></fecomposite>
	</filter>

	<filter color-interpolation-filters="sRGB" data-iconmelon='filter:d8b3243222f113cd0dd357f0aaed2ee9' id='color-shadow'>
		<fecomponenttransfer in="SourceGraphic">
			<fefuncr tablevalues=".5" type="discrete"></fefuncr>
			<fefuncg tablevalues=".5" type="discrete"></fefuncg>
			<fefuncb tablevalues=".5" type="discrete"></fefuncb>
		</fecomponenttransfer>
		<fegaussianblur stddeviation=".85"></fegaussianblur>
		<feoffset dx="1" dy="1" result="shadow"></feoffset>
		<fecomposite in="SourceGraphic" in2="shadow" operator="over"></fecomposite>
	</filter>

	<filter height="150%" id='emboss' width="150%" x="-25%" y="-25%">
		<feoffset dx="0.16666666666666666" dy="0.8333333333333334" in="SourceAlpha" result="17"></feoffset>
		<fegaussianblur in="17" result="18" stddeviation="0.5"></fegaussianblur>
		<fespecularlighting in="18" result="19" specularconstant="0.9" specularexponent="15" surfacescale="1">
			<fepointlight x="-1000" y="-5000" z="300"></fepointlight>
		</fespecularlighting>
		<fecomposite in="19" in2="SourceAlpha" operator="in" result="20"></fecomposite>
		<feoffset dx="-0.16666666666666666" dy="-0.8333333333333334" in="SourceAlpha" result="21"></feoffset>
		<fegaussianblur in="21" result="22" stddeviation="0.5"></fegaussianblur>
		<fespecularlighting in="22" result="23" specularconstant="1.8" specularexponent="8" surfacescale="1">
			<fepointlight x="100" y="5000" z="300"></fepointlight>
		</fespecularlighting>
		<fecomposite in="23" in2="SourceAlpha" operator="in" result="24"></fecomposite>
	</filter>

	<filter id="gaussianBlur" >
		<feGaussianBlur stdDeviation="1" />
	</filter>

	<div>
		<h2>External loading</p>

		<h3>Include with php</h3>
		<p>Everything works just as the initial tests<p>
		<div height="0" style="position:absolute;margin-left: -100%;" width="0">
			<?php echo file_get_contents("svg/heart.svg"); ?>
		</div>
		(a)
		<svg class="icon is-x4" viewBox="0 0 32 32">
			<use xlink:href="#heart"></use>
		</svg>


		(b)
		<svg class="icon is-x4 " viewBox="0 0 32 32">
			<g filter="url(#inset-shadow)">
				<use xlink:href="#heart"></use>
			<g>
		</svg>
		(c)
		<svg class="icon is-x4 is-check" viewBox="0 0 32 32">
			<use xlink:href="#heart"></use>
		</svg>
		(d)
		<svg class="icon is-x4 is-blured" viewBox="0 0 32 32">
			<use xlink:href="#heart"></use>
		</svg>
	</div>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="javascript/functions.js"></script>

</body>

</html>
