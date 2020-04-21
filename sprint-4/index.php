<?php

session_start();

function http($url, $params=false) {
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  if($params)
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
  return json_decode(curl_exec($ch));
}

if(isset($_GET['logout'])) {
  unset($_SESSION['username']);
  header('Location: index.php');
  die();
}

if (isset($_SESSION['username'])) {
    header("Location: home.php");
}

$client_id = '0oaa2ejokvcqQte314x6';
$client_secret = '7FsuXMZReRKYltulEhqh1E63j8vhKcMvfg6AdOaH';
$redirect_uri = 'http://localhost';
$metadata_url = 'https://dev-728876.okta.com/oauth2/default/.well-known/oauth-authorization-server';
$metadata = http($metadata_url);

if(isset($_GET['code'])) {

  if($_SESSION['state'] != $_GET['state']) {
    die('Authorization server returned an invalid state parameter');
  }

  if(isset($_GET['error'])) {
    die('Authorization server returned an error: '.htmlspecialchars($_GET['error']));
  }

  $response = http($metadata->token_endpoint, [
    'grant_type' => 'authorization_code',
    'code' => $_GET['code'],
    'redirect_uri' => $redirect_uri,
    'client_id' => $client_id,
    'client_secret' => $client_secret,
  ]);

  if(!isset($response->access_token)) {
    die('Error fetching access token');
  }

  $token = http($metadata->introspection_endpoint, [
    'token' => $response->access_token,
    'client_id' => $client_id,
    'client_secret' => $client_secret,
  ]);

  if($token->active == 1) {
    $_SESSION['username'] = $token->username;
    header('Location: /');
    die();
  }
}

if(!isset($_SESSION['username'])) {
  $_SESSION['state'] = bin2hex(random_bytes(5));

  $authorize_url = $metadata->authorization_endpoint.'?'.http_build_query([
    'response_type' => 'code',
    'client_id' => $client_id,
    'redirect_uri' => $redirect_uri,
    'state' => $_SESSION['state'],
    'scope' => 'openid',
  ]);
  #$authorize_url = 'TODO';

  echo '<p>Not logged in</p>';
  echo '<p><a href="'.$authorize_url.'">Log In</a></p>';
}