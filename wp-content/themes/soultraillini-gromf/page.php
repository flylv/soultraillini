<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="row">
  	<div class="small-12 medium-10 medium-offset-1 columns"><?php get_template_part('templates/content', 'page'); ?></div>
  </div>
<?php endwhile; ?>
 