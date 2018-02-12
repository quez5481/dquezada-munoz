<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <meta charset="utf-8"/>
    </head>
    <body>
        
        <?php
        
            function displaySymbol($randomValue)
            {
                // if($random == 0)
                // {
                //     $symbol = "seven";
                // }
                // else if($random == 1)
                // {
                //     $symbol = "lemon";
                // }
                // else
                // {
                //     $symbol = "cherry";
                // }
                
                switch($randomValue)
                {
                    case 0: $symbol = "seven";
                            break;
                    case 1: $symbol = "lemon";
                            break;
                    case 2: $symbol = "cherry";
                            break;
                }
    
                echo "<img src=\"img/$symbol/$value.png\" alt=\"$symbol\" width=\"70\" title='$symbol'>";
            }
            
            
            // $random1 = rand(0, 2);
            // displaySymbol($random1);
            // $random2 = rand(0, 2);
            // displaySymbol($random2);
            // $random3 = rand(0, 2);
            // displaySymbol($random3);
            
            for($i=0; $i<=2; $i++)
            {
                ${"randomValue" . $i} = rand(0, 2);
                displaySymbol(${"randomValue" . $i});
            }
        ?>
        
        
        <!--<img src="img/lemon.png" alt="Lemon" width="70" title="Lemon">-->
        <!--<img src="img/cherry.png" alt="Cherry" width="70" title="Cherry">-->
        <!--<img src="img/orange.png" alt="Orange" width="70" title="Orange">-->
        
        
        
        
        
        
        
        
        
        
        <footer>
            <br/><br/>
            <div>
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