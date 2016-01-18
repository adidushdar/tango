<?php
//create a mySQL DB connection:
$dbhost     = "182.50.131.14";
$dbuser     = "mtastudDB1";
$dbpass     = "mtastudDB1!";
$dbname     = "mtastudDB1";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//testing connection success
if (mysqli_connect_errno()) {
    die("DB connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"><title>some page</title><link href="includes/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
<?php
echo "<aside>
<h2>title goes here</h2>
<p>description goes here</p>
</aside>";
?>
</div>
</body>
</html>
<?php
//close DB connection
mysqli_close($connection);
?> 


<?php
    //get data from DB
    $query = "SELECT * FROM tbl_test";
    $result = mysqli_query($connectionn, $query);
    if(!$result) {
        die("DB query failed.");
    }
?>

<body>
    <div id="wrapper"></div>
    <?php
        //use return data (if any)
          echo "<ul>";
          while($row = mysqli_fetch_assoc($result)) {
              echo "<li><h3>" . $row["title"] . "</h3>";
              echo "<p>" . $row[txt] . "</p></li>";
          }
          echo "</ul>";
          ?>
          <?php
          //release returned data
          mysqli_free_result($result);
    ?>
    </div>
</body>
