<?php
  require_once('db_credentials.php');

  function db_connect() {
    $connection = mysqli_connect(HOST, USERNAME, PASSWORD, DB_NAME);
    confirm_db_connect();
    return $connection;
  }

  function db_disconnect($connection) {
    if(isset($connection)) {
    mysqli_close($connection);
    }
  }

  function confirm_db_connect() {
    if(mysqli_connect_errno()) {
      $msg = "Database connection failed: ";
      $msg .= mysqli_connect_error();
      $msg .= " (" . mysqli_connect_errno() . ")";
      exit($msg);
    }
  }

  // Test if query succeded
  function confirm_result_set($result_set) {
    if (!$result_set) {
    	exit("Database query failed.");
    }
  }

  function check_prepare($stmt) {
    if(!$stmt) {
      die("Prepare failed: (" . mysqli_connect_errno() .")" . mysqli_connect_error());
    } else {
      echo "<h1>Good</h1>";
    }
  }

  function check_param($bindParam) {
    if(!$bindParam) {
      echo "Binding failed: (" . mysqli_connect_errno() . ") " . mysqli_connect_error();
    } else {
      echo "<h1>Good 2</h1>";
    }
  }

?>
