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
    <title>login</title>

    <!-- Fontfaces CSS
    <link href="css/font-face.css" rel="stylesheet" media="all">
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
    
    <!--login CSS-->
    <link href="css/login.css" rel="stylesheet" media="all">

</head>

<body>
    <!--page structure-->
                
        <!--login section-->
        <div class="login-wrap container-fluid">
                    
            <!--logo-->
            <div class="row">
            <div class="logo-picture">
                <img src="images/our_logo.png" alt="logo" >
            </div>
            
            <!--form section-->
                        
                <!--opening-->
                
                <div class="login-opening">
                    <p>hey you!<br> want to know how you progress?<br> login and we will take care the rest.. </p>
                </div>
                </div>
                
                <div class="row">
                <div class="login-fields">
                <form name="registerForm" action="" method="post">   
                        
                                        
                <!--email-->
                <div class="form-field, big-form-field">
                    <div class="lable-size">
                        <label>Email Address<span class="color-red">*</span></label>
                    </div>
                    <div class="input-size">
                        <input class="au-input au-input--full" type="email" name="email" placeholder="Email" required>
                    </div>
                </div>
                        
                                
                <!--password-->
                <div class="form-field, big-form-field">
                    <div class="lable-size">    
                        <label>Password<span class="color-red">*</span></label>
                    </div>
                    <div class="input-size">
                        <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                </div>
                </div>
                <div class="row">
                <!--submit buttom-->
                
                    <div class="submit-buttom">
                        <div class="input-size">
                            <button class="myBtn au-btn--green" type="submit">log me in!</button>
                        </div>
                    </div>
                
                    
                        
                <div class="color-red err">
                    <?php $reasons = array("password" => "Password incorrect", "email" => "User doesnt exist."); if ($_GET["loginFailed"]) echo $reasons[$_GET["reason"]]; ?>
                </div>
                        
                <!--register option-->
                <div class="register-option">
                    <p>Do you have an account?<a href="registration.php">Its time to register</a></p>
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
		
		$email=$_POST['email'];
		$pass=$_POST['password'];
		$sql_customer_data="select * from $db.customer where email='$email'";
		$result_customer_data=$conn->query($sql_customer_data);
        if ($result_customer_data->num_rows>0){
		    $row=$result_customer_data->fetch_assoc();
		    if ($row['password']==$pass){
		        $_SESSION['customerId']=$row['customerID'];
		        echo "<script>sessionStorage.setItem('customerId'," . $row['customerID'] . ");</script>";
		        echo "<script>location.href = 'weekly_conclusion.php';</script>";
		    }
		    else{
		        die(header("location:login.php?loginFailed=true&reason=password"));
		    }
		}
		else{
		     die(header("location:login.php?loginFailed=true&reason=email"));   
		}
		
		
        }
        
    ?>
    
    <!-- Jquery JS
    <script src="vendor/jquery-3.2.1.min.js"></script>
    -->
    <!-- Bootstrap JS
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    -->
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