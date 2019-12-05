<!DOCTYPE html>
<html>
<head>
 <title>Slick Playground</title>
 <meta charset="UTF-8">
 <!-- 
 <link rel="stylesheet" type="text/css" href="vendor/slick-1.8.1/slick/slick.css">
 <link rel="stylesheet" type="text/css" href="./vendor/slick-1.8.1/slick/slick-theme.css"> -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
-->

<!--icons
<script src="https://kit.fontawesome.com/29cbed0584.js"></script>
<link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
<link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all">
<link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all">

-->
<link rel="stylesheet" href="css/daily_summary.css" media="all">

</head>

<body>
    <header>
        
        <!--our logo-->
        
        
        <!--nav bar tabs-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height:10%">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!--<div class="logo-picture">
                <img src="images/our_logo.png" alt="logo" style="width:25%;">
        </div>-->
        <img src="images/our_logo.png" alt="logo" style="width:150px;height:80px;">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="weekly_conclusion.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="workout.php">Workouts</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="recipe.php">Recipies<span class="sr-only">(current)</span></a>
              </li>
            </ul>
            
          </div>
</nav>
    </header>
<main>
<div class="container-fluid">
          <div class="row">
            <div class="col-6 basic">
            <div>      
            <br>
            <h2>Tell us how was your day!</h2>
              <div>
                <br>
                <p>If you followed our suggestions - click "Done"<br>
                If you did something other than our suggestion - click "Change"<br>
                If you didn't work out at all - click "didn't workout"<br></p>
                </div>
            </div>
            <div>
              <form name="DailySummer" action="" method="post">
            
    <?php 
        echo displaySuggested();
     ?>
     
      
      <script>
       $('#option2').click(function(){
           console.log('recognize click on option');
           var div = document.createElement("div");
           div.id="visible_more";
           var select =document.createElement("select");
           var options = "<option  value='1'>Run</option><option value='2'>Ski</option><option value='3'>Spin</option><option value='4'>'Lift upper and bottem</option><option value='5'>'Lift upper'</option><option value='6'>'Lift bottem'</option><option value='7'>long-wallk</option><option value='8'>Short-wallk</option>";
           select.name="checked_workout";
           select.innerHTML=options;
           var cal = document.createElement("input");
           cal.name="cal_burned";
           cal.type="number";
            var p_activity = document.createElement("p");
            var p_cal = document.createElement("p");
            p_activity.innerHTML = "<p>Activity Type:</p>";
            p_cal.innerHTML = "<p style= display:inline >Estimated calories burned:</p>";
           $("#other").append(div);
            div.append(p_activity);
            div.append(select);
            div.append(p_cal);
            div.append(cal);
            select.class="aditional_fields";
            cal.class="aditional_fields";
       });
       $('#option1').click(function(){
           $("#visible_more").remove();
       });
       $('#option3').click(function(){
           $("#visible_more").remove();
       });
       $('#option4').click(function(){
           $("#visible_more_cal").remove();
       });
       $('#option5').click(function(){
           console.log('recognize click on option5');
           var div = document.createElement("div");
           div.id="visible_more_cal";
           var cal_dev = document.createElement("input");
           cal_dev.name="cal_dev";
           cal_dev.type="number";
            var p_cal_dev = document.createElement("p");
            p_cal_dev.innerHTML = "<p>Calories Deviation from menu (if less insert -):</p>";
           $("#food_other").append(div);
            div.append(p_cal_dev);
            div.append(cal_dev);
       });
            function move(){
                window.location.href="https://galkol.mtacloud.co.il/Sadna/weekly_conclusion.php";
                
            }
      </script>
      
      
                <button type="submit" name="submit">Finish</button>
                    <br><br>
                    
                </form>
                
                
                </div>
            </div>
          </div>
          

<?php
session_start();

