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
          
          
          <?php

            // The Query
            $the_query = new WP_Query( array( 'post_type' => 'post'));

            // The Loop
            if ( $the_query->have_posts() ) {
                echo '<ul>';
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    echo '<li><a href="'. get_the_permalink() .'" target="_blank">' . get_the_title() . '</a></li>';
                }
                echo '</ul>';
            } else {
                // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
          
          ?>
          
        </main><!-- /.main -->
       
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
