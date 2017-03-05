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
	<div class="baby">
	<!-- mit Klasse "day" die helle Ansicht aktivieren, ohne "day" ist es die dunkle. Mit der Klasse "setup-done" kann man das Formular ausblenden und die Ansichts-Auswahl ein -->
	<div class="welcome-form baby-form">
	<span class="baby-form">Kamera einrichten für</span>
	<select class="family-select">
	<option>scary baby</option><!-- Familien hier als <option>...</option> auflisten -->
	<option>funny baby</option>
	<option>another baby</option>
	</select>
	<div class="input-btn edit baby-form"></div>
	<div class="input-btn plus baby-form"></div>
	</div>
	<!-- KameraBild hierhin -->
		<div class="time"></div>
	
		<div class="stream-menu">
		<div class="volume"><input class="volume" type="range" min="0" max="100" defaultValue="100" Value="100" /></div>
		<div class="cam-switch"></div>
		<div class="autostart active"><span>Autostart</span></div>
		<div class="cam-on"><span></span></div>
		<!-- cam-on und autostart: Klasse active hinzufügen um umzuschalten -->
		</div>
	</div>
</div>
</body>
</html>
