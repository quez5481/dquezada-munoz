<?php
    
    
    session_start();
    if(!isset( $_SESSION['adminName']))
    {
      header("Location:index.php");
    }
    
    include "../Practice/dbConnection.php";
    $conn = getDatabaseConnection("ottermart");
    
    function getCategories()
    {
        global $conn;
        
        $sql = "SELECT catId, catName
                FROM category
                ORDER BY catName";
            
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            foreach($records as $record)
            {
                echo "<option value='"  .  $record['catId']  .  "'>"  .  $record['catName']  .  "</option>";
            }
    }
    
    if(isset($_GET['submitProduct']))
    {
        $productName = $_GET['productName'];
        $productDescription = $_GET['description'];
        $productImage = $_GET['productImage'];
        $productPrice = $_GET['price'];
        $catId = $_GET['catId'];
        
        $sql = "INSERT INTO product
                ( `productName`, `productDescription`, `productImage`, `price`, `catId`) 
                 VALUES ( :productName, :productDescription, :productImage, :price, :catId)";
        
        $namedParameters = array();
        $namedParameters[':productName'] = $productName;
        $namedParameters[':productDescription'] = $productDescription;
        $namedParameters[':productImage'] = $productImage;
        $namedParameters[':price'] = $productPrice;
        $namedParameters[':catId'] = $catId;
        
        $stmt = $conn->prepare($sql);
        $stmt->execute($namedParameters);
        header("Location:admin.php?msg=added");
        
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Add a product</title>
    </head>
    <body>
        <h1>Add a product</h1>
        <form>
            Product name: 
                <input type="text" name="productName"><br>
            Description: 
                <textarea  name="description" cols= 50 rows=4></textarea><br>
            Price: 
                <input type="text" name="price"><br>
            Category:
                <select name="catId">
                    <option value="">Select One</option>
                    <?=getCategories();?>
                </select>
                
            Set Image URL: 
            <input type="text" name="productImage"><br>
            
            <input type="submit" name="submitProduct" value="Add Product"><br>
        </form>

    </body>
</html>