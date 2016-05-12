<div class="col-md-3 col-xs-6 post">
  <?php
      $images = array(
        0 => 'vinci',
        1 => 'electronic',
        2 => 'haldron',
        3 => 'primitive',
      );
      $rand = $images[rand(0, count($images) - 1 )];
   ?>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $rand; ?>-grid.jpg">
  <div class="overlay">
    <h3>Title Goes Here</h3>
    <p>Short Text goes here.     <a class="btn btn-primary btn-sm">Read More</a></p>
  </div>
</div>
