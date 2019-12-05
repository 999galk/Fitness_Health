<?php
require_once __DIR__.'/googleAPI/google-api-php/vendor/autoload.php';

session_start();

$client = new Google_Client();
$client->setAuthConfigFile('/googleAPI/google-api-php/client_secret.json');
$client->setRedirectUri('https://galkol.mtacloud.co.il/Sadna/oauth2callback.php');
$client->addScope(Google_Service_Calendar::CALENDAR);

if (! isset($_GET['code'])) {
  $auth_url = $client->createAuthUrl();
  header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
} else {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  $redirect_uri = 'https://galkol.mtacloud.co.il/Sadna/wizard.php';
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}
?>