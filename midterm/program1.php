<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <style type="text/css">
            td
            {
                border: solid black 1px;
                height:150px;
                width:150px;
            }
        </style>
    </head>
    <body>
        
        <?php
        
            if (!isset($_GET['locations']) || !isset($_GET['order']))
            {
        
              echo "<h2> You must enter a number of locations and order of visits </h2>";
            
            }  
        ?>
        
        <h1>Winter Vacation Planner!</h1>
        
        <form> 
        
            <label for="month">Select Month: </label>
            <select id="month" name="month">
              <option value="0">Select</option>
              <option value="1">November</option>
              <option value="2">December</option>
              <option value="3">January</option>
              <option value="4">February</option>
            </select>
            
            
            <br/>
            <br/>
            
            <fieldset>
                <legend>Number of locations: </legend>
                <input id="three" type="radio" name="locations" value="3">
                <label for="three">Three</label><br>
                <input id="four" type="radio" name="locations" value="4">
                <label for="four">Four</label><br>
                <input id="five" type="radio" name="locations" value="5">
                <label for="five">Five</label><br>
            </fieldset>
            
            <br/>
            <br/>
            
            <label for="country">Select Country: </label>
            <select id="country" name="country">
              <option value="usa">USA</option>
              <option value="mexico">Mexico</option>
              <option value="france">France</option>
            </select>
            
            <br/>
            <br/>
            
            <fieldset>
                <legend>Visit locations in alphabetical order: </legend>
                <input id="order" type="radio" name="order" value="0">
                <label for="order">A-Z</label><br>
                <input id="not" type="radio" name="order" value="1">
                <label for="not">Z-A</label><br>
            </fieldset>
            
            <br/>
            <br/>
            
            <input type="submit" value="Create Itinerary"/>
        </form>   
        
    <h1> </h1>
    <h2> </h2>
    
    
    
    <?php
    
    // echo $_GET['month'];
    // echo $_GET['locations'];
    // echo $_GET['country'];
    // echo $_GET['order'];
    
    $days = 32;
    switch ($_GET['month']) 
    {
        case 1: // november
            $days = 30;
            break;
        case 2: // december
            $days = 31;
            break;
        case 3: // january
            $days = 31;
            break;
        case 4: // february
            $days = 28;
            break;
    }
    
    
    $day[] = array();
    // NUMBER OF LOCATIONS
    for($l=0; $l < $_GET['locations']; $l++)
    {
        $rand = rand(1, $days);
        echo $rand;
        array_push($day, $rand);
    
    }
    
    
    
    if($_GET['month'] != 0)
    {
        echo "<table>";
        echo "<tbody>";
        for($i=1; $i<6; $i++)
        {
            echo "<tr>";
            for($j=1; $j<8; $j++)
            {
                $stop = ($j + ($i - 1) * 7);
                
                if( $stop <= $days)
                {
                    echo "<td> " . ($j + ($i - 1) * 7) . " </td>";
                    if($stop == $day[0] || $stop == $day[1] || $stop == $day[2] || $stop == $day[3] || $stop == $day[4])
                    {
                        echo "";
                    }
                }
            }
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        
        
        
        echo "Month Selected: ";
        echo $_GET['month'];
        echo " <br/>";
        
        echo "Number of locations Selected: ";
        echo $_GET['locations'];
        echo " <br/>";
        
        echo "Country Selected: ";
        echo $_GET['country'];
        echo " <br/>";
        
        echo "Order Selected: ";
        echo $_GET['order'];
        echo " <br/>";
    }
    else 
    {
        echo "Must choose a month";
    }
    
    
    
    

    
    
    ?>
    
    
          <td>Errors are displayed if month or number of locations are not submitted.</td>
          <td width="20" align="center">5</td>
        </tr> 
        <tr style="background-color:green">
          <td>3</td>
          <td>Header and Subheader are displayed with info submitted. </td>
          <td align="center">5</td>
        </tr>    
    	<tr style="background-color:green">
          <td>4</td>
          <td>A table with days and weeks is displayed when submitting the form</td>
          <td align="center">5</td>
        </tr> 
        <tr style="background-color:green">
          <td>5</td>
          <td>The number of days in the table correspond to the month selected</td>
          <td align="center">10</td>
        </tr>
        <tr style="background-color:#FFC0C0">
          <td>6</td>
          <td>Random images are displayed in random days</td>
          <td align="center">5</td>
        </tr>       
        <tr style="background-color:#FFC0C0">
          <td>7</td>
          <td>The number of random images correspond to the number of locations and country submitted</td>
          <td align="center">10</td>
        </tr>  
        <tr style="background-color:#FFC0C0">
          <td>8</td>
          <td>The proper name of the location is displayed below the image 
          		(e.g. "New York", "Las Vegas")</td>
          <td align="center">10</td>
        </tr>  
        <tr style="background-color:green">
          <td>9</td>
          <td>The list of months submitted along with the country and number of locations is displayed below the table (using Sessions)</td>
          <td align="center">15</td>
        </tr>    
        <tr style="background-color:#FFC0C0">
          <td>10</td>
          <td>Random locations should be ordered alphabetically, if user checks corresponding radio button (A-Z or Z-A). </td>
          <td align="center">15</td>
        </tr>        
        <tr style="background-color:#FFC0C0">
          <td>11</td>
          <td>The web page uses Bootstrap and has a nice look. </td>
          <td align="center">5</td>
        </tr>        
        <tr style="background-color:#99E999">
          <td>12</td>
          <td>This rubric is properly included AND UPDATED (BONUS)</td>
          <td width="20" align="center">2</td>
        </tr>     
         <tr>
          <td></td>
          <td>T O T A L </td>
          <td width="20" align="center"><b></b></td>
        </tr> 
      </tbody></table>
    </body>
</html>