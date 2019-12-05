<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>LifeStyle</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="colorlib.com">

<!-- MATERIAL DESIGN ICONIC FONT -->
<link rel="stylesheet" href="fonts/material-design-iconic-font.css">
<link rel="stylesheet" href="css/font-face.css">

<!--bootstrap link-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--fonterson-->
<script src="https://kit.fontawesome.com/29cbed0584.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- STYLE CSS -->
<link rel="stylesheet" href="css\wizard.css">

</head>

<body>
    
<div class="wrapper">
    <div class="image-holder">
        <img src="images/run-wizard.jpg" alt="">
    </div>

    <script>
        var customerId=sessionStorage.getItem('customerId');
        document.getElementById("customerId").value=customerId;
        
        $(document).ready(function () {
            $('#finish').click(function() {
              checked = $("input[type=checkbox]:checked").length;
        
              if(!checked) {
                alert("You must check at least one checkbox.");
                return false;
              }
        
            });
        });
    </script>

    <form action="" method="post">
        <div id="wizard">
            <!-- SECTION 1 -->
            <h4></h4>
            <section>
                <h4>Select yours goals</h4>
                <div>
                    <input type="hidden" name="customerId" id="customerId" value="">
                    <div class="checkboxwidth custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="goals[]" value="2"
                            id="loseweight">
                        <label class="custom-control-label" for="loseweight">Losing weight</label></div>

                    <div class="checkboxwidth custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="goals[]" value="3"
                            id="fetPrec">
                        <label class="custom-control-label" for="fetPrec">Reducing fat percentages</label></div>

                    <div class="checkboxwidth custom-control custom-checkbox"><input type="checkbox"
                            class="custom-control-input" name="goals[]" value="5" id="Endure">
                        <label class="custom-control-label" for="Endure">Endurance improvement</label></div>

                    <div class="checkboxwidth custom-control custom-checkbox"><input type="checkbox"
                            class="custom-control-input" name="goals[]" value="8" id="Flex">
                        <label class="custom-control-label" for="Flex">Flexibility improvement</label></div>

                    <div class="checkboxwidth custom-control custom-checkbox"><input type="checkbox"
                            class="custom-control-input" name="goals[]" value="1" id="GainWeight">
                        <label class="custom-control-label" for="GainWeight">Gain Weight</label></div>

                    <div class="checkboxwidth custom-control custom-checkbox"><input type="checkbox"
                            class="custom-control-input" name="goals[]" value="4" id="Toning">
                        <label class="custom-control-label" for="Toning">Toning</label></div>

                    <div class="checkboxwidth custom-control custom-checkbox"><input type="checkbox"
                            class="custom-control-input" name="goals[]" value="6" id="ShapeUpper">
                        <label class="custom-control-label" for="ShapeUpper">Shape Upper</label></div>

                    <div class="checkboxwidth custom-control custom-checkbox"><input type="checkbox"
                            class="custom-control-input" name="goals[]" value="7" id="ShapeLower">
                        <label class="custom-control-label" for="ShapeLower">Shape Lower</label></div>

                </div>
            </section>
            <!--2 food type-->
            <h4></h4>
            <section id="food">
                <div class="container">
                    <div class="row">
                        <div class="col-4 spacing-img">
                            <figure>
                            <input type="checkbox" name="foodTypes[]" value="Asian" id="asian" style="display:none">
                                <label for="asian"><img src="images/Asian.jpg" id="img-1" class="type-img" alt="asiati" height="100" width="400"/></label>
                                <figcaption>Asian food</figcaption>
                                <i id="img-1-icon" class="fas fa-check icon-type-img-select"></i>
                            </figure>
                        </div>


                        <div class="col-4 spacing-img">
                            <figure class="spacing-img">
                                <input type="checkbox" name="foodTypes[]" value="Italian" id="italian" style="display:none">
                                <label for="italian"><img src="images/italy.jpg" id="img-2" alt="asiati" class="type-img"
                                    height="100" width="400"></label>
                                <figcaption>Italian food</figcaption>
                                <i id="img-2-icon" class="fas fa-check icon-type-img-select"></i>
                            </figure>
                        </div>

                        <div class="col-4 spacing-img">
                            <figure>
                                <input type="checkbox" name="foodTypes[]" value="Mexican" id="mexican" style="display:none">
                                <label for="mexican"><img src="images/macsicani.jpg" id="img-3" class="type-img" alt="mexican"
                                    height="100" width="400"></label>
                                <figcaption>Mexican food</figcaption>
                                <i id="img-3-icon" class="fas fa-check icon-type-img-select"></i>
                            </figure>
                        </div>

                        <div class="col-4 spacing-img">
                            <figure>
                                <input type="checkbox" name="foodTypes[]" value="Indian" id="indian" style="display:none">
                                <label for="indian"><img src="images/indian.jpg" id="img-4" class="type-img" alt="indian"
                                    height="100" width="400"></label>
                                <figcaption>Indian food</figcaption>
                                <i id="img-4-icon" class="fas fa-check icon-type-img-select spacing-img"></i>
                            </figure>
                        </div>

                        <div class="col-4 spacing-img">
                            <figure>
                                <input type="checkbox" name="foodTypes[]" value="Israeli" id="israeli" style="display:none">
                                <label for="israeli"><img src="images/isreali.jpg" id="img-5" class="type-img" alt="isreali"
                                    height="100" width="400"></label>
                                <figcaption>Isreali food</figcaption>
                                <i id="img-5-icon" class="fas fa-check icon-type-img-select"></i>
                            </figure>
                        </div>

                        <div class="col-4 spacing-img">
                            <figure>
                                <input type="checkbox" name="foodTypes[]" value="HomeMade" id="homemade" style="display:none">
                                <label for="homemade"><img src="images/homemade.jpg" id="img-6" class="type-img" alt="homemade"
                                    height="100" width="400"></label>
                                <figcaption>Homemade food</figcaption>
                                <i id="img-6-icon" class="fas fa-check icon-type-img-select"></i>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 3 FOOD -->
            <h4></h4>
            <section>

                <p>Do you have any allergy?</p>
                <div class="checkboxwidth custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="allergyType[]" value="Lactose"
                        id="Lactose">
                    <label class="custom-control-label" for="Lactose">Lactose</label>
                </div>

                <div class="checkboxwidth custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="allergyType[]" value="Gluten"
                        id="Gluten">
                    <label class="custom-control-label" for="Gluten">Gluten</label>
                </div>

                <div class="checkboxwidth custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="allergyType[]" value="Peanuts"
                        id="Peanuts">
                    <label class="custom-control-label" for="Peanuts">Peanuts</label>
                </div>

                <div>
                    
                    <p>Anything missing? Write us and we will take it in account</p>
                    <input type="text" name="addAllergy"/>

                </div>
            </section>

            <!-- SECTION 4 Activity -->
            <h4></h4>
            <section>
                <!--'walk','run','spin','swim','studio','dance','ski','lift','yoga','climb','martial','fit','climb','pole','pilates','trx','functional'-->
                <div class="container">
                    <div class="row">
                        <div class="col-4 spacing-img">
                            <figure>
                                <input type="checkbox" name="activityTypes[]" value="run" id="run" style="display:none">
                                <label for="run"><img src="images/activity-wizard-running-.jpg" id="img-7" class="activity-img" alt="running" height="100" width="400"></label>
                                <figcaption>Running</figcaption>
                                <i id="img-7-icon" class="fas fa-check icon-type-img-select"></i>
                            </figure>
                        </div>

                        <div class="col-4 spacing-img">
                            <figure>
                                <input type="checkbox" name="activityTypes[]" value="yoga" id="yoga" style="display:none">
                                <label for="yoga"><img src="images/Mountain-Yoga.jpg" id="img-8" alt="Yoga"
                                    class="activity-img" height="100" width="400"></label>
                                <figcaption>Yoga</figcaption>
                                <i id="img-8-icon" class="fas fa-check icon-type-img-select"></i>
                            </figure>
                        </div>

                        <div class="col-4 spacing-img">
                            <figure>
                                <input type="checkbox" name="activityTypes[]" value="spin" id="spin" style="display:none">
                                <label for="spin"><img src="images/spin.jpg" id="img-9"
                                    class="activity-img" alt="spin" height="100" width="400"></label>
                                <figcaption>Spin</figcaption>
                                <i id="img-9-icon" class="fas fa-check icon-type-img-select"></i>
                            </figure>
                        </div>

                        <div class="col-4 spacing-img">
                            <input type="checkbox" name="activityTypes[]" value="swim" id="swim" style="display:none">
                                <label for="swim"><img src="images/activity-swemming-wizard.jpg" id="img-10"
                                class="activity-img" alt="swim" height="100" width="400"></label>
                            <figcaption>Swiming</figcaption>
                            <i id="img-10-icon" class="fas fa-check icon-type-img-select"></i>
                        </div>

                        <div class="col-4 spacing-img">
                            <figure>
                                <input type="checkbox" name="activityTypes[]" value="pilates" id="pilates" style="display:none">
                                <label for="pilates"><img src="images/activity-pilates-wizard.jpg" id="img-11"
                                    class="activity-img" alt="pilates" height="100" width="400"></label>
                                <figcaption>Pilates</figcaption>
                                <i id="img-11-icon" class="fas fa-check icon-type-img-select"></i>
                            </figure>
                        </div>
                        <div class="col-4 spacing-img">
                            <figure>
                                <input type="checkbox" name="activityTypes[]" value="lift" id="lift" style="display:none">
                                <label for="lift"><img src="images/activity-Weights-wizard.jpg" id="img-12"
                                    class="activity-img" alt="Lift" height="100" width="400"></label>
                                <figcaption>Lift</figcaption>
                                <i id="img-12-icon" class="fas fa-check icon-type-img-select"></i>
                            </figure>
                        </div>
                    </div>


                </div>
            </section>

            <!-- SECTION 5 -->
            <h4></h4>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="spacing-button">
                            <input type="checkbox" name="days[]" value="Sunday" id="sunday" style="display:none">
                                <label for="sunday"><button id="day-1" type="button" class="btn button-checked daysPref" onClick="document.getElementById('sunday').checked = true">Sunday</button>
                                </label>
                        </div>
                        <div class="spacing-button ">
                            <input type="checkbox" name="days[]" value="Monday" id="monday" style="display:none">
                                <label for="monday"><button id="day-2" type="button"
                                class="btn button-checked daysPref" onClick="document.getElementById('monday').checked = true">Monday</button>
                                </label>
                        </div>
                        <div class="spacing-button">
                            <input type="checkbox" name="days[]" value="Tuesday" id="tuesday" style="display:none">
                                <label for="tuesday"><button id="day-3" type="button"
                                class="btn button-checked daysPref" onClick="document.getElementById('tuesday').checked = true">Tuesday</button>
                                </label>
                        </div>
                        <div class="spacing-button">
                            <input type="checkbox" name="days[]" value="Wednesday" id="wednesday" style="display:none">
                                <label for="wednesday"><button id="day-4" type="button"
                                class="btn button-checked daysPref" onClick="document.getElementById('wednesday').checked = true">Wednesday</button>
                                </label>
                        </div>
                        <div class="spacing-button">
                            <input type="checkbox" name="days[]" value="Thursday" id="thursday" style="display:none">
                                <label for="thursday"><button id="day-5" type="button"
                                class="btn button-checked daysPref" onClick="document.getElementById('thursday').checked = true">Thursday</button>
                                </label>
                        </div>
                        <div class="spacing-button"><input type="checkbox" name="days[]" value="Friday" id="friday" style="display:none">
                                <label for="friday"><button id="day-6" type="button"
                                class="btn button-checked daysPref" onClick="document.getElementById('friday').checked = true">Friday</button>
                                </label>
                        </div>
                        <div class="spacing-button"><input type="checkbox" name="days[]" value="Saturday" id="saturday" style="display:none">
                                <label for="saturday"><button id="day-7" type="button"
                                class="btn button-checked daysPref" onClick="document.getElementById('saturday').checked = true">Saturday</button>
                                </label>
                        </div>
                    </div>
                    <p>When are the best time slots for your workouts?</p>
                    <div class="hoursPreferDiv">
                        <div id="hoursPreferations">
                            <div class="row">
                                <select required name="startTime"><?php echo get_times();?></select><p> - </p>
                                <select required name="endTime"><?php echo get_times();?></select>
                                <i class="fas fa-minus-circle" id='removeicon'></i>
                                <i class="fas fa-plus-circle" id='addicon'> </i>
                            </div>
                        </div>
                    </div>
                    <p>How many workout suggestions would you like to get per week?</p>
                    <div>
                    <input type="number" name="quantity" min="1" max="7" required>
                    </div>
                    <p>How long is you average workout in minutes?</p>
                    <div>
                    <input type="number" name="minutes" min="1" max="180" required>
                    </div>
                </div>
            </section>

        </div>
    </form>
