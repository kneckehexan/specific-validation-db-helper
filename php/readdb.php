<html>
  <head>
    <title>Cytivaförkortningar</title>
    <link rel="stylesheet" href="../style/style.css">
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <script src="../script/script.js"></script>
  </head>
  <body>
  <main>
    <?php
      $user = "reader"; // User created for database
      $password = "YourSecretPassword"; //replace with the mysql user's password
      $database = "database"; // The name of the database
      $table = "abbr";

      try {
        $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
        echo "<h2>Abbreviations</h2>";
        echo "<input id='tablesearch' type='text' placeholder='Sök efter...'>";
        echo "<table class='resume-table abbr'><thead><tr><th>Abbreviation</th><th>Definition</th></tr></thead><tbody id='maintable'>";
        foreach($db->query("SELECT abbr, expansion FROM $table ORDER BY abbr COLLATE utf8mb4_swedish_ci ASC") as $row) {
          echo "<tr><td>" . $row['abbr'] . "</td><td>" . $row['expansion'] . "</td></tr>";
        }
        echo "</tbody></table>";
      } catch (PDOException $e) {
          print "Error!: " . $e->getMessage() . "<br/>";
          die();
      }
    ?>
  </main>
  </body>
</html>
