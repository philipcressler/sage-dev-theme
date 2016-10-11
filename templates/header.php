<nav id="header" class="navbar navbar-fixed-top">
  <div id="header-container" class="container navbar-container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <a id="brand" class="navbar-brand pull-left" href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/power-post-logo-small-white.png"></a>
        </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul id="secondary-menu" class="nav navbar-nav navbar-right">
          <li class="menu-item"><a href="https://app.powerpost.digital">Sign In</a></li>
          <li class="menu-item header-cta"><button id="menu-cta" class="btn btn--reversed-red" href="https://www.powerpost.digital/page/plans">demo</button></li>
        </ul>
        <?php
          if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
          endif;
        ?>
      </div><!-- /.nav-collapse -->

  </div><!-- /.container -->
</nav><!-- /.navbar -->
