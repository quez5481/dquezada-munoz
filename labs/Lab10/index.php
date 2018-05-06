<?php
    
    include '../../Practice/dbConnection.php';
    
    function getPets()
    {
        
      $conn = getDatabaseConnection('pets');
      
      $sql = "SELECT pictureURL FROM pets ORDER BY name";
      
      $stmt = $conn->prepare($sql);  
      $stmt->execute();
      $records = $stmt->fetchALL(PDO::FETCH_ASSOC);
      return $records;  
    }
    
    include 'inc/header.php';
?>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adoptions.php">Adoptions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
    </ul>
  </div>
</nav>

<div class="jumbotron">
  <h1> CSUMB Animal Shelter</h1>
  <h2> The "official" animal adoption website of CSUMB </h2>
</div>


       
<!-- Add Carousel here -->

<div class='container'>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
         <?php
            $pets = getPets();
            
            // print_r($pets);
            
            echo "<div class='carousel-item active'>";
            echo "<img class='d-block w-30' src='img/" . $pets[0]['pictureURL'] . "' alt='slide0'>";
            echo "</div>";
            
            for($i=1; $i<count($pets); $i++)
            {
                echo "<div class='carousel-item'>";
                echo "<img class='d-block w-30' src='img/" . $pets[$i]['pictureURL'] . "' alt='slide"  . $i .  "'>";
                echo "</div>";
            }
        
        ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>





<br>
<a href="adoptions.php"  class="btn btn-outline-primary" role="button" aria-pressed="true"> Adopt Now! </a>
<br>
        
<?php
    include 'inc/footer.php';
?>