<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
    <!-- Required meta tags-->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <script src="https://kit.fontawesome.com/29cbed0584.js"></script>
    <!-- Jquery JS-->
    <script src="js/jquery-3.2.1.min.js"></script>
    
    <script src="js/Chart.bundle.min.js"></script>
    <!--
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <!-- Title Page-->
    <title>weekly coclusion</title>

    <!-- Fontfaces CSS
    <link href="css/font-face.css" rel="stylesheet" media="all">
    

    <!-- Bootstrap CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
    

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS
    <link href="css/card.css" rel="stylesheet" media="all">-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    
     <!--weekly coclusion CSS-->
    <link href="css/weekly_conclusion.css" rel="stylesheet" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    

</head>

<body> <style="background: url('images/background-2551051_960_720.jpg'); background-size: cover;">
    
    <header>
        
        <!--nav bar tabs-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height:17%">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!--<div class="logo-picture">
                <img src="images/our_logo.png" alt="logo" style="width:25%;">
        </div>-->
        <img src="images/our_logo.png" alt="logo" style="width:150px;height:80px;">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="weekly_conclusion.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="workout.php">Workouts <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="recipe.php">Recipies</a>
              </li>
            </ul>
            
          </div>
</nav>
    </header>
    <main>  
    <div class="container-fluid" style="height:100%;">
        <div class="row" style="border-style:solid;padding-top:15px;">
            <div id="weather" class="col-3 weather_info" style="margin-top:20px">
        <h3 style='height:auto;color:#666'>Are you training outside?</h3><p style='margin-left:5% width:50px color:#666'>check the weather:</p>  </div>  
        
        <div class="col-3 weather-card">
            <a target="_blank" href="https://www.booked.net/weather/haifa-6429"><img src="https://w.bookcdn.com/weather/picture/1_6429_1_1_137AE9_160_ffffff_333333_08488D_1_ffffff_333333_0_6.png?scode=124&domid=w209&anc_id=72785"  alt="booked.net"/></a>
            <!--<div class="card sky" style="padding-top:10%">-->
            <!--    <h3>Kinneret</h3>-->
            <!--    <p id="Tiberias-weather"></p>-->
            <!--    <p id="Tiberias-temp"></p>-->
            <!--</div>-->
            </div>
            <div class="col-3 weather-card">
                <a target="_blank" href="https://www.booked.net/weather/tel-aviv-18414"><img src="https://w.bookcdn.com/weather/picture/1_18414_1_1_137AE9_160_ffffff_333333_08488D_1_ffffff_333333_0_6.png?scode=124&domid=w209&anc_id=35823"  alt="booked.net"/></a>
           <!--<div id="TA-weather" class="card sky" style="padding-top:10%">-->
           <!--    <h3>Tel Aviv</h3>-->
           <!--     <p id="TLV-weather"></p>-->
           <!--     <p id="TLV-temp"></p>-->
           <!-- </div>-->
            </div>
            <div class="col-3 weather-card">
                <a target="_blank" href="https://www.booked.net/weather/eilat-18976"><img src="https://w.bookcdn.com/weather/picture/1_18976_1_1_137AE9_160_ffffff_333333_08488D_1_ffffff_333333_0_6.png?scode=124&domid=w209&anc_id=72785"  alt="booked.net"/></a>
            <!--<div id="Eilat" class="card sky" style="padding-top:10%">-->
                
            <!--    <h3>Eilat</h3>-->
            <!--    <p id="Eilat-weather"></p>-->
            <!--    <p id="Eilat-temp"></p>-->
            <!--</div>-->
        </div>
        </div>
        
        
        <!-- PAGE CONTAINER-->
        <div class="row" style="border-style:solid;padding:15px;border-top-style:none;height:350px">
        <div class="col-8">
        <div class="page-container" style="margin-left:0px;float:left;background-color:transparent">
            

            <!-- MAIN CONTENT-->
                            
                                <div class="weekly_balance">
                                    <!--div class="au-card-inner"-->
                                        <h2 class=" chart-title">Your balance at the pass week</h2>
                                        <canvas id="singelBarChart" style='background-color:white;width:600px'></canvas>
                                    </div>
                                </div>
                          </div>

        

    
    
        

