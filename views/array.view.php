<?php require('partials/head.php'); ?> 
  <h1>Arrays!</h1>
  
  <?php 
  
  class Post {
      public $title;

      public $published;

      public function __construct($title, $published){
          $this->title = $title;
          $this->published = $published;
      }

  }
  
  $posts = [
      new Post('My First Post', true),
      new Post('My Second Post', true),
      new Post('My Third Post', true),
      new Post('My Fourth Post', false),
  ];

  $modified = array_map(function($post){
      $post->published = true;
      return $post;
  }, $posts);

  var_dump($modified);
  
  ?>

<?php require('partials/footer.php')?>
