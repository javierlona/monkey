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

  function find_client_by_name($clientName) {
    global $db;

    // should only return the first & only instance
    $sql = "SELECT * FROM CLIENTS WHERE company_name = ? LIMIT 1";
    $stmt = mysqli_prepare($db, $sql);
    check_prepare($stmt);
    $bindParam = mysqli_stmt_bind_param($stmt, 's', $clientName);
    check_param($bindParam);
    $executeResult = mysqli_stmt_execute($stmt);
    check_execute($executeResult);
    $result = mysqli_stmt_get_result($stmt);
    confirm_result_set($result);
    $client = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $client; // Returns an assoc. array of an individual record
  }

  function find_admin_by_username($username) {
    global $db;

    // should only return the first & only instance
    $sql = "SELECT * FROM ADMINS WHERE username = ? LIMIT 1";
    $stmt = mysqli_prepare($db, $sql);
    check_prepare($stmt);
    $bindParam = mysqli_stmt_bind_param($stmt, 's', $username);
    check_param($bindParam);
    $executeResult = mysqli_stmt_execute($stmt);
    check_execute($executeResult);
    $result = mysqli_stmt_get_result($stmt);
    confirm_result_set($result);
    $admin = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin; // returns an assoc. array of an individual record
  }

?>
