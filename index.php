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
        include("classes/rectangle.php");
        include("classes/octagon.php");

        $array = [
            new rectangle("The Room", 49, "none", 80, 50),
            new rectangle("The Flat", 149, "Food jars", 120, 80),
            new octagon("The Pit", 69, "Hamster training gloves, Hamster punching sack", 20)
            ];

        foreach ($array as $item){
            echo($item->toHTML());
        }



    ?>
</section>
<footer id="contact">
    <p><small>0680 111 123 56</small></p>
</footer>
</body>
</html>
