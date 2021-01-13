<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
    <title></title>
</head>
<body>
	<header>
		<a href="index.php"><img class="logo" src="Afbeeldingen/icon.png" alt="Logo" title="Logo"></a>
		<ul class="headul">
			<li class="list"><a href="#">Opleidingen</a></li>
			<li class="list"><a href="docenten.html">Docenten</a></li>
			<li class="list"><a href="contactpagina.html">Contact</a></li>
		</ul>
	</header>
	
	<div class="container">
		<div class="main">
			<?php include_once 'Include/Activiteiten.php'; ?>
		</div>
		
	<?php include_once 'Include/RSS.php' ; ?>

	</div>
</body>
</html> 

