<?php

    $sql1 = "SELECT firstName, lastName, country_of_birth
             FROM celebrity
             WHERE country_of_birth != 'USA'
             AND gender = 'F'";
             
    $sql2 = "SELECT movie_category, COUNT(*) total, AVG(duration) avg
             FROM movie
             GROUP BY movie_category";
             
    $sql3 = "SELECT movie_title, movie_category, duration, company, release_year
             FROM movie
             WHERE release_year > 2000
             ORDER BY duration DESC
             LIMIT 3";
             
    // $sql4 = "SELECT firstName, lastName
    //          FROM celebrity c
    //          LEFT JOIN oscar o ON c.celebrityId = o.celebrityId";
            
    // $sql5 = "SELECT firstName, lastName, movie_title, award_category, award_year
    //          FROM celebrity c
    //          NATURAL JOIN oscar o ON c.celebrityId = o.celebrityId
    //          NATURAL JOIN movie m ON o.movieId = m.movieId
    //          NATURAL JOIN award_category a ON o.award_cat_id = a.award_cat_id
    //          ORDER BY award_year";
    
    $host = "localhost";
    $dbname = "midterm";
    $username = "root";
    $password = "";
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // REPORT 1
    $stmt = $dbConn->prepare($sql1);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<br/><br/><br />";
    echo "REPORT 1";
    echo "<br />"; 
    foreach ($records as $record)
    {
        echo $record['firstName']  .  "   "  .  $record['lastName']  .  "   "  .  $record['country_of_birth']  . "<br /> <br />";
    }
    
    // REPORT 2
    $stmt = $dbConn->prepare($sql2);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<br/><br/><br />";
    echo "REPORT 2";
    echo "<br />"; 
    foreach ($records as $record)
    {
        echo $record['movie_category']  .  "   "  .  $record['total']  .  "   "  .  $record['avg']  . "<br /> <br />";
    }
    
    // REPORT 3
    $stmt = $dbConn->prepare($sql3);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<br/><br/><br />";
    echo "REPORT 3";
    echo "<br />"; 
    foreach ($records as $record)
    {
        echo $record['movie_title']  .  "   "  .  $record['movie_category']  .  "   "  .  $record['duration']  .  "   "  .  $record['company']  .  "   "  .  $record['release_year']  . "<br /> <br />";
    }
    
    // // REPORT 4
    // $stmt = $dbConn->prepare($sql4);
    // $stmt->execute();
    // $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // echo "<br/><br/><br />";
    // echo "REPORT 4";
    // echo "<br />"; 
    // foreach ($records as $record)
    // {
    //     echo $record['firstName']  . $record['lastName']  . "<br />";
    // }
    
    // // REPORT 5
    // $stmt = $dbConn->prepare($sql5);
    // $stmt->execute();
    // $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // echo "<br/><br/><br />";
    // echo "REPORT 5";
    // echo "<br />"; 
    // foreach ($records as $record)
    // {
    //     echo $record['firstName']  . $record['lastName']  . $record['movie_title']  . $record['award_category']  . $record['awar_year']  . "<br />";
    // }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <br/><br/><br /><br/><br/><br />
        <table border="1" width="600">
            <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
            <tr style="background-color:green">
              <td>1</td>
              <td>Name and country of birth of female actresses who were NOT born in the USA, ordered by last name</td>
              <td width="20" align="center">15</td>
            </tr>  
            <tr style="background-color:green">
              <td>2</td>
              <td>Number of movies per category and their average duration</td>
              <td width="20" align="center">15</td>
            </tr>  
            <tr style="background-color:green">
              <td>3</td>
              <td>All info about the top three longest movies released after 2000</td>
              <td width="20" align="center">15</td>
            </tr>     
             <tr style="background-color:#FFC0C0">
               <td>4</td>
               <td>List of  actors and actresses who have not won an academy award, ordered by last name </td>
               <td align="center">15</td>
             </tr>
             <tr style="background-color:#FFC0C0">
              <td>5</td>
              <td>List of celebrities who have won an oscar, ordered by "award_year". Include full name, movie title, oscar year, and award category.</td>
              <td width="20" align="center">15</td>
            </tr>     
             <tr style="background-color:#99E999">
              <td>6</td>
              <td>This rubric is properly included AND UPDATED (BONUS)</td>
              <td width="20" align="center">2</td>
            </tr>     
             <tr>
              <td></td>
              <td>T O T A L </td>
              <td width="20" align="center"><b></b></td>
            </tr> 
         </tbody></table>  

    </body>
</html>