<?php 
        echo "<div class='col-4'>";
        session_start();
        
		$host="localhost";  
		$user="galkol_user";
		$pass="Aa123456";
		$db="galkol_lifestyle";
		
		$conn=new mysqli($host,$user,$pass,$db);
		if ($conn->connect_error){
    		die("Connection failed: ".$conn->connect_error);}
    	
    	
    	$customerId=$_SESSION['customerId'];
    	
    	if (is_null($customerId)) {
    	    echo "<script>console.log('customer id not found');</script>";    
    	    $customerId = '12345';
    	}
    	else{
    	    echo "<script>console.log('customer id found: ".$customerId."');</script>";  
    	    $_SESSION['customerId']=$customerId;
    	}
    	
		$calories_balances = array();
        
        $today=date("Y-m-d");
     //qurey for balnce daily
        $gain_cal_today="select * from customerDietStats where customerID='$customerId' and date='$today'";
                                          
          $result_gain_cal_toDay = $conn->query($gain_cal_today); 
          $gain_cal_toDay_total = $result_gain_cal_toDay->fetch_assoc();
          $total_gain = $gain_cal_toDay_total['totalDailyCal'];
          
          $burn_cal_today="select * from customerFitnessStats where customerID='$customerId' and date='$today'";
          $result_burn_cal_today = $conn->query($burn_cal_today); 
          $burn_cal_toDay_total = $result_burn_cal_today->fetch_assoc();
          $burn_cal_toDay_total = $burn_cal_toDay_total['totalDailyCal'];
           $totalecho=$total_gain-$burn_cal_toDay_total;
          
          
           
         
        echo "<div class='daily_balance_card' style='height:150px;width:100%;margin-top:25px;'>";
        echo "<img src='images/calorie.png' alt='balance' style='width:40%;'>";
        echo "<div id='results' style='float:right;width:60%;'>";
        echo "<div id='resultsExist' style='width:100%;'>";
        echo "<h2><b>Your  Daily Blance</b></h2>";
        echo "<p>Gain calories: " . $total_gain . "</p><br><p>Burn calories: " . $burn_cal_toDay_total . "</p><p>Calories balance: " . $totalecho . "</p>";
        echo "</div>";
        echo "</div>";
        
        
        if(! $total_gain){
        echo "<script>console.log('total gain is: '".$total_gain."')</script>" ;   
          echo "<script>$('#resultsExist').remove();
                var div = document.createElement('div');
                div.id='fill';
                var p_text=document.createElement('p');
                p_text.innerHTML='Fill in your daily summery!';
                var p_button = document.createElement('p');
                
                p_button.innerHTML='<button onClick=\"window.location.href=\'DailySummary.php\'\">Fill in your daily summery!</button>';
                $('#results').css({'margin-top':'10%'});
                
                $('#results').append(p_button);
          </script>";
          echo "</div>";
        }
        
        for ($x = 6; $x >= 0; $x--) {
            $gain_cal_query="select totalDailyCal from customerDietStats where (customerID=" . $customerId . ") and
                                            day(date)=day(CURRENT_DATE - " . $x . ") and
                                            month(date)=month(CURRENT_DATE - " . $x . ") and
                                            year(date)=year(CURRENT_DATE - " . $x . ")";
                                            
        	$result_gain_cal = $conn->query($gain_cal_query); 
            $gain_cal = $result_gain_cal->fetch_assoc();
            $gain_cal = $gain_cal["totalDailyCal"];
        	
        	$burn_cal_query="select totalDailyCal from customerFitnessStats where (customerID=" . $customerId . ") and (date=date(CURRENT_DATE - " . $x . "))";
        	$result_burn_cal = $conn->query($burn_cal_query); 
            $burn_cal = $result_burn_cal->fetch_assoc();
            $burn_cal = $burn_cal["totalDailyCal"];

        	//if (is_null($gain_cal) or is_null($burn_cal)) {
        	//    $diff = NULL;
        	//} else {
        	    $diff=($burn_cal)-($gain_cal);
        	    $calories_balances[] = $diff;
        	//}
        }
        
        $calories_balances = json_encode($calories_balances);
        echo "</div>";
        echo "</div>";
        
        ?>
    
   <!-- weather widget start-->
   <!-- <a target="_blank" href="https://www.booked.net/weather/tel-aviv-18414"><img src="https://w.bookcdn.com/weather/picture/1_18414_1_1_137AE9_160_ffffff_333333_08488D_1_ffffff_333333_0_6.png?scode=124&domid=w209&anc_id=35823"  alt="booked.net"/></a>-->
   <!--<a target="_blank" href="https://www.booked.net/weather/haifa-6429"><img src="https://w.bookcdn.com/weather/picture/1_6429_1_1_137AE9_160_ffffff_333333_08488D_1_ffffff_333333_0_6.png?scode=124&domid=w209&anc_id=72785"  alt="booked.net"/></a>                  -->
   <!-- <a target="_blank" href="https://www.booked.net/weather/eilat-18976"><img src="https://w.bookcdn.com/weather/picture/1_18976_1_1_137AE9_160_ffffff_333333_08488D_1_ffffff_333333_0_6.png?scode=124&domid=w209&anc_id=72785"  alt="booked.net"/></a>-->
   <!-- -->
    <script type="text/javascript">var calories_balances = "<?= $calories_balances ?>";</script>
    <!--<script>
    var customerId=sessionStorage.getItem('customerId');
    document.getElementById("customerId").value=customerId;
    </script>-->
     <script src="js/Chart.bundle.min.js"></script>
    <script src="js/main.js"></script>
    	
    <script type="text/javascript">
        
        $.getJSON("http://api.openweathermap.org/data/2.5/weather?q=Tiberias,il&appid=eec8683d47744ede411745c555c1a480",
    		function(data){
    		    console.log(data);
    			$('#Tiberias-weather').append(data.weather[0].description);
    			$('#Tiberias-temp').append(Math.round(data.main.temp - 273.15));
    			$('#Tiberias-temp').append('°C');
    		});
				
		$.getJSON("http://api.openweathermap.org/data/2.5/weather?id=293397&appid=eec8683d47744ede411745c555c1a480",
    		function(data){
    		    console.log(data);
    			$('#TLV-weather').append(data.weather[0].description);
    			$('#TLV-temp').append(Math.round(data.main.temp - 273.15));
    			$('#TLV-temp').append('°C');
    		});
		
		$.getJSON("http://api.openweathermap.org/data/2.5/weather?id=295277&appid=eec8683d47744ede411745c555c1a480",
    		function(data){
    		    console.log(data);
    			$('#Eilat-weather').append(data.weather[0].description);
    			$('#Eilat-temp').append(Math.round(data.main.temp - 273.15));
    			$('#Eilat-temp').append('°C');
    		});
    		
    	$('#recipeSuggest').click(function() {
    	   window.location('recepie.php'); 
    	});
    	
    	$('#workoutsSuggest').click(function() {
    	   window.location('workout.php'); 
    	});
    
    </script>
    </div>
    </main>

</body>

</html>

