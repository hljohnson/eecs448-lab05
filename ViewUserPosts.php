<?php
    // Connect to database and extract User from HTML dropdown menu
    $mysqli = new mysqli("mysql.eecs.ku.edu", "hjohnson", "mypassword", "hjohnson");
    $user = $_POST['username'];

    if( isset($_POST['submit'])) {
	// Check connection to database
	if ($mysqli->connect_errno) {
	  printf("Connection Failed: %s\n", $mysqli->connect_error);
          exit();
	}

	// Query all posts for user selected from HTML dropdown menu
	$query = $mysqli->query("SELECT content FROM Posts WHERE author_id = '$user'");
  echo "<div class = 'container'>";
	echo "<table>";
	echo "<th>".$user."'s Posts</th>";
	echo "<br>";

	while($row = mysqli_fetch_array($query)) {
		$temp = $row['content'];
		echo "<tr><td>".$temp."</td></tr>";
		echo "<br>";
	}

	echo "</table>";
  echo "</div>";
    }

 ?>

 <!-- enable bootstrap styling -->
 <!DOCTYPE HTML>
 <html>
   <head>
     <title>User Posts</title>

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
