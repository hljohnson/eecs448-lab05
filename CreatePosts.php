<?php
  $username = $_POST['username'];
  $userPost = $_POST['userPost'];

  if(isset($_POST['submit'])) {
    // Declare mysqli
    $mysqli = new mysqli("mysql.eecs.ku.edu", "hjohnson", "mypassword", "hjohnson");

    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    // Extract username from form, and check for username duplicates
    $query = $mysqli->query("SELECT user_id FROM Users WHERE user_id = '$username'");

    if(empty($userPost) || $query->num_rows == 0) {
      if(empty($userPost)) { echo "<script> alert('Post cannot be empty!') </script>"; }
      if($query->num_rows == 0) { echo "<script> alert('Listed user does not exist!') </script>"; }
    }
    else {
      $entry = "INSERT INTO Posts (content, author_id) VALUES ('$userPost','$username')";

      if($mysqli->query($entry) == TRUE) {
        // alert user that user was created successfully
        echo "<script> alert('Post Created!') </script>";
      }
      else {
        // alert user that user was NOT created successfully
        echo "<script> alert('Post not created!') </script>";
      }
    }

  }
  /* close connection */
  $mysqli->close();
?>
