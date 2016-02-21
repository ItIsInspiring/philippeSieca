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
    <div class="" role="document">
      <div class="content row">
        <main class="main" role="main">


          <!-- -->          
          <section id="section_accueil" class="section">
            <div class="section-content" data-magellan-destination="accueil">
               <a name="accueil"></a>
                <?php
                    $page_id = 83;
                    $queried_post = get_post($page_id);
                    $content = $queried_post->post_content;
                    $content = apply_filters( 'the_content', $content );   
                    echo $content;
                ?>
            </div>
          </section>
          <!-- -->  
          
          <!-- -->  
          <section id="section_itineraire" class="section">
              <div class="section-content">
                <header>
                <?php
                    $page_id = 4;
                    $queried_post = get_post($page_id);
                    $title = $queried_post->post_title;
                ?>
                <h2 data-magellan-destination="itineraire"><?php echo $title; ?></h2>
                <a name="itineraire"></a>
                </header>
                
                <div class="slider">
                    <div class="slider-paragraphe">
                    <?php
                        $page_id = 25;
                        $queried_post = get_post($page_id);
                        $title = $queried_post->post_title;
                        $content = $queried_post->post_content;
                        echo "<h3>". $title ."</h3>";
                        $content = apply_filters( 'the_content', $content );    
                        echo $content;
                    ?>
                    </div>
                    
                    <div class="slider-paragraphe">
                    <?php
                        $page_id = 27;
                        $queried_post = get_post($page_id);
                        $title = $queried_post->post_title;
                        $content = $queried_post->post_content;
                        echo "<h3>". $title ."</h3>";
                        $content = apply_filters( 'the_content', $content );    
                        echo $content;
                    ?>
                    </div>
                </div>
                <!-- fin du slider --> 
                
            </div>
          </section>
          <!-- -->  
          
          <!-- -->  
          <section id="section_pratique" class="section">
              <div class="section-content">
                <header>
                <?php
                    $page_id = 6;
                    $queried_post = get_post($page_id);
                    $title = $queried_post->post_title;
                ?>
                <h2 data-magellan-destination="pratique"><?php echo $title; ?></h2>
                <a name="pratique"></a>
                </header>
                
                <div class="slider">
                    <div class="slider-paragraphe">
                    <?php
                        $page_id = 29;
                        $queried_post = get_post($page_id);
                        $title = $queried_post->post_title;
                        $content = $queried_post->post_content;
                        echo "<h3>". $title ."</h3>";
                        $content = apply_filters( 'the_content', $content );    
                        echo $content;
                    ?>
                    </div>
                    
                    <div class="slider-paragraphe">
                    <?php
                        $page_id = 31;
                        $queried_post = get_post($page_id);
                        $title = $queried_post->post_title;
                        $content = $queried_post->post_content;
                        echo "<h3>". $title ."</h3>";
                        $content = apply_filters( 'the_content', $content );    
                        echo $content;
                    ?>
                    </div>
                    
                    <div class="slider-paragraphe">
                    <?php
                        $page_id = 33;
                        $queried_post = get_post($page_id);
                        $title = $queried_post->post_title;
                        $content = $queried_post->post_content;
                        ?>
                        <h3><?php $title ?></h3>
                        <?php
                        $content = apply_filters( 'the_content', $content );    
                        echo $content;
                    ?>
                    </div>
                </div>
                <!-- fin du slider --> 
                
            </div>
          </section>
          <!-- -->  
          
          <!-- -->  
          <section id="section_livres" class="section">
              <div class="section-content">
                <header>
                <?php
                    $page_id = 8;
                    $queried_post = get_post($page_id);
                    $title = $queried_post->post_title;
                ?>
                <h2 data-magellan-destination="livres"><?php echo $title; ?></h2>
                <a name="livres"></a>
                </header>
                
                <div class="slider">
                   
                   <?php 
                        $args = array(
                            'post_type' => 'livres'
                        );    
                      
                        // the query
                        $the_query = new WP_Query( $args ); ?>

                        <?php if ( $the_query->have_posts() ) : ?>

                            <!-- the loop -->
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                
                                
                                <!-- récupérer les livre-->
                                    <div class="row slider-content">
                                       <div class="small-12 medium-5 columns">
                                           <?php echo get_the_post_thumbnail( $page->ID, 'medium' ); ?>
                                       </div>
                                       <div class="small-12 medium-7 columns">
                                           <h3><?php the_title(); ?></h3>
                                           <?php
                                            $content = $the_query->post_content;
                                            $content = apply_filters( 'the_content', $content ); 
                                           echo the_content();
                                           ?>
                                       </div>
                                    </div>
                                <!-- -->
                                
                            <?php endwhile; ?>
                            <!-- end of the loop -->

                            <!-- pagination here -->
                            <?php wp_reset_postdata(); ?>

                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                        
                    
                    
                    <!-- navigation par vignette pour les livres -->    
                    
                </div>
                <!-- fin du slider --> 
            </div>
          </section>
          <!-- -->  
          
          <!-- -->  
          <section id="section_articles" class="section">
              <div class="section-content" >
                <?php
                    $page_id = 10;
                    $queried_post = get_post($page_id);
                    $title = $queried_post->post_title;
                ?>
                <h2 data-magellan-destination="articles"><?php echo $title; ?></h2>
                <a name="articles"></a>
            </div>
          </section>
          <!-- -->  
          
          <!-- -->  
          <section id="section_contact" class="section">
                <?php
                    $page_id = 37;
                    $queried_post = get_post($page_id);
                    $title = $queried_post->post_title;
                    ?>
                    <h2 data-magellan-destination="contact"><?php echo $title; ?></h2>
                    <a name="contact"></a>
                  <?php
                    $content = $queried_post->post_content;
                    $content = apply_filters( 'the_content', $content );    
                    echo $content;
                ?>          
          </section>
          <!-- -->  
          
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
