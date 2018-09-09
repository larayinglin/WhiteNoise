<?php
session_start();
?>

<!DOCTYPE html>
<html lang = "en">
<head>
  <meta charset="UTF-8">
  <script type="text/javascript" src="WhiteNoise.js"></script>
  <link rel="stylesheet" href="WhiteNoise.css">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Choose the white noise you like to mix your comforting sound">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="icon" href="music-note.png">
  <title>JukeBox | # </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
  
<body background="#">
  <header>
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
			    </button>
		    	<a class="navbar-brand" href="jukebox-home.html"> JukeBox</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="RadioMusic.html">Radio Music</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="botton" aria-haspopup="true" aria-expanded="false">White Noise<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="WhiteNoiseOcean.html">Ocean</a></li>
                <li><a href="WhiteNoiseForest.html">Forest</a></li>
                <li><a href="WhiteNoiseCafe.html">Cafe</a></li>
              </ul>
            </li>
            <li><a href="RecentStations.html">Recent Stations</a></li>
            <li><a href="jukebox-suggestions.html">Suggestions Box</a></li>
            <li>
              <?php 
              if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==TRUE){
                echo "<a>Hi, " . $_SESSION["username"] . "</a>";
              } else{
                echo "<a href=\"login.html\">login</a>";
              }
              ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
  </header>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>
</html>