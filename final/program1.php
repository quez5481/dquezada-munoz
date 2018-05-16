<?php
    
    if(isset($_GET['checkAnswer']))
    {
        
        if($_GET['realName'] == 0)
        {
            echo "<strong>Please check your answer</strong><br>";
        }
        else if($records[$random]['name']  == $_GET['realName'])
        {
            echo "correct";
        }
        else if($records[$random]['name']  != $_GET['realName'])
        {
            echo "incorrect";
        }
        else
        {
            echo "";
        }
    }


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Final Program 1</title>
        
        <meta charset="UTF-8">
        <title>Final Program </title>
        
        <!-- For mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        
        
        <script>
            $(document).ready( function()
            {
                $.ajax
                ({
                    type: "GET",
                    url: "realNameApi.php",
                    dataType: "json",
                    success: function(data,status)
                    {   $('#realName').append("<option value='0'>Select One</option>");
                        for(i = 0; i<data.length; i++)
                        {
                            $('#realName').append("<option value='" + data[i].name + "'>" + data[i].firstName + " " + data[i].lastName + "</option>");
                        }
                        
                    },
                    complete: function(data,status) 
                    {
                        //optional, used for debugging purposes
                        //alert(status);
                    }
                });
            }); // documentReady
        </script>
        
        <style>
            h1
            {
                text-align:center;
            }
            footer
            {
                background-color:white;
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
            .myJumbotron
            {
                text-align:center;
                background-color:LightBlue;
                height:150px;
            }
        </style>
    </head>
    <body>


        
        <h1>What is the real Name of the following superhero?</h1>
        
        <div class='container text-center'>
            <?php
            
                $random = rand(0,6);
                
                include '../Practice/dbConnection.php';
        
                $conn = getDatabaseConnection("final");
      
                    
                $sql = "SELECT DISTINCT name, image
                        FROM superhero";
                        
                        
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $records = $stmt->fetchAll(PDO::FETCH_ASSOC); 
                
               
                
                // print_r($records);
                
                $picture = $records[$random]['name'];
                
                echo "<img src='img/superheroes/" . $records[$random]['image'] . ".png'><br><br>";
            
            ?>
        </div>
        
        
        
        <div class='container text-center'>
            <form method="GET">
                <fieldset>
                    <input type='hidden' name='answer' value='<?php echo $picture?>'/> 
                    <select name="realName" id="realName"></select><br><br>
                    <input type="submit" name="checkAnswer"><br><br><br><br>
                </fieldset>
            </form>
        </div>
        
        
        
        
        
        
        
        
        
        
        <div id="result">
            
            
        </div>
        










           
          <table border="1" width="600" cellpadding="10px">
            <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
             <tr style="background-color:#99E999">
              <td>1</td>
              <td>A random image of a superhero is displayed when refreshing the page <br></td>
              <td width="20" align="center">15</td>
             </tr>     
             <tr style="background-color:#99E999">
              <td>2</td>
              <td><p>The "real names" of the superheroes in the dropdown menu come from the database (without duplicates and in alphabetical order) <br>
                </p></td>
              <td width="20" align="center">15</td>
            </tr>     
             <tr>
              <td>3</td>
              <td>An error message is displayed if the user clicks on the "Check Answer" button without selecting anything. <br></td>
              <td width="20" align="center">10</td>
            </tr>     
             <tr>
              <td>4</td>
              <td>The right color-coded feedback (correct or incorrect) is displayed upon clicking on the "Check Answer" button <br></td>
              <td width="20" align="center">15</td>
            </tr>     
             <tr style="background-color:#FFC0C0">
              <td>5</td>
              <td>The number of times the real name for the specific superhero has been answered correctly and incorrectly is stored in the database, via AJAX (you'll need to create a new table, you decide the structure)<br></td>
              <td width="20" align="center">15</td>
            </tr>     
        
             <tr style="background-color:#FFC0C0">
              <td>6</td>
              <td>The updated number of times for total of correct and incorrect answers (for the specific superhero) is displayed, via AJAX <br></td>
              <td width="20" align="center">15</td>
            </tr>
             
             <tr style="background-color:#FFC0C0">
              <td>7</td>
              <td>The spinning images (indicating that data is being loaded) are displayed and replaced when the data is retrieved, via AJAX</td>
              <td width="20" align="center">5</td>
            </tr> 
        
             <tr style="background-color:#99E999">
              <td>8</td>
              <td>This rubric is properly included AND UPDATED</td>
              <td width="20" align="center">2</td>
            </tr>
                
             <tr>
              <td></td>
              <td>T O T A L </td>
              <td width="20" align="center">&nbsp;</td>
            </tr> 
          </tbody></table>
        
        <footer>
            <br/><br/>
            <div>
                <hr>
                Internet Programming. 2018&copy; Quezada <br/>
                <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br/>
                It is used for academic purposes only.
            </div>
            
            <br/>
            <img src="../Practice/csumb_logo_150_86.jpg" alt="csumbLogo">
        </footer>
        
        
        
    </body>
</html>