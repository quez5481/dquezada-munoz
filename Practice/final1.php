<?php
    if (isset($_GET["msg"]) && $_GET["msg"] == 'failed')
    {
        echo "<strong>Wrong Username or Password</strong><br><br>";
    }
    if (isset($_GET["msg"]) && $_GET["msg"] == 'exit')
    {
        echo "<strong>Successful Logout</strong><br><br>";
    }
    echo "<strong>Current Time and Date: </strong>" . date("Y-m-d h:i:s");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practice Final 1</title>
        
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
                //EVENTS
                $("#username").change( function()
                { 
                    //alert( $("#username").val() )
                    $.ajax
                    ({
                        type: "GET",
                        url: "finalCheck1.php",
                        dataType: "json",
                        data: 
                        { 
                            "username": $("#username").val() 
                        },
                        success: function(data,status)
                        {
                             //alert(data);
                             if($("#username").val() == "")
                             {
                                $("#user").html("<span></span>");
                             }
                             else if (!data) 
                             {  
                                // alert("Username is Available");
                                $("#user").html("<span style='color:green;'></span>");
                             } 
                             else 
                             { 
                                // alert("Username is ALREADY TAKEN");
                                $("#user").html("<span style='color:red'>Last Login: " + data.lastLogin + "</span>");
                                $("#lastLogIn").html("<span style='color:red'>Last Login Status: " + data.lastLoginStatus + "</span>");
                             }
                        },
                        complete: function(data,status) 
                        {
                            //optional, used for debugging purposes
                            //alert(status);
                        }
                    });//ajax
                }); // Username Event 
            }); // documentReady
        </script>
        
        <style>
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
            body
            {
                background-color:Lavender;
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
        <div class="jumbotron myJumbotron">
          <h1> Sign Up Form </h1>
        </div>
        <div class='container text-center'>
            <form method="POST" action="finalLogInProcess1.php">
                <fieldset>
                    
                    Username:   <input id="username" name="username" type="text"><span id="user"></span><span id="lastLogIn"></span><br>
                    Password:   <input name="password" type="password"><br>
                    
                    <input type="submit" value="Login!" name="submitForm"><br><br><br><br>
                </fieldset>
            </form>
        </div>
        
        
        <br><br><br>
        
          
        <!--<table border="1" width="600">-->
        <!--<tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>-->
        <!--    <tr style="background-color:#99E999">-->
        <!--        <td>1</td>-->
        <!--        <td>There is a Login form with all appropriate HTML elements</td>-->
        <!--        <td width="20" align="center">5</td>-->
        <!--    </tr>-->
        <!--    <tr style="background-color:#99E999">-->
        <!--        <td>2</td>-->
        <!--        <td>When changing the username, an AJAX call is executed, displaying the last date/time the user logged in and the last login status (Successful, Unsuccessful)</td>-->
        <!--        <td align="center">15</td>-->
        <!--    </tr>  -->
        <!--    <tr style="background-color:#99E999">-->
        <!--        <td>3</td>-->
        <!--        <td>When submitting the Login form, the last date/time is updated correctly </td>-->
        <!--        <td align="center">15</td>-->
        <!--    </tr>  -->
        <!--    <tr style="background-color:#99E999">-->
        <!--       <td>4</td>-->
        <!--       <td> When submitting the Login form, the Login Status is updated accordingly, whether it was Successulf (S) or Unsuccessful (U) </td>-->
        <!--       <td align="center">20</td>-->
        <!--    </tr> -->
        <!--    <tr style="background-color:#99E999">-->
        <!--       <td>5</td>-->
        <!--       <td>When submitting the Login form, if the credentials are wrong, the user is taking back to the login screen. </td>-->
        <!--       <td align="center">5</td>-->
        <!--    </tr> -->
        <!--    <tr style="background-color:#99E999">-->
        <!--        <td>6</td>-->
        <!--        <td>When submitting the Login form, if the credentials are correct, a "username" session variable is set and it is displayed in a new page called <strong>"welcome.php"</strong> </td>-->
        <!--        <td align="center">10</td>-->
        <!--    </tr> -->
        <!--     <tr style="background-color:#99E999">-->
        <!--        <td>7</td>-->
        <!--        <td>This rubric is properly included AND UPDATED (BONUS)</td>-->
        <!--        <td width="20" align="center">2</td>-->
        <!--    </tr>     -->
        <!--    <tr>-->
        <!--        <td></td>-->
        <!--        <td>T O T A L </td>-->
        <!--        <td width="20" align="center"><b></b></td>-->
        <!--    </tr> -->
        <!--</tbody></table>-->

        
        <br><br><br>
        
        <?php
            include 'footer.php';
        ?>
    </body>
</html>