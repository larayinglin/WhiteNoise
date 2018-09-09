<html>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JukeBox | Suggestions Box</title>
    <link rel="icon" href="music-note.png">

    <link rel="stylesheet" href="jukebox-master.css">
    <script type="text/javascript" src="jukebox-master.js"></script>

    <meta name="keywords" content="white noise, music, radio, relax, sounds">
    <meta name="description" content="JukeBox was developed to bring the best sounds and music for all settings and moods">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- add navbar (code from getbootstrap.com >> components >> navbar) -->
    <!-- try
      navbar-static-top
      - creates a full-width navbar that scrolls away with the page
      - removes the left, right, and top border created by navbar-default
      navbar-fixed-top
      - creates a full-width navbar that sticks to the page

      navbar-inverse sets background to dark color scheme
      -->

      <!-- <nav class="navbar navbar-inverse navbar-static-top"> -->
      <!-- <nav class="navbar navbar-inverse navbar-default">   -->
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
            <li><a href="#">Radio Music</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="botton" aria-haspopup="true" aria-expanded="false">White Noise<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Ocean</a></li>
              <li><a href="WhiteNoise.html">Forest</a></li>
              <li><a href="#">Cafe</a></li>
              </ul>
            </li>
            <li><a href="RadioMusic.html#">Recent Stations</a></li>
            <li><a href="jukebox-suggestions.html">Suggestions Box</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="botton" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="login.php">Log In</a></li>
                <li><a href="signup.php">Sign Up</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

</head>
<body onload="hidefield()">
<center>
    <div class="outer-content-container">
          <div id="inner-content-container">
              <div class="welcome-text">
                  <center>
                      <h1 style="color: #0AB8A4"; class="welcome-text-top"><b>Suggestions Box</b></h1>
                      <h4><b>Thank you for your suggestion!</b></h1>
                  </center>
              </div>

            <b> Your suggested: </b> <br>
            <?php echo $_POST["suggestion"]; ?>

      </div>
    </div>
</center>

</body>
</html>