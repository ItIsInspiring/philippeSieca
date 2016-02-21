<div class="contain-to-grid">
  <header id="main-header" >
   
   <!-- pour le smartphone -->
    <nav class="top-bar show-for-small-only" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name"><h1><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a></h1> </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>

      <section class="top-bar-section">
        <?php if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu' => 'Menu principal', 'menu_class' => 'nav right']);
        endif; ?>
      </section>
    </nav>
    
    <!-- pour les tablettes et desktop -->
    <nav class="left-menu show-for-medium-up" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name"><h1><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a></h1> </li>
        <li>Psychologue clinicien</li>
        <li>Psychanalyste</li>
        <li>Soins énergétiques</li>
      </ul>

      <section class="left-menu-section">
        <div data-magellan-expedition="fixed">
          <dl class="side-nav">
            <dd data-magellan-arrival="accueil"><a href="#accueil">Accueil</a></dd>
            <dd data-magellan-arrival="itineraire"><a href="#itineraire">Itinéraire</a></dd>
            <dd data-magellan-arrival="pratique"><a href="#pratique">Pratique</a></dd>
            <dd data-magellan-arrival="livres"><a href="#livres">Livres</a></dd>
            <dd data-magellan-arrival="articles"><a href="#articles">Articles</a></dd>
            <dd data-magellan-arrival="contact"><a href="#contact">Contact</a></dd>
          </dl>
        </div>
      </section>
    </nav>
    
  </header>
</div> <!-- contain-to-grid -->