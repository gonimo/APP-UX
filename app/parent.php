<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="app.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<?php include "menu.php";?> <!-- das ist das Menü -->
	<div class="parent">
		<div class="stream-baby">
			<!-- Hier kommt der Stream hin! Ohne Stream gibt es einen Platzhalter-->
		</div>
		<div class="stream-baby"></div>
		<div class="stream-baby"></div>
		<div class="stream-baby"></div>
		
		<div class="stream-menu">
		<div class="volume"><input class="volume" type="range" min="0" max="100" defaultValue="100" Value="100" /></div>
		<div class="stop">STOP</div>
		</div>
	</div>
</div>
</body>
</html>