</div>
<script>
        var customerId=sessionStorage.getItem('customerId');
        document.getElementById("customerId").value=customerId;
        console.log("customerId: ", customerId);
</script>

<?php
function get_times( $default = '00:00', $interval = '+30 minutes' ) {

        $output = '';

        $current = strtotime( '00:00' );
        $end = strtotime( '23:59' );

        while( $current <= $end ) {
            $time = date( 'H:i', $current );
            $sel = ( $time == $default ) ? ' selected' : '';

            $output .= "<option value=\"{$time}\"{$sel}>" . date( 'h.i A', $current ) .'</option>';
            $current = strtotime( $interval, $current );
        }

        return $output;
        }

function redirect($url)
{
    if (!headers_sent())
    {    
        header('Location: '.$url);
        exit;
    }
    else
        {  
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}


        if ($_POST){
       //SQL connection
       session_start();

        $host="localhost";
        $user="galkol_user";
        $pass="Aa123456";
        $db="galkol_lifestyle";

        $conn=new mysqli($host,$user,$pass,$db);
        if ($conn->connect_error){
            die("Connection failed: ".$conn->connect_error);}

        echo "<script>console.log('test works' );</script>";
        if ($_SESSION['customerId']){
            $customerId=$_SESSION['customerId'];
            echo "<script>console.log('found customer id in session: " . $customerId . "' );</script>";
        }
        else if($_POST['customerId']){
             $customerId=$_POST['customerId'];
             echo "<script>console.log('found customer id in form: " . $customerId . "' );</script>";
        }
        else{
            $customerId='12345';
            echo "<script>console.log('couldnt find customer id: " . $customerId . "' );</script>";
        }
        $goalIds=$_POST['goals'];
        $goals=implode(',',$goalIds);
        $foodTypes=$_POST['foodTypes'];
        $foods=implode(',',$foodTypes);
        if ($_POST['allergyType']){
            $allergyTypes=$_POST['allergyType'];
            $allergies=implode(',',$allergyTypes);
        }
        $activityTypes=$_POST['activityTypes'];
        $activities=implode(',',$activityTypes);
        $workoutDays=$_POST['days'];
        $days=implode(',',$workoutDays);
        $startTime=$_POST['startTime'];
        $endTime=$_POST['endTime'];
        $hours=$startTime."-".$endTime;
        if($_POST['startTime1']){
            $startTime1=$_POST['startTime1'];
            $endTime1=$_POST['endTime1'];
            $hours=$startTime."-".$endTime.",".$startTime1."-".$endTime1;
        }
        $workoutsCount=$_POST['quantity'];
        $workoutMins=$_POST['minutes'];
        echo "<script>console.log('customer id: " . $customerId . "' );</script>";
        echo "<script>console.log('goal ids: " . $goals . "' );</script>";
        echo "<script>console.log('food Types: " . $foods . "' );</script>";
        echo "<script>console.log('allergy Types: " . $allergies . "' );</script>";
        echo "<script>console.log('workout days array[0]: " . $workoutDays[0] . "' );</script>";
        echo "<script>console.log('workout days: " . $days . "' );</script>";
        echo "<script>console.log('start time: " . $startTime . "' );</script>";
        echo "<script>console.log('end time: " . $endTime . "' );</script>";
        echo "<script>console.log('hours: " . $hours . "' );</script>";
        echo "<script>console.log('workouts count: " . $workoutsCount . "' );</script>";
        echo "<script>console.log('workout minutes: " . $workoutMins . "' );</script>";
        
        if($_POST['addAllergy']){
            $text=$_POST['addAllergy'];
            echo "<script>console.log('new allergy reported: " . $text . "' );</script>";
            mail("999galk@gmail.com","New Allergy Reported",$text);
        }
        
        function insertToDB(){
         global $db,$conn, $goals,$customerId,$foods,$allergies,$activities,$workoutsCount,$days,$workoutMins,$hours;
         $sql_update_goals="UPDATE $db.customer SET goal_ids='$goals' where customerID='$customerId'";
         $sql_insert_food_pref="INSERT INTO $db.customerDietPerferance (`customerId`, `preferenceType`, `preferenceValues`) VALUES ('$customerId','food_type','$foods')";
         $sql_insert_allergy_pref="INSERT INTO $db.customerDietPerferance (`customerId`, `preferenceType`, `preferenceValues`) VALUES ('$customerId','exclusion','$allergies')";
         //$sql_insert_activity_pref="INSERT INTO `customerFitnessPreferance`(`customerId`, `numOfWorkouts`, `daysOfWeek`, `hoursOfDay`, `avgWorkoutMinutes`) VALUES ('$customerId','$workoutsCount','$workoutDays',[value-4],'$workoutMins')";
         $sql_insert_activity_pref="INSERT INTO $db.customerFitnessPreferance (`customerId`, `activities`,`numOfWorkouts`, `daysOfWeek`,`hoursOfDay`,`avgWorkoutMinutes`) VALUES ('$customerId','$activities','$workoutsCount','$days','$hours','$workoutMins')";
         if ($conn->query($sql_update_goals) === TRUE) {
         echo "<script>console.log('Record updated successfully')</script>";
            } else {
                echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                }

        if ($conn->query($sql_insert_food_pref) === TRUE) {
         echo "<script>console.log('Record updated successfully')</script>";
            } else {
                echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                }

        if ($conn->query($sql_insert_allergy_pref) === TRUE) {
         echo "<script>console.log('Record updated successfully')</script>";
            } else {
                echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                }

        if ($conn->query($sql_insert_activity_pref) === TRUE) {
         echo "<script>console.log('Record updated successfully')</script>";
            } else {
                echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                }
        }
        insertToDB();


        //Take customer data

        $sql_customer_data="select * from $db.customer where customerId='$customerId'";
        $result_customer_data=$conn->query($sql_customer_data);

        if ($result_customer_data->num_rows>0){
        echo "<script>
              console.log('NUMBER OF ROWS > 0');</script>";
        $row=$result_customer_data->fetch_assoc();

        // functions that will be used later:
                //check if workout/recipe was suggested last 7 days
                        function wasSuggested($id, $type){
                            global $customerId,$db,$conn;
                            echo "<script>console.log('started function wasSuggested, customer id: " . $customerId . "' );</script>";
                            $sql_suggestions="select * from $db.suggestion where customerID='$customerId' and suggestionType='$type'";
                            $result_suggestions=$conn->query($sql_suggestions);
                            if ($result_suggestions->num_rows>0){
                            echo "<script>console.log('entered if' );</script>";
                            echo "<script>console.log('number of suggestions found: " . $result_suggestions->num_rows . "' );</script>";
                            while ($row_suggestions = $result_suggestions->fetch_assoc()){
                                echo "<script>console.log('entered while, suggestion id:" . $row_suggestions['suggestionId'] . "' );</script>";
                                if ($row_suggestions['suggestionId']==$id){
                                    echo "<script>console.log('was suggested, suggestionId: " . $id . "' );</script>";
                                    return true;
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
                // addWorkouts suggestions
                        function createWorkoutSuggestion($category,$totalWorkouts){
                            global $daysOfWeek,$hoursOfDay, $customerId,$numOfWorkouts,$db,$conn,$bodyParts,$avgWorkoutMinutes;
                            $sql_workouts="select * from $db.workout where workoutCategory='$category' and bodySection IN ('".implode("','",array_map(null , $bodyParts))."') and minutes<='$avgWorkoutMinutes'+10";
                            $result_workouts=$conn->query($sql_workouts);
                            $i=0;
                        while(($row = $result_workouts->fetch_assoc())&& ($i<$totalWorkouts)){
                            //select random day of the optional days array
                            $randIndexDay = array_rand($daysOfWeek);
                            $workoutDay=$daysOfWeek[$randIndexDay];
                            //remove the chosen day so we don't push more than 1 workout a day:
                            if (count($daysOfWeek)>1){
                            array_splice($daysOfWeek,$randIndexDay, 1);
                            }
                            echo "<script>console.log('workoutDay: " . $workoutDay . "' );</script>";
                            global $nextDate;
                            $nextDate=date('Y-m-d', strtotime('next '. $workoutDay));
                            echo "<script>console.log('next date of workoutDay: " . $nextDate . "' );</script>";
                            $randIndexHours = array_rand($hoursOfDay);
                            $workoutTimeFrame=$hoursOfDay[$randIndexHours];
                            echo "<script>console.log('workoutTimeFrame: " . $workoutTimeFrame . "' );</script>";
                            $separatorIndex=strpos($workoutTimeFrame,'-');
                            echo "<script>console.log('separatorIndex: " . $separatorIndex . "' );</script>";
                            $startTime=substr($workoutTimeFrame,0,$separatorIndex);
                            echo "<script>console.log('Start Time: " . $startTime . "' );</script>";
                            $workoutName=$row["name"];
                            $workoutId=$row["workoutId"];
                            $workoutDescription=$row["description"];
                            $workoutCategory=$row["workoutCategory"];
                            $activityType=$row["activityType"];
                            $bodySection=$row["bodySection"];
                            $workMin=$row["minutes"];
                            echo "<script>console.log('workoutId: " . $workoutId . "' );</script>";
                            echo "<script>console.log('workoutName: " . $workoutName . "' );</script>";
                            echo "<script>console.log('workout desc: " . $workoutDescription . "' );</script>";
                            echo "<script>console.log('workout cat: " . $workoutCategory . "' );</script>";
                            echo "<script>console.log('activity type: " . $ActivityType . "' );</script>";
                            echo "<script>console.log('body section: " . $bodySection . "' );</script>";
                            echo "<script>console.log('number of left workouts: " . $results->num_rows . "' );</script>";
                            echo "<script>console.log('total required workouts: " . $numOfWorkouts . "' );</script>";
                        //check if workout was already suggested (we suggest workout that was already suggested only if we don't have anything else in the pool)
                            if ((wasSuggested($workoutId,$customerId))&&($result_workouts->num_rows>$i)){
                                echo "<script>console.log('workout was already suggested');</script>";
                                continue;
                            }
                            else{
                                echo "<script>console.log('workout was not suggested, adding it to suggestions');</script>";
                                $sql_add_suggestion="INSERT INTO $db.suggestion (`customerID`, `suggestionId`, `date`, `hour`, `suggestionType`) VALUES ('$customerId','$workoutId','$nextDate','$startTime','Workout')";
                                if ($conn->query($sql_add_suggestion) === TRUE) {
                                 echo "<script>console.log('Record updated successfully')</script>";
                                    } else {
                                        echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                                    }
                                $i++;
                            }
                            

                        }
                            }
                    //insert Recipies Suggestions
                        function addRecipeSuggestions($type){
        				    global $db,$conn,$nextDate,$foodTypes_arr,$exclusions_arr,$customerId;
            				$sql_recipes="select * from $db.recipe where foodType IN ('".implode("','",$foodTypes_arr)."') and allergy NOT IN ('".implode("','",$exclusions_arr)."') and recipeCategory='$type'";
            				$result=$conn->query($sql_recipes);
            				$suggestions_count=3;
            				while(($row=$result->fetch_assoc())&&$suggestions_count>0){
            				    $recipeId=$row['recipeId'];
            				    $sql_add_suggestion="INSERT INTO $db.suggestion (`customerID`, `suggestionId`, `date`, `suggestionType`) VALUES ('$customerId','$recipeId','$nextDate','Recipe')";
                                            if ($conn->query($sql_add_suggestion) === TRUE) {
                                             echo "<script>console.log('Record updated successfully')</script>";
                                                } else {
                                                    echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                                                }
                                            $suggestions_count--;
            				}
            				}
                

        //----------------Take customer goals & calc aerobic/anaerobic perc---------//
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
                    echo "<script>console.log('number of aurobic workouts to create: " . $totalAerobic . "' );</script>";
                    echo "<script>console.log('number of anaurobic workouts to create: " . $totalAnaerobic . "' );</script>";
    
                //collect aerobic workouts base on user info
                    createWorkoutSuggestion('aerobic',$totalAerobic);

                //collect anaerobic workouts base on user info
                    createWorkoutSuggestion('anaerobic',$totalAnaerobic);
                        
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
				
				// add recipies suggestions
				addRecipeSuggestions('Breakfast');
				addRecipeSuggestions('Lunch');
				addRecipeSuggestions('Dinner');
				addRecipeSuggestions('Snack');
				
				echo "<script>window.location.href='https://galkol.mtacloud.co.il/Sadna/weekly_conclusion.php';</script>";
				
        }
        
?>

<script src="js/jquery-3.3.1.min.js"></script>
<!-- JQUERY STEP -->
<script src="js/jquery.steps.js"></script>
<script src="js/wizard.js"></script>
<!-- Template created and distributed by Colorlib -->
</body>
</html>