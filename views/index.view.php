<?php require('partials/head.php'); ?> 

  <ul>
    <?php foreach ($tasks as $task) {
      echo "<li>
      ". $task -> description . "
      </li>";
    };
    ?>
  </ul>
  
<?php require('partials/footer.php')?>
