<?php
    session_start();
    if(!isset($_SESSION['logged']))
    {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dzisiejszy przepis</title>

        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="site.css" type="text/css"/>
        <link rel=icon href=img/muffin.png type="image/png"/>
    </head>

    <body>

        <form action="index.php" method="get">
            <input type="hidden" name="logout" value="yes">
            <input class="outButton" type="submit" value="Wyloguj">
        </form>

        <header>
            <?php
            echo $_SESSION['firstname'].' '.$_SESSION['surname'].' - ';
            if($_SESSION['gender']=="M")
            {
                echo "zalogowany";
            }
            else if($_SESSION['gender']=="F")
            {
                echo "zalogowana";
            }
            else
            {
                echo "witaj";
            }
            ?>
            <br/>
            ♦ Dzisiejszy przepis dnia: ♦
        </header>
        <main>
            <div id="skladniki" class="naglowek">
                <img src="img/kratka.png" />
                <div>
                    <p>Składniki<p>
                    <p>XXX<p>
                    <p>YYY<p>
                    <p>ZZZ<p>
                </div>
            </div>
            <div id="autorzy" class="naglowek">
                <img src="img/note.png" />
                <div>
                    <p>- autor pierwszy<p>
                    <p>- autor drugi<p>
                    <p>- autor trzeci<p>
                </div>
            </div>
            <div id="zdjecie" class="naglowek">
                <img src="img/papyrus.png" />
                <img src="img/muffin.png" />
            </div>
            <div id="przepis">
                <p>Przepis:</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consectetur nunc vel tellus porta, ut gravida ante egestas. Ut vitae leo pulvinar, cursus neque vel, fermentum lorem. Maecenas at nunc commodo, varius arcu vitae, blandit dolor. Praesent lectus turpis, rutrum a dapibus et, rutrum eget sem. Aenean pulvinar erat nibh, nec consequat eros bibendum ac. Morbi pulvinar orci vulputate, iaculis diam sed, aliquam elit. Aenean sagittis condimentum luctus. In hac habitasse platea dictumst. Phasellus id pharetra lectus.

Praesent in efficitur ante. Vivamus mi massa, aliquam in viverra in, suscipit non elit. Etiam molestie, metus id molestie viverra, lectus magna viverra metus, nec imperdiet tortor neque quis ex. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed auctor enim id nibh pretium consectetur. Maecenas malesuada vulputate felis molestie ullamcorper. Donec tristique ornare condimentum. Praesent laoreet fermentum mauris tempor iaculis. In accumsan cursus mi sed venenatis. In hac habitasse platea dictumst.
                </p>
            </div>
        </main>
    </body>
</html>