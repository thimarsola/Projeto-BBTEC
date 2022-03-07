<section class="content py-s">
    <header class="content__header d-none">
        <h2 class="f-6">Nossos Produtos</h2>
    </header>

    <div class="container">

        <!-- row -->
        <div class="content__row grid">
            <!-- aside -->
            <div class="content__row__aside">
                <?= get_sidebar('products'); ?>
            </div>
            <!-- end of aside -->

            <!-- container -->
            <div class="content__row__container">
                <?php
                get_template_part('template-parts/pages/content', 'container');

                if(is_page('Barramento Blindado')){
                    get_template_part('template-parts/pages/content', 'busway');
                }
                ?>
            </div>
            <!-- end of container -->
        </div>
        <!-- end of row -->

    </div>
</section>