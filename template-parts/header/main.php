<nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php wp_nav_menu(array(
        'theme_location'  => 'primary',
        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'navbarSupportedContent',
        'menu_class'      => 'navbar-nav mx-auto mb-2 mb-lg-0',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
    ));
    ?>
</nav>