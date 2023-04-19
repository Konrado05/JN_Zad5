<?php
    session_start();
    
    require_once('config.php');
    
    if ($db_recipes->connect_errno == 0)
    {
        if($result = @$db_recipes->query($sql_findUser))
        {
            $count = $result->num_rows;
            if($count>0)
            {
                $user_data = $result->fetch_assoc();
                $result->free();
                $_SESSION['username'] = $user_data['username'];
                $_SESSION['firstname'] = $user_data['firstname'];
                $_SESSION['surname'] = $user_data['surname'];
                $_SESSION['gender'] = $user_data['gender'];

                unset($_SESSION['logFail']);
                $_SESSION['logged'] = TRUE;
                header('Location: site.php');
            }
            else
            {
                $_SESSION['logFail'] = TRUE;
                unset($_SESSION['connectionFault']);
                header('Location: index.php');
            }
        }
    }
    else
    {
        $_SESSION['logFail'] = TRUE;
        $_SESSION['connectionFault'] = TRUE;
        header('Location: index.php');
    }

?>