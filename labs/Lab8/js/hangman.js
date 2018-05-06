
var alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 
                'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 
                'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
                
var selectedWord = "";
var selectedHint = "";
var remainingGuesses =  6;
var board = []; // array
// var board = new Array;
var words= [{word: "snake", hint: "It's a reptile!"},
            {word: "monkey", hint: "It's a primate!"},
            {word: "beetle", hint: "It's an insect!"},
            {word: "horse", hint: "It's a trusty steady!"},
            {word: "dog", hint: "It's a man's best friend!"}];


window.onload = startGame();

// $("#letterBtn").click(function()
// { 
   
//      alert($("#letterBox").val()); 
     
// });
 
$(".letter").click( function() 
{ 
    checkLetter($(this).attr("id")); 
    disableButton($(this));
});
 
$(".replayBtn").on("click", function()
{
    location.reload();
});
$(".hint").on("click", function()
{
    $("#word").append("<span class='hint'>Hint: " + selectedHint + "</span>");
    $("#hint").hide();
    remainingGuesses -= 1;
    updateMan();
});


 
 //document.getElementById("letterBtn")
 
 

function startGame()
{ 
    pickWord();
    initBoard();
    createLetters();
    updateBoard();
}

// alert(words[[0]);
// console.log(words[5]);
function pickWord()
{
    var randomInt = Math.floor(Math.random() * words.length);
    console.log(randomInt);
    selectedWord = words[randomInt].word.toUpperCase();
    selectedHint = words[randomInt].hint;
    // console.log(selectedWord);
}



// for(var i=0; i < selectedWord.length; i++)
// {
//     board.push("_");
// }

function initBoard()
{
    for(var letters in selectedWord)
    {
        board.push("_");
    }
    
    console.log(board);
}

function createLetters()
{
    for(var letter of alphabet)
    {
        $("#letters").append("<button class='letter' id='" + letter + "'>" + letter + "</button>");
    }
}

function checkLetter(letter)
{
    var positions = new Array();
    
    for (var i = 0; i < selectedWord.length; i++)
    {
        console.log(selectedWord)
        if(letter == selectedWord[i])
        {
            positions.push(i);
        }
    }
    
    if(positions.length > 0)
    {
        updateWord(positions, letter);
        
        if(!board.includes('_'))
        {
            endGame(true);
            $("#guesses").append("<h5>" + selectedWord + "</h5><br/>");
        }
    }
    else
    {
        remainingGuesses -= 1;
        updateMan();
        $("#hint").show();
    }
    if(remainingGuesses <= 0)
    {
        endGame(false);
        $("#guesses").append("<h5>" + selectedWord + "</h5><br/>");
    }
}

function updateWord(positions, letter)
{
    for(var pos of positions)
    {
        board[pos] = letter;
    }
    
    updateBoard();
}

function updateBoard()
{
    $("#word").empty();
    
    // for (var letter of board) 
    // {
    //     document.getElementById("word").innerHTML += letter + " ";
    // }
    
    for(var i=0; i < board.length; i++)
    {
        $("#word").append(board[i] + " ")
    }
    $("#word").append("<br />")
}

function updateMan()
{
    $("#hangImg").attr("src", "img/stick_" + (6 - remainingGuesses) + ".png");
}


function disableButton(btn)
{
    btn.prop("disabled", true);
    btn.attr("class", "btn btn-danger");
}

function endGame(win)
{
    $("#letters").hide();
    
    if(win)
    {
        $("#won").show();
    }
    else
    {
        $("#lost").show();
    }
}
