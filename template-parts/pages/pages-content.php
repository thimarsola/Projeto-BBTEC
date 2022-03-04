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

                if(is_page('Anéis e Pinos Elásticos')){
                    get_template_part('template-parts/pages/content', 'ring');
                }elseif(is_page('Anéis de Retenção')){
                    get_template_part('template-parts/pages/content', 'retention-ring');
                }elseif(is_page('Usinagem')){
                    get_template_part('template-parts/pages/content', 'machining');
                }elseif (is_page('Anéis de Travamento')){
                    get_template_part('template-parts/pages/content', 'locking-ring');
                }elseif (is_page('Pinos Elásticos')){
                    get_template_part('template-parts/pages/content', 'pin');
                }elseif (is_page(['Molas Prato', 'Barramento Blindado', 'Metal x Borracha'])){
                    get_template_part('template-parts/pages/content', 'cta');
                }
                ?>
            </div>
            <!-- end of container -->
        </div>
        <!-- end of row -->

    </div>
</section>