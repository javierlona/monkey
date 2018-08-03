document.addEventListener('DOMContentLoaded', function() {

  // declare search area elements
  const SUGGESTIONS = document.getElementById("suggestions");
  const SEARCH = document.getElementById("search");

  function suggestions_to_list(items) {
    let output = '';
    // Loop through each item and add anchor & list tags
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

  function show_suggestions(json) {
    // Pass JSON to function to convert to HTML
    let liList = suggestions_to_list(json);
    // Display results in dropdown menu
    SUGGESTIONS.innerHTML = liList;
    // Display the dropdown menu in search form
    SUGGESTIONS.style.display = 'block';
  }

  function get_suggestions() {
    // Get search value and assign to q
    let q = SEARCH.value;

    // Wait until user types 3 characters, then provide suggestions
    if(q.length < 3) {
      SUGGESTIONS.style.display = 'none';
      return;
    }

    let xhr = new XMLHttpRequest();
    // call file autosuggest and pass variable q which holds our search term
    xhr.open('GET', 'autosuggest.php?q=' + q, true);
    // submit the request
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

    xhr.onreadystatechange = function () {
      if(xhr.readyState == 4 && xhr.status == 200) {
        let result = xhr.responseText;
        // get back data as JSON and parse it
        let json = JSON.parse(result);
        show_suggestions(json);
      }
    };
    xhr.send();
  }

  // use "input" (every key), not "change" (must lose focus)
  SEARCH.addEventListener("input", get_suggestions, false);

});
