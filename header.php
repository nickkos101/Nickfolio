<!DOCTYPE html>
<html>
<head>
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <div class="fluid-contianer">
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <?php get_template_part('templates/twitter', 'card'); ?>
          </div>
        </div>
      </div>
    </header>
  </div>
  <main>
