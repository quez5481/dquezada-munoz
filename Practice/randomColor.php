<?php

    function generateRandomColor()
    {
        switch($randomValue)
        {
            case 0: $symbol = "clubs";
                    break;
            case 1: $symbol = "diamonds"; 
                    break;
            case 2: $symbol = "hearts";
                    break;
            case 3: $symbol = "spades";
                    break;
        }
        switch($randomValue)
        {
            case 0: $symbol = "ace";
                    break;
            case 1: $symbol = "jack"; 
                    break;
            case 2: $symbol = "queen";
                    break;
            case 3: $symbol = "king";
                    break;
            case 4: $symbol = "ten";
                    break;
        }
        echo "<img src=\"img/$symbol/$value.png\" alt=\"$symbol\" width=\"70\" title='$symbol'>";
       
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Random Color</title>
        <style>
            
            body
            {
                <?php
                    echo "background-color: rgba(".rand(0, 255).", ".rand(0, 255).", ".rand(0, 255).", ".(rand(0,100)/100).")";
                ?>
            }
            h1
            {
                color: <?php generateRandomColor() ?>;
            }
            h2
            {
                color: <?php generateRandomColor() ?>;
            }
        </style>
    </head>
    
    <body>
        
        <h1>Welcome!</h1>
        <h2>Random Background Color</h2>
        
        
    </body>
</html>