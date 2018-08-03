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

  function find_client_by_id($clientID) {
  global $db;

  $sql = "SELECT * FROM CLIENTS ";
  $sql .= "WHERE id='" . $clientID . "'";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  $client = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  return $client; // Returns an assoc. array of an individual record
}

?>
