<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contact</title>
		<link rel="shortcut icon" href="afbeeldingen/favicon.ico">
	</head>

	<body>
		<link rel="stylesheet" type="text/css" href="css/contactpagina.css">

		<div class="boxes">
			<div>
			    <div class="boxes-header">
			    	<div class="logo"><img id="logo" src="afbeeldingen/icon.png" alt="Het logo van het Certified Clown College"></div>
			    	<div class="knoppen">
			    		<a id="home" href="index.php">Home</a>
			    		<a id="contact" href="contactpagina.html">contact</a>
						<a id="docenten" href="docenten.html">Docenten</a>
			    	</div>
			    </div>
			 </div>
			<div>
			    <div class="boxes-links">
			    		<h2>Algemene Informatie</h2>
			    		<p>Onze locatie:</p>
			    		<p>Van Schaikweg 94, 7811 KL Emmen, Nederland</p>
			      		<div class="gmap-locatie">
			      			<iframe id="gmap-locatie" src="https://maps.google.com/maps?q=nhl%20stenden%20emmen&t=&z=13&ie=UTF8&iwloc=&output=embed" ></iframe>
			      		</div>
			      		<p></p><a id="route" href="https://www.google.com/maps/dir//NHL+Stenden+Hogeschool,+Van+Schaikweg+94,+7811+KL+Emmen,+Nederland/@52.77825,6.912371,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x47b7e61f3ec72443:0xbe9d297b3e4fbcc7!2m2!1d6.9123707!2d52.7782504!3e0?hl=nl-NL">Plan je reis!</a></p>
				</div>
			</div>
			<div>
			    <div class="boxes-contacttext ">
			      <h2>Contactformulier</h2>
			      <p id="bold">Heeft u een vraag of opmerking? Vul dan de volgende gegevens in:</p>
			    </div>
			 </div>
			 <div>
			    <div class="boxes-rechts">
			      <h2>Meer weten?</h2>
					<p>Spreekt het leven op het certified clown college u aan? Droomt u al tijden oven het leven als een gecertificeerde clown?</p>
					<p>Download dan de brochure! Hierin zal u alles vinden wat er maar te weten valt over het Certified Clown College.</p>
					<p><a id="brochure" href="brochure/brochure.pdf" download="brochure">Download hier de brochure!</a></p>
			    </div>
			 </div>
			 <div>
			    <div class="boxes-formulier">
			      

						<form id="contactformulier" class="formulier" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

						<p>
						<label>Voornaam
						<input type="text" name="voornaam" required>
						</label> 
						</p>

						<p>
						<label>Achternaam
						<input type="text" name="achternaam" required>
						</label> 
						</p>

						<p>
						<label>Telefoonnummer 
						<input type="tel" name="telefoonnummer">
						</label>
						</p>

						<p>
						<label>Email 
						<input type="email" name="email" required="">
						</label>
						</p>

						<fieldset>
						<legend>Waar gaat het over?</legend>
						<p><label class="choice"> <input type="radio" name="betreft" required value="vraag"> Vraag </label></p>
						<p><label class="choice"> <input type="radio" name="betreft" required value="Klacht"> Klacht </label></p>
						<p><label class="choice"> <input type="radio" name="betreft" required value="Anders namelijk:"> Anders namelijk: </label></p>
						</fieldset>

						<p>
						<label>Onderwerp 
						<input type="text" name="onderwerp">
						</label>
						</p>

						<p>
						<label>Datum 
						<input type="datetime-local" name="datum" required>
						</label>
						</p>


						<p>
						<label>Bericht
						<textarea name="text" maxlength="500"></textarea>
						</label>
						</p>

						<input type="reset" name="reset" id="reset" value="Formulier legen">
						<input type="submit" name="submit"  id="submit" value="Versturen">
					</form>
					<?php include 'contactpaginaformulier.php';?>

			    </div>
			 </div>
			 <div>
			    <div class="boxes-footer">
			      <img id="embleem" src="afbeeldingen/CCC.png" alt="Embleem van het Certified Clown College">
			      <div id="footer-rechts">		    		
			      		<a id="home" href="home.nl">Home</a>
			    		<a id="contact" href="contactpagina.html">contact</a>
					  	<a id="docenten" href="docenten.html">Docenten</a>
			      <p></p>
			    </div>
			 </div>
		</div>


	</body>

</html>
