<html>
  <head>
    <meta charset="utf-8">
    <title>Relationer i COM X15</title>
    <link rel="stylesheet" href="../style/style.css">
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <script src="../script/script.js"></script>
  </head>
  <body>
    <div class="selection">
      <div id="nav-btn" class="container">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
      <form id="selectionform" method="POST">
        <input type="radio" name="docchoice" id="ettkravdoc" value="ettkravdoc">
        <label for="ettkravdoc">Visa endast tabeller med krav.</label><br/>
        <input type="radio" name="docchoice" id="etttestdoc" value="etttestdoc">
        <label for="etttestdoc">Visa endast tabeller med test.</label><br/>
        <input type="radio" name="docchoice" id="jmf" value="jmf">
        <label for="jmf">Visa samband mellan krav- och testtabeller.</label><br/>
        <input type="radio" name="docchoice" id="spm" value="spm">
        <label for="spm">Visa olika spårbarhetsmatriser.</label><br/>
        <input type="radio" name="docchoice" id="missingdemands" value="missingdemands">
        <label for="spm">Visa otestade krav.</label><br/>

        <div id="divkrav">
          <label for="krav">Välj kravdokumentation</label><br/>
          <select id="krav" name="krav">
            <option hidden disabled selected value>- Välj ett alternativ -</option>
            <option value="URS_funk" id="29476798">URS 29476798 (funktion)</option>
            <option value="TSP_pump" id="29588414">TSP 29588414 (pumpar)</option>
            <option value="TSP_pipe" id="29588932">TSP 29588932 (rör)</option>
            <option value="TSP_T101" id="29588933">TSP 29588933 (T101)</option>
            <option value="TSP_heat" id="29597141">TSP 29597141 (värmekablage)</option>
            <option value="TSP_power" id="29597142">TSP 29597142 (el &amp; styr)</option>
          </select><br/>
        </div>

        <div id="divtest">
          <label for="test">Välj testprotokoll</label><br/>
          <select id="test" name="test">
            <option value="SAT_unload" id="29588917" disabled>SAT 29588917 (utlastning)</option>
            <option value="SAT_discharge" id="29588921" disabled>SAT 29588921 (lossning)</option>
            <option value="SAT_spill" id="29588924" disabled>SAT 29588924 (spill)</option>
            <option value="SAT_T101" id="29588926" disabled>SAT 29588926 (T101)</option>
            <option value="SAT_N2" id="29590379" disabled>SAT 29590379 (kvävgas)</option>
            <option value="SAT_power" id="29595520" disabled>SAT 29595520 (el, instr. &amp; elskåp)</option>
            <option value="FAT_T101" id="29594813" disabled>FAT 29594813 (T101)</option>
            <option value="FAT_" id="29XXXX" disabled>FAT XXX (??)</option>
          </select>
        </div>

        <div id="divselspm">
          <label for="selspm">Välj en Spårbarhetsmatris</label>
          <select id="selspm" name="selspm">
            <option value="SPM_funk" id="spmfunk">SPM för URS 29476798 (funktion)</option>
            <option value="SPM_pipe" id="spmpipe">SPM för TSP 29588932 (rör)</option>
            <option value="SPM_pump" id="spmpump">SPM för TSP 29588414 (pump)</option>
            <option value="SPM_T101" id="spmt101">SPM för TSP 29588933 (T101)</option>
            <option value="SPM_power" id="spmpower">SPM för TSP 29597142 (el &amp; styr)</option>
            <option value="SPM_heat" id="spmheat">SPM för TSP 29597141 (värmekablage)</option>
          </select>
        </div>

        <input type="submit" name="submitbutton">
      </form>
      <div id="translation-table-wrapper">
        Visa översättningstabell
      </div>
    </div>

    <main>
      <div id="translation-table">
        <table>
          <thead>
            <tr id="simp">
              <th></th><th></th><th></th><th></th><th></th><th><span id="close-translation-table">&times;</span></th>
            </tr>
            <tr>
              <th>Typ</th><th>Processus (plan)</th><th>Cytiva (plan)</th><th>Processus (rapport)</th><th>Cytiva (rapport)</th><th>Beskrivning</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
            <tr>
              <td>SAT</td><td>SAT20000-001</td><td>29588916</td><td>SAR20000-001</td><td>29588917</td><td>Utlastning</td>
            </tr>
            <tr>
              <td>SAT</td><td>SAT20000-002</td><td>29588918</td><td>SAR20000-002</td><td>29588921</td><td>Lossning</td>
            </tr>
            <tr>
              <td>SAT</td><td>SAT20000-003</td><td>29588922</td><td>SAR20000-003</td><td>29588924</td><td>Spill</td>
            </tr>
            <tr>
              <td>SAT</td><td>SAT20000-004</td><td>29588925</td><td>SAR20000-004</td><td>29588926</td><td>T101</td>
            </tr>
            <tr>
              <td>SAT</td><td>SAT20000-005</td><td>29590371</td><td>SAR20000-005</td><td>29590379</td><td>Kvävgas (N2)</td>
            </tr>
            <tr>
              <td>SAT</td><td>SAT20000-006</td><td>29595519</td><td>SAR20000-006</td><td>29595520</td><td>El, instr. &amp; elskåp</td>
            </tr>
            <tr>
              <td>FAT</td><td>FAT20000-001</td><td>29594812</td><td>FAR20000-001</td><td>29594813</td><td>T101</td>
            </tr>
            <tr>
              <td>FAT</td><td>FAT20000-002</td><td>?</td><td>FAR20000-002</td><td>?</td><td></td>
            </tr>
            <tr>
              <td>URS</td><td>URS20000-001</td><td>29476798</td><td>URS20000-001</td><td>29476798</td><td>X15 lossningsstation (funktion)</td>
            </tr>
            <tr>
              <td>TSP</td><td>TSP20000-001</td><td>29588414</td><td>TSP20000-001</td><td>29588414</td><td>Pumpar</td>
            </tr>
            <tr>
              <td>TSP</td><td>TSP20000-002</td><td>29588932</td><td>TSP20000-002</td><td>29588932</td><td>Rör och fittings</td>
            </tr>
            <tr>
              <td>TSP</td><td>TSP20000-003</td><td>29588933</td><td>TSP20000-003</td><td>29588933</td><td>Spilltank (T101)</td>
            </tr>
            <tr>
              <td>TSP</td><td>TSP20000-005</td><td>29597141</td><td>TSP20000-005</td><td>29597141</td><td>Värmekablage</td>
            </tr>
            <tr>
              <td>TSP</td><td>TSP20000-006</td><td>29597142</td><td>TSP20000-006</td><td>29597142</td><td>El &amp; styr</td>
            </tr>
          <tfoot>
          </tfoot>
        </table>
      </div>
      <?php
        if(isset($_POST["submitbutton"])){
          $krav = NULL;
          $test = NULL;
          $relation = NULL;
          $missing = False;
          $user = "reader";
          $password = "YourSecretPassword"; //replace with the mysql user's password
          $database = "database"; // The name of the database
          if($_POST['docchoice'] == 'jmf'){
            $krav = $_POST['krav'];
            $test = $_POST['test'];
            $relation = "SPM" . substr($krav, 3);
          } else if($_POST['docchoice'] == 'ettkravdoc'){
            $krav = $_POST['krav'];
          } else if($_POST['docchoice'] == 'etttestdoc'){
            $test = $_POST['test'];
          } else if($_POST['docchoice'] == 'spm'){
            $relation = $_POST['selspm'];
          } else if($_POST['docchoice'] == 'missingdemands'){
            $krav= $_POST['krav'];
            $relation = "SPM" . substr($krav, 3);
            $missing = True;
          }

          $docnumbers = [
            'URS_funk' => 'URS 29476798 (Funktion)',
            'URS_auto' => 'URS 29485430 (Automation)',
            'TSP_pump' => 'TSP 29588414 (Pump)',
            'TSP_pipe' => 'TSP 29588932 (Rör)',
            'TSP_T101' => 'TSP 29588933 (T101)',
            'TSP_heat' => 'TSP 29597141 (Värmekablage)',
            'TSP_power' => 'TSP 29597142 (El och styr)',
            'SAT_unload' => 'SAT 29588917 (Utlastning)',
            'SAT_discharge' => 'SAT 29588921 (Lossning)',
            'SAT_spill' => 'SAT 29588924 (Spill)',
            'SAT_T101' => 'SAT 29588926 (T101)',
            'SAT_N2' => 'SAT 29590379 (Kvävgas)',
            'SAT_power' => 'SAT 29595520 (El, instrument och elskåp)',
            'FAT_T101' => 'FAT 29594813 (T101)',
            'SPM_funk' => 'URS 29476798 (Funktion)',
            'SPM_pipe' => 'TSP 29588932 (Rör)',
            'SPM_pump' => 'TSP 29588414 (Pump)',
            'SPM_T101' => 'TSP 29588933 (T101)',
            'SPM_heat' => 'TSP 29597141 (Värmekablage)',
            'SPM_power' => 'TSP 29597142 (El &amp; styr)'
            ];

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

          if(is_null($krav) && isset($test)){
            $query = "SELECT DISTINCT testid, execution, acceptance_criteria, test_comment FROM ".$test." ORDER BY CAST(SUBSTRING_INDEX(testid, '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(testid, '.', -2), '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(testid, '.', -1) AS UNSIGNED) ASC;";

            try {
              $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
              echo "<h2>" . $docnumbers[$test] . "</h2>";
              echo "<input id='tablesearch' type='text' placeholder='Sök efter...'>";
              echo "<input id='tableexclude' type='text' placeholder='Filtrera bort...'>";
              echo "<table class='resume-table abbr'><thead><tr><th>Test ID</th><th>Utförande</th><th>Acceptanskriterier</th><th>Kommentar på test</th></tr></thead><tbody id='maintable'>";
              foreach($db->query($query) as $row) {
                echo "<tr><td>" . $row['testid'] . "</td><td>" . nl2br($row['execution']) . "</td><td>" . nl2br($row['acceptance_criteria']) . "</td><td>" . $row['test_comment'] . "</td></tr>";
              }
              echo "</tbody><tfoot></tfoot></table>";
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
          }

          if(is_null($test) && isset($krav) && !$missing){
            $query = "SELECT kravid, kravtext, kategori, verifikation FROM ".$krav." ORDER BY CAST(SUBSTRING_INDEX(kravid, '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(kravid, '.', -2), '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(kravid, '.', -1) AS UNSIGNED) ASC;";

            try {
              $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
              echo "<h2>" . $docnumbers[$krav] . "</h2>";
              echo "<input id='tablesearch' type='text' placeholder='Sök efter...'>";
              echo "<input id='tableexclude' type='text' placeholder='Filtrera bort...'>";
              echo "<table class='resume-table abbr'><thead><tr><th>Krav ID</th><th>Kravtext</th><th>Kategori</th><th>Verifikation</th></tr></thead><tbody id='maintable'>";
              foreach($db->query($query) as $row) {
                echo "<tr><td>" . $row['kravid'] . "</td><td>" . nl2br($row['kravtext']) . "</td><td>" . $row['kategori'] . "</td><td>" . nl2br($row['verifikation']) . "</td></tr>";
              }
              echo "</tbody><tfoot></tfoot></table>";
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
          }

          if(isset($krav) && isset($test)) {
            $query = "SELECT k.kravid AS kravid, k.kravtext AS kravtext, k.verifikation AS verifikation, t.testid AS testid, t.execution AS execution, t.acceptance_criteria AS acceptance_criteria, s.".$test."_comment AS commentrelation, t.test_comment AS commenttest FROM ".$krav." AS k, ".$test." AS t, ".$relation." AS s WHERE k.kravid = s.".$krav."_kravid AND t.testid = s.".$test."_testid AND t.kravdoc = '$krav' ORDER BY CAST(SUBSTRING_INDEX(k.kravid, '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(k.kravid, '.', -2), '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(k.kravid, '.', -1) AS UNSIGNED) ASC;";

            try {
              $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
              echo "<h2>" . $docnumbers[$krav] . " - " . $docnumbers[$test] . "</h2>";
              echo "<input id='tablesearch' type='text' placeholder='Sök efter...'>";
              echo "<input id='tableexclude' type='text' placeholder='Filtrera bort...'>";
              echo "<table class='resume-table abbr'><thead><tr><th>Krav ID</th><th>Kravtext</th><th>Verifikation</th><th>Test ID</th><th>Utförande</th><th>Acceptanskriterier</th><th>Kommentar på relation</th><th>Kommentar på test</th></tr></thead><tbody id='maintable'>";
              foreach($db->query($query) as $row) {
                echo "<tr><td>" . $row['kravid'] . "</td><td>" . nl2br($row['kravtext']) . "</td><td>" . nl2br($row['verifikation']) . "</td><td>" . $row['testid'] . "</td><td>" . nl2br($row['execution']) . "</td><td>" . nl2br($row['acceptance_criteria']) . "</td><td>" . nl2br($row['commentrelation']) . "</td><td>" . nl2br($row['commenttest']) . "</td></tr>";
              }
              echo "</tbody><tfoot></tfoot></table>";
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
          }

          if(is_null($test) && is_null($krav) && $relation == 'SPM_funk'){
            $query = "SELECT * FROM SPM_funk WHERE SAT_spill_testid IS NOT NULL OR SAT_N2_testid IS NOT NULL OR SAT_discharge_testid IS NOT NULL OR SAT_unload_testid IS NOT NULL ORDER BY CAST(SUBSTRING_INDEX(URS_funk_kravid, '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(URS_funk_kravid, '.', -2), '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(URS_funk_kravid, '.', -1) AS UNSIGNED) ASC;";

            try {
              $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
              echo "<h2>Spårbarhetsmatris " . $docnumbers[$relation] . " - Endast C- och V-krav (Q-förekommer ej)</h2>";
              echo "<input id='tablesearch' type='text' placeholder='Sök efter...'>";
              echo "<input id='tableexclude' type='text' placeholder='Filtrera bort...'>";
              echo "<p>Klicka och håll på ID i en halv sekund för mer information</p>";
              echo "<p style='font-size: 0.5em;'><em>Funkar inte på smart-telefon</em></p>";
              echo "<table class='resume-table abbr cellclick'><thead><tr><th>DBID</th><th><abbr title='URS funktion Krav ID'>29476798</abbr></th><th><abbr title='SAT spill - SAT20000-003'>29588924</abbr></th><th><abbr title='SAT kvävgas - SAT20000-005'>29590379</abbr></th><th><abbr title='SAT lossning - SAT20000-002'>29588921</abbr></th><th><abbr title='SAT utlasning - SAT20000-001'>29588917</abbr></th><th><abbr title='SAT el o styr - SAT20000-006'>29595520</abbr></th></tr></thead><tbody id='maintable'>";
              foreach($db->query($query) as $row) {
                echo "<tr><td>" . $row['SPM_funk_id'] . "</td><td>" . $row['URS_funk_kravid'] . "</td><td>" . $row['SAT_spill_testid'] . "</td><td>" . $row['SAT_N2_testid'] . "</td><td>" . $row['SAT_discharge_testid'] . "</td><td>" . $row['SAT_unload_testid'] . "</td><td>" . $row['SAT_power_testid'] . "</td></tr>";
              }
              echo "</tbody><tfoot></tfoot></table>";
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
          }

          if(is_null($test) && is_null($krav) && $relation == 'SPM_pipe'){
            $query = "SELECT * FROM SPM_pipe WHERE SAT_spill_testid IS NOT NULL OR SAT_N2_testid IS NOT NULL OR SAT_discharge_testid IS NOT NULL OR SAT_unload_testid IS NOT NULL ORDER BY CAST(SUBSTRING_INDEX(TSP_pipe_kravid, '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(TSP_pipe_kravid, '.', -2), '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(TSP_pipe_kravid, '.', -1) AS UNSIGNED) ASC;";

            try {
              $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
              echo "<h2>Spårbarhetsmatris " . $docnumbers[$relation] . " - Endast C- och V-krav (Q-förekommer ej)</h2>";
              echo "<input id='tablesearch' type='text' placeholder='Sök efter...'>";
              echo "<input id='tableexclude' type='text' placeholder='Filtrera bort...'>";
              echo "<p>Klicka och håll på ID i en halv sekund för mer information</p>";
              echo "<p style='font-size: 0.5em;'><em>Funkar inte på smart-telefon</em></p>";
              echo "<table class='resume-table abbr cellclick'><thead><tr><th>DBID</th><th><abbr title='TSP rör - TSP20000-002'>29588932</abbr></th><th><abbr title='SAT spill - SAT20000-003'>29588924</abbr></th><th><abbr title='SAT kvävgas - SAT20000-005'>29590379</abbr></th><th><bbr title='SAT lossning - SAT20000-002'>29588921</abbr></th><th><abbr title='SAT utlastning - SAT20000-001'>29588917</abbr></th></tr></thead><tbody id='maintable'>";
              foreach($db->query($query) as $row) {
                echo "<tr><td>" . $row['SPM_pipe_id'] . "</td><td>" . $row['TSP_pipe_kravid'] . "</td><td>" . $row['SAT_spill_testid'] . "</td><td>" . $row['SAT_N2_testid'] . "</td><td>" . $row['SAT_discharge_testid'] . "</td><td>" . $row['SAT_unload_testid'] . "</td></tr>";
              }
              echo "</tbody><tfoot></tfoot></table>";
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
          }

          if(is_null($test) && is_null($krav) && $relation == 'SPM_pump'){
            $query = "SELECT * FROM SPM_pump WHERE SAT_discharge_testid IS NOT NULL ORDER BY CAST(SUBSTRING_INDEX(TSP_pump_kravid, '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(TSP_pump_kravid, '.', -2), '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(TSP_pump_kravid, '.', -1) AS UNSIGNED) ASC;";

            try {
              $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
              echo "<h2>Spårbarhetsmatris " . $docnumbers[$relation] . " - Endast C- och V-krav (Q-förekommer ej)</h2>";
              echo "<input id='tablesearch' type='text' placeholder='Sök efter...'>";
              echo "<input id='tableexclude' type='text' placeholder='Filtrera bort...'>";
              echo "<p>Klicka och håll på ID i en halv sekund för mer information</p>";
              echo "<p style='font-size: 0.5em;'><em>Funkar inte på smart-telefon</em></p>";
              echo "<table class='resume-table abbr cellclick'><thead><tr><th>DBID</th><th><abbr title='TSP pump - TSP20000-001'>29588414</abbr></th><th><abbr title='SAT lossning - SAT20000-002'>29588921</abbr></th></tr></thead><tbody id='maintable'>";
              foreach($db->query($query) as $row) {
                echo "<tr><td>" . $row['SPM_pump_id'] . "</td><td>" . $row['TSP_pump_kravid'] . "</td><td>" . $row['SAT_discharge_testid'] . "</td></tr>";
              }
              echo "</tbody><tfoot></tfoot></table>";
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
          }

          if(is_null($test) && is_null($krav) && $relation == 'SPM_T101'){
            $query = "SELECT * FROM SPM_T101 WHERE FAT_T101_testid IS NOT NULL OR SAT_T101_testid IS NOT NULL ORDER BY CAST(SUBSTRING_INDEX(TSP_T101_kravid, '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(TSP_T101_kravid, '.', -2), '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(TSP_T101_kravid, '.', -1) AS UNSIGNED) ASC;";

            try {
              $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
              echo "<h2>Spårbarhetsmatris " . $docnumbers[$relation] . " - Endast C- och V-krav (Q-förekommer ej)</h2>";
              echo "<input id='tablesearch' type='text' placeholder='Sök efter...'>";
              echo "<input id='tableexclude' type='text' placeholder='Filtrera bort...'>";
              echo "<p>Klicka och håll på ID i en halv sekund för mer information</p>";
              echo "<p style='font-size: 0.5em;'><em>Funkar inte på smart-telefon</em></p>";
              echo "<table class='resume-table abbr cellclick'><thead><tr><th>DBID</th><th><abbr title='TSP T101 - TSP20000-003'>29588933</abbr></th><th><abbr title='FAT T101 - FAT20000-001'>29594813</abbr></th><th><abbr title='SAT T101 - SAT20000-004'>29588926</abbr></th></tr></thead><tbody id='maintable'>";
              foreach($db->query($query) as $row) {
                echo "<tr><td>" . $row['SPM_T101_id'] . "</td><td>" . $row['TSP_T101_kravid'] . "</td><td>" . $row['FAT_T101_testid'] . "</td><td>" . $row['SAT_T101_testid'] . "</td></tr>";
              }
              echo "</tbody><tfoot></tfoot></table>";
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
          }

          if(is_null($test) && is_null($krav) && $relation == 'SPM_power'){
            $query = "SELECT * FROM SPM_power WHERE SAT_power_testid IS NOT NULL ORDER BY CAST(SUBSTRING_INDEX(TSP_power_kravid, '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(TSP_power_kravid, '.', -2), '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(TSP_power_kravid, '.', -1) AS UNSIGNED) ASC;";

            try {
              $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
              echo "<h2>Spårbarhetsmatris " . $docnumbers[$relation] . " - Endast C- och V-krav (Q-förekommer ej)</h2>";
              echo "<input id='tablesearch' type='text' placeholder='Sök efter...'>";
              echo "<input id='tableexclude' type='text' placeholder='Filtrera bort...'>";
              echo "<p>Klicka och håll på ID i en halv sekund för mer information</p>";
              echo "<p style='font-size: 0.5em;'><em>Funkar inte på smart-telefon</em></p>";
              echo "<table class='resume-table abbr cellclick'><thead><tr><th>DBID</th><th><abbr title='TSP el o styr - TSP20000-006'>29597142</abbr></th><th><abbr title='SAT el o styr - SAT20000-006'>29595520</abbr></th></tr></thead><tbody id='maintable'>";
              foreach($db->query($query) as $row) {
                echo "<tr><td>" . $row['SPM_power_id'] . "</td><td>" . $row['TSP_power_kravid'] . "</td><td>" . $row['SAT_power_testid'] . "</td></tr>";
              }
              echo "</tbody><tfoot></tfoot></table>";
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
          }

          if(is_null($test) && is_null($krav) && $relation == 'SPM_heat'){
            $query = "SELECT * FROM SPM_heat WHERE SAT_power_testid IS NOT NULL ORDER BY CAST(SUBSTRING_INDEX(TSP_heat_kravid, '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(TSP_heat_kravid, '.', -2), '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(TSP_heat_kravid, '.', -1) AS UNSIGNED) ASC;";

            try {
              $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
              echo "<h2>Spårbarhetsmatris " . $docnumbers[$relation] . " - Endast C- och V-krav (Q-förekommer ej)</h2>";
              echo "<input id='tablesearch' type='text' placeholder='Sök efter...'>";
              echo "<input id='tableexclude' type='text' placeholder='Filtrera bort...'>";
              echo "<p>Klicka och håll på ID i en halv sekund för mer information</p>";
              echo "<p style='font-size: 0.5em;'><em>Funkar inte på smart-telefon</em></p>";
              echo "<table class='resume-table abbr cellclick'><thead><tr><th>DBID</th><th><abbr title='TSP värmekablage - TSP20000-005'>29597141</abbr></th><th><abbr title='SAT el o styr - SAT20000-006'>29595520</abbr></th></tr></thead><tbody id='maintable'>";
              foreach($db->query($query) as $row) {
                echo "<tr><td>" . $row['SPM_heat_id'] . "</td><td>" . $row['TSP_heat_kravid'] . "</td><td>" . $row['SAT_power_testid'] . "</td></tr>";
              }
              echo "</tbody><tfoot></tfoot></table>";
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
          }

          if(is_null($test) && isset($krav) && $missing){
            if($krav == 'URS_funk'){
              $query = "SELECT kravid, kravtext, verifikation FROM ".$krav." RIGHT JOIN ".$relation." ON ".$krav.".kravid=".$relation.".".$krav."_kravid WHERE SAT_spill_testid IS NULL AND SAT_N2_testid IS NULL AND SAT_discharge_testid IS NULL AND SAT_unload_testid IS NULL AND ".$krav.".kategori = 'C' ORDER BY CAST(SUBSTRING_INDEX(".$krav."_kravid, '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(".$krav."_kravid, '.', -2), '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(".$krav."_kravid, '.', -1) AS UNSIGNED) ASC;";
            } else if ($krav == 'TSP_pipe') {
              $query = "SELECT kravid, kravtext, verifikation FROM ".$krav." RIGHT JOIN ".$relation." ON ".$krav.".kravid=".$relation.".".$krav."_kravid WHERE SAT_spill_testid IS NULL AND SAT_N2_testid IS NULL AND SAT_discharge_testid IS NULL AND SAT_unload_testid IS NULL AND ".$krav.".kategori = 'C' ORDER BY CAST(SUBSTRING_INDEX(".$krav."_kravid, '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(".$krav."_kravid, '.', -2), '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(".$krav."_kravid, '.', -1) AS UNSIGNED) ASC;";
            } else if($krav == 'TSP_pump'){
              $query = "SELECT kravid, kravtext, verifikation FROM ".$krav." RIGHT JOIN ".$relation." ON ".$krav.".kravid=".$relation.".".$krav."_kravid WHERE SAT_discharge_testid IS NULL AND ".$krav.".kategori = 'C' ORDER BY CAST(SUBSTRING_INDEX(".$krav."_kravid, '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(".$krav."_kravid, '.', -2), '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(".$krav."_kravid, '.', -1) AS UNSIGNED) ASC;";
            } else if($krav == 'TSP_T101'){
              $query = "SELECT kravid, kravtext, verifikation FROM ".$krav." RIGHT JOIN ".$relation." ON ".$krav.".kravid=".$relation.".".$krav."_kravid WHERE FAT_T101_testid IS NULL AND SAT_T101_testid IS NULL AND ".$krav.".kategori = 'C' ORDER BY CAST(SUBSTRING_INDEX(".$krav."_kravid, '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(".$krav."_kravid, '.', -2), '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(".$krav."_kravid, '.', -1) AS UNSIGNED) ASC;";
            } else if($krav == 'TSP_power'){
              $query = "SELECT kravid, kravtext, verifikation FROM ".$krav." RIGHT JOIN ".$relation." ON ".$krav.".kravid=".$relation.".".$krav."_kravid WHERE SAT_power_testid IS NULL AND ".$krav.".kategori = 'C' ORDER BY CAST(SUBSTRING_INDEX(".$krav."_kravid, '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(".$krav."_kravid, '.', -2), '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(".$krav."_kravid, '.', -1) AS UNSIGNED) ASC;";
            } else if($krav == 'TSP_heat'){
              $query = "SELECT kravid, kravtext, verifikation FROM ".$krav." RIGHT JOIN ".$relation." ON ".$krav.".kravid=".$relation.".".$krav."_kravid WHERE SAT_power_testid IS NULL AND ".$krav.".kategori = 'C' ORDER BY CAST(SUBSTRING_INDEX(".$krav."_kravid, '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(".$krav."_kravid, '.', -2), '.', 1) AS UNSIGNED) ASC, CAST(SUBSTRING_INDEX(".$krav."_kravid, '.', -1) AS UNSIGNED) ASC;";
            }

            try {
              $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
              echo "<h2>Följande C-krav i " . $docnumbers[$krav] . " är otestade</h2>";
              echo "<input id='tablesearch' type='text' placeholder='Sök efter...'>";
              echo "<input id='tableexclude' type='text' placeholder='Filtrera bort...'>";
              echo "<table class='resume-table abbr'><thead><tr><th>Krav ID</th><th>Kravtext</th><th>Verifikation</th></tr></thead><tbody id='maintable'>";
              foreach($db->query($query) as $row) {
                echo "<tr><td>" . $row['kravid'] . "</td><td>" . $row['kravtext'] . "</td><td>" . $row['verifikation'] . "</td></tr>";
              }
              echo "</tbody><tfoot></tfoot></table>";
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
          }
        }
      ?>
    </main> 
    <div class="nfobox">
      <div class="modal">
        <div class="modal-content"></div>
        <button id="closeModal">Stäng</button>
      </div>
    </div>
  </body>
</html>
