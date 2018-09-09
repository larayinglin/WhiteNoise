<html>
<body>
<!DOCTYPE html>
<%@ page contentType = "text/html" %>
<%@ page import="java.util.*" %>
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

	<%@ include file = "jukebox-header.html" %>			   <!-- include file -->

</head>
<body onload="hidefield()"> 								<!-- include directive -->
<center>
    <div class="outer-content-container">
          <div id="inner-content-container">
              <div class="welcome-text">
                  <center>
                      <h1 style="color: #0AB8A4"; class="welcome-text-top"><b>Suggestions Box</b></h1>
                      <h4><b>Thank you for your suggestion!</b></h1> <br>
                  </center>
              </div>
           
           <jsp:useBean id="user"  class="user.UserBean"/>										<!-- java bean -->
           <jsp:setProperty name="user" property="category" value='${categoryAns}' />
           <jsp:setProperty name="user" property="suggestion" value='${suggestionAns}' />
            
            <p> <b> Category: </b> 
            	 <jsp:getProperty name="user" property="category" /> </p> <br>
            
            <p> <b> You suggested: </b> 
            	 <jsp:getProperty name="user" property="suggestion" /> </p> <br>
            
            <%!
			    Date getDate() 										//declaration
			    {
			        System.out.println( "In getDate() method" );
			        return new Date();
			    }
			%>
			The time is now <%= getDate() %> <br>
			<p>  Your session ID: ${idAns} </p>
			Your hostname : <%=request.getRemoteHost()%><br><br> 		<!-- expression -->

      </div>
    </div>
</center>

</body>
</html>