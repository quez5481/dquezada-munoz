<?php

$letters = array(); 
$numbers = array(); 

for($i = 65; $i <= 90; $i++)
{
    array_push($letters, chr($i)); 
}
for($i = 1; $i <= 9; $i++)
{
    array_push($numbers, $i);    
}


function createPassword()
{
    
    $length = rand(5,10);
    $pass = array();
    $quantityNumbers = rand(1, 3);
    
    
    $count = 0; 
    
    
    for($i=1; $i<=$length; $i++)
    {
        $value = rand(0,1); 
        if($count == $quantityNumbers)
        {
            $value = 0;
        }
        switch($value)
        {
            case 0: array_push($pass, $letters[rand(0, 25)]); 
                break;
            case 1: array_push($pass, $numbers[rand(1,9)]); 
                    $count++; 
                break;
        }
    }
      print_r(array_values($pass));  
  
}



?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
    <td>
        <?php
            for($i = 0; $i < 25; $i++)
            {
                echo "<tr>";
                createPassword();
                echo "</tr>";
                
            }
        ?>
    </td>

    </body>
</html>