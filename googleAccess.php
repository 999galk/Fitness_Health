<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
                        <!--google calander access-->
                    <form method="post" action="">
					    <div>
                            <h3>Our application requires Google calendar access</h3>
                            <input type="hidden" name="access" class="check" value="allow">
						</div>
                        <input type="submit" value="Authorize Google calendar access">
					</form>
                        <?php
                            if ($_POST){
                                session_start();
                                $customerId=$_SESSION['customerId'];
                                echo "<script>console.log('customerId is: " . $customerId ."');</script>";
                                
                            $url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fcalendar&access_type=offline&token_endpoint=&include_granted_scopes=true&state=state_parameter_passthrough_value&redirect_uri=https://galkol.mtacloud.co.il/Sadna/wizard.php&response_type=code&client_id=209106791641-h9l7ecec8n6vtc66ce970qqsqjdn67b8.apps.googleusercontent.com';
 //{"web":{"client_id":"209106791641-h9l7ecec8n6vtc66ce970qqsqjdn67b8.apps.googleusercontent.com","project_id":"fitness-253217","auth_uri":"https://accounts.google.com/o/oauth2/auth","token_uri":"https://oauth2.googleapis.com/token","auth_provider_x509_cert_url":"https://www.googleapis.com/oauth2/v1/certs","client_secret":"Bc4loF7CKKRF6ojTeV_lr-Pn","redirect_uris":["https://mtacloud.co.il/oauth2callback.php","https://galkol.mtacloud.co.il/Sadna/registration.php","https://galkol.mtacloud.co.il/Sadna/weekly_conclusion.php","https://galkol.mtacloud.co.il/Sadna/wizard.php","https://galkol.mtacloud.co.il/Sadna/DailySummary.php","https://galkol.mtacloud.co.il/Sadna/oauth2callback.php","http://localhost:8080"]}}
                            //Use file_get_contents to GET the URL in question.
                            $contents = file_get_contents($url);
                            //If $contents is not a boolean FALSE value.
                            if($contents !== false){
                                //Print out the contents.
                                echo $contents;
                            }
                            
                            }
                            ?>
                            
                            
                        <!--
                           if($_POST){ 
                            require __DIR__ . '/googleAPI/google-api-php/vendor/autoload.php';
                            echo "<script>console.log('after require');</script>";
                            
                            /**
                             * Returns an authorized API client.
                             * @return Google_Client the authorized client object
                             */
                                /*echo "<script>console.log('entered get client');</script>";
                                $client = new Google_Client();
                                $client->setAuthConfig('googleAPI/google-api-php/client_secret.json');
                                $client->setRedirectUri('https://galkol.mtacloud.co.il/Sadna/wizard.php');
                                $client->addScope(Google_Service_Calendar::CALENDAR);
                                $client->setAccessType('offline');
                                
                                if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
                                    $client->setAccessToken($_SESSION['access_token']);
                                    $calendar = new Google_Service_Calendar($client);
                                }else if (! isset($_GET['code'])){
                                    $auth_url = $client->createAuthUrl();
                                    header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
                                }else {
                                    $client->authenticate($_GET['code']);
                                    $_SESSION['access_token'] = $client->getAccessToken();
                                    $redirect_uri = 'https://galkol.mtacloud.co.il/Sadna/wizard.php';
                                    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));   
                                }
                                
                                echo "<script>console.log('got to php end, client access: " . $accessToken . "' );</script>";
                                
                                
                            
                           }?>-->
                                            
</body>
</html>