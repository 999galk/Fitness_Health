<html>
<head>
        <link href="css/recipeSuggest.css" rel="stylesheet" media="all">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
             <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </head>
<body style="background-image: url(images/pexels-photo-616404.jpg); background-repeat: no-repeat;background-size: cover">
    
    <header>
        
        <!--our logo-->
        
        
        <!--nav bar tabs-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height:17%">
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
    <div>
  <!-- Large modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">-->
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="width: 100%; overflow: hidden;background-color:#e3cdb5;">
            <input type="hidden" id="customerId">
                <table id="breakfast" style="background-color:#f8f2ec">
                    <h1 style="text-align:center;">Breakfast Suggestions</h1>
                </table>                    
                </div>
                <div class="modal-content" style="width: 100%; overflow: hidden;background-color:#e3cdb5;">
                <table id="lunch" style="background-color:#f8f2ec">
                    <h1 style="text-align:center;">Lunch Suggestions</h1>
                </table>                    
                </div>
                <div class="modal-content" style="width: 100%; overflow: hidden;background-color:#e3cdb5;" >
                <table id="dinner" style="background-color:#f8f2ec">
                    <h1 style="text-align:center;">Dinner Suggestions</h1>
                </table>                    
                </div>
                <div class="modal-content" style="width: 100%; overflow: hidden;background-color:#e3cdb5;">
                <table id="snacks" style="background-color:#f8f2ec">
                    <h1 style="text-align:center;">Snacks Suggestions</h1>
                </table>                    
                </div>
    </div>
    
  </div>
  <script type="text/javascript">
       function addRecipe(all){
           console.log('started addRecipe:',all);
           var values=all.split(',');
           console.log('values:',values);
           var tr=document.createElement("tr");
           tr.class="insideModel";
           tr.style="border-style:solid;height:285px;";
           var td_img=document.createElement("td");
           var img=document.createElement("img");
           img.src=values[5];
           img.style="width: 400px";
           var td_info=document.createElement("td");
           td_info.style="float:left;margin-top:8%;";
           var div_info = document.createElement("div");
           var headline=document.createElement("h3")
           headline.innerHTML=values[0];
           var p_Category=values[1];
           var p_foodType=document.createElement("p");
           p_foodType.innerHTML="Food Type:"+values[2];
           var p_cal=document.createElement("p");
           p_cal.innerHTML="Calories:"+values[3];
           var p_Description=document.createElement("p");
           p_Description.innerHTML="Description:"+values[4];
           if(p_Category=="Breakfast"){
               $("#breakfast").append(tr);
               
           }else if(p_Category=="Lunch"){
               $("#lunch").append(tr)
           }else if(p_Category=="Dinner"){
               $("#dinner").append(tr)
           }else if(p_Category=="Snack"){
               $("#snacks").append(tr)
           }
            tr.append(td_img);
            td_img.append(img);
            tr.append(td_info);
            td_info.append(div_info);
            div_info.append(headline);
            div_info.append(p_foodType);
            div_info.append(p_cal);
            div_info.append(p_Description);
       };
       </script>
       
       
</div>

<?php
        session_start();
        $host="localhost";
        $user="galkol_user";
        $pass="Aa123456";
        $db="galkol_lifestyle";

        $conn=new mysqli($host,$user,$pass,$db);
        if ($conn->connect_error){
            die("Connection failed: ".$conn->connect_error);
        }
        
        $customerId=$_SESSION['customerId'];
        if (is_null($customerId)) {
    	    echo "<script>console.log('customer id not found');</script>";    
    	    $customerId = '12345';
    	}
    	else{
    	    echo "<script>console.log('customer id found: ".$customerId."');</script>";   
    	}
        
        $today=date("Y-m-d");
        $week=date("Y-m-d",strtotime("+7 day"));
        $user_recipies= array();
		$sql_user_suggestion="select * from $db.suggestion where customerID='$customerId' AND suggestionType='Recipe' AND date BETWEEN '$today' AND '$week'";
        $result_user_suggestion=$conn->query($sql_user_suggestion);
        
        if ($conn->query($sql_user_suggestion) === TRUE) {
         echo "<script>console.log('Record updated successfully');</script>";
            } else {
                echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                }
        
        if ($result_user_suggestion->num_rows>0) {
            echo "<script>console.log('found results suggestions for user');</script>";
        
        while($row=$result_user_suggestion->fetch_assoc()){
            $recipeId=$row['suggestionId'];
            
            $sql_user_recipies="select * from $db.recipe where recipeId='$recipeId'";
            
            if ($conn->query($sql_user_recipies) === TRUE) {
         echo "<script>console.log('Record updated successfully');</script>";
            } else {
                echo "<script>console.log('Error updating record: " . $conn->error."');</script>";
                }
            
            $result_user_recipe=$conn->query($sql_user_recipies);
            if ($result_user_recipe->num_rows>0){
                echo "<script>console.log('found recipe in db');</script>";
                while($row_recipe=$result_user_recipe->fetch_assoc()){
//(`recipeId`, `name`, `description`, `recipeCategory`, `foodType`, `calories`, `fatPercent`, `proteinPercent`, `carbsPercent`, `mediaItemType`, `mediaItemContent`, `allergy`)
    	        $headline=$row_recipe['name'];
        	    $cat=$row_recipe['recipeCategory'];//for filter
        	    $FoodType=$row_recipe['foodType'];
        	    $cal=$row_recipe['calories'];
        	    $desc=$row_recipe['description'];
        	    $img=$row_recipe['mediaItemContent'];
    	        $line=$headline.",".$cat.",".$FoodType.",".$cal.",".$desc.",".$img;
    	        if (! in_array($recipeId, $user_recipies)){
    	        echo "<script>addRecipe('".$line."');</script>";
    	        array_push($user_recipies, $recipeId);
    	        }
    	        
        }
        }
        }
        }
    
        
?>

<script type="text/javascript">
  $(window).on('load',function(){
      $('#myModal').modal('show');
  });
</script>
</main>
</body>
</html>