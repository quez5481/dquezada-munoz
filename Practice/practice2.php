<?php
    include 'dbConnection.php';
    $dbConn = getDatabaseConnection("practice2");

    // REPORT 1
    echo "Report 1: Towns with population between 50K and 80K: <br/ >";
    $sql = "SELECT town_name, population
    		FROM  mp_town 
    		WHERE population
    		BETWEEN 50000 
    		AND 80000";
		
    $stmt = $dbConn->query($sql);	
    $results = $stmt->fetchAll();
    foreach ($results as $record)
    {
        echo $record['town_name']  . "<br />";
    } 
    
    // REPORT 2
    echo "Report 1: Towns and County with greatest populations: <br/ >";
    $sql2 = "SELECT town_name, population, county_name
    		FROM  mp_town t
    		JOIN mp_county c on t.county_id = c.county_id
    		ORDER BY population DESC";
		
    $stmt = $dbConn->query($sql2);	
    $results = $stmt->fetchAll();
    foreach ($results as $record)
    {
        echo $record['town_name']  . $record['county_name']  .  "<br />";
    }
    
    
    
    echo "<br />Report 3:Population by County: <br/ >";
    $sql = "SELECT county_name, SUM( population ) total
    		FROM mp_town t
    		JOIN mp_county c ON t.county_id = c.county_id
    		GROUP BY county_name ";
    		
    $stmt = $dbConn->query($sql);	
    $results = $stmt->fetchAll();
    foreach ($results as $record)
    {
    	echo $record['county_name']  . " - " . $record['total'] .  "<br />";
    }	
    
    echo "<br />Report 4:Population by State: <br/ >";
    $sql = "SELECT state_name, SUM( population ) total
    		FROM mp_town t
    		JOIN mp_county c ON t.county_id = c.county_id
    		JOIN mp_state s ON s.state_id = c.state_id
    		GROUP BY state_name ";
    		
    $stmt = $dbConn->query($sql);	
    $results = $stmt->fetchAll();
    foreach ($results as $record)
    {
    	echo $record['state_name']  . " - " . $record['total'] .  "<br />";
    }	
    
    echo "<br />Report 5:Three least populated cities: <br/ >";
    $sql = "SELECT town_name, population
    		FROM mp_town 
    		ORDER BY population
    		LIMIT 3";
    		
    $stmt = $dbConn->query($sql);	
    $results = $stmt->fetchAll();
    foreach ($results as $record) 
    {
    	echo $record['town_name']  . " - " . $record['population'] .  "<br />";
    }
    
    echo "<br />Report 6:Counties without a town: <br/ >";
    $sql = " SELECT * FROM mp_county c
    LEFT JOIN mp_town t 
    ON c.county_id = t.county_id
    WHERE t.county_id IS NULL";


    // $sql1 = 
    // "SELECT town_name, population
    // FROM mp_town
    // WHERE population >= 50000 AND population <= 80000";
    
    // $sql2 = 
    // "SELECT town_name, population, county_name
    // FROM  mp_town t
    // NATURAL JOIN mp_county c
    // on t.county_id = c.county_id";
    
    
    // $host = "localhost";
    // $dbname = "practice2";
    // $username = "root";
    // $password = "";
    // $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // $stmt = $dbConn->prepare($sql1);
    // $stmt->execute();
    // $records = $stmt->fetch();
    
    // echo "<br/><br/>Towns with populations between 50,000 and 80,000: <br />";
 
   
    // echo $records['town_name']  . " - " . $records['population']  ."<br />";
 
    
    // $stmt = $dbConn->prepare($sql2);
    // $stmt->execute();
    // $records = $stmt->fetch();
    
    // echo "<br/><br/>Towns, County, and population in descending order by population size <br />";
    
    // foreach ($records as $record)
    // {
    //     echo $records['town_name']  . " - " . $records['population']  . " - " . $records['county']  . "<br />";
    // }
 
    
    



?>



<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>