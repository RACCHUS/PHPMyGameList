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
	<!--<link rel="stylesheet" href="sortabletable.css"> -->
	<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.10.2/Sortable.min.js"></script>
	<script src="sorttable.js"></script>
  	<link rel="stylesheet" type="text/css" href="styletable.css">
</head>
<body>
	<div class="login-menu">
		<?php include("login-menu.php");?>
	</div>
	<div class="navbar">
		<?php include("navbar.php");?>
	</div>
	<div class="container" id="main-content"></div>
<main>
	<table id="gameData">
      <thead>
        <tr>
          <th data-property="0" data-order="asc">Rank</th>
          <th data-property="1" data-order="asc">Title</th>
          <th data-property="2" data-order="asc">Genre</th>
		  <th data-property="3" data-order="asc">Score</th>
          <th data-property="4" data-order="asc">Your Score</th>
          <th data-property="5" data-order="asc">Status</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
</main>
</body>
</html>