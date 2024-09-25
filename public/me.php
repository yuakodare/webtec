<?php
include('../config/config.php');


$title = 'Om Mig';


// Set the timezone to use
date_default_timezone_set('Europe/Stockholm');

// The date of today
$today = date('Y-m-d H:i:s');

// Name of the week day
$weekday = date('l');

include('../view/header.php');
?>

<main>
        <h1>Om Mig Själv</h1>
    <p>
    Jag heter Yusuf, är född år 2000 och har ett stort intresse för 
    webbprogrammering. På fritiden gillar jag att träna och spela fotboll 
    för att hålla mig aktiv och utmana mig själv både fysiskt och mentalt. 
    Programmering är något jag verkligen brinner för, och jag älskar att 
    skapa lösningar som kombinerar funktionalitet och design på webben.
    </p>
        <img src="img/jag.jpg" width="200" class="me" alt="Bild på mig">

        <p>Dagens datum är <?= $today ?> och idag är det <?= $weekday ?>.</p>

    </main>
    <?php include('../view/footer.php') ?>

   