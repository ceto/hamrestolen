<!-- Navigation panel -->
<nav class="main-nav dark transparent stick-fixed">
  <div class="full-wrapper relative clearfix">
    <!-- Logo ( * your text or image into link tag *) -->
    <div class="nav-logo-wrap local-scroll">
      <a href="<?= esc_url(home_url('/')); ?>" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.png" alt="<?php bloginfo('name'); ?>" />
      </a>
    </div>
    <div class="mobile-nav">
        <i class="fa fa-bars"></i>
    </div>
    <!-- Main Menu -->
    <div class="inner-nav desktop-nav">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'clearlist scroll-nav local-scroll']);
      endif;
      ?>
    </div>
  </div>
</nav>
<!-- End Navigation panel -->
