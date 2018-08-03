console.log("Hello World");
document.addEventListener('DOMContentLoaded', function() {

  // declare search area items
  var suggestions = document.getElementById("suggestions");
  var form = document.getElementById("search-form");
  var search = document.getElementById("search");

  function suggestions_to_list(items) {
    var output = '';

    for(i=0; i < items.length; i++) {
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
    var liList = suggestions_to_list(json);
    suggestions.innerHTML = liList;
    // Display the dropdown in search form
    suggestions.style.display = 'block';
  }

  function get_suggestions() {
    // Get search value and assign to q
    var q = search.value;

    // Wait until user types 3 characters, then provide suggestions
    if(q.length < 3) {
      suggestions.style.display = 'none';
      return;
    }

    var xhr = new XMLHttpRequest();
    // call file autosuggest and pass variable q which holds our search term
    xhr.open('GET', 'autosuggest.php?q=' + q, true);
    // submit the request
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

    xhr.onreadystatechange = function () {
      if(xhr.readyState == 4 && xhr.status == 200) {
        var result = xhr.responseText;
        // get back data as JSON and parse it
        var json = JSON.parse(result);
        show_suggestions(json);
      }
    };
    xhr.send();
  }

  // use "input" (every key), not "change" (must lose focus)
  search.addEventListener("input", get_suggestions, false);

});
