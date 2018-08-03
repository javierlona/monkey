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

?>
