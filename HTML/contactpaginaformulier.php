<?php
if(isset($_POST['voornaam'])
    && isset($_POST['achternaam'])
    && isset($_POST['telefoonnummer'])
    && isset($_POST['telefoonnummer'])
    && isset($_POST['email'])
    && isset($_POST['betreft'])
    && isset($_POST['onderwerp'])
    && isset($_POST['onderwerp'])
    && isset($_POST['datum'])
    && isset($_POST['text'])) {
    $data = "Naam: " . $_POST['voornaam'] . "\n" .
            "Achternaam " . $_POST['achternaam'] . "\n" .
            "Telefoonnummer: " . $_POST['telefoonnummer'] . "\n" .
            "E-mail: " . $_POST['email'] . "\n" .
            "Betreft: " . $_POST['betreft'] . "\n" .
            "Onderwerp: " . $_POST['onderwerp'] . "\n" .
            "Datum: " . $_POST['datum'] . "\n" .
            "Inhoud bericht: " . $_POST['text'] . "\n";


    $filename = date('YmdHis') . ".txt";
    if (!file_exists($filename)) {
        $fh = fopen($filename, 'w') or die("Can't create file");
    }
    $ret = file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);
    if ($ret === false) {
        die('There was an error writing this file');
    } else {
        echo "Formulier verstuurd";
    }
}
?>
