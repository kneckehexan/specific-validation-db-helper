<?php
$user = "reader"; // User created for database
$password = "YourSecretPassword"; //replace with the mysql user's password
$database = "database"; // The name of the database
$id = $_POST['id'];
$doc = $_POST['doc'];
$spmid = $_POST['spmid'];
$doctype = $_POST['doctype'];
$docnames = [
  '29476798' => 'URS_funk',
  '29485430' => 'URS_auto',
  '29588414' => 'TSP_pump',
  '29588932' => 'TSP_pipe',
  '29588933' => 'TSP_T101',
  '29597141' => 'TSP_heat',
  '29597142' => 'TSP_power',
  '29588917' => 'SAT_unload',
  '29588921' => 'SAT_discharge',
  '29588924' => 'SAT_spill',
  '29588926' => 'SAT_T101',
  '29590379' => 'SAT_N2',
  '29595520' => 'SAT_power',
  '29594813' => 'FAT_T101'
];

$docnumbers = [
  'URS_funk' => 'URS 29476798 (Funktion)',
  'URS_auto' => 'URS 29485430 (Automation)',
  'TSP_pump' => 'TSP 29588414 (Pump)',
  'TSP_pipe' => 'TSP 29588932 (Rör)',
  'TSP_T101' => 'TSP 29588933 (Spill T101)',
  'TSP_heat' => 'TSP 29597141 (Värmekablage)',
  'TSP_power' => 'TSP 29597142 (El och styr)',
  'SAT_unload' => 'SAT 29588917 (Utlastning)',
  'SAT_discharge' => 'SAT 29588921 (Lossning)',
  'SAT_spill' => 'SAT 29588924 (Spill)',
  'SAT_T101' => 'SAT 29588926 (T101)',
  'SAT_N2' => 'SAT 29590379 (Kvävgas)',
  'SAT_power' => 'SAT 29595520 (El, instrument och elskåp)',
  'FAT_T101' => 'FAT 29594813 (T101)'
  ];

$docname = $docnames[$doc];
$type = substr($docname, 0, 3);
if($id == 'N/A'){
  $SPM = 'SPM_' . substr($docname, 4);
  $column = $docnames[$doctype] . "_comment";
  $query = "SELECT " . $column . " FROM " . $SPM . " WHERE " . $SPM . "_id='$spmid';";
  try {
    $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    $row = $db->query($query)->fetch();
    if(!$row){
      die("Query didn't work: " . print_r($db->errorInfo(),true));
    } else {
      echo "<h2>" . $docnumbers[$docnames[$doc]] . " med krav-ID " . $_POST['kravid'] . " för " . $docnumbers[$docnames[$doctype]] ."</h2>";
      echo "<p><b>Kommentar: </b></p>";
      echo "<p>" . $row[$column] . "</p>";
    }
  } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
  }
} else if(!empty($id) && ($type == 'URS' || $type == 'TSP')){
  $query = "SELECT kravtext, verifikation, kategori FROM " . $docname . " WHERE kravid='$id' LIMIT 1;";
  try {
    $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    $row = $db->query($query)->fetch();
    if(!$row){
      die("Query didn't work: " . print_r($db->errorInfo(),true));
    } else {
      echo "<h2>Krav ID " . $id . " i " . $docnumbers[$docname] . "</h2>";
      echo "<ul>";
      echo "<li><b>Kravtext</b>: " . nl2br($row['kravtext']) . "</li>";
      echo "<li><b>Verifikation</b>: " . $row['verifikation'] . "</li>";
      echo "<li><b>Kategori</b>: " . $row['kategori'] . "</li>";
      echo "</ul>";
    }
  } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
  }
} else if(!empty($id) && ($type == 'SAT' || $type == 'FAT')){
  $query = "SELECT execution, acceptance_criteria, test_comment FROM " . $docname . " WHERE testid='$id' LIMIT 1;";
  try {
    $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    $row = $db->query($query)->fetch();
    if(!$row){
      die("Query didn't work: " . print_r($db->errorInfo(),true));
    } else {
      echo "<h2>Test ID " . $id . " i " . $docnumbers[$docname] . "</h2>";
      echo "<ul>";
      echo "<li><b>Utförande</b>: " . nl2br($row['execution']) . "</li>";
      echo "<li><b>Acceptanskriterium</b>: " . nl2br($row['acceptance_criteria']) . "</li>";
      echo "<li><b>Kommentar:</b> " . $row['test_comment'] . "</li>";
      echo "</ul>";
    }
  } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
  }
} else {
  echo "Ingen information";
}

?>
