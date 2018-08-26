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

  function check_prepare($stmt) {
    if(!$stmt) {
      die("Prepare failed: (" . mysqli_connect_errno() .")" . mysqli_connect_error());
    }
  }

  function check_param($bindParam) {
    if(!$bindParam) {
      echo "Binding failed: (" . mysqli_connect_errno() . ") " . mysqli_connect_error();
    }
  }

  function check_execute($executeResult) {
    if(!$executeResult) {
      echo "Execute failed: (" . mysqli_connect_errno() . ") " . mysqli_connect_error();
    }
  }

  // Test if query succeded
  function confirm_result_set($resultSet) {
    if (!$resultSet) {
    	exit("Database query failed.");
    }
  }

?>
