<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link href="style.css"type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <img src="transportation.png" alt="topPicture">
        <hr><br/>
        
        <h1>Transportation Survey</h1>
        <br/><br/>
        
        <form name="frm1" action="functions.php" method="post">
            <label for="name">Name(Optional):</label>
            <input id="name" type="text" name="nameText">
            <br/><br/><br/>
            
            <fieldset>
                <legend>Do you work at Home?</legend>
                <input id="yesH" type="radio" name="homework" value="1">
                <label for="yesH">Yes</label><br>
                <input id="noH" type="radio" name="homework" value="0">
                <label for="noH">No</label><br>
            </fieldset>
            
            <br/>
            
            <fieldset>
                <legend>What is your primary mode of transportation?</legend>
                <input id="car" type="radio" name="primary" value="car">
                <label for="car">Car</label><br>
                <input id="bus" type="radio" name="primary" value="bus">
                <label for="bus">Bus</label><br>
                <input id="carpool" type="radio" name="primary" value="carpool">
                <label for="carpool">Carpool</label><br>
                <input id="bicycle" type="radio" name="primary" value="bicycle">
                <label for="bicycle">Bicycle</label><br>
                <input id="walk" type="radio" name="primary" value="walk">
                <label for="walk">Walking</label><br>
            </fieldset>
            
            <br/>
            
            <fieldset>
                <legend>On what day(s) of the week is it hardest for you to go to work/school?</legend>
                <input id="monday" type="checkbox" name="days" value="monday">
                <label for="monday">Monday</label><br>
                <input id="tuesday" type="checkbox" name="days" value="tuesday">
                <label for="tuesday">Tuesday</label><br>
                <input id="wednesday" type="checkbox" name="days" value="wednesday">
                <label for="wednesday">Wednesday</label><br>
                <input id="thursday" type="checkbox" name="days" value="thursday">
                <label for="thursday">Thursday</label><br>
                <input id="friday" type="checkbox" name="days" value="friday">
                <label for="friday">Friday</label><br>
                <input id="saturday" type="checkbox" name="days" value="saturday">
                <label for="saturday">Saturday</label><br>
                <input id="sunday" type="checkbox" name="days" value="sunday">
                <label for="sunday">Sunday</label><br>
            </fieldset>
            
            <br/>
            
            <fieldset>
                <legend>During what times of the day are your commute to and from work/school?</legend>
                <input id="em" type="checkbox" name="earlyMorning" value="em">
                <label for="em">Early Morning(4am-8am)</label><br>
                <input id="lm" type="checkbox" name="lateMorning" value="lm">
                <label for="lm">Late Morning(8am-12pm)</label><br>
                <input id="ea" type="checkbox" name="earlyAfternoon" value="ea">
                <label for="ea">Early Afternoon(12pm-3pm)</label><br>
                <input id="la" type="checkbox" name="lateAfternoon" value="la">
                <label for="la">Late Afternoon(3pm-6pm)</label><br>
                <input id="e" type="checkbox" name="evening" value="e">
                <label for="e">Evening(6pm-9pm)</label><br>
                <input id="ln" type="checkbox" name="lateNight" value="ln">
                <label for="ln">Late Night(9pm-4am)</label><br>
            </fieldset>
            
            <br/><br/>
            
            <label for="questions">Please list any questions or ay suggestions to improve this survey(Optional).</label><br>
            <textarea id="questions" name="questions"></textarea>
        </form>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <footer>
            <br/><br/>
            <div>
                <hr>
                Internet Programming. 2018&copy; Quezada <br/>
                <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br/>
                It is used for academic purposes only.
            </div>
            
            <br/>
            <img src="csumb_logo_150_86.jpg" alt"csumbLogo">
        </footer>
    </body>
</html>