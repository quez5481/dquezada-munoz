<?php

    include 'inc/header.php';
    
    include '../../Practice/dbConnection.php';
    
    function getAllPets(){
        
      $conn = getDatabaseConnection('pets');
      
      $sql = "SELECT id, name, type FROM pets ORDER BY name";
      
      $stmt = $conn->prepare($sql);  
      $stmt->execute();
      $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $records;  
    }
    
?>

<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
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

<script>
    
    $(document).ready(function(){
    
            $("#adoptionsLink").addClass("active");
            
            
            $(".petLink").click(function(){
                
                //alert(  );
                
                $('#petModal').modal("show");
                $('#petInfo').html("<img src='img/loading.gif' width='30'>")
                
                $.ajax({

                    type: "GET",
                    url: "api/getPetInfo.php",
                    dataType: "json",
                    data: { "id": $(this).attr("id")},
                    success: function(data,status) {
                        //alert(data.breed);
                        //log.console(data.pictureURL);
                       
                        $("#petModalLabel").html("<h2>" + data.name +"</h2>");
                        $('#petInfo').html("");
                        $("#petInfo").append("Age: " + data.age + " years <br>");
                        $("#petInfo").append(data.breed + "<br>");
                        $("#petInfo").append(data.description + "<br>");
                        $("#petInfo").append("<img src='img/" + data.pictureURL +"' width='150'>");
                       
                    
                    },
                    complete: function(data,status) 
                    { 
                      //optional, used for debugging purposes
                      //alert(status);
                    }
                    
                });//ajax
                
                
            });
        
        
    }); //document ready
    
    
</script>


<?php
    $petList = getAllPets();
    
    //print_r($petList);
    
    foreach ($petList as $pet) {
        
        echo "Name: <a href='#' class='petLink' id='".$pet['id']."'  > " . $pet['name'] . " </a> <br>";
        echo "Type: " . $pet['type'] . "<br><br>";
        
    }

?>


<!-- Modal -->
<div class="modal fade" id="petModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="petModalLabel">Pet Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
        <div id="petInfo"></div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<?php

    include 'inc/footer.php';

?>