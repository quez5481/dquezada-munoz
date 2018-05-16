<?php

    include '../Practice/dbConnection.php';
    
    $conn = getDatabaseConnection("final");
    
    // next query allows for SQL injection because of the single quotes
    // $sql = "SELECT * FROM lab9_user WHERE username = '$username'";
    
    $sql = "SELECT Distinct name, firstName, lastName FROM superhero ORDER BY firstName";
    
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // print_r($record);
    
    echo json_encode($record);

?>