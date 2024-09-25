<?php
include('../config/config.php');

date_default_timezone_set('Europe/Stockholm');

$today = date('Y-m-d H:i:s');

$weekday = date('l');

$weekNumber = date('W');

$title = 'Today';

include('../view/header.php');
?>

<main>
    <h1>Today’s Date and Time</h1>

    <p>Dagens datum är <?= $today ?> och vi är i vecka <?= $weekNumber ?>.</p>

    <p style="font-size: 2.5rem; color: darkorange;">
        Idag är det <?= $weekday ?>!
    </p>
</main>

<?php
include('../view/footer.php');
?>