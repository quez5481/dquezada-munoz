<?php

    session_start();
    
    if(!isset($_SESSION['adminName']))
    {
         header("Location:final1.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Main Page </title>
    </head>
    <body>
        <h1> Admin Main Page </h1>
        
        <h3> Welcome <?=$_SESSION['adminName']?>! </h3>

        <form action="finalLogout.php">
            <input id="logout" type="submit" value="Logout"/>
        </form>
        
        <br><br>
        
        <?php
            include 'footer.php';
        ?>
    </body>
</html>