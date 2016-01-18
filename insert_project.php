<?php
  include('db.php');
  
  $startDate = date('Y-m-d', strtotime($_POST['projectStartDate']));
  
  $sql = "INSERT INTO tbl16_projects_212(
    company_name,
    project_name,
    project_publish_time,
    project_start_date,
    project_field,
    project_geo,
    project_descrip_short,
    project_descrip,
    project_requirements,
    project_contact_name_first,
    project_contact_name_last,
    project_contact_email,
    project_contact_phone)
    VALUES(
    'האגודה למען החייל',
    '{$_POST['projectName']}',
    NOW(),
    '{$startDate}',
    '{$_POST['projectField']}',
    '{$_POST['projectGeo']}',
    '{$_POST['projectDescripShort']}',
    '{$_POST['projectDescrip']}',
    '{$_POST['projectRequirements']}',
    '{$_POST['projectContactFirstName']}',
    '{$_POST['projectContactLastName']}',
    '{$_POST['projectContactEmail']}',
    '{$_POST['projectContactPhone']}');";
  
  if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connection);
  }
  
  mysqli_close($connection);
?>