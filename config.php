<?php

    $db_recipes = @new mysqli("localhost", "root", "", "recipes");
    $sql_findUser = "SELECT * FROM users Where username='".$_POST['login']."'"."AND password='".hash('sha256', $_POST['password'])."'";

?>