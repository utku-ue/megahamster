<!DOCTYPE html>
<html>
<head>
    <title>Megahamster | Ihr Hamsterversorger</title>
    <style>

    </style>
</head>
<body>
<section id="list-products">
    <?php
        include ("classes/room.php");
        $theRoom = new room("The Room", "EUR 49,-");
        $theFlat = new room("The Flat", "EUR 149,-");
        $thePit = new room("The Pit", "EUR 69,-");

        echo $theRoom->toHTML();
        echo $theFlat->toHTML();
        echo $thePit->toHTML();
    ?>
</section>
<footer id="contact">
    <p><small>0680 111 123 56</small></p>
</footer>
</body>
</html>
