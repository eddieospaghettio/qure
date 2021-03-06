<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap" role="document">
        <div class="content row content-row wrap-row">
          <?php if(is_page(14)) { ?>
            <div class="page-header">
              <?php echo do_shortcode('[rev_slider alias="bottling-slider"]'); ?>
            </div>
            <div class="container">
          <?php } elseif(is_page(16)) { 
            $title = get_the_title();
            ?>
            <div class="page-header">
              <div class="container">
                <div class="page-title-container">
                  <div class="page-title-wrap">
                    <h1 class="page-title"><?php echo $title; ?></h1>
                  </div>
                </div>
              </div>
            </div>
            <?php echo do_shortcode('[rev_slider alias="what-is-qure"]'); ?>
            <div class="container">
          <?php } elseif(!is_page(83)) { ?>
          <?php 
            $title = get_the_title();
            if(is_front_page() || is_home()) {
              $title = "Blog";
            }
          ?>
          <div class="page-header">
            <div class="container">
              <div class="page-title-container">
                <div class="page-title-wrap">
                  <h1 class="page-title"><?php echo $title; ?></h1>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
          <?php } ?>
          <main class="main">
            <?php include Wrapper\template_path(); ?>
          </main><!-- /.main -->
          <?php if (Setup\display_sidebar()) : ?>
            <aside class="sidebar">
              <?php include Wrapper\sidebar_path(); ?>
            </aside><!-- /.sidebar -->
          <?php endif; ?>
        </div><!-- /.content -->
        <?php if(is_page(83)) { ?>
        </div><!-- /.container -->
        <?php } ?>
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
