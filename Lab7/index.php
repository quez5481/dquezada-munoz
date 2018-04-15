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
        <title>Log in</title>
        <link href="styles.css"type="text/css" rel="stylesheet" />
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
</htmml>