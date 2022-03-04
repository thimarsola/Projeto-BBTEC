<header class="header shadow">
    <!-- container -->
    <div class="header__container">
        <div class="container">
            <!--navbar-->
            <div class="header__container__navbar">
                <!-- brand -->
                <div class="header__container__navbar__brand">
                    <a href="<?= (is_home() ? '#home' : get_home_url()); ?>" title="<?= SITE["name"]; ?>">
                        <img src="<?= image('logo-topo.svg', 'svg'); ?>" alt="Logo Indústrias RC">
                    </a>
                </div>
                <!-- end of brand -->


                <div class="header__container__navbar__section py-4">
                    <!-- toggle -->
                    <div class="header__container__navbar__section__toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <!-- end of toggle -->

                    <!-- container -->
                    <div class="header__container__navbar__section__container">
                        <!-- nav -->
                        <nav class="header__container__navbar__section__container__nav">
                            <h2 class="d-none">Menu de Navegação</h2>

                            <?php wp_nav_menu(array('theme_location' => 'header-home', 'container_class' => '')); ?>
                        </nav>
                        <!-- end of nav -->
                    </div>
                    <!-- end of container -->

                </div>
            </div>
            <!--end of navbar-->
        </div>
    </div>
    <!-- end of container -->
</header>