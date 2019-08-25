<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <?php foreach ($tasks as $task) {
        echo "<li>
        ". $task -> description . "
        </li>";
      };
      ?>
    </ul>
  </body>
</html>
