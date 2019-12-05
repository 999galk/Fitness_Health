<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

    <link href="css/font-face.css" rel="stylesheet" media="all">
    <!-- Fontfaces CSS
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    -->
    
    <!-- Bootstrap CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
    
    
    <!-- Vendor CSS
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    -->
    
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    
    
    <!--register CSS-->
    <link href="css/registration.css" rel="stylesheet" media="all">

</head>

<body>
    <!--page structure-->
        <!--login section-->
        <div class="container-fluid login-wrap">
            
            <div class="row">
            <!--logo-->
            <div class="logo-picture">
                <img src="images/our_logo.png" alt="logo" >
            </div>
            
            <!--form section-->
            
                <!--opening-->
                <div class="login-opening">
                    <p>hey you!<br> We are happy you decided to join us!<br> </p>
                </div>
            </div>
                        
                <div class="login-fields needs-validation">
                <form name="registerForm" action="" method="post">
                <div class="row">
                <div class="group-of-small-fields">
                    
                <!--private name-->
                <div class="form-field">
                    <div class="lable-size">
                        <label>Private name<span class="color-red">*</span></label>
                    </div>
                    
                    <div class="input-size">
                        <input class="au-input au-input--full" type="text" name="privatename" placeholder="private name" required>
                    </div>
                </div>
                                
                <!--family name-->
                <div class="form-field">
                    <div class="lable-size">
                        <label>Family name<span class="color-red">*</span></label>
                    </div>
                    <div class="input-size">
                        <input class="au-input au-input--full" type="text" name="familyname" placeholder="Family name" required>
                    </div>
                </div>
                                
                <!--gender-->
                <div class="form-field">
                    <div class="lable-size">
                        <label>Gender<span class="color-red">*</span></label>
                    </div>
                    
                    <div class="input-size">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons" style="height:100%;width:100%;">
                            <!--option1-->
                            <label class="btn btn-secondary active">
                            <input type="radio" name="gender" id="option1" autocomplete="off" value="M" checked> Male</label>

                            <!--option2-->
                            <label class="btn btn-secondary">
                            <input type="radio" name="gender" id="option2" autocomplete="off" value="F"> Female</label>
                        </div>
                    </div>
                </div>
                
                <!--age-->
                        <div class="form-field">
                                
                        <div class="lable-size">
                            <label>Age<span class="color-red">*</span></label></div>
                        <div class="input-size">
                            <input class="au-input au-input--full" type="number" name="age" min=1 max=120 required>
                        </div>
                        </div>
                        
                <!--date of birth
                <div class="form-field">
                    <div class="lable-size">
                        <label> Date of birth<span class="color-red">*</span></label>
                    </div>
                    <div class="input-size">
                        <input  class="au-input au-input--full" type="date" name="birthday" required>
                    </div>
                </div>-->
                        
                        
                <!--height-->
                <div class="form-field">
                    <div class="lable-size">
                        <label>Height (in cm)<span class="color-red">*</span></label>
                    </div>
                    <div class="input-size">
                        <input class="au-input au-input--full" type="number" name="height" min=100 max=250 required>
                    </div>
                </div>
                                
                <!--weight-->
                <div class="form-field">
                    <div class="lable-size">
                        <label>Weight (in kg)<span class="color-red">*</span></label>
                        </div>
                    <div class="input-size">
                        <input class="au-input au-input--full" type="number" name="weight" min=40 max=200 required>
                    </div>
                </div>
                        
                                        
                <!--email-->
                <div class="form-field, big-form-field">
                    <div class="lable-size">
                        <label>Email Address<span class="color-red">*</span></label>
                    </div>
                    <div class="input-size">
                        <input class="au-input au-input--full" type="email" name="email" placeholder="Email" required>
                    </div>
                </div>
                
                <div class="email-approval">
                    <p>*By register you approve us to get access to your google calander account</p>
                </div>           
                
                <div class="group-of-small-fields">
                                
                <!--password-->
                <div class="form-field">
                    <div class="lable-size">
                        <label>Password<span class="color-red">*</span></label>
                    </div>
                    <div class="input-size">
                        <input class="au-input au-input--full" type="password" name="password1" placeholder="Password" required>
                    </div>
                </div>
                                
                                
                <!--password2-->
                    <div class="form-field">
                        <div class="lable-size">
                            <label>validate<span class="color-red">*</span></label>
                        </div>
                        <div class="input-size">
                            <input class="au-input au-input--full" type="password" name="password2" placeholder="Password" required>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                        
                <div class="row">                
                <!--submit buttom-->
                    <div class="submit-buttom">
                            <button class="myBtn au-btn--green" type="submit" style="padding:2px"> I'm reday to start! </button>
                        </div>
                                
                <!--signin option-->
                    <div class="sign-in-option">
                        <p>Already have account?<a href="login.php">Sign In</a></p>
                    </div>
                    
                    </div>
              
    
                    </form>
         </div> 
     </div>

    
    <?php
    if ($_POST){ 
        
        session_start();
        
		$host="localhost";  
		$user="galkol_user";
		$pass="Aa123456";
		$db="galkol_lifestyle";
		
		$conn=new mysqli($host,$user,$pass,$db);
		if ($conn->connect_error){
    		die("Connection failed: ".$conn->connect_error);}
    		
    		
    		echo "<script>console.log('number of suggestions found: " . $result_suggestions_7days->num_rows . "' );</script>";
		
		$firstName=$_POST['privatename'];
		$surename=$_POST['familyname'];
		$fullName=$firstName . " " . $surename;
		echo "<script>console.log('first name: ".$firstName ."');</script>";
		echo "<script>console.log('surename: ".$surename ."');</script>";
		$dof=$_POST['birthday'];
		echo "<script>console.log('dof: ".$dof ."');</script>";
		$email=$_POST['email'];
		echo "<script>console.log('email: ".$email ."');</script>";
		$password=$_POST['password2'];
		echo "<script>console.log('pass: ".$password ."');</script>";
		$gender=$_POST['gender'];
		$weight=$_POST['weight'];
		$height=$_POST['height'];
		$age=$_POST['age'];
		
		if ($gender == "M") {
        $bmr = 66.5 + ( 13.75 * $weigth ) + ( 5.003 * $height ) - ( 6.755 * $age );
        }
        else {
        $bmr = 655.1 + ( 9.563 * $weigth ) + ( 1.850 * $height ) - ( 4.676 * $age );
        }
		
		$sql="INSERT INTO $db.customer(`fullName`, `dateOfBirth`,`weight`, `height`, `restCalories`,`email`, `password`, `gender`) VALUES ('$fullName','$dof','$weight','$height','$bmr','$email','$password','$gender')";
		
		if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            $sql_customer_data="select * from $db.customer where email='$email'";
		    $result_customer_data=$conn->query($sql_customer_data);
            if ($result_customer_data->num_rows>0){
		    $row=$result_customer_data->fetch_assoc();
		    echo "<script>sessionStorage.setItem('customerId'," . $row['customerID'] . ");</script>";
		    $_SESSION["customerId"]=$row['customerID'];
		    echo "<script>location.href = 'googleAccess.php';</script>";
		    }
		}
		else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
		
    }
		
		

?>
    
    
    <!-- Jquery JS
    <script src="vendor/jquery-3.2.1.min.js"></script>
    
    <!-- Bootstrap JS
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    
    <!-- Vendor JS
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    -->
    
    <!-- Main JS
    <script src="js/main.js"></script>
    <script src="register.js"></script>
    -->

</body>

</html>
<!-- end document-->