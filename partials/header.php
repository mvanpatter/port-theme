<header class="banner">

  <nav class="">

    <div class="container">

        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- <a class="navbar-brand" href="#">Navbar</a> -->

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu( array(
                  'theme_location' => 'primary_navigation',
                  'menu_class' => 'navbar-nav mx-auto',
                  'container'=> false,
                  'walker' => new bs4navwalker()
                ) );
              endif;
              ?>

          </div>
        </nav>

    </div>

  </nav>

</header>
