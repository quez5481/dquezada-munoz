<?php


    $productId = $_GET['productId'];


    
    include 'dbConnection.php';
    $conn = getDatabaseConnection("ottermart");

    $productId = $_GET['productId'];

    $sql9 = "SELECT * FROM `product`
            NATURAL JOIN purchase 
            WHERE productId = :pId";    
    
    $np = array();
    $np[":pId"] = $productId;
    
    $stmt = $conn->prepare($sql9);
    $stmt->execute($np);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

    print_r($records);
    
    echo $records[0]['productName'] . "<br>";
    echo "<img src='" . $records[0]['productImage'] . "' width='200' /><br/>";
    
    foreach ($records as $record) {
        
        echo "Purchase Date: " . $record["purchaseDate"] . "<br />";
        echo "Unit Price: " . $record["unitPrice"] . "<br />";
        echo "Quantity: " . $record["quantity"] . "<br />";
     
    }

 ?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>