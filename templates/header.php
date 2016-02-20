<div class="contain-to-grid">
  <header>
    <nav class="top-bar" data-topbar role="navigation">
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
  </header>
</div> <!-- contain-to-grid -->