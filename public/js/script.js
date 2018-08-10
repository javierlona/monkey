document.addEventListener('DOMContentLoaded', function() {

  // Declare search area elements
  const SUGGESTIONS = document.getElementById("suggestions");
  const SEARCH = document.getElementById("search");

  // Use "input" (every key), not "change" (must lose focus)
  SEARCH.addEventListener("input", get_suggestions, false);

  function get_suggestions() {
    // Get search value and assign to q
    let q = SEARCH.value;

    // Wait until user types 3 characters, then provide suggestions
    if(q.length < 3) {
      SUGGESTIONS.style.display = 'none';
      return;
    }

    let xhr = new XMLHttpRequest();
    // Call file autosuggest and pass variable q which holds our search term
    xhr.open('GET', 'autosuggest.php?q=' + q, true);
    // Submit the request
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

    xhr.onreadystatechange = function () {
      if(xhr.readyState == 4 && xhr.status == 200) {
        // Data dump of the results gathered from autosuggest.php
        // Get back results as a JSON string array
        let result = xhr.responseText;
        // Convert JSON string array to a JS object
        let json = JSON.parse(result);
        show_suggestions(json);
      }
    };
    xhr.send();
  }

  function show_suggestions(json) {
    // Pass JS object to function to convert to HTML
    let liList = suggestions_to_list(json);
    // Display results in dropdown menu
    SUGGESTIONS.innerHTML = liList;
    // Display the dropdown menu in search form
    SUGGESTIONS.style.display = 'block';
  }

  function suggestions_to_list(items) {
    let output = '';
    // Loop through each item company name and add anchor & list tags
    for(i = 0; i < items.length; i++) {
      output += '<li>';
      output += '<a href="show.php?company_name=' + items[i] + '">';
      output += items[i];
      output += '</a>';
      output += '</li>';
    }
    // Return HTML list items
    return output;
  }

});
