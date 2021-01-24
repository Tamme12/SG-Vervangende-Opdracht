<html>
<head>
<link rel="stylesheet" href="css/style.css"/>

</head>
<body>

	<header>
		<a href="index.php"><img class="logo" src="Afbeeldingen/icon.png" alt="Logo" title="Logo"></a>
		<ul class="headul">
			<li class="list"><a href="Gallerij.php">Gallerij</a></li>
			<li class="list"><a href="opleidingen.php">Opleidingen</a></li>
			<li class="list"><a href="docenten.php">Docenten</a></li>
			<li class="list"><a href="contactpagina.php">Contact</a></li>
		</ul>
	</header>

<div class="galleryDiv">

<?php
$filelist = glob("./Gallerijfotos/*");

foreach($filelist as $filename){
	echo "<a href='gallerijscript.php?picture=".$filename."'><img class='galleryPic' src='".$filename."'></a>";
}
?>

</div>
</body>
</html>
