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
    $dwnQuery = strtolower($query);
    while($client = mysqli_fetch_assoc($clientSet)) {
      // Downcase both strings for case-insensitive search
      $dwnChoice = strtolower($client['company_name']);
      // Grab the ID from client
      $IDChoice = $client['id'];
      // Determine if a match via Company Name or ID
      if(str_contains($dwnChoice, $dwnQuery) || (str_contains($IDChoice, $dwnQuery))) {
        // add to array if a match is found
        $matches[] = $client['company_name'];
      }
    }
    return $matches;
  }
  // Sort my $matches array
  sort($suggestions);
  // Limit suggestions to 5
  $maxSuggestions = 5;
  // Shorten array to declared max
  $topSuggestions = array_slice($suggestions, 0, $maxSuggestions);
  // Return shortened $matches array as JSON
  echo json_encode($topSuggestions);
?>
