<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<div class="row">
	<div class="small-12 medium-5  columns">
		<?php the_content(); ?>
	</div>
	<div class="small-12 medium-7  columns">
		<?php 
		$bride_name = get_field( "bride_name" );
		$bride_photo = get_field( "bride_photo" );

		$bridegroom_name = get_field( "bridegroom_name" );
		$bridegroom_photo = get_field( "bridegroom_photo" );
		$home_text = get_field( "home_text" );

		?>

	<div class="row text-center">
		<?php if ($bride_name && $bride_photo): ?>
			<div class="wedding-persion small-12 medium-6  columns">
				<div class="the-avatar">
					<div class="hs_port_thumb"><img src="<?php echo $bride_photo?>" alt="<?php echo $bride_name ?>"></div>
				</div>
				<div class="name"><?php echo $bride_name ?></div>
			</div>
		<?php endif ?>

		<?php if ($bridegroom_name && $bridegroom_photo): ?>
			<div class="wedding-persion small-12 medium-6  columns">
				<div class="the-avatar">
					<div class="hs_port_thumb"><img src="<?php echo $bridegroom_photo?>" alt="<?php echo $bridegroom_name ?>"></div>
				</div>
				<div class="name"><?php echo $bridegroom_name ?></div>
			</div>
		<?php endif ?>

		<?php if ($home_text): ?>
			<div class="small-12 columns">	
				<div><?php echo $home_text ?></div>
			</div>
		<?php endif ?>
	</div>

	</div>
</div>



<?php endwhile; ?>
