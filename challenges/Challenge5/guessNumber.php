<?php
    session_start();
    // session_destroy();
    // print_r($_SESSION);
    
    if (!isset($_SESSION['randomNumber']) || isset($_GET['reset']))
    {
        $_SESSION['randomNumber'] = rand (1,5);
        $_SESSION['tries'] = 0;
    }
    
    if (isset($_GET['giveUp'])) 
    {
        echo "<h3> The number was: <br />";
        echo $_SESSION['randomNumber'] . "</h3>";
    }
    
    function compareNumbers($guess,$number)
    {
        if ($guess > $number) 
        {
            echo "<p>Your guess is too high</p> <br />";
        }
        else if ($guess < $number) 
        {
            echo "<p>The guess is to low</p> <br />";
        } 
        else 
        {
              echo "<p>You've guessed the   number!</p> <br />";
              $_SESSION['numberGuessed'][] = $number;
              $_SESSION['totalTries'][] = $_SESSION['tries'];
              $_SESSION['numberGuessed'] = 0;
        }
    }
    
     
    
    
    ?>
    <!DOCTYPE html>
    <html>
        <head>
        <title>Guess the Number</title>
      
        </head>
        <body>

            <h2> Guess a number between 1 and 100!</h2>
            <form>
            
            Guess: <input type="text" name="guess" size="3"/>
            
            
            <br /><br />
            
            <input type="submit" value="Guess Number" name="guessForm"/>
            
            <br /><br />
            <input type="submit" value="Give Up" name="giveUp"/>
            <input type="submit" value="Play Again" name="reset"/>
            
            </form>
            <?php
                if (isset($_GET['guessForm'])) 
                {
                    echo "<br />Number of tries: " . ++$_SESSION['tries'] . "<br />";
                    compareNumbers( $_GET['guess'],$_SESSION['randomNumber']);
                }
            ?>
            
            
            <?php
            
                if (isset($_SESSION['numberGuessed'])) 
                {
                    echo "<h3> Guesses History </h3>";
                    for ($i=0; $i < count($_SESSION['numberGuessed']); $i++ ) 
                    {
                        echo "You guessed the number " . $_SESSION['numberGuessed'][$i] . " in ". $_SESSION['totalTries'][$i] . " attempts <br />";
                    }
                
                }
            ?>
    </body>
</html>