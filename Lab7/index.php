<?php
    if (isset($_GET["msg"]) && $_GET["msg"] == 'failed')
    {
        echo "<strong>Wrong Username or Password</strong><br><br>";
    }
    if (isset($_GET["msg"]) && $_GET["msg"] == 'exit')
    {
        echo "<strong>Successful Logout</strong><br><br>";
    }
?>
<!DOCTYPE html>
<htmml>
    <head>
        
    </head>
    <body>
            <h1>
                Otter Mart - Log In
            </h1>
            <form method="POST" action="logInProcess.php">
                
                Username: <input type="text" name="username"/> <br/>
                Password: <input type="password" name="password"/> <br/>
                
                <input type="submit" name="submitForm" value="Login!" />
                
            </form>
        
    </body>
</htmml>