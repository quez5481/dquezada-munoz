<?php
    
    include '../Practice/dbConnection.php';
    
    $conn = getDatabaseConnection("final");
    
    $name = $_GET['superheroes'];
    
    echo $name;
    
    // next query allows for SQL injection because of the single quotes
    // $sql = "SELECT * FROM lab9_user WHERE username = '$username'";
    
    $sql = "SELECT * FROM superhero WHERE name = :name";
    
    
    $stmt = $conn->prepare($sql);
    $stmt->execute( array(":name"=>$name));
    $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // print_r($record);
    
    echo json_encode($record);

?>