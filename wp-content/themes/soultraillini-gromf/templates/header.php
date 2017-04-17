<div class="topheader"></div>
<div class="contain-to-grid">
  <header>
    <div class="logo"><h1><a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo bloginfo('template_directory')?>/dist/images/logo.png" width="200"></a></h1>
    <div>Theodora & Giulio<br/>
    Sunday 1st of October 2017<br/>
    Crete </div>
    </div>
    <nav class="top-bar clearfix" data-topbar role="navigation">
      <ul class="title-area">
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>

      <section class="top-bar-section clearfix">
        <?php if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif; ?>
      </section>
    </nav>
  </header>
</div> <!-- contain-to-grid -->