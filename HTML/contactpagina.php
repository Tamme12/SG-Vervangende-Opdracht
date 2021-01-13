<?php
$directory = 'Contactformulier';

// create new directory with 744 permissions if it does not exist yet
// owner will be the user/group the PHP script is run under
if ( !file_exists($directory) ) {
    mkdir ($directory, 0744);
}

file_put_contents ($directory.'contactformulier.txt', 'Hello File');




// Data uit het formulier lezen
$vnaam = filter_input(INPUT_POST, "voornaam");
$anaam = filter_input(INPUT_POST, "achternaam");
$tel = filter_input(INPUT_POST, "telefoonnummer");
$email = filter_input(INPUT_POST, "email");
$betreft = filter_input(INPUT_POST, "betreft");
$onderwerp = filter_input(INPUT_POST, "onderwerp");
$datum = filter_input(INPUT_POST, "datum");
$text = filter_input(INPUT_POST, "text");

//output voor de textfile genereren

$output =
                        Voornaam:       $vnaam
                        Achternaam:     $anaam
                        Telefoonnummer: $tel
                        Email:          $email
                        Betreft:        $betreft
                        Onderwerp:      $onderwerp
                        Datum:          $datum
                        Inhoud:         $text;

                    //textfile openen om naar te schrijven

                    $save = fopen("contactformulier.txt", "a");

                    // schrijven naar het bestand
                    fwrite($save, $output);
                    fclose($save);


					?>

<?php
if(isset($_POST['voornaam']) && isset($_POST['achternaam']) && isset($_POST['telefoonnummer']) && isset($_POST['telefoonnummer'])
    && isset($_POST['email']) && isset($_POST['betreft']) && isset($_POST['onderwerp']) && isset($_POST['onderwerp']) && isset($_POST['datum'])
    && isset($_POST['text'])) {
    $data = $_POST['voornaam'] . '-' . $_POST['achternaam'] . '-' . $_POST['telefoonnumber'] . '-' . $_POST['email'] . '-' . $_POST['betreft']
        . '-' . $_POST['onderwerp'] . '-' . $_POST['datum'] . '-' . $_POST['text'] . "\n";
    $filename = date('YmdHis').".txt";
    if (!file_exists($filename)) {
        $fh = fopen($filename, 'w') or die("Can't create file");
    }
    $ret = file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
    die('no post data to process');
}
?>
