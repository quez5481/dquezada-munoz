<?php

    include '../Practice/dbConnection.php';
    $conn = getDatabaseConnection("ottermart");
    
    function getCategories($catId)
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
            echo "<option  ";
            echo ($record["catId"] == $catId)? "selected": ""; 
            echo " value='".$record["catId"] ."'>". $record['catName'] ." </option>";
        }
    }
    
    function getProductInfo()
    {
        global $conn;
        
        $sql = "SELECT * FROM product WHERE productId = "  .  $_GET['productId'];

        echo $_GET["productId"];
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $record;
    }
    
    if (isset($_GET['updateProduct'])) 
    {
        
        //echo "Trying to update the product!";
        
        $sql = "UPDATE product
                SET productName = :productName,
                    productDescription = :productDescription,
                    productImage = :productImage,
                    price = :price,
                    catId = :catId
                WHERE productId = :productId";
        $np = array();
        $np[":productName"] = $_GET['productName'];
        $np[":productDescription"] = $_GET['description'];
        $np[":productImage"] = $_GET['productImage'];
        $np[":price"] = $_GET['price'];
        $np[":catId"] = $_GET['catId'];
        $np[":productId"] = $_GET['productId'];
                
        $statement = $connection->prepare($sql);
        $statement->execute($np);        

        
    }
    
    if(isset($_GET['productId']))
    {
        $product = getProductInfo();
    }
    print_r($product);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Product</title>
    </head>
    <body>
        <h1>Update Product</h1>

        <form>
            Product name: 
                <input type="text" value="<?=$product['productName']?>"><br>
            Description: 
                <textarea  name="description" cols= 50 rows=4><?=$product['productDescription']?></textarea><br>
            Price: 
                <input type="text" name="price" value="<?=$product['price']?>"><br>
            Category:
                <select name="catId">
                    <option value="">Select One</option>
                    <?=getCategories();?>
                </select>
            Set Image URL: 
                <input type="text" name="productImage"><br>
                <input type="submit" name="submitProduct" value="Update Product"><br>
        </form>
    </body>
</html>