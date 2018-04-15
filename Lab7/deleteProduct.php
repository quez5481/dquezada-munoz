<?php

    include '../Practice/dbConnection.php';
    
    $connection = getDatabaseConnection("ottermart");
    
    $sql = "DELETE FROM product WHERE productId =  " . $_GET['productId'];
    $statement = $connection->prepare($sql);
    $statement->execute();
    
    header("Location: admin.php?msg=deleted");
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link href="styles.css"type="text/css" rel="stylesheet" />
    </head>
    <body>

    </body>
</html>