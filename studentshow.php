<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>student</title>
  </head>
  <body>
    <h1 style="margin:auto;">PHP registration</h1>
    <?php
    require_once 'C:\xampp\htdocs\students\students.php';
    //echo "<br>";
    echo "
    <table style=\"margin:auto;\">
    <tr>
    <th style=\"padding:2rem;\">
    Name
    </th>
    <th style=\"padding:2rem;\">
    Email
    </th>
    <th style=\"padding:2rem;\">
    Status
    </th>
    </tr>
    ";
    foreach ($students as $value) {
      echo "<tr>";
    foreach ($value as $key =>$innerval) {
      if ($key=="name") {
        echo "<td style=\"margin-left:2rem; margin-right:2rem; color:cyan; font-size:18px; padding:2rem;\">{$innerval}</td>";
      }
      if ($key=="email") {
        echo "<td style=\"margin-left:5rem; margin-right:5rem; color:indigo; font-size:18px; padding:2rem;\">{$innerval}</td>";
      }
      if ($key=="status") {
        echo "<td style=\"margin-left:2rem; margin-right:2rem; color:black; font-size:18px; padding:2rem;\">{$innerval}</td>";
      }

    }
    echo "</tr>";
    }
    echo "</table>";
     ?>
  </body>
</html>
