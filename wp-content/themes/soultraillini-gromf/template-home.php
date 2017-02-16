<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<h2 class="lined"><?php _e('Wedding couple', 'sage'); ?></h2>
<?php 
$bride_name = get_field( "bride_name" );
$bride_photo = get_field( "bride_photo" );

$bridegroom_name = get_field( "bridegroom_name" );
$bridegroom_photo = get_field( "bridegroom_photo" );

$bride_mother_name = get_field( "bride_mother_name" );
$bride_mother_photo = get_field( "bride_mother_photo" );

$bride_father_name = get_field( "bride_father_name" );
$bride_father_photo = get_field( "bride_father_photo" );

$bridegroom_mother_name = get_field( "bridegroom_mother_name" );
$bridegroom_mother_photo = get_field( "bridegroom_mother_photo" );

$bridegroom_father_name = get_field( "bridegroom_father_name" );
$bridegroom_father_photo = get_field( "bridegroom_father_photo" );
?>

<?php if ($bride_name && $bride_photo): ?>
<div class="row text-center">
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
</div>
<h2 class="lined"><?php _e('Parents', 'sage'); ?></h2>

<div class="parents row text-center">

<?php if ($bride_mother_name && $bride_mother_photo): ?>
	<div class="wedding-persion small-12 medium-6  columns">
		<div class="the-avatar">
			<div class="hs_port_thumb"><img src="<?php echo $bride_mother_photo?>" alt="<?php echo $bride_mother_name ?>"></div>
		</div>
		<div class="name"><?php echo $bride_mother_name ?></div>
	</div>
<?php endif ?>

<?php if ($bridegroom_mother_name && $bridegroom_mother_photo): ?>
	<div class="wedding-persion small-12 medium-6  columns">
		<div class="the-avatar">
			<div class="hs_port_thumb"><img src="<?php echo $bridegroom_mother_photo?>" alt="<?php echo $bridegroom_mother_name ?>"></div>
		</div>
		<div class="name"><?php echo $bridegroom_mother_name ?></div>
	</div>
<?php endif ?>

<?php if ($bride_father_name && $bride_father_photo): ?>
	<div class="wedding-persion small-12 medium-6  columns">
		<div class="the-avatar">
			<div class="hs_port_thumb"><img src="<?php echo $bride_father_photo?>" alt="<?php echo $bride_father_name ?>"></div>
		</div>
		<div class="name"><?php echo $bride_father_name ?></div>
	</div>
<?php endif ?>

<?php if ($bridegroom_father_name && $bridegroom_father_photo): ?>
	<div class="wedding-persion small-12 medium-6  columns">
		<div class="the-avatar">
			<div class="hs_port_thumb"><img src="<?php echo $bridegroom_father_photo?>" alt="<?php echo $bridegroom_father_name ?>"></div>
		</div>
		<div class="name"><?php echo $bridegroom_father_name ?></div>
	</div>
<?php endif ?>
</div>

<?php endwhile; ?>
