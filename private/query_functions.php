<?php
  function find_all_clients() {
    // either pass $db in as an argument or we call global in order to have access to it.
    global $db;

    $sql = "SELECT * FROM CLIENTS ";
    $sql .= "ORDER BY company_name ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }

  // function find_client_by_name($clientName) {
  //   global $db;

  //   $sql = "SELECT * FROM CLIENTS ";
  //   $sql .= "WHERE company_name='" . mysqli_real_escape_string($db, $clientName) . "' ";
  //   $sql .= "LIMIT 1"; // should only return the first & only instance
  //   $result = mysqli_query($db, $sql);
  //   confirm_result_set($result);
  //   $client = mysqli_fetch_assoc($result);
  //   mysqli_free_result($result);
  //   return $client; // Returns an assoc. array of an individual record
  // }

  function find_client_by_name($clientName) {
    global $db;
    $sql = "SELECT * FROM CLIENTS WHERE company_name = ? LIMIT 1";
  }

  function find_admin_by_username($username) {
    global $db;

    $sql = "SELECT * FROM ADMINS ";
    $sql .= "WHERE username='" . mysqli_real_escape_string($db, $username) . "' ";
    $sql .= "LIMIT 1"; // should only return the first & only instance
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $admin = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin; // returns an assoc. array of an individual record
  }

?>
