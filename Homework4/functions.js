window.onload = play();

function play()
{
    var deck = []; 
    for(var i=0; i<=3; i++)
    {
        for(var j=1; j<=13; j++)
        {
            var crypt = (i * 100) + j; // Encodes each card into a value as suit in "hundreds" place and card as "ones" and "tens" place
            deck.push(crypt); // Creates Deck in-order
        }
    }
    var shuffledDeck = shuffle(deck); // Shuffles Deck
    
    dealGame(shuffledDeck);
}

function shuffle (unshuffledDeck) 
{
        var i = 0, j = 0, temp = null;

    for (i = unshuffledDeck.length - 1; i > 0; i -= 1) 
    {
        j = Math.floor(Math.random() * (i + 1))
        temp = unshuffledDeck[i]
        unshuffledDeck[i] = unshuffledDeck[j]
        unshuffledDeck[j] = temp
    }
    return unshuffledDeck;
}

function dealGame(shuffledDeck)
{
    var players = 
    [
        {
            0: "p1",
            1: 0,
            2: 0
        },
        {
            0: "p2",
            1: 0,
            2: 0
        },
        {
            0: "p3",
            1: 0,
            2: 0
        },
        {
            0: "p4",
            1: 0,
            2: 0
        },
        {
            0: "river",
            1: 0,
            2: 0,
            3: 0,
            4: 0,
            5: 0
        }
    ];
    
    var round = 1;
    do
    {
        for(var player = 0; player <= 3; player++)
        {
             var lastCard = shuffledDeck.pop(); 
            players[player][round] = lastCard; // "Deals cards to players" stores in array
        }
        round++;
    }
    while(round <= 2);
    
    for(var i = 0; i <= 4; i++)
    {
        lastCard = shuffledDeck.pop();
        players[4][i] = lastCard; // "Deals river" stores river in array
    }
    displayGame(players);
}

function displayGame(playerCards)
{
    for(var i = 0; i <= 4; i++)
    {
        $("#river").append(displayCard(playerCards[4][i]));// Displays River
    }

    var player = 0;
    
    do
    {   
        $("#cards").append("<h4>Player " + (player+1) + "</h4><div id='player" + (player+1) + "'></div>");
        for(var hand = 1; hand <= 2; hand++)
        {
            $("#player" + (player+1)).append(displayCard(playerCards[player][hand])); // Displays Player Hands
        }
        player++;
    }
    while(player <= 3);
    
}

function displayCard(card)
{
    var suit = Math.floor(card/100); // decrypts suit
    var value = card%100; // decrpyts card
    
    // console.log(suit);
    // console.log(value);
    
    var image = "<img src='cards/" + suit + "/" + value + ".png'>"
    
    return image;
}

