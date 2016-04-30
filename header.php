<!DOCTYPE html>
<html>
  <head>
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class( $class ); ?>>
<div class="fluid-contianer">
  <header>
      <div class="container"?
      <div class="row">
        <div class="col-xs-4">
          <h1>Nick <span>Koskow</span>ski</h1>
        </div>
        <div class="col-xs-8 text-right">
          <nav>
            <?php wp_nav_menu('primary_navigation'); ?>
          </nav>
        </div>
      </div>
    </div>
  </header>
</div>
  <main>
