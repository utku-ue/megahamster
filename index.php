<?php
require 'vendor/autoload.php';

use SooS\megahamster as Classes;

$array = [
    new Classes\rectangle("The Room", 49, "none", 80, 50),
    new Classes\rectangle("The Flat", 149, "Food jars", 120, 80),
    new Classes\octagon("The Pit", 69, "Hamster training gloves, Hamster punching sack", 20)
];

if (isset($_GET['format']) && $_GET['format'] === 'json') {

    header('Content-Type: application/json');
    echo json_encode($array);

} else {

    $htmloutput1 = <<<HTML
<!DOCTYPE html>
<html lang="">
<head>
    <title>Megahamster | Ihr Hamsterversorger</title>
    <style>

    </style>
</head>
<body>
<section id="list-products">
HTML;

    echo $htmloutput1;

    foreach ($array as $item) {
        echo($item->toHTML());
    }

    $htmloutput2 = <<<HTML
</section>
<footer id="contact">
    <p>
        <small>0680 111 123 56</small>
    </p>
</footer>
</body>
</html>
HTML;

    echo $htmloutput2;

}