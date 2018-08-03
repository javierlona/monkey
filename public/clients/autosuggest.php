<?php
  require_once('../../private/initialize.php');
  require_login();

  // check if its an AJAX request
  function is_ajax_request() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
      $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
  }

  if(!is_ajax_request()) {
    exit;
  }

  // Notes:
  // * strpos is faster than strstr or preg_match
  // make suggestions if the string is anywhere in the name
  function str_contains($choice, $query) {
    return strpos($choice, $query) !== false;
  }
  // Place search term in variable
  $query = isset($_GET['q']) ? $_GET['q'] : '';

  // find and return search suggestions as JSON
  $suggestions = search($query);

  function search($query) {
    $matches = [];
    // Query for all clients in DB
    $clientSet = find_all_clients();
    $d_query = strtolower($query);
    while($client = mysqli_fetch_assoc($clientSet)) {
      // Downcase both strings for case-insensitive search
      $d_choice = strtolower($client['company_name']);
      if(str_contains($d_choice, $d_query)) {
        // add to array if a match is found
        $matches[] = $client['company_name'];
      }
    }
    return $matches;
  }
  // Sort my $matches array
  sort($suggestions);
  // Limit suggestions to 5
  $max_suggestions = 5;
  // Shorten array to declared max
  $top_suggestions = array_slice($suggestions, 0, $max_suggestions);
  // Return shortened $matches array as JSON
  echo json_encode($top_suggestions);
?>
