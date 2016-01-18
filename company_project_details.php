<?php
  include("fakelogin.php");
  
  include("db.php");
  
  $query = "SELECT * FROM tbl16_projects_212
            WHERE id = '{$_GET['id']}'";
          
  $result = mysqli_query($connection, $query);
  
  if (!$result) {
    die("DB query failed.");
  }
  
  if (mysqli_num_rows($result) == 0) {
    die("Project id {$_GET['id']} wasn't found.");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="includes/style.css">
    <link href="https://fonts.googleapis.com/css?family=Devonshire" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <title>Tango - Working Together</title>
  </head>
  <body>
    <header>
      <a id="logo" href="student_board.html"></a>
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
        <nav class="breadcrumbs">
          <ul>
            <li>
              <a href="company_projects.php">הפרויקטים שלי</a>
            </li>
            <li>
              <a href="company_project_details.php">צפייה בפרויקט</a>
            </li>
          </ul>
        </nav>
        <h1>צפייה בפרויקט</h1>
        <div class="content_wrapper">
          <article class="card project expand">
            <div class="tag_wrapper">
              <section class="tag">
                <a href="#">סטטיסטיקה</a>
              </section>
              <section class="tag">
                <a href="#">Java</a>
              </section>
              <section class="tag">
                <a href="#">אפיון</a>
              </section>
            </div>
            <a class="content" href="#">
              <section class="date">21.12.2015</section>
              <h3>שם הפרויקט<h3>
              <h4>תחום הפרויקט</h4>
              <p>לנשואי מנורך. קולהע צופעט למרקוח איבן איף, ברומץ כלרשט</p>
              <h4>תיאור הפרויקט</h4>
              <p>להאמית קרהשק סכעיט דז מא, מנכם למטכין נשואי מנורך. קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי</p>
              <h4>דרישות הפרויקט</h4>
              <p>להאמית קרהשק סכעיט דז מא, מנכם למטכין נשואי מנורך. קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי</p>
              <section class="start_date">
                <h5>תאריך התחלה:</h5>
                <span>10.1.2016</span>
              </section>
              <section class="geo">
                <h5>אזור גאוגרפי:</h5>
                <span>ירושלים</span>
              </section>
              <section class="bottom_line">
                <section><i class="material-icons">people</i></section>
                <span> לפרויקט זה יש 3 ממתינים</span>   
              </section>
            </a>
            <section class="actions_wrapper">
              <a href="edit_project.php"><i class="material-icons">mode_edit</i></a>
              <a href="#"><i class="material-icons">share</i></a>
            </section>
          </article>
          <section class="student_card_wrapper">
            <h2>רשימת ממתינים</h2>
            <section class="student_card">
              <section class="about">
                <img class="student_pic" src="images/01-profile-pic.jpg">
                <h3>שם הסטודנט</h3>
                <section class="date">11.11.2015</section>
                <h4>מוסד לימודים</h4>
                <h5>שנת לימודים</h5>
                <h5>על עצמי</h5>
                <p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי לורם</p>
                <h5>תחומי עניין</h5>
              </section>
              <section class="profile_bottom">
                <button class="denied">דחה</button>
                <button class="accept">קבל</button>
                <button class="message">שלח הודעה</button>
              </section>
            </section>
            <section class="student_card">
              <section class="about">
                <img class="student_pic" src="images/03-profile-pic.jpg">
                <h3>שם הסטודנט</h3>
                <section class="date">11.11.2015</section>
                <h4>מוסד לימודים</h4>
                <h5>שנת לימודים</h5>
                <h5>על עצמי</h5>
                <p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי לורם</p>
                <h5>תחומי עניין</h5>
              </section>
              <section class="profile_bottom">
                <button class="denied">דחה</button>
                <button class="accept">קבל</button>
                <button class="message">שלח הודעה</button>
              </section>
            </section>
            <section class="student_card">
              <section class="about">
                <img class="student_pic" src="images/04-profile-pic.jpg">
                <h3>שם הסטודנט</h3>
                <section class="date">11.11.2015</section>
                <h4>מוסד לימודים</h4>
                <h5>שנת לימודים</h5>
                <h5>על עצמי</h5>
                <p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולהע צופעט למרקוח איבן איף, ברומץ כלרשט מיחוצים. קלאצי לורם</p>
                <h5>תחומי עניין</h5>
              </section>
              <section class="profile_bottom">
                <button class="denied">דחה</button>
                <button class="accept">קבל</button>
                <button class="message">שלח הודעה</button>
              </section>
            </section>
          </section>
        </div>
      </main>
    </div>
  </body>
</html>
<?php
  // Close DB connection
  mysqli_close($connection);
?>