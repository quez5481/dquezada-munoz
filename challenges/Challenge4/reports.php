<?php

    $sql1 = 
    "SELECT COUNT(1)
    FROM purchase p
    INNER JOIN user u
    on p.user_id = u.userId
    WHERE purchaseDate >= \"2018-02-01\" AND purchaseDate <= \"2018-02-29\"";
    
    $sql2 = 
    "SELECT productName
    FROM user u
    INNER JOIN purchase p
    on u.userId = p.user_id
    NATURAL JOIN product
    WHERE email LIKE \"%@aol.com\" ";
    
    $sql3 = 
    "SELECT SUM(quantity), sex
    FROM user u
    INNER JOIN purchase p
    on u.userId = p.user_id
    GROUP BY sex";
    
    $sql4 = 
    "SELECT DISTINCT(catName)
    FROM purchase p
    INNER JOIN user u
    on p.user_id = u.userId
    NATURAL JOIN product 
    NATURAL JOIN category cat
    WHERE purchaseDate >= \"2018-02-01\" AND purchaseDate <= \"2018-02-29\"";
    
    
    $host = "localhost";
    $dbname = "ottermart";
    $username = "root";
    $password = "";
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $dbConn->prepare($sql1);
    $stmt->execute();
    $records = $stmt->fetch();
    
    // print_r($records);
    
    echo "Total Purchases in February: " . $records['totalPurchases'];
    
    $stmt = $dbConn->prepare($sql2);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<br/><br/>Products bought by users with an AOL account: <br />";
 
    foreach ($records as $record)
    {
        echo $record['productName']  . "<br />";
    }

    print_r($records);
    
    $stmt = $dbConn->prepare($sql3);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    
    
    // print_r($records);
    
    echo "Total Purchases in February: " . $records['totalPurchases'];
?>
 