$customerId=$_SESSION['customerId'];
        if (is_null($customerId)) {
    	    echo "<script>console.log('customer id not found');</script>";    
    	    $customerId = '12345';
    	}
    	else{
    	    echo "<script>console.log('customer id found: ".$customerId."');</script>";   
    	}
    function displaySuggested(){
        global $customerId;
        $host="localhost";
        $user="galkol_user";
        $pass="Aa123456";
        $db="galkol_lifestyle";

        $conn=new mysqli($host,$user,$pass,$db);
        if ($conn->connect_error){
            die("Connection failed: ".$conn->connect_error);
        }
            
        global $date;
        $date=date("Y-m-d");
        $week=date("Y-m-d",strtotime("+7 day"));
        echo "<script>console.log('". $date . "');</script>";
		
		//Take customer data
		global $user_recipies;
        $user_recipies= array();
        global $user_workouts;
        $user_workouts=array();
        
		$sql_user_suggestion="select * from $db.suggestion where suggestionType='Workout' and customerID='$customerId' AND date='$date'";
        $result_user_suggestion=$conn->query($sql_user_suggestion);
        
		$sql_rec_suggestion="select * from $db.suggestion where customerID='$customerId' AND suggestionType='Recipe' AND date BETWEEN '$date' AND '$week'";
		$result_rec_suggestion=$conn->query($sql_rec_suggestion);
        
    if ($result_user_suggestion->num_rows>0) {
      echo "<script>console.log('found results suggestions for user');</script>";
        
        while($row=$result_user_suggestion->fetch_assoc()){
            echo "<script>console.log('started going over suggestions');</script>";
						
            $suggetion_id = $row["suggestionId"];
            $suggestionType = $row["suggestionType"];
            echo "<script>console.log('suggestion type:" . $suggestionType . "');</script>";

                array_push($user_workouts, $suggetion_id);
                echo "<script>console.log('added workout to array, workout:".$user_workouts[0]."');</script>";
        }
    }
    if ($result_rec_suggestion->num_rows>0) {
      echo "<script>console.log('found results suggestions for user');</script>";    
        while($row_rec=$result_rec_suggestion->fetch_assoc()){    
            $suggetion_id = $row["suggestionId"];
            $suggestionType = $row["suggestionType"];
            echo "<script>console.log('suggestion type:" . $suggestionType . "');</script>";
          array_push($user_recipies, $suggetion_id);
            echo "<script>console.log('added recipe to array, recipe:".$user_recipies[0]."');</script>";
            }
      }
    
    
        if(empty($user_workouts)){
        echo "<div class='form-label-group'>
        <p>No workout was suggested for you today.<br>Would you like to add a workout for today?</p>
         <label class='btn btn-secondary'>
           <input type='radio' name='Suggestion_workout' id='option1' autocomplete='off' value='Done'> No
         </label>
         <label class='btn btn-secondary'>
           <input type='radio' name='Suggestion_workout' id='option2' autocomplete='off' value='Change'> Yes
         </label>
       <div id='other'></div>
       </div>
       <br>";
            
        }
        else{
            echo "<script>console.log('user workouts:".$user_workouts[0]."');</script>";
        $sql_user_workouts="select * from $db.workout where workoutId IN ('".implode(',',$user_workouts)."')";
        echo "<script>console.log('10');</script>";
        $result_user_workout=$conn->query($sql_user_workouts);
    
      if ($result_user_workout->num_rows>0){
        echo "<script>console.log('found workout in db');</script>";
         while($row_workout=$result_user_workout->fetch_assoc()){
        echo "<div class='form-label-group'>";
         echo "<div style=' margin-left: 11.5%;margin-top:5%;'><img src='" . $row_workout["mediaItemContent"] . "' width='128px' height='128px'> </div>
         <label class='btn btn-secondary'>
           <input type='radio' name='Suggestion_workout' id='option1' autocomplete='off' value='Done'> Done
         </label>
         <label class='btn btn-secondary'>
           <input type='radio' name='Suggestion_workout' id='option2' autocomplete='off' value='Change'> Change
         </label>
         <label class='btn btn-secondary'>
           <input type='radio' name='Suggestion_workout' id='option3' autocomplete='off' value='Not done'> didn't workout
         </label>
       <div id='other'></div>
       </div>
       <br>
       <br>";
         }
      }
        }
       
/*      }
    }*/
    
    /*$sql_user_recipies="select * from $db.recipe where recipeId IN ('".implode("','",$user_recipies). "')";
    $result_user_recipies=$conn->query($sql_user_recipies);
    $i=0;
    if ($result_user_recipies->num_rows>0){
      echo "<script>console.log('found recipies suggested');</script>";
      while($row=$result_user_recipies->fetch_assoc()){
        echo "<div margin-left: 11.5%;margin-top:5%;>
        <img src='" . $row["mediaItemContent"] . "' width='128px' height='128px'>
        </div>";*/
        echo "<div class='form-label-group'>
        <p> Did you eat according to the suggested menu?</p>
        <label class='btn btn-secondary active'>
          <input class='button-checked' type='radio' name='Suggestion_recipe' id='option4' autocomplete='off' value='Done'> Done
        </label>
        <label class='btn btn-secondary'>
          <input class='button-checked' type='radio' name='Suggestion_recipe' id='option5' autocomplete='off' value='Change'> Change
        </label>
      <div id='food_other'></div>
      </div>
      <br>
      ";

    }//function displaySuggested end
    
    
    if ($_POST){
        global $user_recipies,$user_workouts,$date;
        $host="localhost";
        $user="galkol_user";
        $pass="Aa123456";
        $db="galkol_lifestyle";

        $conn=new mysqli($host,$user,$pass,$db);
        if ($conn->connect_error){
            die("Connection failed: ".$conn->connect_error);
        }
        
        echo "<script>console.log('found user workouts in post:".$user_workouts[0]."')</script>";
        
        $sug_workout=$_POST['Suggestion_workout'];

         if ($sug_workout=="Change"){
            echo "<script>console.log('change workout');</script>";
            $cal_burned=$_POST['cal_burned'];
            $rus_wasUsed = "UPDATE $db.suggestion set wasUsed='0' where customerID='$customerId' AND date='$date' and suggestionType='Workout'";
            $runs_customerFitnessStats="INSERT INTO $db.customerFitnessStats (`customerID`,`date`, `workoutDone`, `asSuggested`, `caloryburn`) VALUES ('$customerId','$date',1,0,'$cal_burned')";
         
             if ($conn->query($rus_wasUsed) === TRUE) {
         echo "<script>console.log('Record updated successfully')</script>";
            } else {
                echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                }
            if ($conn->query($runs_customerFitnessStats) === TRUE) {
         echo "<script>console.log('Record updated successfully')</script>";
            } else {
                echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                }
         }
            
        else if ($sug_workout=="Done"){ 
            echo "<script>console.log('workout according to suggestion');</script>";
            $rus_wasUsed = "UPDATE $db.suggestion SET wasUsed='1' where customerID='$customerId' AND date='$date' and suggestionType='Workout'";
            $workout_id=$row_workout["workoutId"];
            $cal_burned=$row_workout["avgCaloryBurn"];
            $runs_customerFitnessStats="INSERT INTO $db.customerFitnessStats (`customerID`,`date`,`workoutDone`, `asSuggested`, `caloryburn`) VALUES ('$customerId','$date',1,1,'$cal_burned')";
            
            if ($conn->query($rus_wasUsed) === TRUE) {
         echo "<script>console.log('Record updated successfully')</script>";
            } else {
                echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                }
            if ($conn->query($runs_customerFitnessStats) === TRUE) {
         echo "<script>console.log('Record updated successfully')</script>";
            } else {
                echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                }
         }
        
     
        else if( $sug_workout=="Not done"){ 
          echo "<script>console.log('didnt workout at all');</script>";
          $rus_wasUsed = "UPDATE $db.suggestion set wasUsed='0' where customerID='$customerId' AND date='$date' and suggestionType='Workout'";
          $runs_customerFitnessStats="INSERT INTO $db.customerFitnessStats (`customerID`,`date`,`workoutDone`, `asSuggested`, `caloryburn`) VALUES ('$customerId','$date',0,0,0)";
          
          if ($conn->query($rus_wasUsed) === TRUE) {
         echo "<script>console.log('Record updated successfully')</script>";
            } else {
                echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                }
            if ($conn->query($runs_customerFitnessStats) === TRUE) {
         echo "<script>console.log('Record updated successfully')</script>";
            } else {
                echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                }
          }
          

        $sug_recipe=$_POST['Suggestion_recipe']; 
        
        if ($sug_recipe=="Change"){
            echo "<script>console.log('change recipe');</script>";
            $cal_dev=$_POST['cal_dev'];
            $rus_wasUsed = "UPDATE $db.suggestion set wasUsed='0' where customerID='$customerId' AND date='$date' and suggestionType='Recipe'";
            $runs_customerDietStats="INSERT INTO $db.customerDietStats (`customerId`, `date`, `menuCompleted`, `caloriesDeviation`) VALUES ('$customerId','$date',0,'$cal_dev')";
         
            if ($conn->query($rus_wasUsed) === TRUE) {
         echo "<script>console.log('Record updated successfully')</script>";
            } else {
                echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                }
            if ($conn->query($runs_customerDietStats) === TRUE) {
         echo "<script>console.log('Record updated successfully')</script>";
            } else {
                echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                }
        }
            
        else if ($sug_recipe=="Done"){ 
            echo "<script>console.log('manu according to suggestion');</script>";
            $rus_wasUsed = "UPDATE $db.suggestion SET wasUsed='1' where customerID='$customerId' AND date='$date' and suggestionType='Recipe'";
            $runs_customerDietStats="INSERT INTO $db.customerDietStats (`customerId`, `date`, `menuCompleted`, `caloriesDeviation`) VALUES ('$customerId','$date',1,0)";
            
            if ($conn->query($rus_wasUsed) === TRUE) {
         echo "<script>console.log('Record updated successfully')</script>";
            } else {
                echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                }
            if ($conn->query($runs_customerDietStats) === TRUE) {
         echo "<script>console.log('Record updated successfully')</script>";
            } else {
                echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                }
        }
        
        //sum calories that user gained today -->
            //sum suggested calories
            $sql_user_recipies="select * from $db.recipe where recipeId IN ('".implode("','",$user_recipies). "')";
            $result_user_recipies=$conn->query($sql_user_recipies);
            
            if ($result_user_recipies->num_rows>0){
              echo "<script>console.log('start working on recipies');</script>";
              while($row_recipe=$result_user_recipies->fetch_assoc()){
                  $total+=$row_recipe['calories'];
              }
              $sql_user_stats="select * from $db.customerDietStats where customerId=$customerId' AND date='$date'";
              $result_user_stats = $conn->query($sql_user_stats); 
            
              while ($stat = $result_user_stats->fetch_assoc()) {
                if($stat['menuCompleted']==0){
                    $dev=$stat['caloriesDeviation'];
                    $total+=$dev;
                }
              }
              echo "<script>console.log('about to update total cal gain:".$total."');</script>";
            $sql_update_total="UPDATE $db.customerDietStats set totalDailyCal='$total' where customerId='$customerId' AND date='$date'";
            
                if ($conn->query($sql_update_total) === TRUE) {
         echo "<script>console.log('Record updated successfully')</script>";
            } else {
                echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                }
            }
            
        //sum calories that user burned today-->
            //check if suggested workout completed
            $sql_user_burn_calorise="select * from $db.customerFitnessStats where customerId='$customerId' AND date='$date'";
            $result_user_burn_calorise = $conn->query($sql_user_burn_calorise); 
            
            while ($row_cals = $result_user_burn_calorise->fetch_assoc()) {
                if ($row_cals['asSuggested']==0){
                    $total_burn+=$row_cals['caloryburn'];
                }
                else{
                    //take suggested workout cals
                    $sql_user_workouts="select * from $db.workout where workoutId IN ('".implode("','",$user_workouts)."')";
                    $result_user_workout=$conn->query($sql_user_workouts);
            
                    if ($result_user_workout->num_rows>0){
                        echo "<script>console.log('take suggested workout cals');</script>";
                    while($row_workout=$result_user_workout->fetch_assoc()){
                        $total_burn+=$row_workout['avgCaloryBurn'];
                        }
                    }
                }
                $sql_customer="select * from $db.customer where customerId='$customerId'";
                $result = $conn->query($sql_customer);
                $row_customer = $result->fetch_assoc();
                $total_burn+=$row_customer['restCalories'];
                echo "<script>console.log('about to update total cal burn:".$total_burn."');</script>";
                $sql_update_burn="UPDATE $db.customerFitnessStats set totalDailyCal='$total_burn' where customerId='$customerId' AND date='$date'";
                
                if ($conn->query($sql_update_burn) === TRUE) {
            echo "<script>console.log('Record updated successfully')</script>";
            } else {
                echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                }
                
                echo "<script>move();</script>";
            }
            
    }
    
    
?>  
</main>

<!-- <script src="js/DailySummary.js"></script> -->
</body>
</html>