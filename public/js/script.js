console.log("Hello World");
document.addEventListener('DOMContentLoaded', function() {

  // declare search area items
  var suggestions = document.getElementById("suggestions");
  var form = document.getElementById("search-form");
  var search = document.getElementById("search");

  function suggestionsToList(items) {
    // <li><a href="search.php?q=alpha">Alpha</a></li>
    var output = '';

    for(i=0; i < items.length; i++) {
      output += '<li>';
      output += '<a href="show.php?company_name=' + items[i] + '">';
      output += items[i];
      output += '</a>';
      output += '</li>';
    }

    return output;
  }

  function showSuggestions(json) {
    var li_list = suggestionsToList(json);
    suggestions.innerHTML = li_list;
    // make the dropdown in search display
    suggestions.style.display = 'block';
  }

  function getSuggestions() {
    // get search value and assign to q
    var q = search.value;

    /* Debugging code
    console.log('getSuggestions');
    return;
    */

    // wait until user types 3 characters, then provide suggestions
    if(q.length < 3) {
      suggestions.style.display = 'none';
      return;
    }

    var xhr = new XMLHttpRequest();
    // call file autosuggest and pass variable q
    // it suggests things and does not do the search
    xhr.open('GET', 'autosuggest.php?q=' + q, true);
    // submit the request
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.onreadystatechange = function () {
      if(xhr.readyState == 4 && xhr.status == 200) {
        var result = xhr.responseText;
        console.log('Result: ' + result);

        // get back data as JSON and parse it
        var json = JSON.parse(result);
        showSuggestions(json);
      }
    };
    xhr.send();
  }

  // use "input" (every key), not "change" (must lose focus)
  search.addEventListener("input", getSuggestions, false);

});
