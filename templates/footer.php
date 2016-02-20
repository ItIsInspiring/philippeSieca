<footer class="content-info" role="contentinfo">
 
 <?php 
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu' => 'Menu footer', 'menu_class' => 'nav']);
 ?>
        
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>
