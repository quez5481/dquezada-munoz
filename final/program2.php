<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Final Program </title>
        
        <!-- For mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        
        
        <script>
            $(document).ready( function()
            {
                $.ajax
                ({
                    type: "GET",
                    url: "nameApi.php",
                    dataType: "json",
                    success: function(data,status)
                    {
                        for(i = 0; i<data.length; i++)
                        {
                            $('#superheroes').append("<option value='" + data[i].name + "'>" + data[i].name + "</option>");
                        }
                        
                    },
                    complete: function(data,status) 
                    {
                        //optional, used for debugging purposes
                        //alert(status);
                    }
                });
                $("#searchDetails").submit( function()
                {
                    $.ajax
                    ({
                        //alert(  );
                        type: "GET",
                        url: "detailsApi.php",
                        dataType: "json",
                        data: 
                        { 
                            "superheroes":$("#superheroes").val() 
                        },
                        success: function(data,status)
                        {
                                                        
                            $('#info').html("");
                            $("#info").append("<h2>" + data.name +"</h2>12");
                            $("#info").append("Age: " + data[0].name + " years <br>");
                            $("#info").append("<img src='img/superheroes/" + data[0].name +".png' width='150'>");
                        },
                        complete: function(data,status) 
                        {
                            //optional, used for debugging purposes
                            //alert(status);
                        }
                    });//ajax
                }); // Username Event 

                $("#searchMovies").submit( function()
                {
                    $.ajax
                    ({
                        
                        //alert(  );
                        type: "GET",
                        url: "https://www.omdbapi.com/?apikey=12215ee6",
                        dataType: "json",
                        data: 
                        { 
                            "s":$("#superheroes").val() 
                        },
                        success: function(data,status)
                        {
                            $('#info').html("");
                            $("#info").append("Age: " + data.Search.Title + " years <br>");
                            $("#info").append("<img src='img/" + data.Search[0].Poster +"' width='150'>");
                        },
                        complete: function(data,status) 
                        {
                            //optional, used for debugging purposes
                            //alert(status);
                        }
                    });//ajax
                }); // Username Event 
            }); // documentReady
        </script>
        
        <style>
            footer
            {
                background-color:white;
                text-align: center;
                clear: both;
                font-size:.8em;
                padding-top: 10px;
            }
            footer img
            {
                clear: both;
                display: block;
                margin: 0px auto;
            }
            .myJumbotron
            {
                text-align:center;
                background-color:LightBlue;
                height:150px;
            }
        </style>

    </head>

    <body>
        <div class="jumbotron myJumbotron">
          <h1> Select Superhero: </h1>
        </div>
        <div class='container text-center'>
            <form method="GET">
                <fieldset>
                    <select id="superheroes"></select><br><br>
                    <input type="submit" value="Search Movies!" name="searchMovies"><br><br><br><br>
                    <input type="submit" id="searchDetails" value="Superhero Details!" name="searchDetails"><br><br><br><br>
                </fieldset>
            </form>
        </div>
        
        
        <br><br><br>
        
        <div id="info">
            
        </div>
        
          
        
        
        
        
        
        
        
    










 
   <table border="1" width="600" cellpadding="10">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#99E999">
      <td>1</td>
      <td>The list of the superheroes in the dropdown menu is retrieved from the database (ordered alphabetically, no duplicates)<br></td>
      <td width="20" align="center">10</td>
    </tr> 
    <tr style="background-color:#FFC0C0">
      <td>2</td>
      <td>When clicking on the "Search Movies" button, the OMDB API is used to display the list of movies (<strong>poster</strong> and <strong>title</strong>) for the superhero selected<br></td>
      <td width="20" align="center">15</td>
    </tr>  
     <tr>
      <td>3</td>
      <td> When clicking on the "Search Movies" button, the superhero selected is stored in a Session variable using AJAX<br></td>
      <td width="20" align="center">15</td>
    </tr>
     <tr style="background-color:#FFC0C0">
      <td>4</td>
      <td> When clicking on the "See Search History" link, the superheroes whose movies have been searched are displayed within an iFrame</td>
      <td width="20" align="center">15</td>
    </tr>   
     <tr>
      <td>5</td>
      <td> When clicking on the "Superhero Details" button, an AJAX call is made to display all corresponding info (name, image, and pob)<br></td>
      <td width="20" align="center">15</td>
    </tr>  
     <tr style="background-color:#FFC0C0">
      <td>6</td>
      <td>When clicking on the "Superhero Details" button, the name and images of the superhero's enemies are displayed<br></td>
      <td width="20" align="center">10</td>
    </tr>
    <tr style="background-color:#99E999">
      <td>7</td>
      <td>This rubric is properly included AND UPDATED</td>
      <td width="20" align="center">2</td>
    </tr>       
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center">&nbsp;</td>
    </tr> 
  </tbody></table>
  
        
        <br><br><br>
        
        <?php
            include 'footer.php';
        ?>
    </body>
</html>