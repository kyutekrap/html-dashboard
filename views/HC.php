<?php
$response=array();

// ============ DIVISIONS (START)
$divisions = array();
$getDivisions = "SELECT * FROM article_division ORDER BY id ASC";
if ($gotDivisions = mysqli_query($conn, $getDivisions)) {
    while ($row = mysqli_fetch_assoc($gotDivisions)) {
        array_push($divisions, array("id"=>$row['id'], "name"=>$row['name'], "description"=>$row['description'], "language"=>$row['language'], "code"=>$row['public_id']));
    }
}
// ============ DIVISIONS (END)
// ============ ARTICLES (START)
$articles = array();
$getArticles = "SELECT * FROM articles ORDER BY id ASC";
if ($gotArticles = mysqli_query($conn, $getArticles)) {
    while ($row = mysqli_fetch_assoc($gotArticles)) {
        foreach ($divisions as $key => $value) {
            if ($value['code'] == $row['division']) {
                array_push($articles, array("id"=>$row['id'], "title"=>$row['title'], "body"=>$row['body'], "language"=>$row['language'], "division"=>$row['division']));
                break;
            }
        }
    }
}
// ============ ARTICLES (END)

// ============ ADD DIVISION (START)
if (isset($_POST['saveDivision'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $language = $_POST['language'];
    $code = $_POST['code'];
    
    $insert = "INSERT INTO article_division (`name`, `description`, `language`, `code`) VALUES ('$name', '$description', '$language', '$code')";
    if (mysqli_query($conn, $insert)) {
        
    }
}
// ============ ADD DIVISION (END)
// ============ ADD ARTICLE (START)
if (isset($_POST['saveArticle'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $language = $_POST['language'];
    $division = $_POST['division'];
    
    $insert = "INSERT INTO articles (`title`, `body`, `language`, `division`) VALUES ('$title', '$body', '$language', '$division')";
    if (mysqli_query($conn, $insert)) {
        
    }
}
// ============ ADD ARTICLE (END)
?>
  
<section>
    <h3>Divisions</h3>
    <button onclick="showForm('division_form')">Add</button>
</section>

<section class="universal-form division_form" style="display: none;">
    <form class="universal-form__form" method="post">
        <div class="universal-form__fields">
            <div class="universal-form__field">
                <label for="name">Name:</label>
                <input id="name" name="name" type="text" />
            </div>
            <div class="universal-form__field">
                <label for="description">Description:</label>
                <input id="description" name="description" type="text" />
            </div>
            <div class="universal-form__field">
                <label for="language">Language:</label>
                <input id="language" name="language" type="text" />
            </div>
            <div class="universal-form__field">
                <label for="code">Code:</label>
                <input id="code" name="code" type="number" />
            </div>
        </div>
        <button class="universal-form__button" type="submit" name="addDivision">Save</button>
    </form>
</section>

<section>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Description</th>
          <th>Language</th>
          <th>Code</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($divisions as $key=>$value) {
            echo '
            <tr>
            <td>'.$value['id'].'</td>
            <td contenteditable="true">'.$value['name'].'</td>
            <td contenteditable="true">'.$value['description'].'</td>
            <td contenteditable="true">'.$value['language'].'</td>
            <td contenteditable="true">'.$value['code'].'</td>
            <td style="text-align: right;"><button onclick="updateDivision(this)">Update</button></td>
            </tr>
            ';
        }
        ?>
      </tbody>
    </table>
</section>

<section>
    <h3>Articles</h3>
    <button onclick="showForm('article_form')">Add</button>
</section>

<section class="universal-form article_form" style="display: none;">
    <form class="universal-form__form" method="post">
        <div class="universal-form__fields">
            <div class="universal-form__field">
                <label for="title">Title:</label>
                <input id="title" name="title" type="text" />
            </div>
            <div class="universal-form__field">
                <label for="body">Body:</label>
                <textarea id="body" name="body"></textarea>
            </div>
            <div class="universal-form__field">
                <label for="language">Language:</label>
                <input id="language" name="language" type="text" />
            </div>
            <div class="universal-form__field">
                <label for="division">Division:</label>
                <input id="division" name="division" type="text" />
            </div>
        </div>
        <button class="universal-form__button" type="submit" name="addArticle">Save</button>
    </form>
</section>

<section>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Body</th>
          <th>Language</th>
          <th>Division</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($articles as $key=>$value) {
            echo '
            <tr>
            <td>'.$value['id'].'</td>
            <td contenteditable="true">'.$value['title'].'</td>
            <td contenteditable="true">'.$value['body'].'</td>
            <td contenteditable="true">'.$value['language'].'</td>
            <td contenteditable="true">'.$value['division'].'</td>
            <td style="text-align: right;"><button onclick="updateArticle(this)">Update</button></td>
            </tr>
            ';
        }
        ?>
      </tbody>
    </table>
</section>
