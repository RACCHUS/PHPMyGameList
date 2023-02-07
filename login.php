<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Game List</title>
	<meta name="desciption" content="Find, Review, and get Game Recommendations">
	<meta name="author" content="RACCHUS">
	<meta name="keywords" content="Gaming">
	<meta property="og:title" content="MyGameList">
	<meta property="og:type" content="website">
	<meta property="og:description" content="MyGameList Homepage: Find, Review, and get Game Recommendations">
	<!-- <meta property="og:url" content="https://pavetheworld.000webhostapp.com/"> -->
	<meta property="article:21:46:00" content="2022-11-18">
	<meta property="article:21:46:00" content="2022-11-18">
	<?php include("Meta.php");?>
	<link rel="icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<form id="login-form">
  <input type="text" placeholder="Username" id="username">
  <input type="password" placeholder="Password" id="password">
  <button type="submit" id="login-button">Login</button>
</form>

<style>
#login-form {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  font-size: 16px;
}

#login-button {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  background-color: blue;
  color: white;
  border: none;
  cursor: pointer;
}
</style>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Connect to Mongo Atlas database
  $client = new MongoDB\Client("mongodb+srv://<all4all4ever>:<Tnm5M8sPVu!DzFa>@cluster.mongodb.net/user_authentication");
  $collection = $client->user_authentication->login_credentials;
  
  // Retrieve form data
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  // Query the database to check if the user exists
  $user = $collection->findOne(['username' => $username, 'password' => $password]);
  
  // If the user exists, set the session cookie and redirect to index.php
  if ($user) {
    session_start();
    $_SESSION['user_id'] = $user['_id'];
    header('Location: index.php');
    exit;
  }
}
?>