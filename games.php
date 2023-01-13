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
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="sortabletable.css">
</head>
<body>
<div class="login-menu">
		<?php include("login-menu.php");?>
	</div>
	<div class="navbar">
		<?php include("navbar.php");?>
	</div>
	<div class="container" id="main-content">
</body>
<main>
	<script src="sorttable.js"></script>
	<table id="myTable">
  		<tr>
  		 <!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by country:-->  
  		  <th onclick="sortTable(0)">Name</th>
  		  <th onclick="sortTable(1)">Genre</th>
		  <th onclick="sortTable(2)">Publisher</th>
  		</tr>
  		<tr>
  		  <td>Berglunds snabbkop</td>
  		  <td>Sweden</td>
		  <td>Riot</td>
  		</tr>
  		<tr>
  		  <td>North/South</td>
  		  <td>UK</td>
		  <td>Blizzard</td>
  		</tr>
  		<tr>
  		  <td>Alfreds Futterkiste</td>
  		  <td>Germany</td>
		  <td>Epic</td>
  		</tr>
  		<tr>
  		  <td>Koniglich Essen</td>
  		  <td>Germany</td>
  		</tr>
  		<tr>
  		  <td>Magazzini Alimentari Riuniti</td>
  		  <td>Italy</td>
  		</tr>
  		<tr>
  		  <td>Paris specialites</td>
  		  <td>France</td>
  		</tr>
  		<tr>
    		<td>Island Trading</td>
    		<td>UK</td>
  		</tr>
  		<tr>
    		<td>Laughing Bacchus Winecellars</td>
    		<td>Canada</td>
  		</tr>
	<script src="sorttable.js"></script>
	</table>
</main>