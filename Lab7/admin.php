<?php

    session_start();
    
    // if(!isset($_SESSION['adminName']))
    // {
    //     header("Location:index.php");
    // }
    
    
    include '../Practice/dbConnection.php';
    
    $conn = getDatabaseConnection("ottermart");
    
    function displayAllProducts()
    {
        global $conn;
        
        $sql = "SELECT *
                FROM product";
                
                
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        
        // print_r($records);
        
        return $records;
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Main Page </title>
    </head>
    <body>


        
        <h1> Admin Main Page </h1>
        
        <h3> Welcome <?=$_SESSION['adminName']?>! </h3>

        <br />
        
        <form action="addProduct.php">
            <input type="submit" name="addproduct" value="Add Product"/>
        </form>
        
        <strong> Products: </strong> <br />
        
        <?php 
        
            $records=displayAllProducts();
            
            foreach($records as $record)
            {
                echo "<a href='updateProduct.php?productId=".$record['productId']."'>Update</a";
                echo "<a href='deleteProduct.php?productId=".$record['productId']."'>Delete</a>";
                echo $record['productName'];
                echo '<br>';
            }
            
        ?>
        
        
        
    </body>
</html>