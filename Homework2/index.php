<!DOCTYPE html>
<html>
    <head>
        <title>Texas Hold 'em</title>
        <link href="style.css"type="text/css" rel="stylesheet"/>
        <style>
            h1
            {
                <?php
                    echo "color: rgba(".rand(0, 100).", ".rand(0, 100).", ".rand(0, 255).", ".(rand(0,100)/100).")";
                ?>
            }
        </style>
    </head>
    <body>
        
        <h1>Texas Hold 'em</h1>
        <h2>Hand Recognition Practice</h2>
        <br><br>
         
        <?php
            include 'functions.php';
            play();
        ?>
        
        <br><br>
        
        <p>
           This a website to practice your "Texas Hold 'em" hand recognition. There are four players in this game. 
        </p>
        
        <footer>
            <br/><br/>
            <div>
                <hr>
                Internet Programming. 2018&copy; Quezada <br/>
                <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br/>
                It is used for academic purposes only.
            </div>
            
            <br/>
            <img src="csumb_logo_150_86.jpg" alt"csumbLogo">
        </footer>

    </body>
</html>