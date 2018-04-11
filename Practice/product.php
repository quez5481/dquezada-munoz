<?php


    $productId = $_GET['ID'];

    include '../Practice/dbConnection.php';
    
    $conn = getDatabaseConnection("ottermart");
    
    $productId = $_GET['ID'];


    $sql9 = "SELECT * FROM `PRICE`
            WHERE ID = :pId";    
    
    $np = array();
    $np[":pId"] = $productId;
    
    $stmt = $conn->prepare($sql9);
    $stmt->execute($np);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

    print_r($records);
    
    // echo $records[0]['productName'] . "<br>";
    // echo "<img src='" . $records[0]['productImage'] . "' width='200' /><br/>";
    
    foreach ($records as $record) {
        
        echo "Title: " . $record["Title"] . "<br />";
        echo "Price: " . $record["Price"] . "<br />";
     
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