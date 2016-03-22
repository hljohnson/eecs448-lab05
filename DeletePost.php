<?php

  $checked = $_POST['isChecked'];

  if( isset($_POST['submit'])) {
    // Connect to database
    $mysqli = new mysqli("mysql.eecs.ku.edu", "hjohnson", "mypassword", "hjohnson");

     // Check connection to database
     if ($mysqli->connect_errno) {
        printf("Connection Failed: %s\n", $mysqli->connect_error);
        exit();
     }
     echo"<div class = 'container'>";
       echo"<h2>Deleted Posts</h2>";
       echo"<ul>";
       // Iterate through each case of a checked box and delete that post from the database
       if(!empty($_POST['check_list'])) {
         foreach($_POST['check_list'] as $check) {
           $sql = $mysqli->query("DELETE FROM Posts WHERE post_id='$check'");
           // Notify user that specified post was deleted
           echo "<li>Post ".$check." was deleted.</li>";
           echo "<br>";
         }
       }
       echo"</ul>";
      echo"</div>";


  }
  // Close connection with database
  $mysqli->close();
?>

 <!-- enable bootstrap styling -->
 <!DOCTYPE HTML>
 <html>
   <head>
     <title>Delete Post</title>

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
