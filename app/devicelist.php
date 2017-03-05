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
	<div class="device connected active">
		<div class="status">
			<div></div>
		</div>
		<div class="name">
			<span class="dev-name">Gerät1</span><span class="dev-loc">Baby@Gerät1</span>
		</div>
		<div class="buttons">
			<div class="connect">VERBINDEN</div>
			<div class="stream">STREAM</div>
			<div class="disconnect">TRENNEN</div>
		</div>
		<div class="info">
		<span class="last-seen">LAST SEEN: 2017-02-25 16:13:35</span><span class="edit">UMBENENNEN</span><span class="delete">ENTFERNEN</span>
		</div>
	</div>
	<!-- den <div class="device"> inklusive, teilweise dynamischem Inhalt (Namen), kopieren und bei einem aktiven Gerät die Klasse "active" hinzufügen, dann wird der Status rosa und der "verbinden"-Knopf sichtbar. Für die zusätzlichen Info die Klasse "selected" hinzufügen. Wenn verbunden dann die Klasse "connected" hinzufügen, dann verschwindet der "Verbinden".Knopf und Stream und trennen tauchen auf.
	Lässt sich auch beliebig kombinieren. Siehe folgende Beispiele-->
	<div class="device active">
		<div class="status">
			<div></div>
		</div>
		<div class="name">
			<span class="dev-name">Gerät2</span><span class="dev-loc">Avocado@Gerät2</span>
		</div>
		<div class="buttons">
			<div class="connect">VERBINDEN</div>
			<div class="stream">STREAM</div>
			<div class="disconnect">TRENNEN</div>
		</div>
		<div class="info">
		<span class="last-seen">LAST SEEN: 2017-02-25 16:13:35</span><span class="edit">UMBENENNEN</span><span class="delete">ENTFERNEN</span>
		</div>
	</div>
	<div class="device selected connected">
		<div class="status">
			<div></div>
		</div>
		<div class="name">
			<span class="dev-name">Gerät3</span><span class="dev-loc">ausgewählt@Gerät3</span>
		</div>
		<div class="buttons">
			<div class="connect">VERBINDEN</div>
			<div class="stream">STREAM</div>
			<div class="disconnect">TRENNEN</div>
		</div>
		<div class="info">
		<span class="last-seen">LAST SEEN: 2017-02-25 16:13:35</span><span class="edit">UMBENENNEN</span><span class="delete">ENTFERNEN</span>
		</div>
	</div>
	<div class="device active selected">
		<div class="status">
			<div></div>
		</div>
		<div class="name">
			<span class="dev-name">Gerät4</span><span class="dev-loc">Wahnsinn, diese Features@Gerät4</span>
		</div>
		<div class="buttons">
			<div class="connect">VERBINDEN</div>
			<div class="stream">STREAM</div>
			<div class="disconnect">TRENNEN</div>
		</div>
		<div class="info">
		<span class="last-seen">LAST SEEN: 2017-02-25 16:13:35</span><span class="edit">UMBENENNEN</span><span class="delete">ENTFERNEN</span>
		</div>
	</div>
	
	<div class="device-add"> <!-- mit dem Knopf ein Device hinzufügen -->
		GERÄT HINZUFÜGEN
	</div>
	
</div>
</body>
</html>
