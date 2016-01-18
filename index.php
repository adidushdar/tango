<?php
  include("fakelogin.php");

  include("db.php");
  
  // Get projects from the DB
  $query = "SELECT * FROM tbl16_projects_212
            ORDER BY project_publish_time DESC";
  $result = mysqli_query($connection, $query);
  
  if (!$result) {
    die("DB query failed.");
  }
  
  $geo = json_decode(file_get_contents("data/geo.json"), true);
  
  // Testing for JSON error
  if (json_last_error()) {
    die("JSON Error: " . json_last_error_msg() . "(" . json_last_error() . ")");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tango - Working Together</title>
    <link rel="stylesheet" href="includes/style.css">
    <link href="https://fonts.googleapis.com/css?family=Devonshire" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
  </head>
  <body>
    <header>
      <a id="logo" href="index.php"></a>
      <div class="primary_nav_wrapper">
        <nav id="primary_nav">
          <ul>
            <li>
              <a href="index.php">לוח פרויקטים</a>
            </li>
            <li>
              <a href="company_projects.php">הפרויקטים שלי</a>
            </li>
            <li>
              <a href="new_project.php">פרויקט חדש</a>
            </li>
          </ul>
          <a class="user" href="#">
            <img src="images/profile.svg">
            <span><?php echo $username ?></span>
          </a>
        </nav>
      </div>
    </header>
    <div class="main_wrapper">
      <main>
        <section>
          <div class="wrapper_title_sort">
            <h1>לוח פרויקטים</h1>
            <a class="sort_as" href="#">ממוין לפי תאריך פרסום</a>
            <form id="search" method="get" action="#">
              <input name="search" type="text" size="40" placeholder="חיפוש..."/>
            </form>
          </div>
        </section>
        <div class="content_wrapper">
          <nav class="sidenav">
            <h3>תגיות</h3>
            <ul class='tag_wrapper'></ul>
          </nav>
          <div class="cards_wrapper">
            <?php
              while ($row = mysqli_fetch_assoc($result)) {
                $publishDate = date("d.m.Y", strtotime($row['project_publish_time']));
                $startDate = date("d.m.Y", strtotime($row['project_start_date']));
                $geoName = $geo[$row['project_geo']];
                
                echo "<article class='card project'>
                  <div class='tag_wrapper'>
                    <section class='tag'>
                      <a href='#'>סטטיסטיקה</a>
                    </section>
                    <section class='tag'>
                      <a href='#'>Java</a>
                    </section>
                    <section class='tag'>
                      <a href='#'>אפיון</a>
                    </section>
                  </div>
                  <a class='content' href='company_project_details.php?id={$row['id']}'>
                    <section class='date'>{$publishDate}</section>
                    <h3>{$row['project_name']}</h3>
                    <h4>{$row['company_name']}</h4>
                    <p>{$row['project_descrip_short']}</p>
                    <section class='start_date'>
                      <h5>תאריך התחלה:</h5>
                      <span>{$startDate}</span>
                    </section>
                    <h6 class='geo'>$geoName</h6>
                  </a>
                  <div class='actions_wrapper'>
                    <a href='#' class='share'><i class='material-icons'>share</i></a>
                  </div>
                </article>";
              }
              
              mysqli_free_result($result);
            ?>
          </div>
        </div>
      </main>
    </div>
    <script src="scripts/load_sidenav_tags.js"></script>
  </body>
</html>
<?php
  // Close DB connection
  mysqli_close($connection);
?>