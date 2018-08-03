<?php
  require_once('../../private/initialize.php');
  // You can simulate a slow server with sleep
  // sleep(2);

  // check if its an AJAX request
  function is_ajax_request() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
      $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
  }

  // if(!is_ajax_request()) {
  //   exit;
  // }

  // Notes:
  // * strpos is faster than strstr or preg_match
  // * strpos requires strict comparison operator (===)
  //     returns 0 for match at start of string
  //     returns false for no match
  function str_starts_with($choice, $query) {
    return strpos($choice, $query) === 0;
  }

  function str_contains($choice, $query) {
    return strpos($choice, $query) !== false;
  }

  // In real world, this would likely search a database, or use
  // a search program like Solr, Elastic Search, Sphinx, etc.
  function search_og($query, $choices) {
    $matches = [];

    $d_query = strtolower($query);

    foreach($choices as $choice) {
      // Downcase both strings for case-insensitive search
      $d_choice = strtolower($choice);
      if(str_starts_with($d_choice, $d_query)) {
        $matches[] = $choice;
      }
    }

    return $matches;
  }

  $query = isset($_GET['q']) ? $_GET['q'] : 'HAN';

  // find and return search suggestions as JSON

  // $choices = file('us_passenger_trains.txt', FILE_IGNORE_NEW_LINES); // the data dump an array of 698 trains


  // DB Method
  // Query for all clients in DB


  // $suggestions = search($query, $choices);//orig
  $suggestions = search($query);
  sort($suggestions);
  $max_suggestions = 5;
  $top_suggestions = array_slice($suggestions, 0, $max_suggestions);

  echo json_encode($top_suggestions);

  function search($query) {
    $matches = [];
    $clientSet = find_all_clients();
    $d_query = strtolower($query);
    echo $d_query;
    while($client = mysqli_fetch_assoc($clientSet)) :
      // Downcase both strings for case-insensitive search
      $d_choice = strtolower($client['company_name']);
      echo $d_choice . "<br>";
      if(str_starts_with($d_choice, $d_query)) {
        $matches[] = $client['company_name'];
      }
    endwhile;
    echo "<pre>";
    echo print_r($matches);
    echo "</pre>";

    return $matches;

  }
?>
