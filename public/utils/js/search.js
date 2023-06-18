document.getElementById('searchButton').addEventListener('click', function() {
    var input = document.getElementById('searchInput').value.toLowerCase();
    var items = document.getElementById('listItems').getElementsByTagName('li');
    var searchResult = document.getElementById('searchResult');
    
    for (var i = 0; i < items.length; i++) {
      var text = items[i].textContent.toLowerCase();
      if (text.includes(input)) {
        items[i].style.display = 'block';
      } else {
        items[i].style.display = 'none';
      }
    }
    
    if (searchResult.innerHTML === '') {
      searchResult.innerHTML = 'Tidak ada hasil yang cocok';
    } else {
      searchResult.innerHTML = '';
    }
  });
  