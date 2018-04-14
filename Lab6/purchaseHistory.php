<?php


    $productId = $_GET['productId'];


    
    include 'dbConnection.php';
    $conn = getDatabaseConnection("ottermart");


    $sql = "SELECT * FROM `product`
            NATURAL JOIN purchase 
            WHERE productId = :pId";    
    
    $np = array();
    $np[":pId"] = $_GET['productId'];
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // print_r($records);
    
    if(empty($records))
    {
        echo "<br><br><h2>Product has not been purchased</h2><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    }
    else
    {
        echo "<strong>"  .  $records[0]['productName'] . "</strong><br>";
        echo "<img src='" . $records[0]['productImage'] . "' width='200' /><br/>";
    
        foreach ($records as $record)
        {
        
        echo "<strong>Purchase Date: </strong>" . $record["purchaseDate"] . "<br />";
        echo "<strong>Unit Price: </strong>" . $record["unitPrice"] . "<br />";
        echo "<strong>Quantity: </strong>" . $record["quantity"] . "<br />";
     
    }
    }
    
    

 ?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link href="styles.css"type="text/css" rel="stylesheet" />
    </head>
    <body>
    
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