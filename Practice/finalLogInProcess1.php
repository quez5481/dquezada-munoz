<?php

    session_start();
 
    // print_r($_POST);  //displays values passed in the form
    
    include 'dbConnection.php';
    $conn = getDatabaseConnection("final_practice");
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    
    // echo $password;
    
    // The following does not prevent SQL injection
    // $sql = "SELECT * 
    //         FROM admin
    //         WHERE username = '$username'
    //         AND   password = '$password'";
    
    // The following does prevent SQL injection     
    $sql = "SELECT * 
            FROM fp_login
            WHERE username = :username
            AND   password = :password";
            
    $np = array();
    $np[":username"] = $username;
    $np[":password"] = $password;
            
    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    $record = $stmt->fetch(PDO::FETCH_ASSOC); // expecting one single record
    
    print_r($record);

    if (empty($record))
    {
        $sql1 = "UPDATE fp_login
                 SET lastLoginStatus = :lastLoginStatus
                 WHERE username = :username";
        $np1 = array();
        $np1[":username"] = $username;
        $np1[":lastLoginStatus"] = "U";        
        $statement = $conn->prepare($sql1);
        $statement->execute($np1); 
        
        header("Location:final1.php?msg=failed");
    } 
    else
    {   
        $sql2 = "UPDATE fp_login
                 SET lastLoginStatus = :lastLoginStatus
                 WHERE username = :username";
        $np2 = array();
        $np2[":username"] = $username;
        $np2[":lastLoginStatus"] = "S"; 
        $statement = $conn->prepare($sql2);
        $statement->execute($np2); 
        
        $_SESSION['adminName'] = $record['username'];
        header("Location:finalAdmin.php");
    }

?>