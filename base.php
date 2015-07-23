<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class('appear-animate'); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->

    <!-- Page Loader -->        
    <div class="page-loader">
      <div class="loader">Loading...</div>
    </div>
    <!-- End Page Loader -->
    
    <!-- Page Wrap -->
    <div class="page" id="top">

      <?php do_action('get_header'); get_template_part('templates/header'); ?>

      <?php get_template_part('templates/navigation'); ?>
      <?php get_template_part('templates/dummy'); ?>
      <div role="document">
        <main role="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Config\display_sidebar()) : ?>
          <aside class="sidebar" role="complementary">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div>
      <?php
        do_action('get_footer');
        get_template_part('templates/footer');
      ?>

    </div>
    <!-- End Page Wrap -->

    <!-- JS -->
    <?php wp_footer(); ?>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>    
    <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

  </body>
</html>
