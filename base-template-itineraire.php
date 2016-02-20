<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main small-12 medium-12 columns" role="main">
            
            <?php include Wrapper\template_path(); ?>

            <section class="row">
                 <div class="small-12 medium-6 columns">
                    <?php
                         $page_id = 25;
                         $queried_post = get_post($page_id);
                         $title = $queried_post->post_title;
                         $content = $queried_post->post_content;
                         
                     ?>
                     <h2><?php echo $title; ?></h2>
                     <?php echo $content; ?>
                 </div>

                 <div class="small-12 medium-6 columns">
                 </div>
             </section>
             <!-- fin de row -->
             
             <section class="row">
                 <div class="small-12 medium-6 columns">
                   
                 </div>

                 <div class="small-12 medium-6 columns">
                      <?php
                         $page_id = 27;
                         $queried_post = get_post($page_id);
                         $title = $queried_post->post_title;
                         $content = $queried_post->post_content;
                         
                     ?>
                     <h2><?php echo $title; ?></h2>
                     <?php echo $content; ?>
                 </div>
             </section>
             <!-- fin de row -->
         
        </main><!-- /.main -->
        <?php if (Config\display_sidebar()) : ?>
          <aside class="sidebar small-12 medium-4 columns" role="complementary">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>