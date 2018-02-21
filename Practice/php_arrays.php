<?php

    session_start();
    
    $_SESSION['player1'] = 0;
    $_SESSION['player2'] = 0;
    $_SESSION['player3'] = 0;
    $_SESSION['player4'] = 0;
            
    // $cards = array("ace", "one", 2);
    // $cards = array();
    // $suits = array("clubs", "diamonds", "hearts", "spades");
    // array_push($cards, "1", "2", "queen", "jack", "ten"); // adds element at the end of array
    // print_r($cards);
    // var_dump($cards);
    // echo $cards;
    // echo $cards[0];
    // $cards[] = "jack"; // adds new element at the end of the array
    
    
    
    function play()
    {
        
        createDeck();
    }
    
    function createDeck()
    {
        $deck = array();
        for($i=0; $i<=3; $i++)
        {
            for($j=1; $j<=13; $j++)
            {
                $crypt = ($i * 100) + $j;
                array_push($deck, $crypt);
            }
        }
        shuffle($deck);
        getHand($deck);
    }
    
    function getHand($shuffledDeck)
    {
        $players = array(array("p1", 0, 0, 0, 0, 0, 0), array("p2", 0, 0, 0, 0, 0, 0), array("p3", 0, 0, 0, 0, 0, 0), array("p4", 0, 0, 0, 0, 0, 0));
        $player = 1;
        do
        {
            $sum = 0;
            for($i = 1; $i <= 6; $i++)
            {
                $lastCard = array_pop($shuffledDeck);
                $players[$player][$i] = $lastCard;
                $score = $lastCard%100;
                $sum = $sum + $score;
                echo $sum;
                
            }
            $player++;
        }
        while($player <= 4);
        displayHands($players);
    }
    
    function displayHands($game)
    {
        $player = 1;
        do
        {
            for($i = 1; $i <= 6; $i++)
            {
                displayCard($game[$player][$i]);
            }
            $player++;
            echo "<br>";
        }
        while($player <= 4);
    }
    
    
    
    function displayCard($card)
    {
        $suit = $card/100;
        $value = $card%100;
        echo "<img src='../Practice/cards/.png'>"; 
    }
    
    
    function displayWinners()
    {
        // SESSION VARIABLES
    }
    
    
   
     
    // displayCard($cards[0]);
    
    // print_r($suits);
    // print_r($cards);
    // echo "<hr>";
    // $lastCard = array_pop($cards);
    
    // $i = 0;
    // do 
    // {
    //     $randomSuit = rand(0, count($suits)-1);
    //     $randomIndex = rand(0, count($cards)-1);
    //     displayCard($suits[$randomSuit], $cards[$randomIndex]);
    //     $i++;
    // } 
    // while($i<4);
    
    
    // echo "<hr>";
    // print_r($suits);
    // print_r($cards);
    
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
        
        <?php 
            include 'inc/functions.php';
            play();
        ?>
        

    </body>
</html>