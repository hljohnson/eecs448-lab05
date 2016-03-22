<?php

  // Declare mysqli
  $mysqli = new mysqli("mysql.eecs.ku.edu", "hjohnson", "mypassword", "hjohnson");

  /* check connection */
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

  $users = "SELECT * FROM Users";

  if($result = $mysqli->query($users)) {
    echo "<br><br>";
    echo "<div class = 'container'>";
      echo "<table>";
        echo "<th> Users </th>";
        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
          $temp = $row['user_id'];
          echo "<tr><td>".$temp."</td></tr>";
        }

      echo "</table>";
    echo "</div>";
  }
  /* close connection */
  $mysqli->close();
 ?>

<!-- include html to use bootstrap styling -->
 <!DOCTYPE HTML>
 <html>
   <head>
     <title>Post</title>

     <!-- ***All of the following is related to using the Boostrap CSS Framework*** -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

     <!-- Latest compiled JavaScript -->
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

     <!-- Bootstrap core CSS -->
     <link href="css/bootstrap-theme.min.css" rel="stylesheet">
   </head>

   <body>
   </body>
 </html>
