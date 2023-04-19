<?php
    session_start();
    if(isset($_GET['logout']))
    {
        unset($_SESSION['logged']);
        
        unset($_SESSION['username']);
        unset($_SESSION['firstname']);
        unset($_SESSION['surname']);
        unset($_SESSION['gender']);
    }

    if(isset($_SESSION['logged']))
    {
        header('Location: site.php');
    }
?>

<!DOCTYPE HTML>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Logging Justnet</title>
        <meta name="author" content="Konrad Skurpel">

        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>

    <body>
        <form action="login.php" method="post">
            Login: <br/> <input type="text" name="login" /> <br/>
            Hasło: <br/> <input type="password" name="password" /> <br/>
            <input class="submit" type="submit" value="Zaloguj" />
            <?php
            if(isset($_SESSION['logFail']))
            {
                if(isset($_SESSION['connectionFault']))
                {
                    echo "<p>Błąd połączenia z bazą danych.</p>";
                    unset($_SESSION['connectionFault']);
                }
                else
                {
                    echo "<p>Błędne login lub hasło.</p>";
                }
            }
            ?>
        </form>
    </body>
</html>
