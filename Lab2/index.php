<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <meta charset="utf-8"/>
        <style>
            footer
            {
                text-align: center;
                clear: both;
                font-size:.8em;
                padding-top: 10px;
            }
            footer img
            {
                clear: both;
                display: block;
                margin: 0px auto;
                
            }
        </style>
    </head>
    <body>
        
        <h1>
            HERE
        </h1>
        
        <?php
        
            $symbol = "lemon";
            $randomValue = 1; 
            $random= rand(0, 3);
            
            if($randomValue == 1)
            {
                echo "<img src=\"img/$symbol.png\" alt=\"Lemon\" width=\"70\" title='Lemon'>";
            }
        
            
        
        ?>
        
        
        <img src="img/lemon.png" alt="Lemon" width="70" title="Lemon">
        <img src="img/cherry.png" alt="Cherry" width="70" title="Cherry">
        <img src="img/orange.png" alt="Orange" width="70" title="Orange">
        
        
        
        
        
        <footer>
            <br/><br/>
            <div id="ft">
                <hr>
                Internet Programming. 2018&copy; Quezada <br/>
                <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br/>
                It is used for academic purposes only.
            </div>
            <br/>
            <img src="img/csumb_logo_150_86.jpg" alt"csumbLogo">
        </footer>
    </body>
</html>