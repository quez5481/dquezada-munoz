<?php

    session_start();
    if(!isset($_POST["guess"]))
    {
     $_SESSION ["count"] = 0;
     $_POST["numberGuess"] = rand(0,100);
     echo $_POST['numberGuess'];
     echo $_POST["guess"];
    }
    else if($_POST["guess"] > $_POST["numberGuess"])
    {
        
        $number=  "Guess is too high";
        $_SESSION["count"]++;
        echo "Guess is too high";
    }
    else if($_POST["guess"] < $_POST["numberGuess"])
    {
        
        $number = "Guess is too high";
        $_SESSION["count"]++;
        
    }
    else
    {
        $_SESSION["count"]++;
        $number =  "You won in ". $_SEESION["count"] . "attempts";
        unset($_SESSION["count"]);
    }
    
    // if(isset($_GET[''])){
        
    // }
    
    // if(isset($_GET['giveUp'])){
    //     $_POST["giveUp"] = rand(0,100);
    //     echo "Try again with a new number";
    // }
    


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Guess the Number!</title>
    </head>
    <body>
        <h1>
            Guess the Number! 
        </h1>
        
        <form>
            <h1> <?php echo $number;?></h1>
            
            <form action="" method='POST'>
            <input type="text" name="guess"><br>
            <input type="submit" name="Submit" value="Guess"><br>
            <input type="submit" name="giveUp" value="Give Up"><br>
            <input type="submit" name="playAgain" value="Play Again"><br>
        </form>

    </body>
</html>