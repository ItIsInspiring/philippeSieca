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
                              
               <?php  
                    $args=array(
                        'post_type' => 'livres',
                        'order' => 'ASC'
                    );
                    $the_query = new WP_Query($args);
                
                   // The Loop
                    if ( $the_query->have_posts() ) {
                        echo '<ul>';
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            $post_id = $post->ID; 
                            echo '<li class="row">' ;
                        ?>
                            <div class="small-12 medium-6 columns">
                                <?php echo get_the_post_thumbnail($post_id,'medium'); ?>
                            </div>
                            <div class="small-12 medium-6 columns">
                                <h1><?php  echo the_title(); ?></h1>
                                
                                <p>
                                  
                               <?php 
                            
                            
                                    $meta_name = "infos_livre" ;
                                    $field_name = "maison-dedition" ;
                                    $maison = the_cfc_field($meta_name, $field_name, $post_id = false, $key = 0, $do_echo = false); 
                                    if ( $maison !=  " " ) $output +=  $maison;
                                ?>

                                <?php 
                                    $meta_name = "infos_livre" ;
                                    $field_name = "date-de-publication" ;
                                    $date = the_cfc_field($meta_name, $field_name, $post_id = false, $key = 0, $do_echo = false); 
                                    if ( $date !=  " " ) $output +=  $date;
                                ?>
                                    
                                    <?php echo $output; ?>
                                </p>    

                                
                                
                                
                                <?php echo the_content(); ?>
                                
                                
                                <div>
                                    <?php 
                                        $meta_name = "infos_livre" ;
                                        $field_name = "lien-dachat" ;
                                        $url = the_cfc_field($meta_name, $field_name, $post_id = false, $key = 0, $do_echo = false ); 
                                        if( $url != ""){
                                            ?>
                                             <a href="<?php echo $url; ?>" target="_blank">Voir le site de l'éditeur</a>
                                           <?php
                                            
                                        }
                                   
                                        ?>
                                </div>
                                
                                
                            </div>
                        <?php 
                            
                            '</li>';

                        }
                        echo '</ul>';
                    } else {
                        // no posts found
                        
                        echo "pas de livre trouvé ! ";
                    }
                    /* Restore original Post Data */
                    wp_reset_postdata();
                ?>

              
               
            </section>
         
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
