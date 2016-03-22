<?php
  $username = $_POST['username'];
  // Bootstrap form already ensures that form is entered in not empty

  // Enter if statement if submit was pressed
  if(isset($_POST['submit'])) {
    // Declare mysqli
    $mysqli = new mysqli("mysql.eecs.ku.edu", "hjohnson", "mypassword", "hjohnson");

    // Check connection
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    else {
      // Extract username from form, and check for username duplicates
      $query = $mysqli->query("SELECT user_id FROM Users WHERE user_id = '$username'");

      // If username has already been stored, don't store it
      if ($query->num_rows == 0) {
        $entry = "INSERT INTO Users (user_id) VALUES ('$username')";

        if($mysqli->query($entry) == TRUE) {
          // alert user that user was created successfully
          echo "<script> alert('User created!') </script>";
        }
        else {
          // alert user that user was NOT created successfully
          echo "<script> alert('User not created!') </script>";
        }
      }
      // Or else, do store it
      else {
        echo "<script> alert('Username already exists!') </script>";
      }

      /* close connection */
      //$mysqli->close();
    }
  }

 ?>
