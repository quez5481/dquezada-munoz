<?php

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
                $crypt = ($i * 100) + $j; // Encodes each card into a value as suit in "hundreds" place and card as "ones" and "tens" place
                array_push($deck, $crypt); // Creates Deck in-order
            }
        }
        shuffle($deck); // Shuffles Deck
        deal($deck);
    }
    
    function deal($shuffledDeck)
    {
        $players = array(array("p1", 0, 0), array("p2", 0, 0), array("p3", 0, 0), array("p4", 0, 0), array("river", 0, 0, 0, 0, 0)); // 4 Players and River
        
        $round = 1;
        do
        {
            $sum = 0;
            for($player = 0; $player <= 3; $player++)
            {
                $lastCard = array_pop($shuffledDeck); 
                $players[$player][$round] = $lastCard; // "Deals cards to players" stores in array
            }
            $round++;
        }
        while($round <= 2);
        
        for($i = 0; $i <= 4; $i++)
        {
            $lastCard = array_pop($shuffledDeck);
            $players[4][$i] = $lastCard; // "Deals river" stores river in array
        }
        displayGame($players);
    }
    
    function displayGame($playerCards)
    {
        echo "<div id='river'>";
        for($i = 0; $i <= 4; $i++)
        {
            displayCard($playerCards[4][$i]); // Displays River
        }
        echo "</div>";
        echo "<br><br><br>";
        
        $player = 0;
        echo "<div id='cards'>";
        do
        {
            echo "<div id='playerCards'>";
            for($hand = 1; $hand <= 2; $hand++)
            {
                displayCard($playerCards[$player][$hand]); // Displays Player Hands
            }
            $player++;
            echo "</div>";
        }
        while($player <= 3);
        echo "</div>";
    }
    
    function displayCard($card)
    {
        $suit = floor($card/100); // decrypts suit
        $value = $card%100; // decrpyts card
        // echo $suit;
        // echo $value;
        echo "<img src='cards/$suit/$value.png'>"; 
    }
?>