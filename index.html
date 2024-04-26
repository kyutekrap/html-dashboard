<html>
<head>
  <title>Admin Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="icon" href="/src/logo.png" />
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <nav>
    <ul>
      <?php
      $menuItems = array();
      $getPages = "SELECT * FROM db_pages ORDER BY id ASC";
      if ($gotPages = mysqli_query($conn, $getPages)) {
          while ($row = mysqli_fetch_assoc($gotPages)) {
              array_push($menuItems, $row['name']);
          }
      }
        foreach ($menuItems as $menuItem) {
            $link = "./views/".$menuItem.".php";
            echo '<li><a href="#" onclick="loadContent(\''.$link.'\');  highlightListItem(this);">'.$menuItem.'</a></li>';
        }
      ?>
    </ul>
  </nav>
  <div id="content"></div>

<script>
  
// ======================================== INDEX (START)

function loadContent(page) {
  fetch(page)
    .then(response => response.text())
    .then(data => {
      document.getElementById('content').innerHTML = data;
    })
    .catch(error => console.error('Error:', error));
}

function highlightListItem(clickedElement) {
  const highlightedItems = document.querySelectorAll('.highlight');
  highlightedItems.forEach(item => {
    item.classList.remove('highlight');
  });
  clickedElement.parentElement.classList.add('highlight');
}

// ======================================== INDEX (END)
    
// ======================================== LOGGER (START)

function downloadLog(fileName) {
    window.location.href = './utilities/downloadFile.php?file=' + fileName;
}

function previewLog(fileName) {
    fetch('/new_app/' + fileName)
      .then(response => response.text())
      .then(data => {
        document.getElementById('previewBox').innerText = data;
      })
      .catch(error => console.error('Error:', error));
}

// ======================================== LOGGER (END)

// ======================================== HELP CENTER (START)

function updateDivision(button) {
  const row = button.closest('tr');
  
  const cells = row.getElementsByTagName('td');
  
  const id = cells[0].innerText;
  const name = cells[1].innerText;
  const description = cells[2].innerText;
  const language = cells[3].innerText;
  const code = cells[4].innerText;

  const url = './utilities/updateDivision.php';
  const data = {
      id: id,
      name: name,
      description: description,
      languge: language,
      code: code
  };
  
  fetch(url, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(data)
  });
}

function updateArticle(button) {
  const row = button.closest('tr');
  
  const cells = row.getElementsByTagName('td');
  
  const id = cells[0].innerText;
  const title = cells[1].innerText;
  const body = cells[2].innerText;
  const language = cells[3].innerText;
  const division = cells[4].innerText;

  const url = './utilities/updateArticle.php';
  const data = {
      id: id,
      title: title,
      body: body,
      languge: language,
      division: division
  };
  
  fetch(url, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(data)
  });
}
  
function showForm(formClass) {
  const forms = document.getElementsByClassName(formClass);
  
  for (let i = 0; i < forms.length; i++) {
    const form = forms[i];
    
    if (form.style.display === 'none') {
      form.style.display = 'block';
    } else {
      form.style.display = 'none';
    }
  }
}

// ======================================== HELP CENTER (END)

</script>
</body>
</html>
