<?php
            
    //$cards = array("ace", "one", 2);
    $cards = array();
    $suits = array("clubs", "diamonds", "hearts", "spades");
    array_push($cards, "ace", "king", "queen", "jack", "ten"); // adds element at the end of array
    // print_r($cards);
    // var_dump($cards);
    // echo $cards;
    // echo $cards[0];
    // $cards[] = "jack"; // adds new element at the end of the array
    
    
    
    function displayCard($suit, $card)
    {
       
        echo "<img src='../Challenge2/img/cards/$suit/$card.png'>"; 
    }
    
    // displayCard($cards[0]);
    
    print_r($suits);
    print_r($cards);
    echo "<hr>";
    // $lastCard = array_pop($cards);
    
    $i = 0;
    do 
    {
        $randomSuit = rand(0, count($suits)-1);
        $randomIndex = rand(0, count($cards)-1);
        displayCard($suits[$randomSuit], $cards[$randomIndex]);
        $i++;
        
    } 
    while($i<4);
    
    
    
    
    
    
    
    echo "<hr>";
    print_r($suits);
    print_r($cards);
    
    // unset($cards[1]);
    // echo "<hr>";
    // print_r($cards);
    
    // $cards = array_values($cards);
    // echo "<hr>";
    // print_r($cards);
    
    // shuffle($cards);
    // echo "<hr>";
    // print_r($cards);
    
    // $randomIndex = rand(0, count($cards)-1);
    // echo "<hr>";
    // displayCard($cards[$randomIndex]);
    
    // $randomIndex2 = array_rand($cards);
    // displayCard($cards[$randomIndex2]);
    
    
    
?>


<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        
        
        

    </body>
</html>