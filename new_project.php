<?php
  include("fakelogin.php");
  
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
    <div id="new_project" class="main_wrapper">
      <main>
        <nav class="breadcrumbs">
          <ul>
            <li>
              <a href="company_projects.php">הפרויקטים שלי</a>
            </li>
            <li>
              <a href="new_project.php">פרויקט חדש</a>
            </li>
          </ul>
        </nav>
        <section>
          <h1>פרויקט חדש</h1>
        </section>
        <div class="new_project_wrapper">
          <section class="paper">
            <form name="newProject" action="insert_project.php" method="post">
              <section class="field_group divider">
                <h4>פרטים כלליים</h4>
                <section class="flex_wrapper row">
                  <section class="flex_2 flex_wrapper col">
                    <section class="flex_wrapper row">
                      <section class="flex_1 left_padding">
                        <input class="field" type="text" name="projectName" placeholder="שם הפרויקט*" required>
                        <input class="field" type="text" name="projectField" placeholder="תחום הפרויקט*" required>
                      </section>
                      <section class="flex_1 right_padding">
                        <input class="field" type="date" name="projectStartDate" placeholder="*תאריך תחילת הפרויקט" required>
                        <select class="field" name="projectGeo" required>
                          <option value="" disabled selected hidden>איזור גאוגרפי*</option>
                          <?php
                            foreach ($geo as $key => $value) {
                              echo "<option value='{$key}'>{$value}</option>";
                            }
                          ?>
                        </select>
                      </section>
                    </section>
                    <section>
                      <textarea class="field" name="projectDescripShort" rows="3" maxlength="120" placeholder="תיאור הפרויקט בקצרה (עד 120 תווים)*" required></textarea>
                    </section>
                  </section>
                  <section class="flex_1 flex_wrapper col profile_pic_wrapper">
                    <a class="profile_pic" href="#">
                      <i class="material-icons">mode_edit</i>
                      <img src="images/profile_black.svg">
                    </a>
                  </section>
                </section>
              </section>
              <section class="field_group divider flex_wrapper">
                <section class="flex_1 left_padding">
                  <h4>תיאור מורחב</h4>
                  <textarea class="field" name="projectDescrip" rows="5" placeholder="תיאור הפרויקט בהרחבה" required></textarea>
                </section>
                <section class="flex_1 right_padding">
                  <h4>דרישות תפקידים</h4>
                  <textarea class="field" name="projectRequirements" rows="5" placeholder="תיאור בעלי התפקידים הדרושים*" required></textarea>
                </section>
              </section>
              <section class="field_group divider">
                <h4>תגיות</h4>
                <section class="flex_wrapper">
                  <input id="tags" class="field" type="button" name="projectTags" value="+">
                </section>
              </section>
              <section class="field_group">
                <h4>פרטי איש הקשר לפרויקט</h4>
                <section class="flex_wrapper row">
                  <section class="flex_1 left_padding">
                    <input class="field" type="text" name="projectContactFirstName" placeholder="שם פרטי*" required>
                  </section>
                  <section class="flex_1 left_padding right_padding">
                    <input class="field" type="text" name="projectContactLastName" placeholder="שם משפחה*" required>
                  </section>
                  <section class="flex_1 left_padding right_padding">
                    <input class="field" type="email" name="projectContactEmail" placeholder="דואר אלקטרוני*" required>
                  </section>
                  <section class="flex_1 right_padding">
                    <input class="field" type="tel" name="projectContactPhone" placeholder="טלפון נייד">
                  </section>
                </section>
              </section>
              <section class="flex_wrapper bottom">
                <input id="cancel" type="button" onclick="goBack()" value="ביטול">
                <input id="publish" type="submit" onclick="return validate(newProject)" value="פרסם פרויקט">
              </section>
            </form>
          </section>
          <section class="hand left back"></section>
          <section class="hand left front"></section>
          <section class="hand right back"></section>
          <section class="hand right front"></section>
        </div>
      </main>
    </div>
    <footer>
    </footer>
    <script src="scripts/project_form.js"></script>
  </body>
</html>