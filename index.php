<?php get_header(); ?>
<div class="fluid-container">
  <div class="row grid">
    <div class="col-md-12">
      <div class="box">
        <?php get_template_part('templates/social','icons'); ?>
        <div class="row">
          <?php
              $i = 12;
              while($i >= 1) {
                get_template_part('templates/post','template');
                $i--;
              }
          ?>
          </div>
        <?php get_template_part('templates/social','icons'); ?>
      </div>
    </div>
  </div>
  <div class="row blog">
    <div class="col-md-4">
      <?php get_template_part('templates/twitter','card'); ?>
    </div>
    <div class="col-md-8">
      <div class="box">
        <div class="post">
          <h3>This is a post title</h3>
          <p><i>Posted on <?php echo date('d/m/Y'); ?> by</i> <strong>Nickkos</strong></p>
          <p>Lorem ipsum dolor sit amet. This is place holder text for this area isnt it woberdoodle?</p>
        </div>
        <div class="post">
          <h3>This is a post title</h3>
          <p><i>Posted on <?php echo date('d/m/Y'); ?> by</i> <strong>Nickkos</strong></p>
          <p>Lorem ipsum dolor sit amet. This is place holder text for this area isnt it woberdoodle?</p>
        </div>
        <div class="post">
          <h3>This is a post title</h3>
          <p><i>Posted on <?php echo date('d/m/Y'); ?> by</i> <strong>Nickkos</strong></p>
          <p>Lorem ipsum dolor sit amet. This is place holder text for this area isnt it woberdoodle?</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row blog">
    <div class="col-md-4">
      <?php get_template_part('templates/twitter','card'); ?>
    </div>
    <div class="col-md-8">
      <div class="box">
        <h2>System Status</h2>
        <div class="post">
          <a href="#" class="btn btn-default btn-circle btn-success alignleft"><i class="fa fa-thumbs-o-up"></i></a>
          <h3>This is a post title</h3>
          <p><i>Posted on <?php echo date('d/m/Y'); ?> by</i> <strong>Nickkos</strong></p>
          <p>Lorem ipsum dolor sit amet. This is place holder text for this area isnt it woberdoodle?</p>
        </div>
        <div class="post">
          <a href="#" class="btn btn-default btn-circle btn-success alignleft"><i class="fa fa-thumbs-o-up"></i></a>
          <h3>This is a post title</h3>
          <p><i>Posted on <?php echo date('d/m/Y'); ?> by</i> <strong>Nickkos</strong></p>
          <p>Lorem ipsum dolor sit amet. This is place holder text for this area isnt it woberdoodle?</p>
        </div>
        <div class="post">
          <a href="#" class="btn btn-default btn-circle btn-success alignleft"><i class="fa fa-thumbs-o-up"></i></a>
          <h3>This is a post title</h3>
          <p><i>Posted on <?php echo date('d/m/Y'); ?> by</i> <strong>Nickkos</strong></p>
          <p>Lorem ipsum dolor sit amet. This is place holder text for this area isnt it woberdoodle?</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
