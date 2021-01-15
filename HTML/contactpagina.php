<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Contact</title>
        <link rel="stylesheet" type="text/css" href="css/contactpagina.css">
	</head>

	<body>

		<div class="boxes">
			<div>
			    <div class="boxes-header">
			    	<div class="logo"><img id="logo" src="afbeeldingen/icon.png" alt="Het logo van het Certified Clown College"></div>
			    	<div class="knoppen">
			    		<a class="navbutton" href="index.php">Home</a>
			    		<a class="navbutton" href="contactpagina.php">contact</a>
						<a class="navbutton" href="docenten.html">Docenten</a>
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
			      		<p><a class="button" href="https://www.google.com/maps/dir//NHL+Stenden+Hogeschool,+Van+Schaikweg+94,+7811+KL+Emmen,+Nederland/@52.77825,6.912371,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x47b7e61f3ec72443:0xbe9d297b3e4fbcc7!2m2!1d6.9123707!2d52.7782504!3e0?hl=nl-NL"> Plan je reis!</a></p>
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
					<p><a class="button" href="brochure/brochure.pdf" download="brochure">Download hier de brochure!</a></p>
			    </div>
			 </div>
			 <div>
			    <div class="boxes-formulier">
			      
                    <form id="contactformulier" class="formulier" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

						<p>
						<label for="voornaam">Voornaam
						<input type="text"  name="voornaam" id="voornaam" required>
						</label> 
						</p>

						<p>
						<label for="achternaam">Achternaam
						<input type="text" name="achternaam" id="achternaam" required>
						</label> 
						</p>

						<p>
						<label for="telefoonnummer">Telefoonnummer
						<input type="tel" name="telefoonnummer" id="telefoonnummer" required>
						</label>
						</p>

						<p>
						<label for="email">Email
						<input type="email" name="email" required id="email">
						</label>
						</p>

						<fieldset>

                            <legend>Waar gaat het over?</legend>
                            <p><label class="choice" for="vraag"> <input type="radio" name="betreft" required id="vraag" value="vraag"> Vraag </label></p>
                            <p><label class="choice" for="klacht"> <input type="radio" name="betreft" required id="klacht" value="Klacht"> Klacht </label></p>
                            <p><label class="choice" for="andersnamelijk"> <input type="radio" name="betreft" required id="andersnamelijk" value="Anders namelijk:"> Anders namelijk: </label></p>

                        </fieldset>

                            <p>
                            <label for="onderwerp">Onderwerp
                            <input type="text" name="onderwerp" required id="onderwerp">
                            </label>
                            </p>

                            <p>
                            <label for="datum">Datum
                            <input type="datetime-local" name="datum" required id="datum">
                            </label>
                            </p>


                            <p>
                            <label for="bericht">Bericht
                            <textarea name="text" maxlength="500" id="bericht"></textarea>
                            </label>
                            </p>

                            <input class="button" type="reset" name="reset" value="Formulier legen">
                            <input class="button" type="submit" name="submit" value="Versturen">

					</form>
					<?php include 'contactpaginaformulier.php';?>

			    </div>
			 </div>
			 <div>
			    <div class="boxes-footer">
			      <img id="embleem" src="afbeeldingen/CCC.png" alt="Embleem van het Certified Clown College">
                    <div id="footer-rechts">
			      		<a class="navbutton" href="index.php">Home</a>
			    		<a class="navbutton" href="contactpagina.php">contact</a>
					  	<a class="navbutton" href="docenten.html">Docenten</a>
			        </div>
                </div>
             </div>
		</div>


	</body>

</html>
