<?php

    function generateRandomCard()
    {
        $count = 0;
        $randomValue2 = rand(0,4);
        $randomValue = rand(0,3);
        switch($randomValue)
        {
            case 0: $suit = "clubs";
                    break;
            case 1: $suit = "diamonds"; 
                    break;
            case 2: $suit = "hearts";
                    break;
            case 3: $suit = "spades";
                    break;
        }
        switch($randomValue2)
        {
            case 0: $cards = "ace";
                    break;
            case 1: $cards = "jack"; 
                    break;
            case 2: $cards = "queen";
                    break;
            case 3: $cards = "king";
                    break;
            case 4: $cards = "ten";
                    break;
        }
        
        
        
        
        if($count == 0)
        {
            $human = $randomValue2;
        }
        else
        {
            $computer = $randomValue2;
        }
        $count = $count + 1;
        
        echo "<img src=\"img/cards/$suit/$cards.png\" alt=\"$suit\" title='$suit'>";
       
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Challenge 2</title>
         <meta charset="utf-8"/>
         <link href="css/styles.css" rel="stylesheet" />
    </head>
    
    <body>
        
        <h1>Random Card Game</h1>
       
        <div id="card1">
        <h1 id="human">Human</h1>
            <?php
                generateRandomCard(); //Human
            ?>
        </div>
        <div id="card2">
        <h1 id="computer">Computer</h1>
            <?php
                generateRandomCard(); //Computer
                
                if($human < $computer){
                    echo "<h1> Human Loses </h1>";
                }
                else{
                    echo "<h1> Human wins </h1>";
                    
                }
                
                $count = 0;
            ?>
        </div>
        
    </body>
</html>