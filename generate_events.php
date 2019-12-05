<!DOCTYPE html>
<html dir="rtl">
<head>
  <title>Fitness Videos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css\style_fitness_videos.css">
</head>
<body>

<script>
sessionStorage.setItem("customerId", 12345);
</script>

<header class="text-center">
<h1> Header Text</h1>
</header>

<main>  
<div class="container-fluid text-center">
<div class="row">
<form method="post" action="">
	<fieldset id="aerobic" class="col">
		<legend><b>Create customer calender events</b></legend>
		<p class="p_form"><input type="radio" name="activity" class="check" value="12345">CustomerId</p>
	</fieldset>
	</div>
<br>
	<input class="btn" type="submit" value="Go!"><br>

</form>
</div>
</div>
</div>

<?php
        if ($_POST){ 
		$host="localhost";  
		$user="galkol_user";
		$pass="Aa123456";
		$db="galkol_lifestyle";
		
		echo "<script type=\"text/javascript\">";
		echo "var customerId = sessionStorage.getItem(\"customerId\");";
		echo "console.log(\"customer id is:\", customerId);";
		echo "$.ajax({
				type:\"GET\",
				url:\"generate_events.php\",
				data:{customerId:customerId},
				success:function(result){
				$(\"\#content\").html(result);}});";
		echo "</script>";
		
		$customerId = $_POST['activity'];
		echo "<script>
		      console.log('customer Id in php:'," . $customerId . ");</script>";
		
		$conn=new mysqli($host,$user,$pass,$db);
		if ($conn->connect_error){
    		die("Connection failed: ".$conn->connect_error);}
		
		//Take customer data
		
		$sql_customer_data="select * from $db.customer where customerId='$customerId'";
		$result_customer_data=$conn->query($sql_customer_data);
		
        if ($result_customer_data->num_rows>0){
		echo "<script>
		      console.log('NUMBER OF ROWS > 0');</script>";
        $row=$result_customer_data->fetch_assoc();
        
        // functions that will be used later:
                    //check if workout/recipe was suggested last 7 days
							function wasSuggested($id){
							    global $customerId;
							    global $db;
							    global $conn;
							    echo "<script>console.log('started function wasSuggested, customer id: " . $customerId . "' );</script>";
								$sql_suggestions="select * from $db.suggestion where customerID='$customerId' and suggestionType='Workout'";
								$result_suggestions_7days=$conn->query($sql_suggestions);
								if ($result_suggestions_7days->num_rows>0){
								echo "<script>console.log('entered if' );</script>";
								echo "<script>console.log('number of suggestions found: " . $result_suggestions_7days->num_rows . "' );</script>";
								while ($row_suggestions_7days = $result_suggestions_7days->fetch_assoc()){
								    echo "<script>console.log('entered while, suggestion id:" . $row_suggestions_7days['suggestionId'] . "' );</script>";
									if ($row_suggestions_7days['suggestionId']==$id){
										echo "<script>console.log('was suggested, suggestionId: " . $id . "' );</script>";
										return true;
										//$was_suggested=1;
									}
									else
										return false;
								}
								
							}
							}
							
					//calculate wanted calories to burn based on goal
					function caloriesCalc(){
						$calories_maintain=$row["restCalories"]*1.2;
						if (in_array("1",$goals))
						{
							$calories_to_burn=$calories_maintain+500;
							echo "<script>console.log('calories to burn (gain): " . $calories_to_burn . "' );</script>";
						}
						else
						{
							$calories_to_burn=$calories_maintain-500;
							echo "<script>console.log('calories to burn (loose): " . $calories_to_burn . "' );</script>";
						}
					}
        
					
				//----------------Take customer goals---------//
                        $customerGoals=$row["goal_ids"];
						echo "<script>console.log('customer goals: " . $customerGoals . "' );</script>";
						$goals=explode(",", $customerGoals);
						$isPos=false;
						$i=0;
						foreach ($goals as $goal) {
							echo "<script>console.log('working on goal id: " . $goal . "' );</script>";
							$sql_goal="select * from $db.goal where goalID='$goal'";
							$result_goal_data=$conn->query($sql_goal);
							$row_goal=$result_goal_data->fetch_assoc();
							$aerobicTotal+=$row_goal["aerobic"];
							echo "<script>console.log('aerobic total: " . $aerobicTotal . "' );</script>";
							$anaerobicTotal+=$row_goal["anaerobic"];;
							echo "<script>console.log('Anaerobic total: " . $anaerobicTotal . "' );</script>";
							$bodyParts=array();
							array_push($bodyParts, $row_goal["bodyPart"]);
							echo "<script>console.log('body parts array: " . $bodyParts[i] . "' );</script>";
							if (($row_goal["calBalance"])=='pos'){
								$isPos=true;
								echo "<script>console.log('is positive: " . $isPos . "' );</script>";
							} 
						$i++;	
						$aerobicPerc=$aerobicTotal / count($goals);
						echo "<script>console.log('calculated aerobic percent: " . $aerobicPerc . "' );</script>";
						$anaerobicPerc=$anaerobicTotal / count($goals);
						echo "<script>console.log('calculated anaerobic percent: " . $anaerobicPerc . "' );</script>";
						}
					
							
						
				// -------------Take fitness preferences & workouts--------------//
					
					$sql_fit_pref="select * from $db.customerFitnessPreferance where customerId='$customerId'";
					$result_fit_pref=$conn->query($sql_fit_pref);
					$row_fit_pref=$result_fit_pref->fetch_assoc();
					$numOfWorkouts=$row_fit_pref["numOfWorkouts"];
					echo "<script>console.log('number of workouts: " . $numOfWorkouts . "' );</script>";
					$daysOfWeek=explode(",",$row_fit_pref["daysOfWeek"]);
					echo "<script>console.log('week days: " . $daysOfWeek[0] . "' );</script>";
					$hoursOfDay=explode(",",$row_fit_pref["hoursOfDay"]);
					echo "<script>console.log('hours of day " . $hoursOfDay[0] . "' );</script>";
					$avgWorkoutMinutes=$row_fit_pref["avgWorkoutMinutes"];
					echo "<script>console.log('AVG workout minutes: " . $avgWorkoutMinutes . "' );</script>";
					
					//calculate final number of aerobic\anaerobic workouts a week
					
					$totalAerobic= ceil(($aerobicPerc/100)*$numOfWorkouts);
					$totalAnaerobic= ceil(($anaerobicPerc/100)*$numOfWorkouts);
					if(($totalAerobic+$totalAnaerobic)>$numOfWorkouts)
					{
						if($totalAerobic>$totalAnaerobic)
							$totalAerobic=$totalAerobic-1;
						else
							$totalAnaerobic=$totalAnaerobic-1;
					}
					
					//collect aerobic workouts base on user info
					$sql_aerobic_workouts="select * from $db.workout where workoutCategory='aerobic' and bodySection IN ('".implode("','",array_map(null , $bodyParts))."') and minutes<='$avgWorkoutMinutes'+10";
					$result_aero_workouts=$conn->query($sql_aerobic_workouts);
					
					
					//extract paramerts for calander event - aerobic workouts
					for ($i=0;$i<$totalAerobic;$i++){
						while($row_aero_workout = $result_aero_workouts->fetch_assoc()){
							//select random day of the optional days array
							$randIndexDay = array_rand($daysOfWeek);
							$workoutDay=$daysOfWeek[$randIndexDay];
							//remove the chosen day so we don't push more than 1 workout a day:
							if (count($daysOfWeek)>1){
							array_splice($daysOfWeek,$randIndexDay, 1);
							}
							echo "<script>console.log('workoutDay: " . $workoutDay . "' );</script>";
							//match hours of day with avg workout length -> strtotime()
							$randIndexHours = array_rand($hoursOfDay);
							$workoutTimeFrame=$hoursOfDay[$randIndexHours];
							echo "<script>console.log('workoutTimeFrame: " . $workoutTimeFrame . "' );</script>";
							$separatorIndex=strpos($workoutTimeFrame,'-');
							echo "<script>console.log('separatorIndex: " . $separatorIndex . "' );</script>";
							$startTime=strtotime(substr($workoutTimeFrame,0,$separatorIndex));
							echo "<script>console.log('Start Time: " . $startTime . "' );</script>";
							$workoutName=$row_aero_workout["name"];
							$workoutId=$row_aero_workout["workoutId"];
							$workoutDescription=$row_aero_workout["description"];
							$workoutCategory=$row_aero_workout["workoutCategory"];
							$activityType=$row_aero_workout["activityType"];
							$bodySection=$row_aero_workout["bodySection"];
							echo "<script>console.log('workoutId: " . $workoutId . "' );</script>";
							echo "<script>console.log('workoutName: " . $workoutName . "' );</script>";
							echo "<script>console.log('workout desc: " . $workoutDescription . "' );</script>";
							echo "<script>console.log('workout cat: " . $workoutCategory . "' );</script>";
							echo "<script>console.log('activity type: " . $ActivityType . "' );</script>";
							echo "<script>console.log('body section: " . $bodySection . "' );</script>";
							echo "<script>console.log('number of left workouts: " . $result_aero_workouts->num_rows . "' );</script>";
							echo "<script>console.log('total required workouts: " . $numOfWorkouts . "' );</script>";
							
					//we suggest workout that was already suggested only if we don't have anything else in the pool
							if ((wasSuggested($workoutId,$customerId))&&($result_aero_workouts->num_rows>$numOfWorkouts)){
								echo "<script>console.log('workout was already suggested');</script>";
								continue;
							}
							else
								echo "<script>console.log('workout was not suggested' );</script>";
							
							
					//push_workout_to_calander($workoutName,$startTime,$workoutMinutes,$row_anaero_workout['workoutId'])
						
						}
					}
						
					//collect anaerobic workouts base on user info
					$sql_anaerobic_workouts="select * from $db.workout where workoutCategory='anaerobic' and bodySection IN ('".implode("','",array_map(null , $bodyParts))."') and minutes<='$avgWorkoutMinutes'+10";
					$result_anaero_workouts=$conn->query($sql_anaerobic_workouts);
				    
					//extract paramerts for calander event - anaerobic workouts
					for ($i=0;$i<$totalAnaerobic;$i++){
						while($row_anaero_workout = $result_anaero_workouts->fetch_assoc()){
							//select random day of the optional days array
							$randIndexDay = array_rand($daysOfWeek);
							$workoutDay=$daysOfWeek[$randIndexDay];
							//remove the chosen day so we don't push more than 1 workout a day:
							if (count($daysOfWeek)>1){
							array_splice($daysOfWeek,$randIndexDay, 1);
							}
							echo "<script>console.log('workoutDay: " . $workoutDay . "' );</script>";
							//match hours of day with avg workout length -> strtotime()
							$randIndexHours = array_rand($hoursOfDay);
							$workoutTimeFrame=$hoursOfDay[$randIndexHours];
							echo "<script>console.log('workoutTimeFrame: " . $workoutTimeFrame . "' );</script>";
							$separatorIndex=strpos($workoutTimeFrame,'-');
							echo "<script>console.log('separatorIndex: " . $separatorIndex . "' );</script>";
							$startTime=strtotime(substr($workoutTimeFrame,0,$separatorIndex));
							echo "<script>console.log('Start Time: " . $startTime . "' );</script>";
							$workoutName=$row_anaero_workout["name"];
							$workoutMinutes=$row_anaero_workout["minutes"];
							$workoutDescription=$row_anaero_workout["description"];
							$workoutCategory=$row_anaero_workout["workoutCategory"];
							$activityType=$row_anaero_workout["activityType"];
							$bodySection=$row_anaero_workout["bodySection"];
							echo "<script>console.log('workoutName: " . $workoutName . "' );</script>";
							echo "<script>console.log('workout desc: " . $workoutDescription . "' );</script>";
							echo "<script>console.log('workout cat: " . $workoutCategory . "' );</script>";
							echo "<script>console.log('activity type: " . $ActivityType . "' );</script>";
							echo "<script>console.log('body section: " . $bodySection . "' );</script>";
							
					//we suggest workout that was already suggested only if we don't have anything else in the pool
							if (($row_anaero_workout["workoutId"])&&($result_anaero_workouts->num_rows>$numOfWorkouts)){
								echo "<script>console.log('workout was already suggested');</script>";
								continue;
							}
							else
							echo "<script>console.log('workout was not suggested' );</script>";
							//push_workout_to_calander($workoutName,$startTime,$workoutMinutes,$row_anaero_workout['workoutId'])
						}
						}
						
				//Take diet preferences
				
					$sql_diet_pref="select * from $db.customerDietPerferance where customerId='$customerId'";
					$result_diet_pref=$conn->query($sql_diet_pref);
					while($row_diet_pref = $result_diet_pref->fetch_assoc()){
							if ($row_diet_pref["preferenceType"]=="food_type")
								$foodTypes=$row_diet_pref["preferenceValues"];
							else
								$exclusions=$row_diet_pref["preferenceValues"];
							
							echo "<script>console.log('food types: " . print_r($foodTypes) . "' );</script>";
							echo "<script>console.log('exclusions: " . $exclusions . "' );</script>";
							}
							$exclusions_arr=explode(",", $exclusions);
							$foodTypes_arr=explode(",", $foodTypes);	
				
				//collect recipes by category
				$sql_breakfast_recipes="select * from $db.recipe where foodType IN ('".implode("','",$foodTypes_arr)."') and allergy NOT IN ('".implode("','",$exclusions_arr)."') and recipeCategory='Breakfast'";
				$result_breakfast=$conn->query($sql_breakfast_recipes);
				//while($row_breakfast = $result_breakfast->fetch_assoc()){}
				
				//-->>add condtion for each caegory, then run on them , make sure not suggested, add to calander
					
					
					
		}
        else
            echo "User doesn't exist in the system.";
			
			
	}

?>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
</main>
<footer>
</footer>
</body>
</html>